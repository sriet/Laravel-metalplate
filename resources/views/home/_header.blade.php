@php
  $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<!-- Navigation -->
<header>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img height="45px" src="{{ asset('assets')}}/images/website_logo.png" alt="logo" />
                    </a>
                </div>
                <div class="col-lg-5 navbar-text pt-2">
                    <div>金属加工はお任せください！！</div>
                    <div>金属板のプロがご要望にお答えします。</div>
                </div>
                <div class="col hello-message">
                    <div>こんにちは、</div>
                    <div>林友量さま</div>
                </div>
                <div class="col-lg-2">
                    <div class="contact-details">
                        <ul>
                            <li>TEL:{{ $setting->phone }}</li>
                            <li>FAX:{{ $setting->fax }}</li>
                            <li>{{ $setting->email }}</li>
                        </ul>
                    </div>
                </div>
                @auth
                            <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b> {{ Auth::user()->name }} </b><i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                @include('user.usermenu')
                            </div>

                    @endauth
                    @guest
                    <div class="col">
                        <a id="btnLogin" class="btn btn-outline-primary" href="{{ route('login') }}">ログアウト</a>
                    </div>
                    <div class="col">
                        <a id="btnRegister" class="btn btn-primary" href="{{ route('member') }}">マイページ</a>
                    </div>
                    @endguest
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav justify-content-between w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutus') }}">金属加工.comとは</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('guides') }}">ご利用ガイド</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('flow') }}">ご利用の流れ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('case') }}">事例紹介</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">お問い合わせ</a>
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li-->
                    @guest
                        <li class="nav-item dropdown login-list-item">
                            <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="margin-left: 10px;" class="fas fa-user"></i><b> ログアウト / マイページ </b><i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{ route('login') }}"><i style="margin-right: 20px;" class="fas fa-user-lock"></i><b>ログアウト</b></a>
                                <a class="dropdown-item" href="{{ route('register') }}"><i style="margin-right: 20px;" class="fas fa-user-plus"></i><b>マイページ</b></a>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

</header>
