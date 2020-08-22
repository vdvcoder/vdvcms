<header class="section-header">

    <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
        <div class="container">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('shop.index') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
            </ul>
            <ul class="navbar-nav">
                <li  class="nav-item"><a href="#" class="nav-link"> Call: +99812345678 </a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Dutch </a>
                    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                        <li><a class="dropdown-item disabled" href="#">French</a></li>
                        <li><a class="dropdown-item disabled" href="#">English </a></li>
                    </ul>
                </li>
            </ul> <!-- list-inline //  -->
        </div> <!-- navbar-collapse .// -->
        </div> <!-- container //  -->
    </nav> <!-- header-top-light.// -->

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a href="#" class="brand-wrap">
                        <img class="logo" src="images/logo.png">
                    </a> <!-- brand-wrap.// -->
                </div>

                <div class="col-lg-10 col-sm-12 col-6">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                            <a href="{{ route('cart.index') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                            @if(Cart::instance('default')->count())
                                <span class="badge badge-pill badge-danger notify">
                                    {{ Cart::instance('default')->count() }}
                                </span>
                            @endif
                        </div>
                        <div class="widget-header icontext">
                            <div class="text">
                                <span class="text-muted">Welcome!</span>
                                <div>
                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    Account
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('login') }}">
                                                        {{ __('Login') }}
                                                    </a>
                                                    @if (Route::has('register'))
                                                    <a class="dropdown-item" href="{{ route('register') }}">
                                                        {{ __('Register') }}
                                                    </a>
                                                    @endif

                                                </div>
                                            </li>
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->


<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  All category</strong></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Foods and Drink</a>
                        <a class="dropdown-item" href="#">Home interior</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Category 1</a>
                        <a class="dropdown-item" href="#">Category 2</a>
                        <a class="dropdown-item" href="#">Category 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>

</header> <!-- section-header.// -->
