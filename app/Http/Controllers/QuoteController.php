<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class QuoteController extends Controller
{
    public function create()
    {
        return view('quotes.create');
    }

    public function index()
    {
        $quotes = Quote::latest()->get();
        return view('quotes.index', compact('quotes'));
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('quotes.index')->with('success', 'Devis supprimé avec succès.');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'client_name' => 'required',
            'location' => 'required',
            'type' => 'required',
            'surface' => 'nullable|numeric',
            'power_requested' => 'nullable|numeric',
            'usage' => 'nullable|string',
        ]);

        // Valeurs techniques
        $panel_power = 0.335; // kW
        $panel_surface = 1.7; // m²
        $panel_price = 150; // €
        $installation_price = 500; // €
        $tva = 0.20;

        // Calcul
        $power = $data['power_requested'] ?? ($data['surface'] * 0.15);
        $panel_count = ceil($power / $panel_power);
        $surface_required = $panel_count * $panel_surface;
        $price_ht = $panel_count * $panel_price + $installation_price;
        $price_ttc = $price_ht * (1 + $tva);

        $quote = Quote::create([
            ...$data,
            'panel_count' => $panel_count,
            'total_power' => $power,
            'surface_required' => $surface_required,
            'price_ht' => $price_ht,
            'price_ttc' => $price_ttc,
        ]);

        return redirect()->route('quotes.show', $quote);
    }

    public function show(Quote $quote)
    {
        return view('quotes.show', compact('quote'));
    }

    public function pdf(Quote $quote)
    {
        $pdf = Pdf::loadView('quotes.pdf', compact('quote'));
        return $pdf->download('devis_' . $quote->client_name . '.pdf');
    }
}
