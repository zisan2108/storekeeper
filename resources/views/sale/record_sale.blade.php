@extends('master')

@section('content')
    <h1>Record Sale</h1>
    <div class="col-md-6 offset-3 bg-white rounded p-3">
        <form action="{{ route('sales.record') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select class="form-control" name="product_id" id="product_id">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity_sold">Quantity Sold:</label>
                <input class="form-control" type="number" name="quantity_sold" id="quantity_sold" min="1">
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input class="form-control" type="number" name="amount" id="amount">
            </div class="form-group">
            <button type="submit" class="btn btn-success w-100">Record Sale</button>
        </form>
    </div>
@endsection
