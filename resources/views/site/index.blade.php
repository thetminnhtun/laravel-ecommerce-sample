@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @for ($i = 0; $i < 20; $i++)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="https://via.placeholder.com/280X230" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('product', 1) }}">Product Name</a>
                        </h5>
                        <p class="">$ 2000</p>
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="fa fa-shopping-cart mr-3"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </div> 
    <div class="row">
        <div class="col-md-12">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection