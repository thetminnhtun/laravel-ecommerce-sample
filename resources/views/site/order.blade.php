@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Thank your for shopping. We will deliver soon.
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card mb-2">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">Order ID: 123123123</div>
                        <div class="col-6 text-right">Date: January 3, 2020</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="text-muted">Payment</h6>
                            <span class="text-success">
                                <i class="fab fa-lg fa-cc-visa"></i>
                                Visa **** 4216
                            </span>
                    
                            <p>Subtotal: $356 <br>
                                Shipping fee: $56 <br>
                                <span class="b">Total: $456 </span>
                            </p>
                    
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">Contact</h6>
                            <p>Michael Jackson <br> +1234567890 <br> somename@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-muted">Shipping address</h6>
                            <p> Home 123, Building name, Street abcd, Tashkent Uzbekistan </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/" class="btn btn-primary">
                <i class="fas fa-long-arrow-alt-left mr-3"></i>
                Go Back Shopping
            </a>
        </div>
    </div>
</div>
@endsection