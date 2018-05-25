@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product details</div>
                <div class="card-body">
                	 <div>
                        <h2>{{ $products->name }}</h4>
					</div>
					<ul>
						<li>{{ $products->volume }}</li>
						<li>€{{ $products->price }}</li>
                    </ul>
                    <a class="btn btn-dark" href="{{ action('OrderController@add', $products->id) }}">Add to shopping cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
