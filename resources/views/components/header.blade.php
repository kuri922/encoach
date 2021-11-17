<nav class="navbar navbar-expand-md navbar-light shadow-sm pl-5 encoach-header-container">
    <a class="navbar-brand" href="{{ url('/home') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    

    <!-- 検索欄 -->
    <!-- <form class="form-inline">
        <div class="form-group">
            <input class="form-control encoach-header-search-input">
        </div>
        <div class="input-group">
            <button type="submit" class="btn encoach-header-search-button"><i class="fas fa-search encoach-header-search-icon"></i></button>
        </div>
    </form> -->
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
                <a class="nav-link" href="{{ route('mypage.favorite') }}"><i class="far fa-heart"></i></a>
            </li>
            
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('mypage') }}">
                    <i class="fas fa-user mr-1"></i><label>マイページ</label>
                </a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('carts.index') }}">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
            @endauth
        </ul>
    </div>
</nav>