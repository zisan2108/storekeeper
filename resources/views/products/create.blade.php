@extends('master')

@section('content')
    <div class="form">
        <h1>Add Product</h1>
        <div class="col-md-6 offset-3 bg-white rounded p-3">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Product Name!">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Enter Your Product Price!">
                </div>
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="quantity" placeholder="Enter Your Product Quantity!">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
