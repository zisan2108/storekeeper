<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->select('id', 'name', 'price', 'quantity')
            ->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        DB::table('products')->insert($validatedData);

        return redirect()->route('index');
    }

    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $productExists = DB::table('products')->where('id', $id)->exists();

        if ($productExists) {
            DB::table('products')->where('id', $id)->update($validatedData);
            return redirect()->route('index');
        } else {
            return redirect()->route('index');
        }
    }

    public function destroy($id)
    {
        $productExists = DB::table('products')->where('id', $id)->exists();

        if ($productExists) {
            DB::table('products')->where('id', $id)->delete();
            return redirect()->route('index');
        } else {
            return redirect()->route('index');
        }
    }
}
