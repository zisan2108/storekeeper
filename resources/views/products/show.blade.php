@extends('master')

@section('content')
    <div class="table">
        <h1>Product details
            <a href="{{ route('index') }}" class="btn btn-secondary float-right">back</a>
        </h1>
        <div class="col-md-8 offset-2">
            <table class="table bg-white rounded p-3 shadow">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{ $product->name }}</td>

                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>:</td>
                        <td>{{ $product->price }}</td>

                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>:</td>
                        <td>{{ $product->quantity }}</td>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
