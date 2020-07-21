@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card card-body">
                <h3>Shopping Cart</h3>
                <hr>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        @endphp
                        @forelse ($cart as $id => $product)
                        @php
                        $total += $product['price'] * $product['quantity'];
                        @endphp
                        <tr>
                            <td width="30%">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ $product['image'] }}" class="img-fluid" alt="Product Image">
                                    </div>
                                    <div class="col">
                                        <p>{{ $product['name'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group mr-2">
                                    <a href="{{ route('cart.increase', $id) }}" class="btn btn-outline-secondary">+</a>
                                    <button
                                        class="btn btn-outline-secondary disabled">{{ $product['quantity'] }}</button>
                                    <a href="{{ route('cart.decrease', $id) }}" class="btn btn-outline-secondary">-</a>
                                </div>
                            </td>
                            <td>
                                $ {{ number_format($product['price']) }}
                            </td>
                            <td>
                                $ {{ number_format($product['price'] * $product['quantity']) }}
                            </td>
                            <td>
                                <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                <p>There is product in the cart.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body mb-3">
                <form>
                    <div class="form-group">
                        <label>Have coupon?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="" placeholder="Coupon code">
                            <span class="input-group-append">
                                <button class="btn btn-primary">Apply</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card card-body">
                <div class="row mb-2">
                    <div class="col-6">Sub Total: </div>
                    <div class="col-6 text-right">$ {{ number_format($total) }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">Discount: </div>
                    <div class="col-6 text-right text-danger"> - $ {{ number_format(0) }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">Tax: </div>
                    <div class="col-6 text-right text-danger"> - $ {{ number_format(0) }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">Total: </div>
                    <div class="col-6 text-right font-weight-bold"> $ {{ number_format($total) }}</div>
                </div>
                <hr>
                <a href="checkout" class="btn btn-primary mb-2">
                    Checkout
                </a>
                <a href="/" class="btn btn-outline-secondary">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>
</div>
@endsection