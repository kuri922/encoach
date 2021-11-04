@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        @component('components.sidebar', ['categories' => $categories, 'major_category_names' => $major_category_names])
        @endcomponent
    </div>
    <div class="col-9">
        <h1>おすすめ商品</h1>
       

        <h1>人気記事</h1>
        <div class="row">
            <div class="col-2 border border-secondary ml-3">
                <a href="#">
                    <img src="{{ asset('img/bridge.png')}}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samazon-product-label mt-2">
                            ５万円の案件取れるまでのロードマップ<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-2 border border-secondary ml-3">
                <a href="#">
                    <img src="{{ asset('img/phone.png')}}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samazon-product-label mt-2">
                            SNS活用術<br>〜稼げるSNS〜<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-2 border border-secondary ml-3">
                <a href="#">
                    <img src="{{ asset('img/education.png')}}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samazon-product-label mt-2">
                            語学学習速度10倍アップ学習方法<br>
                        </p>
                    </div>
                </div>
            </div>
                

        </div>
    </div>
</div>
@endsection