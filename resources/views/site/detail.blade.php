@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col-md-6 border-right p-5 text-center">
            <img src="/{{ $product->image }}" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6 p-5">
                <h1>Product Name</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quibusdam laboriosam nam molestias praesentium a porro amet, non, incidunt, officiis quis! Laborum recusandae tempore fuga! Repellendus cupiditate sed consequatur esse.</p>
                <p class="font-weight-bold mb-3">$ 2500</p>
                <div class="btn-group mr-2">
                    <button class="btn btn-outline-secondary">+</button>
                    <button class="btn btn-outline-secondary disabled">1</button>
                    <button class="btn btn-outline-secondary">-</button>
                </div>
                <a href="#" class="btn btn-primary mr-2">
                    <i class="fa fa-shopping-cart mr-2"></i>
                    Add to cart
                </a>
                <a href="/" class="btn btn-outline-secondary">
                    <i class="fa fa-long-arrow-alt-left mr-2"></i>
                    Containue Shopping
                </a>
            </div>
        </div>
    </div>
</div>
@endsection