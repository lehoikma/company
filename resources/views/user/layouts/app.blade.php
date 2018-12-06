<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</head>
<body style="background: #f3f3f3">
<!-- header -->
<div class="headers">
    <div class="container" style="padding: 0px">
        <!-- header -->
        <div class="row col-md-12 lg header-all" style="margin: 0px; padding: 0px">
            <div class="col-md-3 col-xs-12 header-logo">
                <img src="/image/logo.PNG" height="150px">
            </div>
            <div class="col-md-9 col-xs-12 banner-top">
                <div class="col-md-12 header-language">
                    <a href="{{route('user.change-language','en')}}"><img src="/image/en.jpg"></a>&nbsp;
                    <a href="{{route('user.change-language','vn')}}"><img src="/image/vn.jpg"></a>
                </div>
            </div>
        </div>

        <div class="custom-container" style="padding-top: 5px">
            <nav class="main-nav" role="navigation" style="background: #ee9600;">

                <!-- Mobile menu toggle button (hamburger/x icon) -->
                <input id="main-menu-state" type="checkbox">
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                </label>
                <!-- Sample menu definition -->
                <ul id="main-menu" class="sm sm-blue col-md-9" style="border-radius: 0;background: none;padding-left: 0px;padding-right: 0px;">
                    <li>
                        <a class="menu-active" href="{{route('user_top')}}">{{ trans('messages.home') }}</a>
                    </li>
                    <li>
                        <a class="menu-active" href="{{route('introduce')}}">{{ trans('messages.introduce') }}</a>
                    </li>
                    <li>
                        <a class="menu-active" href="{{route('news_list')}}">{{ trans('messages.news') }}</a>
                    </li>
                    <li>
                        <a class="menu-active" href="{{route('products_list')}}">{{ trans('messages.products') }}</a>
                    </li>
                    <li>
                        <a class="menu-active" href="{{route('videos')}}">Videos</a>
                    </li>
                    <li>
                        <a class="menu-active" href="{{route('list_image')}}">{{trans('messages.image')}}</a>
                    </li>
                    <li>
                        <a class="menu-active" href="{{route('contacts')}}">{{ trans('messages.contact') }}</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" style="padding-top: 5px" method="get" action="{{route('search')}}">
                    <input name="key" class="form-control1 form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 175px;">
                    <button class="btn-outline-secondary1 btn btn-outline-secondary my-2 my-sm-0 " type="submit">Search</button>
                </form>
            </nav>

        </div>

        <!-- header -->

        <!-- slide -->
        @yield('slide')
        <!-- slide -->
    </div>
</div>
</div>
<!-- header -->

<br>
<!-- contents -->
<div class="contents">
    <div class="container pc-container">
        <div class="row">
            <div class="col-md-3 mobiess">
                <div style="background: #BB0000;">

                    <div class="right">
                        <h3>
                            <span>{{trans('messages.products')}}</span>
                        </h3>
                        <?php
                            $catePrd = \App\Models\CategoryProductsLanguages::User()->get();

                        ?>
                        @foreach($catePrd as $value)
                            <a href="{{route('products_list_ctg', ['title' => str_slug($value['name']), 'id' => $value['id']])}}"><li>{{$value['name']}}</li>
                            </a>
                        @endforeach
                    </div>
                    <div class="right">
                        <h3>
                            <span>{{trans('messages.news')}}</span>
                        </h3>
                        <?php
                            $cateNews = \App\Models\CategoriesNewsLanguage::User()->get();
                        ?>
                        @foreach($cateNews as $value)
                            <a href="{{route('news_list_ctg', ['title' => str_slug($value['name']), 'id' => $value['id']])}}"><li>{{$value['name']}}</li></a>
                        @endforeach
                    </div>
                    <div class="right">
                        <h3>
                            <span>{{trans('messages.link-page')}}</span>
                        </h3>
                        <a href=""><li>Blog Laido</li></a>
                        <a href=""><li>Lý Số Việt Nam</li></a>
                        <a href=""><li>Lý Học Phương Đông</li></a>
                        <a href=""><li>Phần mềm Phù Đổng</li></a>
                        <a href=""><li>Việt lý số</li></a>
                        <a href=""><li>Kiến trúc phong thủy Việt Linh</li></a>
                        <a href=""><li>Ngũ Hành</li></a>
                        <a href=""><li>Góc Phong Thủy</li></a>
                        <a href=""><li>Blog SEOer Nghiệp dư</li></a>
                    </div>
                    <div class="right" style="height: 671px;">

                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sx-12" style="border-top: 1px solid #d4d4d4; padding-top: 10px">
                    @yield('content')
            </div>
            <div class="col-md-2 mobiess">
                <div class="tin">
                    <div class="tin-1">
                        <div class="tin-11">
                            <h3>{{trans('messages.news-new')}}</h3>
                            <?php
                                $news = \App\Models\NewsLanguage::User()->limit(5)->orderBy('updated_at', 'desc')->get();
                            ?>
                            @foreach($news as $value)
                                <li style="font-size: 14px"><a href="{{route('news_detail',['title' => str_slug($value['title']), 'id' => $value['id']])}}">{{($value['title'])}}</a></li>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tin">
                    <div class="tin-1">
                        <div class="tin-11">
                            <h3>{{trans('messages.products-new')}}</h3>
                            <?php
                            $catePrd1 = \App\Models\ProductsLanguages::User()->orderBy('updated_at', 'desc')->limit(2)->get();
                            ?>
                            @foreach($catePrd1 as $value)
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom: 1px dashed;">
                                <tbody>
                                <tr align="center">
                                    <td>
                                        <span>
                                            {{mb_strtoupper($value['name'], 'UTF-8')}}
                                        </span>
                                        <br>
                                        <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                                            <img src="/upload/{{$value['image']}}" style="width: 90px; height: 90px">
                                        </a>
                                        <br>
                                        <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">{{$value['price'] ? $value['price']. ' VNĐ' : 'Liên Hệ'}}</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contents -->
