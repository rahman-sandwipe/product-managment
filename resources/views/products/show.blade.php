@extends('app')
@section('title')
    Product Show
@endsection
@section('content')
<main class="card mb-5">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6">
                <h2> Show Product</h2>
            </div>
            <div class="col-lg-6 text-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="card-body p-3">
        <img src="{{ asset($product->image) }}" class="card-img-top" alt="...">
        <div class="row">
            <div class="col-6">
                <p class="text-center text-danger">{{ $product->product_id }}</p>
            </div>
            <div class="col-6 text-right">
                <p class="text-center text-danger">{{ date('d M Y', strtotime($product->created_at)) }}</p>
            </div>
        </div>
        
        <h2 class="text-center">{{ $product->name }}</h2>
        <p class="text-center">{!! $product->description !!}</p>
    </div>
</main>  
@endsection