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
                        <tr>
                            <td width="30%">
                                <div class="row">
                                    <div class="col">
                                        <img src="https://via.placeholder.com/180x130" class="img-fluid" alt="Product Image">
                                    </div>
                                    <div class="col">
                                        <p>Product Name</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group mr-2">
                                    <button class="btn btn-outline-secondary">+</button>
                                    <button class="btn btn-outline-secondary disabled">2</button>
                                    <button class="btn btn-outline-secondary">-</button>
                                </div>
                            </td>
                            <td>
                                $ {{ number_format(2500) }}
                            </td>
                            <td>
                                $ {{ number_format(5000) }}
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%">
                                <div class="row">
                                    <div class="col">
                                        <img src="https://via.placeholder.com/180x130" class="img-fluid" alt="Product Image">
                                    </div>
                                    <div class="col">
                                        <p>Product Name</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group mr-2">
                                    <button class="btn btn-outline-secondary">+</button>
                                    <button class="btn btn-outline-secondary disabled">2</button>
                                    <button class="btn btn-outline-secondary">-</button>
                                </div>
                            </td>
                            <td>
                                $ {{ number_format(2500) }}
                            </td>
                            <td>
                                $ {{ number_format(5000) }}
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
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
                    <div class="col-6 text-right">$ {{ number_format(1000) }}</div>
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
                    <div class="col-6 text-right font-weight-bold"> $ {{ number_format(1000) }}</div>
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