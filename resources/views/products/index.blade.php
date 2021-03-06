@extends('layouts.app')

@section('content')


<div class="row">
        <div class ="col-2">
                @component('components.sidebar' ,['categories' => $categories , 'major_category_names' => $major_category_names])
                @endcomponent
        </div>


        <div class ="container">
        <div class="col-5">
                @if($category !== null)
                    <a href ="home">トップ</a> > <a href ="#">{{ $category ->major_category_name}}</a> > {{ $category -> name }}
                    <h1>{{ $category -> name }}のサービス一覧{{$total_count}}件</h1>
                @endif
        </div>

        <div class="container mt-4 pe-5">
            <div class="d-flex">
                @foreach($products as $product)
                <div class="col-3 border border-secondary ml-4 mb-4">
                    <a href="{{route('products.show', $product)}}">
                        @if ($product -> image !== "")
                        <img src="{{$product['image']}}" class="w-100 img-fluid">
                        @else
                        <img src="{{asset('img/dummy.jpg')}}" class="img-thumbnail">
                        @endif
                    </a>
                    <div class="row">
                        <div class="col-8">
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
        {{ $products->appends(request()->query())->links() }}
    </div>
</div>

@endsection
