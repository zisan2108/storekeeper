@extends('master')

@section('content')
    <div class="table">
        <h1>All Product</h1>
        <div class="col-md-8 offset-2">
            <table class="table bg-white rounded p-3 shadow">
                <thead>
                    <tr>
                        <td>sl</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a href="{{ route('show',$product->id) }}" class="btn btn-outline-info btn-sm">show</a>
                                <a href="{{ route('edit',$product->id) }}" class="btn btn-outline-success btn-sm">edit</a>
                                <a href="{{ route('destroy',$product->id) }}" class="btn btn-outline-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
