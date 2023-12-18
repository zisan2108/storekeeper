<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
                        ->select('id', 'name')
                        ->get();
        return view('sale.record_sale', compact('products'));
    }

    public function recordSale(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity_sold' => 'required|numeric|min:1',
            'amount' => 'required|numeric',
        ]);

        DB::table('sales')->insert([
            'product_id' => $validatedData['product_id'],
            'quantity_sold' => $validatedData['quantity_sold'],
            'amount' => $validatedData['amount'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('products')
            ->where('id', $validatedData['product_id'])
            ->decrement('quantity', $validatedData['quantity_sold']);

        return redirect()->route('dashboard')->with('success', 'Sale recorded successfully');
    }

    public function saleHistory()
    {
        $salesHistory = DB::table('sales')
            ->join('products', 'sales.product_id', '=', 'products.id')
            ->select('sales.*', 'products.name as product_name', 'products.price', 'products.quantity')
            ->orderBy('sales.created_at', 'desc')
            ->get();

        return view('sale.history', compact('salesHistory'));
    }


}
