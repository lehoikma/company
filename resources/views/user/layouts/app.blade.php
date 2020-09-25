<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="/image/logo_amavet.png" rel="shortcut icon" />

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
$categoryProducts = \App\Models\CategoryDanhMucSanPhamCap1Languages::where('languages_id', config('app.locale') == 'en' ? 2 : 1)->get();

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
                                    <div class="site-logo col-lg-3 col-md-3 col-xs-3">
                                        <a href="/" class="logo">
                                            <img src="/image/logo_amavet.png" class="logo" width="250"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-xs-8">
                                        <a href="/">
                                            <img src="/image/amavet_top.gif" style="border-radius: 10px;"/>
                                        </a>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-xs-1" style="text-align: right; padding-right: 5px">
                                        <a href="{{route('user.change-language','en')}}"><img src="/image/en.jpg"></a>&nbsp;
                                        <a href="{{route('user.change-language','vn')}}"><img src="/image/vn.jpg"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-menu col-lg-12 col-md-12 col-xs-12" style="border-top: 1px dotted #089346; padding-left: 0px;background: #089346;">
                <div class="container">
                <nav id="site-navigation" class="main-nav primary-nav nav">
                    <ul class="menu">
                        <li class="">
                            <a class="menu-active" href="/" class=" " title="Trang chủ" data-xf-key="1"
                               data-nav-id="home">{{ trans('messages.home') }}</a>
                        </li>
                        <li class="">
                            <a class="menu-active" href="{{route('lich_su_user')}}" title="{{ trans('messages.introduce') }}" >{{ trans('messages.introduce') }}</a>
                        </li>

                        <li class=" has-children">
                            <a class="menu-active" href="{{route('products_list')}}" class="dropdown-toggle " title="{{ trans('messages.products') }}">{{ trans('messages.products') }}</a>
                            <ul class="sub-menu">
                                @foreach($categoryProducts as $value)
                                    <?php
                                    $subMenuData = \App\Models\CategoryProductsLanguages::where('categories_cap_1', $value['categories_cap_1_id'])->where('languages_id', config('app.locale') == 'en' ? 2 : 1)->get();
                                    ?>
                                    <li class="">
                                        <a href="{{route('list_category_danh_muc_2', ['title' => str_slug($value['name']), 'id' => $value['categories_cap_1_id']])}}" data-nav-id="0" style="text-transform: uppercase;">{{$value['name']}}</a>
                                        @if(!empty($subMenuData))
                                            <ul class="sub-menu" style="left: 101%">
                                                @foreach($subMenuData as $subMenu)
                                                    <li class="">
                                                        <a href="{{route('products_list_ctg', ['title' => str_slug($subMenu['name']), 'id' => $subMenu['category_products_id']])}}" data-nav-id="0" style="text-transform: uppercase; font-size: 14px">{{$subMenu['name']}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class=" has-children">
                            <a class="dropdown-toggle menu-active" title="{{ trans('messages.news') }}" href="{{route('news_list')}}">{{ trans('messages.news') }}</a>
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
                            <a href="{{route('contacts')}}" class="menu-active" data-xf-key="5"
                               data-nav-id="mjcmsContact">{{ trans('messages.dau_gia_lon_giong') }}</a>
                        </li>
                        <li class="">
                            <a href="#" class=" " title="Liên Hệ" data-xf-key="5"
                               data-nav-id="mjcmsContact">Tuyển Dụng</a>
                        </li>

                        <li class="">
                            <a class="menu-active" href="{{route('list_image')}}" data-xf-key="5"
                               data-nav-id="mjcmsContact">{{ trans('messages.image') }}</a>
                        </li>

                        <li class="">
                            <a class="menu-active" href="{{route('videos')}}" data-xf-key="5"
                               data-nav-id="mjcmsContact">Videos</a>
                        </li>

                        <li class="">
                            <a class="menu-active" href="{{route('contacts')}}" data-xf-key="5"
                               data-nav-id="mjcmsContact">{{ trans('messages.contact') }}</a>
                        </li>

                        <li id="mf-active-menu" class="mf-active-menu"></li>
                    </ul>
                </nav>
                </div>
            </div>
            <div class="container">
                <div class="row menu-row">
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
                <a href="{{route('user.change-language','vn')}}"><img src="/image/vn.jpg"></a>
            </div>
        </div>
    </header>
    <!--  end navbar-->

    @yield('content')

    <footer class="footer" style="padding-bottom: 20px">
        <div class="container">
            <div class="contact-footer">

                <div class="main-item-ft">
                    <div class="title title-footer">CÔNG TY CỔ PHẦN KINH DOANH THUỐC THÚ Y AMAVET</div>
                    <address><span class="add">Địa chỉ: Trụ sở: AD03 - 11 đường Anh Đào, khu đô thị Vinhomes Riverside, Phường Việt Hưng, Quận Long Biên, Thành phố Hà Nội</span>
                        <span class="add"><br>VPGD: Lô CN 06-8, KCN Ninh Hiệp, Gia Lâm, Hà Nội</span>
                        <span class="add"><br>Email: info@amavet.com.vn</span>
                        <span class="add"><br>Website: www.amavet.com.vn & amavet.vn</span>
                    </address>
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
            <div class="web-views">
                <div class="main-item-ft">
                    <div class="title-footer">LIÊN HỆ</div>

                    <div class="amount-view">
                        <span class="title-view">Điện thoại : 024 3676 2933</span>
                    </div>
                    <div class="amount-view">
                        <span class="title-view">Fax : 0243 2033 111</span>
                    </div>
                    <div class="widget">
                        <div class="widget widget__social">
                            <a href="https://www.facebook.com/thuocthuyamavet/" rel="nofollow" class="builtin-icons facebook-hover" target="_blank" alt="Follow Us on facebook" title="Follow Us on facebook">
                                <svg class="icon" aria-hidden="true" style="height: 2em;width: 2em;fill: #ebebeb;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#amavet-fb">
                                        <svg id="amavet-fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M192.191 92.743v60.485h-63.638v96.181h63.637v256.135h97.069v-256.135h84.168s6.674-51.322 9.885-96.508h-93.666v-42.921c0-8.807 11.565-20.661 23.01-20.661h71.791v-95.719h-83.57c-111.317 0-108.686 86.262-108.686 99.142z"></path></svg>
                                    </use>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/channel/UChZzgZwtK3hfCYEet1o7QvA" rel="nofollow" class="builtin-icons youtube-hover" target="_blank" alt="Follow Us on youtube" title="Follow Us on youtube">
                                <svg class="icon" aria-hidden="true"  style="height: 2em;width: 2em;fill: #ebebeb;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#amavet-ytb">
                                        <svg id="amavet-ytb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M146.112 194.063h31.18l.036-107.855 36.879-92.4h-34.136l-19.588 68.63-19.881-68.82h-33.762l39.219 92.627zm257.78 157.717c0-7.255-5.968-13.18-13.282-13.18h-1.769c-7.285 0-13.253 5.925-13.253 13.18l-.118 16.326h28.103l.32-16.326zm-192.18-214.16c0 12.324.594 21.577 1.851 27.736 1.236 6.151 3.284 11.439 6.202 15.755 2.897 4.323 6.948 7.599 12.2 9.75 5.237 2.187 11.578 3.218 19.119 3.218 6.744 0 12.727-1.236 17.95-3.76 5.164-2.508 9.42-6.443 12.726-11.695 3.335-5.325 5.514-10.986 6.51-17.094 1.009-6.093 1.536-15.688 1.536-28.738v-35.562c0-10.306-.557-17.956-1.654-23.025-1.082-5.002-3.115-9.889-6.113-14.643-2.956-4.74-7.198-8.587-12.698-11.534-5.471-2.948-12.04-4.448-19.682-4.448-9.099 0-16.574 2.312-22.418 6.92-5.865 4.587-9.918 10.679-12.156 18.25-2.231 7.599-3.373 18.138-3.373 31.64v37.23zm25.9-56.232c0-7.951 5.932-14.453 13.151-14.453 7.227 0 13.107 6.502 13.107 14.453v74.861c0 7.965-5.88 14.475-13.107 14.475-7.219 0-13.151-6.51-13.151-14.475v-74.861zm60.562 251.726c-7.139 0-12.976 4.798-12.976 10.664v79.374c0 5.866 5.836 10.635 12.976 10.635 7.137 0 12.99-4.769 12.99-10.635v-79.374c0-5.866-5.851-10.664-12.99-10.664zm13.75-153.306c1.536 3.73 3.921 6.743 7.139 9.018 3.188 2.238 7.269 3.372 12.142 3.372 4.286 0 8.06-1.156 11.366-3.54 3.291-2.377 6.072-5.917 8.323-10.649l-.557 11.644h33.06v-140.623h-26.039v109.443c0 5.931-4.871 10.773-10.839 10.773-5.94 0-10.825-4.842-10.825-10.773v-109.443h-27.193v94.844c0 12.083.219 20.135.584 24.224.381 4.053 1.317 7.951 2.838 11.711zm87.595 43.066h-287.031c-38.406 0-69.814 29.652-69.814 65.857v150.994c0 36.221 31.407 65.858 69.814 65.858h287.031c38.385 0 69.808-29.637 69.808-65.858v-150.994c0-36.205-31.422-65.857-69.808-65.857zm-297.577 233.236v-159.494l-29.609-.087v-23.172l94.857.161v23.551h-35.591l.023 159.041h-29.68zm136.35-.029l-23.829-.031.066-17.553c-6.407 13.751-31.977 24.824-45.333 15.185-7.154-5.135-6.898-14.13-7.63-21.856-.387-4.373-.065-13.999-.101-26.902l-.088-84.17h29.512l.117 85.531c0 11.659-.629 18.461.081 20.714 4.243 12.858 15.09 5.881 17.496-.717.775-2.164.029-8.308.029-20.596v-84.932h29.681v135.327zm44.215-12.801l-2.223 11.294-24.372.365.147-181.406 29.636-.06-.103 52.575c27.356-21.81 47.512-5.661 47.542 21.269l.06 70.714c.043 34.244-19.544 53.817-50.688 25.248zm68.578-34.537v-42.129c0-12.656 1.242-22.617 3.774-29.901 2.5-7.285 6.817-12.713 12.447-16.764 17.978-12.96 53.526-8.938 57.169 16.399 1.156 8.017 1.536 22.015 1.536 36.031v19.163h-50.952v32.635c0 6.656 5.486 12.053 12.173 12.053h4.358c6.657 0 12.144-5.397 12.144-12.053v-12.404c.014-1.098.043-2.106.058-2.999l22.25-.117c10.151 60.269-74.956 70.173-74.956.088z"></path></svg>
                                    </use>
                                </svg></a>
                        </div>
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
                    <a href="/" title="Trang chủ" data-nav-id="" style="text-transform: uppercase;">{{ trans('messages.home') }}</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{route('lich_su_user')}}" class="dropdown-toggle " title="Tin tức" data-nav-id="" style="text-transform: uppercase;">{{ trans('messages.introduce') }}</a>
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="">--}}
{{--                            <a href="{{route('lich_su_user')}}" data-nav-id="2">{{ trans('messages.lich_su') }}</a>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <a href="{{route('su_menh_user')}}" data-nav-id="3">{{ trans('messages.su_menh') }}</a>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <a href="{{route('tam_nhin_user')}}" data-nav-id="3">{{ trans('messages.tam_nhin') }}</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </li>

{{--                <li class="">--}}
{{--                    <a href="/" class=" " title="Lĩnh vực hoạt động" data-nav-id="">{{ trans('messages.scope_of_activities') }}</a>--}}
{{--                </li>--}}

                <li class=" menu-item-has-children">
                    <a href="{{route('products_list')}}" class="dropdown-toggle " title="Sản Phẩm" data-nav-id="" style="text-transform: uppercase;">{{ trans('messages.products') }}</a>
                    <ul class="sub-menu">
                        @foreach($categoryProducts as $value)
                            <?php
                            $subMenuData1 = \App\Models\CategoryProductsLanguages::where('categories_cap_1', $value['categories_cap_1_id'])->where('languages_id', config('app.locale') == 'en' ? 2 : 1)->get();
                            ?>


                                <li class=" menu-item-has-children">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug($value['name']), 'id' => $value['categories_cap_1_id']])}}" class="dropdown-toggle " data-nav-id="0" style="text-transform: uppercase;">{{$value['name']}}</a>
                                @if(!empty($subMenuData1))
                                    <ul class="sub-menu" style="left: 101%;">
                                        @foreach($subMenuData1 as $subMenu)
                                            <li class="">
                                                <a href="{{route('products_list_ctg', ['title' => str_slug($subMenu['name']), 'id' => $subMenu['category_products_id']])}}" data-nav-id="0" style="text-transform: uppercase;font-size: 14px">{{$subMenu['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class=" menu-item-has-children">
                    <a href="#" class="dropdown-toggle " title="Tin tức & sự kiện" data-nav-id="" style="text-transform: uppercase;">{{ trans('messages.news') }}</a>
                    <ul class="sub-menu">
                        @foreach($categoryNews as $value)
                            <li class="">
                                <a href="{{route('news_list_ctg',['title' => str_slug($value['name']), 'id' => $value['news_category_id']])}}" data-nav-id="2" style="text-transform: uppercase;">{{$value['name']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="" data-nav-id="mjcmsContact" style="text-transform: uppercase;">{{ trans('messages.dau_gia_lon_giong') }}</a>
                </li>
{{--                <li class="">--}}
{{--                    <a href="#" class=" " title="Liên Hệ" data-xf-key="5"--}}
{{--                       data-nav-id="mjcmsContact">Tuyển Dụng</a>--}}
{{--                </li>--}}

                <li class="">
                    <a href="{{route('list_image')}}" class=" " title="Liên Hệ" data-xf-key="5"
                       data-nav-id="mjcmsContact" style="text-transform: uppercase;">{{ trans('messages.image') }}</a>
                </li>

                <li class="">
                    <a href="{{route('videos')}}" class=" " title="Liên Hệ" data-xf-key="5"
                       data-nav-id="mjcmsContact" style="text-transform: uppercase;">Videos</a>
                </li>

                <li class="">
                    <a href="{{route('contacts')}}" class=" " title="Liên Hệ" data-xf-key="5"
                       data-nav-id="mjcmsContact" style="text-transform: uppercase;">{{ trans('messages.contact') }}</a>
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
<script>
    $(function() {
        var href = window.location.href;
        $('a.menu-active').each(function(e,i) {
            if (href.indexOf($(this).attr('href')) >= 0) {
                $('a.active').removeClass('active');
                $(this).addClass('active');
            }
        });
    });
</script>
@yield('script')
</html>