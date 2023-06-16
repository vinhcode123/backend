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
                                            <a href="#"><img src="img/flag/french.jpg" alt="" />FRENCH</a>
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
                                <span class="aa-cart-notify">2</span>
                            </a>

                            </ul>
                            <a class="aa-cartbox-checkout aa-primary-btn" href="{{ route('checkout') }}">Checkout</a>
                        </div>
                    </div>
                    <!-- / cart box -->
                    <!-- search box -->
                    <!-- <div class="aa-search-box">
                                <form action="/">
                                    <input type="text" name="key" id=""
                                        placeholder="Search here ex. 'man' " />
                                    <button type="submit">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </form>
                            </div> -->
                    <!-- / search box -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /End  header bottom  -->
</header>
<!-- / header section -->
{{-- menu --}}
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
                                    <li><a href="{{ route('type_products', $items->id) }}">{{ $items->name }}</a>
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
                                <li><a href="{{ route('product_detail') }}">Shop Single</a></li>
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
{{-- endmenu --}}
<!-- Start slider -->
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <p class="alert alert"> <a href="#" class="close" data-dismiss="alert"
                    aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>

<!-- Tạo nút Thêm mới sản phẩm
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.create`
- Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/create
-->

<!-- Tạo table hiển thị danh sách các sản phẩm -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>categorys_id</th>
            <th>Giá</th>
            <th>Description</th>

        </tr>
    </thead>
    <tbody>
        <!-- Sử dụng vòng lặp foreach để duyệt qua các sản phẩm
        - Biến $danhsachsanpham là biến được truyền qua từ action `index()` trong controller SanPhamController.
        -->
        <!-- <ul class="nav nav-tabs aa-products-tab">
                                    @foreach ($categories as $category)
<li class="{{ $loop->first ? 'active' : '' }}">
                                            <a href="#category_{{ $category->id }}"
                                                data-toggle="tab">{{ $category->name }}</a>
                                        </li>
@endforeach
                                </ul> -->



        <h1 style="text-align: center" class="py-5">List Producs</h1>
        <p></p>
        <p></p>
        @foreach ($categories as $catygory)
            <div class="tab-pane fade {{ $loop->first ? 'in active' : '' }}" id="category_{{ $category->id }}">
                @foreach ($catygory->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td> <img src="{{ asset('img/' . $category->name . '/' . $product->img_name) }}"
                                alt="{{ $product->products_name }}">></td>
                        <td>{{ $product->products_name }}</td>
                        <td>{{ $product->categorys_id }}</td>
                        <td>{{ $product->products_price }}$</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                @endforeach
            </div>
        @endforeach


    </tbody>
</table>

<!-- Start Promo section -->
