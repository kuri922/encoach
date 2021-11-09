@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2 mb-5">お問い合わせ確認</h1>
    <div class="container">
        <form method="POST" action="contact/store">
            {{ csrf_field() }}
            @foreach($inputs as $input)
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $input -> name }}
                </div>
            </div>
            <input type="hidden" name="name" value="{{ $inputs['name'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $input -> email }}
                </div>
            </div>
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $input -> body }}
                </div>
            </div>
            <input type="hidden" name="body" value="{{ $inputs['body'] }}">
            @endforeach
            
            <div class="text-center">
                <button name="action" type="submit" value="return" class="btn btn-dark">入力画面に戻る</button>
                <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
            </div>
        </form>
    </div>
    @endsection