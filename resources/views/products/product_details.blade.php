@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artikel details</div>
                <div class="card-body">
                	 <div>
                        <h2>{{ $products->name }}</h4>
					</div>
					<ul>
						<li>{{ $products->volume }}</li>
						<li>€{{ $products->price }}</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
