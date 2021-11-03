@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="container mt-4">
            <div class="row w-100">
                @foreach($products as $product)
                <div class="col-4">
                    <a href="{{route('products.show', $product)}}">
                        <img src="{{ asset('img/dummy.jpg')}}" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="encoach-product-label mt-3 font-weight-bold ">
                                {{$product->name}}<br>
                                <label>￥{{$product->price}}</label>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{ $products->links() }}
    </div>
</div>
@endsection
