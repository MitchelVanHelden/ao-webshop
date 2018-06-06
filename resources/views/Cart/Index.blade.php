@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Shopping Cart</div>
                    <div class="card-body">
                        <ul>
                            @if(count($items) > 0)
                                @foreach($items as $c)
                                    <div class="Cart" style="margin-bottom: 20px;">
                                        <td><a href="{{ action('ProductsController@display', $c->productId->id) }}">{{ $c->productId->name }}</a></td>
                                        <td>{{ $c->productId->description }}</td>
                                        <td id="quantity"><input id="quanquan" class="col-sm-4" type="number" name="quantity[ {{$c->productId->id}} ]" value="{{ $c->qty }}" style="width: 100px;"></td>
                                        <td><span class="col">&euro;</span><input id="price" value="{{ $c->productId->price }}" disabled></td>

                                        <td>
                                            <input value="Delete" name="delete" title="{{ $c->productId->id }}" class="btn btn-danger delete" style="height: 30px;">
                                        </td>

                                    </div>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection