<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta-description')">
    <meta name="author" content="amavet">
    <meta name="keywords" content="@yield('keywords')"/>
    <!--facebook-->
    <meta property="og:title" content="@yield('meta-fb-title')">
    <meta property="og:type" content="@yield('meta-fb-type')">
    <meta property="og:url" content="@yield('meta-fb-url')">
    <meta property="og:image" content="@yield('meta-fb-image')">
    <meta property="og:site_name" content="amavet">
    <meta property="og:description" content="@yield('meta-fb-description')">

    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.default.css">

    <link rel="stylesheet" href="/css/style.css?20200630"/>
    <link rel="stylesheet" href="/css/responsive.css?20200630"/>

</head>
<body class="full-width-content home header-v1 hide-topbar-mobile" data-template="mjcms_index">

<div id="page" class="hfeed site">
<?php
$categoryProducts = \App\Models\CategoryProductsLanguages::where('languages_id', config('app.locale') == 'en' ? 2 : 1)->get();
?>
    <!--    navbar-->
    <header id="masthead" class="site-header ">
        <div class="header-main clearfix">
            <div class="container">
                <div class="row menu-row">

                    <div class="header-content col-lg-12 col-md-12 col-xs-12">
                        <!-- top bar -->
                        <div id="topbar" class="topbar col-lg-12 col-md-12 col-xs-12">

                            <div class="container">
                                <div class="row">
                                    <div class="site-logo col-lg-4 col-md-4 col-xs-4">
                                        <a href="/" class="logo">
                                            <img src="/image/logo_amavet.png" class="logo" width="250"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-xs-7">
                                        <a href="/">
                                            <img src="/image/top_banner.gif"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-xs-1">
                                        <a href="{{route('user.change-language','en')}}"><img src="/image/en.jpg"></a>&nbsp;
                                        <a href="{{route('user.change-language','vn')}}"><img src="/image/vn.jpg"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- top bar -->
                        <div class="site-menu col-lg-12 col-md-12 col-xs-12" style="border-top: 1px dotted #089346">
                            <nav id="site-navigation" class="main-nav primary-nav nav">
                                <ul class="menu">
                                    <li class="">
                                        <a href="/" class=" " title="Trang chủ" data-xf-key="1"
                                           data-nav-id="home">{{ trans('messages.home') }}</a>
                                    </li>
                                    <li class="">
                                        <a title="{{ trans('messages.introduce') }}" >{{ trans('messages.introduce') }}</a>
                                        <ul class="sub-menu">
                                            <li class="">
                                                <a href="{{route('lich_su_user')}}" style="text-transform: uppercase;">{{ trans('messages.lich_su') }}</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('su_menh_user')}}" style="text-transform: uppercase;">{{ trans('messages.su_menh') }}</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('tam_nhin_user')}}" style="text-transform: uppercase;">{{ trans('messages.tam_nhin') }}</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="{{route('list_activities')}}" title="{{ trans('messages.scope_of_activities') }}">{{ trans('messages.scope_of_activities') }}</a>
                                        <ul class="sub-menu">
                                            <li class="">
                                                <a href="{{route('detail_thuoc_thu_y')}}" style="text-transform: uppercase;">Thuốc thú y</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('detail_duc_giong')}}" style="text-transform: uppercase;">Đực giống</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('detail_vac_xin_oie')}}" style="text-transform: uppercase;">Vacxin OIE</a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('detail_vac_xin_fmd')}}" style="text-transform: uppercase;">Vacxin FMD</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class=" has-children">
                                        <a href="{{route('products_list')}}" class="dropdown-toggle " title="{{ trans('messages.products') }}">{{ trans('messages.products') }}</a>
                                        <ul class="sub-menu">
                                            @foreach($categoryProducts as $value)
                                                <li class="">
                                                    <a href="{{route('products_list_ctg', ['title' => str_slug($value['name']), 'id' => $value['category_products_id']])}}" data-nav-id="0" style="text-transform: uppercase;">{{$value['name']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class=" has-children">
                                        <a class="dropdown-toggle " title="{{ trans('messages.news') }}" >{{ trans('messages.news') }}</a>
                                        <?php
                                        $categoryNews = \App\Models\CategoriesNewsLanguage::where('languages_id', config('app.locale') == 'en' ? 2 : 1)->get();
                                        ?>
                                        <ul class="sub-menu">
                                            @foreach($categoryNews as $value)
                                                <li class="">
                                                    <a href="{{route('news_list_ctg',['title' => str_slug($value['name']), 'id' => $value['news_category_id']])}}" data-nav-id="2" style="text-transform: uppercase;">{{$value['name']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="{{route('contacts')}}" class=" " title="Liên Hệ" data-xf-key="5"
                                           data-nav-id="mjcmsContact">Đấu Giá Lợn Giống</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('contacts')}}" class=" " title="Liên Hệ" data-xf-key="5"
                                           data-nav-id="mjcmsContact">Tuyển Dụng</a>
                                    </li>

                                    <li class="">
                                        <a href="{{route('contacts')}}" class=" " title="Liên Hệ" data-xf-key="5"
                                           data-nav-id="mjcmsContact">{{ trans('messages.contact') }}</a>
                                    </li>

                                    <li id="mf-active-menu" class="mf-active-menu"></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="navbar-toggle col-xs-11">
                        <div class="col-xs-6">
                            <a href="/" class="logo">
                                <img src="/image/amavet_logo.png" class="logo" width="100"/>
                            </a>
                        </div>

                        <div class="col-xs-6" style="padding: 15% 0 0 0;">
                            <span id="mf-navbar-toggle" class="navbar-icon"> <span class="navbars-line"></span> </span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 language-custom" style="text-align: center;padding: 5px;display: none">
            <div>
                <a href="{{route('user.change-language','en')}}"><img src="/image/en.jpg"></a>&nbsp;
                <a href="{{route('user.change-language','en')}}"><img src="/image/vn.jpg"></a>
            </div>
        </div>
    </header>
    <!--  end navbar-->

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer__logo">
                <a href="#">
                    <img alt="" border="0" class="imgFooter" src="/image/amavet_logo.png">
                </a>
            </div>

            <div class="contact-footer">

                <div class="main-item-ft">
                    <div class="title title-footer">CÔNG TY CỔ PHẦN KINH DOANH THUỐC THÚ Y AMAVET</div>
                    <address><span class="add">Địa chỉ: Trụ sở: AD03 - 11 đường Anh Đào, khu đô thị Vinhomes Riverside, Phường Việt Hưng, Quận Long Biên, Thành phố Hà Nội</span>
                        <span class="add"><br>VPGD: Lô CN 06-8, KCN Ninh Hiệp, Gia Lâm, Hà Nội</span>
                        <span class="add"><br>Điện thoại: 024 3676 2933</span>
                        <span class="add"><br>Fax: 0243 2033 111</span>
                        <span class="add"><br>Email: info@amavet.com.vn</span>
                        <span class="add"><br>Website: www.amavet.com.vn & amavet.vn</span>
                    </address>
                </div>

                <div class="widget">
                    <ul class="socials">
                        <li>
                            <a target="_blank" rel="nofollow" href="https://www.facebook.com/thuocthuyamavet/" title="facebook" style="background: #0d72c7">
                                <i class="fa fa-facebook" aria-hidden="true" style="color: white"></i>
                            </a>
                        </li>

                        <li>
                            <a target="_blank" rel="nofollow" href="https://www.youtube.com/channel/UChZzgZwtK3hfCYEet1o7QvA?fbclid=IwAR3mIkpEp61yCse8z7mU68bLJYgMJPENS99wIqdOMP639lWtwwoKR7jm_qw" title="youtube" style="background: #f00">
                                <i class="fa fa-youtube" aria-hidden="true" style="color: white"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="web-views">

                <div class="main-item-ft">
                    <div class="title-footer">THỐNG KÊ LƯỢT TRUY CẬP</div>

                    <div class="amount-view">
                        <span class="title-view">Tổng số truy cập:</span>
                        <?php
                            $product = \App\Models\ProductsLanguages::sum('view');
                            $news = \App\Models\NewsLanguage::sum('view');
                        ?>
                        <span class="count-view">{{(int)$product + (int) $news}}</span>
                    </div>
                    <div class="amount-view">
                        <span class="title-view">Số lượng truy cập sản phẩm :</span>
                        <span class="count-view">{{(int)$product}}</span>
                    </div>
                    <div class="amount-view">
                        <span class="title-view">Số lượng truy cập tin tức :</span>
                        <span class="count-view">{{(int) $news}}</span>
                    </div>
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
                    <a href="/" title="Trang chủ" data-nav-id="">{{ trans('messages.home') }}</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Tin tức" data-nav-id="">{{ trans('messages.introduce') }}</a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{route('lich_su_user')}}" data-nav-id="2">{{ trans('messages.lich_su') }}</a>
                        </li>
                        <li class="">
                            <a href="{{route('su_menh_user')}}" data-nav-id="3">{{ trans('messages.su_menh') }}</a>
                        </li>
                        <li class="">
                            <a href="{{route('tam_nhin_user')}}" data-nav-id="3">{{ trans('messages.tam_nhin') }}</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="/" class=" " title="Lĩnh vực hoạt động" data-nav-id="">{{ trans('messages.scope_of_activities') }}</a>
                </li>

                <li class=" menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Sản Phẩm" data-nav-id="">{{ trans('messages.products') }}</a>
                    <ul class="sub-menu">
                        @foreach($categoryProducts as $value)
                        <li class="">
                            <a href="{{route('products_list_ctg', ['title' => str_slug($value['name']), 'id' => $value['category_products_id']])}}" data-nav-id="0">{{$value['name']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <li class=" menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Tin tức & sự kiện" data-nav-id="">{{ trans('messages.news') }}</a>
                    <ul class="sub-menu">
                        @foreach($categoryNews as $value)
                            <li class="">
                                <a href="{{route('news_list_ctg',['title' => str_slug($value['name']), 'id' => $value['news_category_id']])}}" data-nav-id="2">{{$value['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="">
                    <a href="{{route('contacts')}}" class="" data-nav-id="">{{ trans('messages.contact') }}</a>
                </li>

            </ul>
        </div>
    </div>
    <!--nav mobie-->

</div>
<div id="fb-root"></div>
<!-- footer -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '1538328022993159',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-customerchat" page_id="809449012594557"></div>

</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/touchSwipe.js" type="text/javascript"></script>
<script src="/js/navbar.min.js" type='text/javascript'></script>
<script src='/js/slick.js' type='text/javascript'></script>
<script src="/owl-carousel/owl.carousel.js"></script>
<script src="/js/custom.js" type='text/javascript'></script>
@yield('script')
</html>