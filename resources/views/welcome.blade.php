
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href = "{{ asset('css/encoach.css')}}" rel = "stylesheet">
    </head>
    <body>
        <header class="toppage">
            <h1>encoach</h1>
            <nav>
            <a class="btn btn-link encoach-login-login" href="{{ route('login') }}">
                            ログイン
                        </a>
            </nav>
        </header>
        
        <section class="topimage">
            <div class="inner">
            <h1>コーチやメンターを探している人と<br>コーチができる人を繋げる<br>サービスです</h1>
                    <div class="form-group">
                        <a class="btn encoach-submit-button" href="{{ route('register') }}">
                            新規登録
                        </a>
                    </div>
            </div>
        </section>

        <main>
            <div class="inner">
               <h2>encoachとは</h2>
               <div class="line"></div>
                    <h3>独学で勉強していて教えてくれる人を探している<br>勉強方法やカリキュラムを考えてほしい<br>このようなコーチやメンターを探している人と<br>コーチングの経験を積みたい<br>自分の経験やスキルを活かして稼ぎたいという<br>コーチを繋ぐサービスです<br>
                    </h3>
            </div>
        </main>
        <footer>
            <h2 class="toppage">encoach</h2>
        </footer>
    </body>
    </html>
