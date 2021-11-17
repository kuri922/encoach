@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        @component('components.sidebar', ['categories' => $categories, 'major_category_names' => $major_category_names])
        @endcomponent
    </div>
    <div class="col-9 m-4">
        <h1>おすすめ商品</h1>
        <div class ="row">
     
            @foreach($recommend_products as $recommend_product)
            <div class="col-5">
                <a href="/products/{{$recommend_product -> id}}">
                    <img src="{{asset('img/dummy.jpg') }}" class="img-thumbnail">
                </a>

                <div class="row">
                    <div class="col-12">
                        <p class="">
                            {{$recommend_product -> name}}<br>
                            <label>¥{{$recommend_product -> price}}</label>
                        </p>
                    </div>
                </div>
            </div>
        
            @endforeach
        </div>
    
        <h1>人気記事</h1>
        <div class="row">
            <div class="col-md-2 border border-secondary ml-2">
                <a href="#">
                    <img src="{{ asset('img/bridge.png')}}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="encoach-product-label mt-2">
                            ５万円の案件取れるまでのロードマップ<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 border border-secondary ml-2">
                <a href="#">
                    <img src="{{ asset('img/phone.png')}}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="encoach-product-label mt-2">
                            SNS活用術<br>〜稼げるSNS〜<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 border border-secondary ml-2">
                <a href="#">
                    <img src="{{ asset('img/education.png')}}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="encoach-product-label mt-2">
                            語学学習速度10倍アップ学習方法<br>
                        </p>
                    </div>
                </div>
            </div>
                

        </div>
    </div>
</div>
@endsection