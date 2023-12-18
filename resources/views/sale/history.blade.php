@extends('master')

@section('content')
<h1>Sale Transaction History</h1>
<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Product</th>
            <th>Quantity Sold</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($salesHistory as $sale)
            <tr>
                <td>{{ $sale->created_at }}</td>
                <td>
                    <?php
                        $product = DB::table('products')->where('id', $sale->product_id)->first();
                        echo $product->name ?? 'Product Not Found';
                     ?>
                </td>
                <td>{{ $sale->quantity_sold }}</td>
                <td>{{ $sale->amount }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
