<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">HOME</a>
        <div class="search-bar">
            <form action="{{ url('searchproduct') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="search" id="search_product" name="product_name" require placeholder="Search Product" aria-describedby="basic-addon1">
                    <button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- <button class="navbar-toggler" type="button">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div id="navbarNav">
            <ul class="navbarNav">
                <li><a class="nav-link" href="{{ url('category') }}">Categorys</a></li>
                <li><a class="nav-link" href="{{ url('product') }}">Products</a></li>
                <li>
                    <a class="nav-link" href="{{ url('cart') }}">Cart
                        <span class="badge badge-pill bg-primary cart-count">0</span>
                    </a>
                </li>

                <li><a class="nav-link" href="{{ url('wishlist') }}">Wishlist
                        <span class="badge badge-pill bg-success wishlist-count">0</span>
                    </a></li>
                @guest
                @if(Route::has('login'))
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @endif
            </ul>
        </div>
    </div>


    <!-- @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif -->

    @else
    <div>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ url('my-orders') }}">
                        My Orders
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('profile') }}">
                        My Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Log out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </li>
    </div>

    @endguest
    </ul>

    </div>
    <div id="toolbar" class="bar-block toolbar-black toolbar-hide hide-large hide-medium toolbar-top" style="margin-top:46px">
        <a href="{{ url('category') }}" class="bar-item toolbar-button padding-large" onclick="myFunction()">Categorys</a>
        <a href="{{ url('Product') }}" class="bar-item toolbar-button padding-large" onclick="myFunction()">Products</a>
        <a href="{{ url('cart') }}" class="bar-item toolbar-button padding-large" onclick="myFunction()">Carts</a>
        <a href="{{ url('wishlist') }}" class="w3-bar-item toolbar-button padding-large" onclick="myFunction()">Wishlist</a>
        @guest
        @if(Route::has('login'))
        <a href="{{ route('login') }}" class="bar-item toolbar-button padding-large">{{ __('Login') }}</a>
        @endif
        @else
        <a href="{{ url('my-orders') }}" class="bar-item toolbar-button padding-large" onclick="myFunction()">My orders</a>
        <a href="{{ url('profile') }}" class="bar-item toolbar-button padding-large" onclick="myFunction()">Profile</a>
        <a class="bar-item toolbar-button padding-large" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Log out') }}
        </a>
        @endguest
    </div>
    <a href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu" class="menu_onclick"><i class="fa fa-bars"></i></a>
    
</nav>
<!-- <nav>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large">HOME</a>
--><!-- <a href="{{ url('cart') }}" class="w3-bar-item w3-button w3-padding-large">CART</a>
            <a href="{{ url('wishlist') }}" class="w3-bar-item w3-button w3-padding-large">WISHLIST</a> -->
<!--<ul>
                <li>
                    <a class="w3-bar-item w3-button w3-padding-large" href="{{ url('cart') }}">Cart
                        <span class="badge badge-pill bg-primary cart-count">0</span>
                    </a>
                </li>

                <li><a class="w3-bar-item w3-button w3-padding-large" href="{{ url('wishlist') }}">Wishlist
                        <span class="badge badge-pill bg-success wishlist-count">0</span>
                    </a></li>
            </ul>

            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="{{ url('category') }}" class="w3-bar-item w3-button">Categories</a>
                    <a href="{{ url('product') }}" class="w3-bar-item w3-button">Products</a>
                    @guest
                    @if(Route::has('login'))
                    <a href="{{ route('login') }}" class="w3-bar-item w3-button">{{ __('Login') }}</a>
                    @endif
                    @else
                    <a href="{{ url('my-orders') }}" class="w3-bar-item w3-button" onclick="myFunction()">My orders</a>
                    <a href="{{ url('profile') }}" class="w3-bar-item w3-button" onclick="myFunction()">Profile</a>
                    <a href="{{ url('logout') }}" class="w3-bar-item w3-button" onclick="myFunction()" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fas fa-search"></i></a>
        </div>
    </div>-->

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<!--<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="{{ url('category') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Categorys</a>
        <a href="{{ url('Product') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Products</a>
        <a href="{{ url('cart') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Cart</a>
        <a href="{{ url('wishlist') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Wishlist</a>
        @guest
        @if(Route::has('login'))
        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large">{{ __('Login') }}</a>
        @endif
        @else
        <a href="{{ url('my-orders') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">My orders</a>
        <a href="{{ url('profile') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
        <a href="{{ url('logout') }}" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endguest
    </div>
</nav> -->