</div>
<!-- footer -->
<div class="footers">
    <div class="container" style="background: #ee9600; ">
        <div class="row">
            <div class="col-md-3 logo-bottom" style="    padding-top: 15px;">
                <img src="/image/logo.PNG" height="150px">
            </div>
            <div class="fter col-md-6 col-xs-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                </ul>
                <p style="color: red;margin-left: 15px;font-size: 14px;">
                    Địa chỉ: Số 11 Ngõ Trạm, Hoàn Kiếm, Hà Nội<br>
                    Website: vanxuanphongthuy.vn - vanxuanphongthuy.com - phongthuyvanxuan.net<br>
                    Tel: 0943.887.956 - 0903.210.818<br>
                    Facebook: phongthuyvanxuan & vanxuanphongthuy<br>
                    Copyright &copy; 2018 Agriplus.vn
                </p>
            </div>
            <div class=" fter col-md-3 col-xs-12" style="margin-bottom: 20px">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fanpage facebook</a>
                    </li>
                </ul>
                <div style="margin-left: 15px">
                    <fb:like expr:href="data:post.canonicalUrl" layout="button_count" send="true" show_faces="false" font="arial" action="like" colorscheme="light" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;color_scheme=light&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Flinkstore.vn%2Fson-3ce-mood-recipe-matte-lip-color-117-chicful-sp1068&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f3a23925ac3c048" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiKWhU6BAGf7.js%3Fversion%3D42%23cb%3Df38fbd9b0c64cc%26domain%3Dlinkstore.vn%26origin%3Dhttp%253A%252F%252Flinkstore.vn%252Ff1caab3ad2badf4%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Flinkstore.vn%2Fson-3ce-mood-recipe-matte-lip-color-117-chicful-sp1068&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=true&amp;show_faces=false" style="border: none; visibility: visible; width: 122px; height: 20px;" class=""></iframe></span></fb:like>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="fb-root"></div>
<!-- footer -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '1986711764923054',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };
  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-customerchat" page_id="248912325821252"></div>

</body>
</html>


<script language="javascript">
    $('#myCarousel').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });

    $('#myCarousel').carousel({
        interval: 4000
    });


    $(document).ready(function() {
        /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function(event){
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);
            content.html($(this).html());
            $(".modal-profile").modal({show:true});
        });

    });

    $(function() {
      var href = window.location.href;
      $('a.menu-active').each(function(e,i) {
        if (href.indexOf($(this).attr('href')) >= 0) {
          $('li a.active1').removeClass('active1');
          $(this).addClass('active1');
        }
      });
    });

    $(function() {
      $('#main-menu').smartmenus({
        subMenusSubOffsetX: 1,
        subMenusSubOffsetY: -8
      });
    });
</script>
@yield('script')

