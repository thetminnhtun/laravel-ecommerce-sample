@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <a href="{{ route('product.show', $product->id) }}">
                        <img src="/{{ $product->image }}" class="card-img-top" alt="Product Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('product.show', $product->id) }}">
                                {{ $product->name }}
                            </a>
                        </h5>
                        <p class="">$ {{ $product->price }}</p>
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary btn-block">
                            <i class="fa fa-shopping-cart mr-3"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <h1>There is no products.</h1>
        @endforelse
    </div> 
    <div class="row">
        <div class="col-md-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection