
<div class="top-header container">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="left-th">
                <a href="/" class="stub-logo">
                    <img src="/images/stublogo.png" width="400" height="100" alt="Create My Stub Logo">
                </a>
                <img class="stub-price" src="/images/checkstubinstant.png" width="79" height="70" alt="Stub Price">
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="right-th">
                <p>Instant Paycheck Stub</p>
                <span>24/7 Support</span>
            </div>
            <div class="clearfix"></div>
            <div class="login-zone pull-right">
                    <!-- Right Side Of Navbar -->
                    <ul class="row" style="display: flex;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <p> &nbsp &nbsp </p>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else

                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link btn-success btn-lg dropdown-toggle" style="border-radius: 5px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn-success btn-lg" style="color:#fff; border-radius: 0px; display: block; width: 100%; font-size: 18px;" href="/profile">Profile</a>
                                    <a class="dropdown-item btn-primary btn-lg" style="color:#fff; border-radius: 0px; display: block;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
            <div class="pull-left" id="modile-make-stub-btn">
                    <a href="/modern" class="btn btn-success btn-lg">Make Paycheck Stub</a>
                </div>

                <div class="clearfix"></div>
        </div>
    </div>
</div>


<div class="main-top">

        <div class="top-menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle btn btn-default" data-toggle="collapse" data-target="#yii_booster_collapse_yw0" id="yw1" name="yt7" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    </div>
                    <div class="collapse navbar-collapse" id="yii_booster_collapse_yw0">
                        <ul id="yw2" class="nav navbar-nav">
                                <li class="{{ Request::is('generateStubs') ? 'active' : '' }}"><a href="/generateStubs">Generate Your Stubs</a></li>
                                <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="/posts">News</a></li>
                                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="/faq">FAQs</a></li>
                                <li class="{{ Request::is('support') ? 'active' : '' }}"><a href="/support">Support</a></li>
                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
                                <li class="{{ Request::is('reviews') ? 'active' : '' }}"><a href="/reviews">Reviews</a></li>
                        </ul>

</div>
</div>
</nav>
</div>
</div>


