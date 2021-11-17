@extends('layouts.app')

@section('content')
<div class="container  d-flex justify-content-center mt-3">
    <div class="w-75">
        <h1>お気に入り</h1>

        <hr>

        <div class="row">
            @foreach ($favorites as $fav)
            <div class="col-md-8 mt-2">
                <div class="d-inline-flex">
                    <a href="{{route('products.show', $fav)}}" class="w-25">
                        <img src="{{ asset('img/dummy.jpg')}}" class="img-fuild w-100">
                    </a>
                    <div class="container mt-3">
                        <h5 class="w-100 encoach-favorite-item-text">{{App\models\Product::find($fav->favoriteable_id)->name}}</h5>
                        <h6 class="w-100encoach-favorite-item-text">￥{{App\models\Product::find($fav->favoriteable_id)->price}}</h6>
                    </div>
                </div>
            </div>
            <form method="POST"　action="{{route('carts.store')}}" class="m-3 align-items-end">
                {{ csrf_field() }}
            <div class="row">
                    <div class="col-10">
                    
                    </div>
                </div>
            </form>
            @endforeach
        </div>

        <hr>
    </div>
</div>
@endsection