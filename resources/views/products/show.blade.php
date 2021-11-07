@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center text-justify">
    <div class="row w-75">
        <div class="col-5 offset-1">
            <img src="{{ asset('img/dummy.jpg')}}" class="w-100 img-fuild">
        </div>
        <div class="col">
            <div class="d-flex flex-column mb-5">
                <h1 class="">
                    {{$product->name}}
                </h1>
               <hr>
                <p class="d-flex align-items-end">
                    ￥{{$product->price}}(税込)
                </p>
            </div>

            @auth
            <form method="POST"　action="{{route('carts.store')}}" class="m-3 align-items-end">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <div class="row">
                    <div class="col-7">
                        <button type="submit" class="btn encoach-submit-button w-100">
                            <i class="fas fa-shopping-cart"></i>
                            カートに追加
                        </button>
                    </div>

                    <div class="col-5">
                            @if($product -> isFavoritedBy(Auth :: user( )))
                            <a href = "/products/{{ $product -> id }}/favorite" class="btn encoach-favorite-button text-favorite w-90">
                                <i class ="fa fa-heart"></i>
                                気になる解除
                            </a>
                            @else
                            <a href ="/products/{{ $product -> id }}/favorite" class="btn encoach-favorite-button text-favorite w-100">
                                <i class="fa fa-heart"></i>
                            気になる
                            </a>
                            @endif

                        

                    </div>
                </div>
            </form>
            @endauth
        </div>

        <div class="offset-1 col-11">
            <hr class="w-100">

            <p class="">
                    【サービス内容】<br>
                    {{$product->description}}
                </p>
                <hr class="w-100">
            <h3 class="float-left mt-5">カスタマーレビュー</h3>
        </div>

        <div class="offset-1 col-10"> 
            
            @auth
            <div class="row">
                <div class="col-md-4">
                    <form method="POST" action="/products/{{ $product->id }}/reviews">
                       {{ csrf_field() }}
                        <textarea name="content" class="form-control m-2"></textarea>
                        <button type="submit" class="btn encoach-submit-button ml-2 mb-5">レビューを追加</button>
                    </form>
                </div>
            </div>
       
           
            <div class="row">
                @foreach($reviews as $review)
                    <div class="offset-1 col-mr-11">
                        <p class="h3">{{$review->content}}</p>
                            <label class = "deta">{{$review->created_at}}</label>
                    </div>
                <hr class="w-100">
                @endforeach
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection