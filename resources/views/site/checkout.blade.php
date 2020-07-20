@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{ route('order.show', 1) }}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" cols="30" rows="2"
                            placeholder="1234 Main St"></textarea>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
                                >
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                >
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                >
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" >
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" >
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" >
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" >
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-block mb-2" type="submit">
                        <i class="fa fa-lock mr-3"></i>
                        Confirm Payment
                    </button>
                    <a href="/" class="btn btn-outline-secondary btn-block">
                        <i class="fas fa-long-arrow-alt-left mr-3"></i>
                        Continue Shopping
                    </a>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h4 class="mb-3">Review Order</h4>
                <table class="table table-borderless">
                    <tr>
                        <td width="25%">
                            <img src="https://via.placeholder.com/180x130" class="img-fluid" alt="Product Image">
                        </td>
                        <td>
                            <p>Product Name</p>
                            <p>Quantity: 2</p>
                        </td>
                        <td class="text-right">$ {{ number_format(5000) }}</td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <img src="https://via.placeholder.com/180x130" class="img-fluid" alt="Product Image">
                        </td>
                        <td>
                            <p>Product Name</p>
                            <p>Quantity: 2</p>
                        </td>
                        <td class="text-right">$ {{ number_format(5000) }}</td>
                    </tr>
                </table>
                <hr>
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
            </div>
        </div>
    </div>
</div>
@endsection