<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | G-Gundam</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 6544 7887 </a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> Gundam@gmail.com </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="trang-chu"><img src="{{('public/frontend/images/logo_1.png')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
                                <li class="dropdown"><a href="#">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">Giỏ Hàng</a></li>
                                <li><a href="contact-us.html">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>G</span>-UNDAM</h1>
                                    <h2>Mô hình Gundam giá rẻ</h2>
                                    <p>Mua 1 tặng 10, nếu có thẻ thành viên thì được tặng thêm 10 con vui vẻ nữa </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/desktop_1.jpg')}}" class="girl img-responsive" alt="" />                                  
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>G</span>-UNDAM</h1>
                                    <h2>Mô hình Gundam giá rẻ</h2>
                                    <p>Mua 1 tặng 10, nếu có thẻ thành viên thì được tặng thêm 10 con vui vẻ nữa </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/desktop_2.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>G</span>-UNDAM</h1>
                                    <h2>Mô hình Gundam giá rẻ </h2>
                                    <p>Mua 1 tặng 10, nếu có thẻ thành viên thì được tặng thêm 10 con vui vẻ nữa. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/desktop_3.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh Mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $key => $cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương Hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand)
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>

            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Trải Nghiệm Ngay Tại Nhà</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hệ Thống G-undam  Online</a></li>
                                <li><a href="">Địa chỉ: Hồ Chí Minh</a></li>
                                <li><a href="">Hotline: +84 6544 7887</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Về Chúng Tôi</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">About Us</a></li>
                                <li><a href="">Size Chart</a></li>
                                <li><a href="">Hệ Thống Cửa Hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính Sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Chính sách thanh toán</a></li>
                                <li><a href="">Chính sách đổi trả</a></li>
                                <li><a href="">Chính sách bảo hành</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                        <div class="address">
                            <img src="{{('public/frontend/images/map.png')}}" alt="" />
                            <p>Hẻm 69/68 Đ. Đặng Thuỳ Trâm, Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh 70000</p>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">© Bản quyền thuộc về G-undam | Cung cấp bởi G-undam </p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{('public/frontend/js/jquery.js')}}"></script>
    <script src="{{('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{('public/frontend/js/price-range.js')}}"></script>
    <script src="{{('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{('public/frontend/js/main.js')}}"></script>
</body>
</html>