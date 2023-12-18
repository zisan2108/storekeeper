@extends('master')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="text-white">Sales Today:</h4>
            </div>
            <div class="card-body bg-dark">
                <h4 class="text-white">${{ $salesToday }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-white">Sales Yesterday:</h4>
            </div>
            <div class="card-body bg-primary">
                <h4 class="text-white">${{ $salesYesterday }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-warning">
                <h4 class="text-white">Sales This Month:</h4>
            </div>
            <div class="card-body bg-warning">
                <h4 class="text-white">${{ $salesThisMonth }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-danger">
                <h4 class="text-white">Sales Last Month:</h4>
            </div>
            <div class="card-body bg-danger">
                <h4 class="text-white">${{ $salesLastMonth }}</h4>
            </div>
        </div>
    </div>
</div>

@endsection
