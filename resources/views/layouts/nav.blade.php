<header id="banner" class="clearfix" style="height: 35vh; min-height: 250px; background: 
        url(/images/honeycomb-banner2.jpg) no-repeat center center;
        background-size: cover;">
    <div class="container" id="logoContainer">
        <img src="/images/logo.jpg" alt="Logo" id="logo" class="mx-5 mx-sm-auto">
    </div>
</header>

<nav class="navbar navbar-expand-md navbar-toggleable sticky-top navbar-light bg-warning">
    
    <div class="container">

        <a href="/" class="d-sm-none navbar-brand">
            Beekeeping It Real
        </a>

        <button class="navbar-toggler" type="button" 
            data-toggle="collapse" data-target="#navCollapse" aria-controls="navCollapse" 
            aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navCollapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-item nav-link {{ Request::is('locations') ? 'active' : '' }}" href="/locations">Retail Locations</a>
                <li class="nav-item dropdown">
                    <a class="navCursor nav-link dropdown-toggle {{ Request::is('products*') ? 'active' : '' }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                    </a>
                    <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/products">Products</a>
                        <div class="dropdown-divider"></div>
                        <h5 class="dropdown-header">Product Info:</h5>
                        <a class="dropdown-item" href="/products/raw-honey">Raw Honey</a>
                        <a class="dropdown-item" href="/products/beeswax">Beeswax</a>
                        <a class="dropdown-item" href="/products/pollen">Pollen</a>
                    </div>
                </li>
                <a class="nav-item nav-link {{ Request::is('temp') ? 'active' : '' }}" href="/temp">Contact Us</a>
            </div><!-- navbar-nav -->
        </div> <!-- navbar collapse -->
    </div>
    <div class="navSocial col-sm-2 d-flex justify-content-start">
        <a href="https://www.facebook.com/BeekeepingItReal/" target="_blank" class="navFB mr-3"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/beekeeping_it_real/" target="_blank" class="navIG mr-3"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
    </div>
</nav><!-- nav -->