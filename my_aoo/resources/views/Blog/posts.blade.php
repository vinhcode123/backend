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
                                            <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><img src="img/flag/french.jpg"
                                                        alt="">FRENCH</a></li>
                                            <li><a href="#"><img src="img/flag/english.jpg"
                                                        alt="">ENGLISH</a></li>
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
                                            <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                            <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
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
                                    <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
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
        <!-- / header top  -->

        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href="index.html">
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
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
                                        placeholder="Search here ex. 'man' ">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
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
                                    {{-- Filter user By Vu --}}
                                    @foreach ($data_type as $items)
                                        <li><a
                                                href="{{ route('type_products', $items->id) }}">{{ $items->name }}</a>
                                        </li>
                                    @endforeach
                                    {{-- End Filter --}}
                                </ul>
                            </li>
                            <li><a href="#">Furniture</a></li>
                            <li>
                                <a href="{{ route('blog2') }}">Blog</span></a>

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

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Blog Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Blog Archive -->
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-blog-archive-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- Blog details By Vu-->
                                <div class="aa-blog-content aa-blog-details">
                                    @if ($products != null)


                                        <article class="aa-blog-content-single">
                                            <h2><a href="#">{{ $products->products_name }}</a></h2>
                                            <div class="aa-article-bottom">
                                                <div class="aa-post-author">
                                                    Posted By <a href="#">Jackson</a>
                                                </div>
                                                <div class="aa-post-date">
                                                    {{--  định dạng ngày tháng theo dạng "ngày số thứ tự + 'S' + tên tháng + năm" (ví dụ: "26th May 2023") --}}
                                                    {{ date('jS F Y', strtotime($products->created_at)) }}
                                                </div>
                                            </div>
                                            <figure class="aa-blog-img">
                                                <a href="#"><img
                                                        src="{{ asset('img/' . $products->category_name . '/' . $products->img_name) }}"
                                                        alt="fashion img"></a>
                                            </figure>
                                            <p>{{ $products->description }}</p>
                                            <div class="blog-single-bottom">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                                        <div class="blog-single-tag">
                                                            <span>Tags:</span>
                                                            <a href="#">Fashion,</a>
                                                            <a href="#">Beauty,</a>
                                                            <a href="#">Lifestyle</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class="blog-single-social">
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        {{-- Hiện danh sách comment By Vu --}}
                                        <div class="aa-blog-comment-threat">
                                            @if ($productWithComments)
                                                <span class="comments-count">{{ $commentCount }} Comments</span>
                                                <div id="comments" class="comments">
                                                    <ul class="commentlist">
                                                        @foreach ($comments as $comment)
                                                            <li>
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <h4 class="author-name" style="color: red">
                                                                            {{ $comment->user->name }}
                                                                        </h4>
                                                                        <span
                                                                            class="comments-date">{{ $comment->created_at->toFormattedDateString() }}</span>
                                                                        <p>{{ $comment->body }}</p>
                                                                        @if (auth()->check() && $comment->user_id == auth()->id())
                                                                            <form
                                                                                action="{{ route('comments.destroy', $comment->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Delete</button>
                                                                            </form>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        {{-- End  --}}

                                        {{-- Form Comment --}}
                                        <div id="respond">
                                            <h3 class="reply-title">Leave a Comment</h3>
                                            <form id="commentform" method="POST"
                                                action="{{ route('comments.store', ['id' => $productWithComments->id]) }}">
                                                @csrf
                                                <input type="hidden" name="products_id" value="">
                                                <p class="comment-form-comment">
                                                    <label for="comment">Comment</label>
                                                    <textarea name="body" cols="45" rows="8" aria-required="true" required>{{ old('body') }}</textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input type="submit" name="submit" class="aa-browse-btn"
                                                        value="Post Comment">
                                                </p>
                                            </form>
                                        </div>
                                        {{-- End --}}
                                    @else
                                        <H1>Không tìm thấy sản phẩm</H1>
                                    @endif


                                    <!-- End blog detail -->

                                    {{-- <div class="aa-blog-navigation">
                                        <a class="aa-blog-prev" href="#"><span
                                                class="fa fa-arrow-left"></span>Prev Post</a>
                                        <a class="aa-blog-next" href="#">Next Post<span
                                                class="fa fa-arrow-right"></span></a>
                                    </div> --}}


                                </div>
                            </div>

                            <!-- blog sidebar -->
                            <div class="col-md-3">
                                <aside class="aa-blog-sidebar">
                                    <div class="aa-sidebar-widget">
                                        <h3>Category</h3>
                                        <ul class="aa-catg-nav">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="">Women</a></li>
                                            <li><a href="">Sports</a></li>
                                        </ul>
                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3>Tags</h3>
                                        <div class="tag-cloud">
                                            <a href="#">Fashion</a>
                                            <a href="#">Shop</a>
                                            <a href="#">Hand Bag</a>
                                            <a href="#">Pen Drive</a>
                                        </div>
                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3>Recent Post</h3>
                                        <div class="aa-recently-views">
                                            <ul>
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img
                                                            src="/img/woman-small-2.jpg" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                        <p>March 26th 2016</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img
                                                            src="/img/woman-small-1.jpg" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">Lorem ipsum dolor.</a></h4>
                                                        <p>March 26th 2016</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img
                                                            src="/img/woman-small-2.jpg" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">Lorem ipsum dolor.</a></h4>
                                                        <p>March 26th 2016</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog Archive -->


    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
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
                                                <p> 25 Astor Pl, NY 10003, USA</p>
                                                <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                                                <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
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
                            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
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
    <!-- Login Modal -->
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
