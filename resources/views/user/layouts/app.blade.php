<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amavet</title>

    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.default.css">

    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/responsive.css"/>

</head>
<body class="full-width-content home header-v1 hide-topbar-mobile" data-template="mjcms_index">

<div id="page" class="hfeed site">

    <!--    navbar-->
    <header id="masthead" class="site-header ">
        <div class="header-main clearfix">
            <div class="container">
                <div class="row menu-row">
                    <div class="site-logo col-lg-3 col-xs-9">
                        <a href="/" class="logo">
                            <img src="/image/logo_amavet.png" class="logo" width="250"/>
                        </a>

                        <h2 class="site-description">Với tôn chỉ duy nhất: “LÀM HÀI LÒNG KHÁCH HÀNG LÀ GIÁ TRỊ SỐNG CÒN
                            CỦA DOANH NGHIỆP” HANOFEED cam kết sẽ mang đến cho khách hàng những dịch vụ tốt nhất và chất
                            lượng phục vụ hoàn hảo</h2>
                    </div>
                    <div class="header-content col-lg-9 col-md-12 col-xs-12 pull-right">
                        <!-- top bar -->
                        <div id="topbar" class="topbar ">
                            <div class="topbar-widgets clearfix">
                                <div class="widget">
                                    <ul class="socials">
                                        <li>
                                            <a target="_blank" rel="nofollow" href="#" title="facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a target="_blank" rel="nofollow" href="#" title="google plus">
                                                <i class="fa fa-google" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a target="_blank" rel="nofollow" href="#" title="youtube">
                                                <i class="fa fa-youtube" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="widget">
                                    <div class="pull-left">
                                        <span class="svg-icon"><i class="flaticon-timer"></i></span>
                                    </div>
                                    <div class="pull-right">
                                        <div class="title">{{ trans('messages.WORKING_TIME') }}</div>
                                        <div class="sub-title">T.Hai - T.Bảy: 7.30 to 17.00</div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="pull-left">
                                        <span class="svg-icon"><i class="flaticon-call-answer"></i></span>
                                    </div>
                                    <div class="pull-right">
                                        <div>
                                            <a href="{{route('user.change-language','en')}}"><img src="/image/en.jpg"></a>&nbsp;
                                            <a href="{{route('user.change-language','vn')}}"><img src="/image/vn.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- top bar -->
                        <div class="site-menu">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu">
                                    <li class="">
                                        <a href="/" class=" " title="Trang chủ" data-xf-key="1"
                                           data-nav-id="home">{{ trans('messages.home') }}</a>
                                    </li>
                                    <li class="">
                                        <a href="/" class=" " title="Trang chủ" data-xf-key="1"
                                           data-nav-id="home">{{ trans('messages.introduce') }}</a>
                                        <ul class="sub-menu">
                                            <li class="">
                                                <a href="#" data-nav-id="2">Lịch sử</a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-nav-id="3">Sứ mệnh</a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-nav-id="3">Tầm nhìn</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#" class=" " title="Lĩnh vực hoạt động" data-xf-key="1"
                                           data-nav-id="home">Lĩnh vực hoạt động</a>
                                    </li>

                                    <li class=" has-children">
                                        <a href="#" class="dropdown-toggle " title="Sản Phẩm" data-nav-id="mjsProduct">{{ trans('messages.products') }}</a>
                                    </li>

                                    <li class=" has-children">
                                        <a href="#" class="dropdown-toggle " title="Tin tức & sự kiện" data-nav-id="mjsProduct">{{ trans('messages.news') }}</a>
                                        <?php
                                        $categoryNews = \App\Models\CategoriesNewsLanguage::where('languages_id', config('app.locale') == 'en' ? 2 : 1)->get();
                                        ?>
                                        <ul class="sub-menu">
                                            @foreach($categoryNews as $value)
                                                <li class="">
                                                    <a href="{{route('news_list_ctg',['title' => str_slug($value['name']), 'id' => $value['news_category_id']])}}" data-nav-id="2">{{$value['name']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#" class=" " title="Liên Hệ" data-xf-key="5"
                                           data-nav-id="mjcmsContact">{{ trans('messages.contact') }}</a>
                                    </li>

                                    <li id="mf-active-menu" class="mf-active-menu"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="navbar-toggle col-xs-3">
                        <span id="mf-navbar-toggle" class="navbar-icon"> <span class="navbars-line"></span> </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 language-custom" style="text-align: center;padding: 5px;display: none">
            <div>
                <a href="http://vanxuanphongthuy.com/change-language/en"><img src="/image/en.jpg"></a>&nbsp;
                <a href="http://vanxuanphongthuy.com/change-language/vn"><img src="/image/vn.jpg"></a>
            </div>
        </div>
    </header>
    <!--  end navbar-->

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="contact-footer">

                <div class="main-item-ft">
                    <div class="title">CÔNG TY CỔ PHẦN TẬP ĐOÀN amavet</div>
                    <address><span class="add">VPĐD: Tầng 8 Tòa nhà Hudland số 6 Nguyễn Hữu Thọ, phường Hoàng Liệt, quận Hoàng Mai, Thành phố Hà Nội</span>
                        <span class="add"><br>ĐC (viết hóa đơn): Thị tứ Bô Thời, Hồng Tiến, Khoái Châu, Hưng Yên.</span>
                        <span class="phone"> <span><br>T: 0243 2033 666</span> <span>F: 0243 2033 111</span> <span><br>E: info@amavet-group.com</span> <span>W: www.amavet-group.com</span> </span>
                        <span class="site"> <span><br> Giấy phép đăng ký kinh doanh số 0900841823 - Ngày cấp: 3/7/2012 - Nơi cấp: Sở Kế hoạch và Đầu tư tỉnh Hưng Yên.</span> </span>
                    </address>
                </div>

            </div>
            <div class="bocongthuong">

                <a href="#" target="_blank">
                    <img alt="" border="0" class="img-editor" src="/styles/image/bocongthuong.png">
                </a>

                <div class="copyright">&copy; 2020 Bản quyền thuộc về <a href="#">Tập đoàn amavet</a></div>
                <div class="design"><a href="http://bicweb.vn/" target="_blank">Thiết kế website</a> bởi <a href=""
                                                                                                            target="_blank">BICWeb.vn&trade;</a>
                </div>
            </div>
        </div>
    </footer>

    <!--nav mobie-->
    <div class="primary-mobile-nav" id="primary-mobile-nav" role="navigation">
        <div class="mobile-nav-content">
            <a href="#" class="close-canvas-mobile-panel">×</a>
            <ul class="menu">

                <li class="">
                    <a href="/" class=" " title="Trang chủ" data-nav-id="">Trang chủ</a>
                </li>

                <li class="">
                    <a href="/" class=" " title="Lĩnh vực hoạt động" data-nav-id="">Lĩnh vực hoạt động</a>
                </li>

                <li class=" menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Sản Phẩm" data-nav-id="">Sản Phẩm</a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="#" data-nav-id="0">Cám gà Hanofeed</a>
                        </li>
                        <li class="">
                            <a href="#" data-nav-id="1">Cám lợn Hanofeed</a>
                        </li>
                        <li class="">
                            <a href="#" data-nav-id="2">Cám vịt ngan Hanofeed</a>
                        </li>
                        <li class="">
                            <a href="#" data-nav-id="3">Cám cá Hanofeed</a>
                        </li>
                    </ul>
                </li>

                <li class=" menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Tin tức & sự kiện" data-nav-id="">Tin tức & sự kiện</a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="#" data-nav-id="0">Tin ngành</a>
                        </li>
                        <li class="">
                            <a href="#" data-nav-id="1">Tin amavet</a>
                        </li>
                        <li class="">
                            <a href="#" data-nav-id="2">amavet với công đồng</a>
                        </li>
                        <li class="">
                            <a href="#" data-nav-id="3">Góc báo chí</a>
                        </li>
                    </ul>
                </li>


                <li class="menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Tin tức" data-nav-id="">Tin
                        tức</a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="#" data-nav-id="0">Truyền thông HanoFeed</a>
                        </li>

                        <li class="">
                            <a href="#" data-nav-id="1">Góc kỹ thuật</a>
                        </li>

                        <li class="">
                            <a href="#" data-nav-id="2">Tuyển Dụng</a>
                        </li>

                        <li class="">
                            <a href="#" data-nav-id="mjReviews">Chia Sẻ</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="" data-nav-id="">Liên Hệ</a>
                </li>

            </ul>
        </div>
    </div>
    <!--nav mobie-->

    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

</div>


</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/touchSwipe.js" type="text/javascript"></script>
<script src="/js/custom.js" type='text/javascript'></script>
<script src="/js/navbar.min.js" type='text/javascript'></script>
<script src='/js/slick.js' type='text/javascript'></script>
<script src="/owl-carousel/owl.carousel.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('.sliderBanner').slick({
            dots: false,
            infinite: true,
            speed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,

        });
    });

</script>

<style>
</style>
</html>