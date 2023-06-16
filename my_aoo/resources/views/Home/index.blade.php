<!DOCTYPE html>
<html llang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daily Shop | Home</title>

    <!-- Font awesome -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet" />
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.simpleLens.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }} " />
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet" />
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all" />

    <!-- Main style sheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- wpf loader Two -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <!-- start language -->
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="img/flag/english.jpg" alt="english flag" />ENGLISH
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li>
                                                <a href="#"><img src="img/flag/french.jpg"
                                                        alt="" />FRENCH</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="img/flag/english.jpg"
                                                        alt="" />ENGLISH</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / language -->

                                <!-- start currency -->
                                <div class="aa-currency">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="fa fa-usd"></i>USD
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li>
                                                <a href="#"><i class="fa fa-euro"></i>EURO</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-jpy"></i>YEN</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / currency -->
                                <!-- start cellphone -->
                                <div class="cellphone hidden-xs">
                                    <p><span class="fa fa-phone"></span>00-62-658-658</p>
                                </div>
                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li><a href="{{ route('account') }}}}">My Account</a></li>
                                    <li class="hidden-xs"><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                    <li class="hidden-xs"><a href="{{ route('cart') }}">My Cart</a></li>
                                    <li class="hidden-xs"><a href="{{ route('checkout') }}">Checkout</a></li>
                                    {{-- Logout --}}
                                    @if (is_null(Auth::id()))
                                        <li>
                                            <a href="" data-toggle="modal" data-target="#login-modal">
                                                Login</a>
                                        </li>
                                    @endif
                                    @if (!is_null(Auth::id()))
                                        <li>
                                            <form id="logout-form" action="{{ route('signout') }}" method="POST">
                                                @csrf
                                                <a href="#"
                                                    onclick="document.getElementById('logout-form').submit()">
                                                    Logout</a>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / End header top  -->

        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href="{{ route('index') }}">
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>
                                        daily<strong>Shop</strong>
                                        <span>Your Shopping Partner</span>
                                    </p>
                                </a>
                                <!-- img based logo -->
                                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class="aa-cartbox">
                                <a class="aa-cart-link" href="#">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <?php $count = 0; ?>
                                    @if (session('cart') != null)
                                        @foreach (session('cart') as $key => $value)
                                            <?php $count++; ?>
                                        @endforeach
                                    @endif
                                    <span class="aa-cart-notify">{{ $count }}</span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul>


                                        @if (session('cart') != null)
                                            @foreach (session('cart') as $key => $value)
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img src=""
                                                            alt="" /></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4>{{ $value['name'] }}</h4>
                                                        <p>{{ $value['quantity'] }} x {{ $value['price'] }}</p>
                                                    </div>
                                                    <a class="aa-remove-product"
                                                        href="/deletetocart/{{ $key }}"><span
                                                            class="fa fa-times"></span></a>
                                                </li>
                                            @endforeach

                                        @endif


                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="/checkout">Checkout</a>
                                </div>
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class="aa-search-box">
                                <form action="/searchproductuser">
                                    <input type="text" name="key" id=""
                                        placeholder="Search here ex. 'man' " />
                                    <button type="submit">

                                        <span class="fa fa-search"></span>
                                    </button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End  header bottom  -->
    </header>
    <!-- / header section -->
    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            {{-- Filter user --}}
                            <li>
                                <a href="#">Categories <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($data_type as $items)
                                        <li><a
                                                href="{{ route('type_products', $items->id) }}">{{ $items->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            {{--  End filter user --}}

                            <li><a href="#">Furniture</a></li>
                            <li>
                                {{-- Sua --}}
                                <a href="{{ route('blog2') }}">Blog</a>
                                {{-- End --}}
                            </li>

                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li>
                                <a href="#">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('product') }}">Shop Page</a></li>
                                    {{-- <li><a href="{{ route('product_detail') }}">Shop Single</a></li> --}}
                                    <li><a href="{{ route('404') }}">404 Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
    <!-- / menu -->
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide prodcuts -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Men Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide prodcuts -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/2.jpg" alt="Wristwatch slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 40% Off</span>
                                <h2 data-seq>Wristwatch Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide prodcuts -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Jeans Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide prodcuts -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Exclusive Shoes</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide prodcuts -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="img/slider/5.jpg" alt="Male Female slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 50% Off</span>
                                <h2 data-seq>Best Collection</h2>
                                <p data-seq>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Minus, illum.
                                </p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span
                            class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding">
                                <div class="aa-promo-left">
                                    <div class="aa-promo-banner">
                                        <img src="img/promo-banner-1.jpg" alt="img" />
                                        <div class="aa-prom-content">
                                            <span>75% Off</span>
                                            <h4><a href="#">For Women</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-3.jpg" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>Exclusive prodcuts</span>
                                                <h4><a href="#">For Men</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-2.jpg" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>Sale Off</span>
                                                <h4><a href="#">On Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-4.jpg" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>New Arrivals</span>
                                                <h4><a href="#">For Kids</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="img/promo-banner-5.jpg" alt="img" />
                                            <div class="aa-prom-content">
                                                <span>25% Off</span>
                                                <h4><a href="#">For Bags</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start product navigation category -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    @foreach ($categories as $category)
                                        <li class="{{ $loop->first ? 'active' : '' }}">
                                            <a href="#category_{{ $category->id }}"
                                                data-toggle="tab">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- End product navigation category -->
                                <!-- Tab panes -->
                                {{-- Bắt đầu sản phẩm --}}
                                <div class="tab-content">
                                    @foreach ($categories as $category)
                                        <div class="tab-pane fade {{ $loop->first ? 'in active' : '' }}"
                                            id="category_{{ $category->id }}">
                                            <ul class="aa-product-catg">
                                                @foreach ($category->products as $product)
                                                    <li>
                                                        <figure>
                                                            <a class="aa-product-img" href="#">
                                                                <img src="{{ asset('img/' . $category->name . '/' . $product->img_name) }}"
                                                                    alt="{{ $product->products_name }}">
                                                            </a>

                                                            <a class="aa-add-card-btn"
                                                                href="/addtocart/{{ $product->id }}">
                                                                Add To
                                                                Cart
                                                            </a>

                                                            <figcaption>
                                                                <h4 class="aa-product-title">
                                                                    <a
                                                                        href="#">{{ $product->products_name }}</a>
                                                                </h4>
                                                                <span
                                                                    class="aa-product-price">{{ $product->products_price }}$</span>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="aa-product-hvr-content">
                                                            <a href="/addtowish/{{ $product->id }}"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Add to Wishlist">
                                                                <span class="fa fa-heart-o"></span>
                                                            </a>
                                                            <a href="" data-toggle="tooltip"
                                                                data-placement="top" title="Compare">
                                                                <span class="fa fa-exchange"></span>
                                                            </a>
                                                            <a href="/productdetail/{{ $product->id }}"
                                                                title="Quick View">
                                                                <span class="fa fa-search"></span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                {{-- Kết thúc sản phẩm --}}
                            </div>

                            <!-- quick view modal -->

                            <!-- / quick view modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active">
                                    <a href="#popular" data-toggle="tab">Popular</a>
                                </li>
                                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="/img/Men/polo-shirt-2.png" alt="polo shirt img" /></a>
                                                <form action="/" method="post">
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To
                                                        Cart</a>
                                                </form>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="/img/women/girl-2.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/Men/t-shirt-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title">
                                                    <a href="#">T-Shirt</a>
                                                </h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-3.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-4.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-4.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product
                                        <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-2.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-2.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/t-shirt-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title">
                                                    <a href="#">T-Shirt</a>
                                                </h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-3.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-4.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-4.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product
                                        <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-2.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-2.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/t-shirt-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title">
                                                    <a href="#">T-Shirt</a>
                                                </h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-3.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-4.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Lorem ipsum doller</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/man/polo-shirt-4.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">Polo T-Shirt</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product prodcuts -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="img/women/girl-1.png" alt="polo shirt img" /></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To
                                                    Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title">
                                                        <a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product
                                        <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quam, nobis.
                                </p>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quam, nobis.
                                </p>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quam, nobis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Testimonial -->
    <section id="aa-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                        <ul class="aa-testimonial-slider">
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg"
                                        alt="testimonial img" />
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt distinctio omnis possimus, facere, quidem
                                        qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.
                                    </p>
                                    <div class="aa-testimonial-info">
                                        <p>Allison</p>
                                        <span>Designer</span>
                                        <a href="#">Dribble.com</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg"
                                        alt="testimonial img" />
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt distinctio omnis possimus, facere, quidem
                                        qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.
                                    </p>
                                    <div class="aa-testimonial-info">
                                        <p>KEVIN MEYER</p>
                                        <span>CEO</span>
                                        <a href="#">Alphabet</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg"
                                        alt="testimonial img" />
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt distinctio omnis possimus, facere, quidem
                                        qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.
                                    </p>
                                    <div class="aa-testimonial-info">
                                        <p>Luner</p>
                                        <span>COO</span>
                                        <a href="#">Kinatic Solution</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Testimonial -->

    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img" /></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26,
                                                2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title">
                                            <a href="#">Lorem ipsum dolor sit amet</a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Assumenda, ad? Autem quos natus nisi aperiam,
                                            beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.
                                        </p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-3.jpg" alt="img" /></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26,
                                                2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title">
                                            <a href="#">Lorem ipsum dolor sit amet</a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Assumenda, ad? Autem quos natus nisi aperiam,
                                            beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.
                                        </p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img" /></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26,
                                                2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title">
                                            <a href="#">Lorem ipsum dolor sit amet</a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Assumenda, ad? Autem quos natus nisi aperiam,
                                            beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates
                                            corporis.
                                        </p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li>
                                <a href="#"><img src="img/client-brand-java.png" alt="java img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-jquery.png" alt="jquery img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-html5.png" alt="html5 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-css3.png" alt="css3 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-wordpress.png"
                                        alt="wordPress img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-joomla.png" alt="joomla img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-java.png" alt="java img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-jquery.png" alt="jquery img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-html5.png" alt="html5 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-css3.png" alt="css3 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/client-brand-wordpress.png"
                                        alt="wordPress img" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex,
                            velit!
                        </p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id=""
                                placeholder="Enter your Email" />
                            <input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->

    <!-- footer -->
    <footer id="aa-footer">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <h3>Main Menu</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Our Products</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Knowledge Base</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Delivery</a></li>
                                                <li><a href="#">Returns</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Special Offer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Useful Links</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Site Map</a></li>
                                                <li><a href="#">Search</a></li>
                                                <li><a href="#">Advanced Search</a></li>
                                                <li><a href="#">Suppliers</a></li>
                                                <li><a href="#">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Contact Us</h3>
                                            <address>
                                                <p>25 Astor Pl, NY 10003, USA</p>
                                                <p>
                                                    <span class="fa fa-phone"></span>+1 212-982-4589
                                                </p>
                                                <p>
                                                    <span class="fa fa-envelope"></span>dailyshop@gmail.com
                                                </p>
                                            </address>
                                            <div class="aa-footer-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-youtube"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="aa-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-bottom-area">
                            <p>
                                Designed by <a href="http://www.markups.io/">MarkUps.io</a>
                            </p>
                            <div class="aa-footer-payment">
                                <span class="fa fa-cc-mastercard"></span>
                                <span class="fa fa-cc-visa"></span>
                                <span class="fa fa-paypal"></span>
                                <span class="fa fa-cc-discover"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->
    @extends('auth.login')


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.js') }}"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.bootstrap.js') }}"></script>
    <!-- To Slider JS -->
    <script src="{{ asset('js/sequence.js') }}"></script>
    <script src="{{ asset('js/sequence-theme.modern-slide-in.js') }}"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.simpleLens.js') }}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
