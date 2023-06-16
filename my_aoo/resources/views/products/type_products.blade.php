<!DOCTYPE html>
<html lang="en">

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
                                            <img src="/img/flag/english.jpg" alt="english flag" />ENGLISH
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li>
                                                <a href="#"><img src="/img/flag/french.jpg"
                                                        alt="" />FRENCH</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="/img/flag/english.jpg"
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
                                    <li><a href="{{ route('account') }}">My Account</a></li>
                                    <li class="hidden-xs">
                                        <a href="{{ route('wishlist') }}">Wishlist</a>
                                    </li>
                                    <li class="hidden-xs"><a href="{{ route('cart') }}">My Cart</a></li>
                                    <li class="hidden-xs">
                                        <a href="{{ route('checkout') }}">Checkout</a>
                                    </li>
                                    @if (is_null(Auth::id()))
                                        <li>
                                            <a href="" data-toggle="modal" data-target="#login-modal">Login</a>
                                        </li>
                                    @endif
                                    @if (!is_null(Auth::id()))
                                        <li>
                                            <a href="{{ route('signout') }}" data-toggle="modal"
                                                data-target="#login-modal">Logout</a>
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
                                <form action="">
                                    <input type="text" name="" id=""
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
                            <li><a href="#">Furniture</a></li>
                            <li>
                                <a href="{{ route('blog2') }}">Blog</a>
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

    <!-- / slider -->
    <!-- Start Promo section -->

    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        {{-- start --}}
                                        <ul class="aa-product-catg">

                                            <!-- start single product item -->
                                            @foreach ($categories as $category)
                                                @foreach ($category->products as $items)
                                                    <li>
                                                        <figure>
                                                            <a class="aa-product-img" href="#"><img
                                                                    src="{{ asset('img/' . $category->name . '/' . $items->img_name) }}"
                                                                    alt="polo shirt img" /></a>
                                                                    <a class="aa-add-card-btn"
                                                                    href="/addtocart/{{ $items->id }}">
                                                                    Add To
                                                                    Cart
                                                                </a>
                                                            <figcaption>
                                                                <h4 class="aa-product-title">
                                                                    <a href="#">{{ $items->products_name }}</a>
                                                                </h4>
                                                                <span
                                                                    class="aa-product-price">{{ $items->products_price }}</span>
                                                                {{-- <span
                                                                class="aa-product-price"><del>$65.50</del></span> --}}
                                                            </figcaption>
                                                        </figure>
                                                        <div class="aa-product-hvr-content">
                                                            <a href="/addtowish/{{ $items->id }}"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Add to Wishlist">
                                                                <span class="fa fa-heart-o"></span>
                                                            </a>
                                                            <a href="" data-toggle="tooltip"
                                                                data-placement="top" title="Compare">
                                                                <span class="fa fa-exchange"></span>
                                                            </a>
                                                            <a href="/productdetail/{{ $items->id }}"
                                                                title="Quick View">
                                                                <span class="fa fa-search"></span>
                                                            </a>
                                                        </div>
                                                        <!-- product badge -->
                                                        {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                                                    </li>
                                                @endforeach
                                            @endforeach


                                        </ul>
                                        {{-- end --}}
                                    </div>
                                    <!-- quick view modal -->
                                    <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                        &times;
                                                    </button>
                                                    <div class="row">
                                                        <!-- Modal view slider -->
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="aa-product-view-slider">
                                                                <div class="simpleLens-gallery-container"
                                                                    id="demo-1">
                                                                    <div class="simpleLens-container">
                                                                        <div class="simpleLens-big-image-container">
                                                                            <a class="simpleLens-lens-image"
                                                                                data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                                <img src="img/view-slider/medium/polo-shirt-1.png"
                                                                                    class="simpleLens-big-image" />
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="simpleLens-thumbnails-container">
                                                                        <a href="#"
                                                                            class="simpleLens-thumbnail-wrapper"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                            data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                            <img
                                                                                src="img/view-slider/thumbnail/polo-shirt-1.png" />
                                                                        </a>
                                                                        <a href="#"
                                                                            class="simpleLens-thumbnail-wrapper"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                            data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                            <img
                                                                                src="img/view-slider/thumbnail/polo-shirt-3.png" />
                                                                        </a>

                                                                        <a href="#"
                                                                            class="simpleLens-thumbnail-wrapper"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                            data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                            <img
                                                                                src="img/view-slider/thumbnail/polo-shirt-4.png" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal view content -->
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="aa-product-view-content">
                                                                <h3>T-Shirt</h3>
                                                                <div class="aa-price-block">
                                                                    <span class="aa-product-view-price">$34.99</span>
                                                                    <p class="aa-product-avilability">
                                                                        Avilability: <span>In stock</span>
                                                                    </p>
                                                                </div>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur
                                                                    adipisicing elit. Officiis animi, veritatis
                                                                    quae repudiandae quod nulla porro quidem,
                                                                    itaque quis quaerat!
                                                                </p>
                                                                <h4>Size</h4>
                                                                <div class="aa-prod-view-size">
                                                                    <a href="#">S</a>
                                                                    <a href="#">M</a>
                                                                    <a href="#">L</a>
                                                                    <a href="#">XL</a>
                                                                </div>
                                                                <div class="aa-prod-quantity">
                                                                    <form action="">
                                                                        <select name="" id="">
                                                                            <option value="0" selected="1">1
                                                                            </option>
                                                                            <option value="1">2</option>
                                                                            <option value="2">3</option>
                                                                            <option value="3">4</option>
                                                                            <option value="4">5</option>
                                                                            <option value="5">6</option>
                                                                        </select>
                                                                    </form>
                                                                    <p class="aa-prod-category">
                                                                        Category: <a href="#">Polo T-Shirt</a>
                                                                    </p>
                                                                </div>
                                                                <div class="aa-prod-view-bottom">
                                                                    <a href="#" class="aa-add-to-cart-btn"><span
                                                                            class="fa fa-shopping-cart"></span>Add To
                                                                        Cart</a>
                                                                    <a href="#" class="aa-add-to-cart-btn">View
                                                                        Details</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- / quick view modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
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
                                        <a href="#"><img src="/img/promo-banner-1.jpg" alt="img" /></a>
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
                                        <a href="#"><img src="/img/promo-banner-3.jpg" alt="img" /></a>
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
                                        <a href="#"><img src="{{ asset('/img/promo-banner-4.jpg') }}"
                                                alt="img" /></a>
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
                                <a href="#"><img src="/img/client-brand-java.png" alt="java img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-jquery.png" alt="jquery img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-html5.png" alt="html5 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-css3.png" alt="css3 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-wordpress.png"
                                        alt="wordPress img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-joomla.png" alt="joomla img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-java.png" alt="java img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-jquery.png" alt="jquery img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-html5.png" alt="html5 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-css3.png" alt="css3 img" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="/img/client-brand-wordpress.png"
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
                            <input type="email" name="" id="" placeholder="Enter your Email" />
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
