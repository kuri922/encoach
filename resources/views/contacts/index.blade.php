@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" row justify-content-center">
        <div class="col-md-5">
            <h2 class="text-center mt-3 mb-3">問合せ</h2>

            <hr>

            <form method="POST" action="contact/show">
              @csrf

                <div class="form-group row">
                    <label name="name" class="col-md-4 col-form-label text-md-left">氏名<span class="ml-1 encoach-require-input-label"><span class="encoach-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror encoach-login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="山田 太郎">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>
      

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-left">メールアドレス<span class="ml-1 encoach-require-input-label"><span class="encoach-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror encoach-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="encoach@encoach.com">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>
               

                <div class="form-group row">
                    <label for="body" class="col-md-4 col-form-label text-md-left">問合せ内容<span class="ml-1 encoach-require-input-label"><span class="encoach-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <textarea id="email" type="email" class="form-control @error('email') is-invalid @enderror encoach-login-input" name="body" value="{{ old('body') }}" required autocomplete="body"></textarea>

                       

        
                    <button type="submit" class=" mt-5 btn encoach-submit-button w-100">
                        確認
                    
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
