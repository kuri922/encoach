<nav class="navbar navbar-expand-md navbar-light shadow-sm encoach-header-container">
    <a class="navbar-brand" href="{{ url('/home') }}">
    
        {{ config('app.name', 'Laravel') }}
    </a>
    

    <!-- 検索欄 -->
    <form class="form-inline">
        <div class="form-group">
            <input class="form-control encoach-header-search-input">
        </div>
        <div class="input-group">
            <button type="submit" class="btn encoach-header-search-button"><i class="fas fa-search encoach-header-search-icon"></i></button>
        </div>
    </form>
  <!-- ハンバーガー -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto mr-5 mt-2">
            <!-- Authentication Links -->
            @auth
           
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('login') }}">気になる</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('login') }}">申し込み</a>
            </li>
            

            <li class="nav-item mr-5 mt-2">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    ログアウト
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                </form>
            </li>
            @endauth
        </ul>
    </div>
</nav>