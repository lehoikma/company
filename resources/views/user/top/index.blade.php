@extends('user.layouts.app')

@section('title', 'Trang Chủ')
@section('meta-description', '')
@section('keywords', '')
@section('meta-fb-title', '')
@section('meta-fb-type', '')
@section('meta-fb-url', '')
@section('meta-fb-image', '')
@section('meta-fb-description', '')

@section('content')

    <!--Slider-->
    <div class="slider sliderBanner">
        @foreach($sliders as $value)
        <img src="/upload/{{$value['image']}}" style="width: 100%; height: 100%"/>
        @endforeach
    </div>

    <div class="introduction">
        <div class="container">

            <div class="intro-text">
                Tập đoàn amavet là Doanh nghiệp<br>được tin cậy nhất về chuỗi giá trị <strong>“<a href="#"
                                                                                                  target="_blank">Từ Nông
                        trại tới Bàn ăn</a>”</strong>. <br>Sứ mệnh của chúng tôi là cung cấp những sản phẩm<br><strong>“<a
                            href="#">Sạch từ nguồn</a>”</strong>;
                mang lại cuộc sống hạnh phúc và<br>trọn vẹn cho khách hàng. Ở bất kỳ lĩnh vực <br> hoạt động nào, amavet
                cũng đã và đang làm hết <br>mình vì lợi ích của khách hàng, xã hội, <br>vì sự phát triển bền vững<br> của
                ngành Nông nghiệp Việt Nam.
            </div>
            <div class="menu-items">

                <div class="item item0">
                    <figure>
                        <a class="text" href='{{route('detail_thuoc_thu_y')}}' title=''>
                            <img alt="" src="styles/image/Thuoc-thu-y2.png"/>
                        </a>
                    </figure>
                </div>

                <div class="item item1">
                    <figure>
                        <a class="text" href='{{route('detail_duc_giong')}}' title=''>
                            <img alt="" src="styles/image/duc-giong.png"/>
                        </a>
                    </figure>
                </div>

                <div class="item item2">
                    <figure>
                        <a class="text" href='{{route('detail_vac_xin_oie')}}' title=''>
                            <img alt="" src="styles/image/vacxin-LMLM.png"/>
                        </a>
                    </figure>
                </div>

                <div class="item item3">
                    <figure>
                        <a class="text" href='{{route('detail_vac_xin_fmd')}}' title=''>
                            <img alt="" src="styles/image/vacxin-chung.png"/>
                        </a>
                    </figure>
                </div>

            </div>

        </div>
    </div>

    <!--product & news-->
    <div id="wrap">
        <div id="inner" class="container">
            <div id="content-sidebar-wrap">
                <div id="content-home">
                    <div id="code_widget-3" class="widget">
                        <div class="widget-wrap">
                            <h4 class="widgettitle"><span>{{trans('messages.products')}}</span></h4>
                            <div class="product-home">
                                @foreach($products as $value)
                                    <div class="item-product-home" style="width: 50%">
                                    <div class="img-product">
                                        <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}" title="{{$value['name']}}">
                                            <img width="250" height="250" src="/upload/{{$value['image']}}" class="" alt=""/>
                                        </a>
                                    </div>
                                    <p class="text-center ">
                                        <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}" title="">{{$value['name']}}</a>
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="widget caia-post-list-widget">
                        <div class="widget-wrap">
                            <h4 class="widgettitle"><span>{{trans('messages.news_amavet')}}</span></h4>
                            <div class="main-posts">
                                @foreach($newsAmavet as $value)
                                    <div class="post entry">
                                    <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" title="" class="alignleft">
                                        <img width="320" src="upload/{{$value['image']}}" style="height: 110px"/>
                                    </a>
                                    <h3 class="widget-item-title">
                                        <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}">
                                            {{$value['title']}}
                                        </a>
                                    </h3>
                                    <p class="byline post-info">Ngày đăng : <span class="date time">{{date_format($value['created_at'],"Y-m-d")}}</span>
                                    </p>
                                    <p>{{$value['description']}}</p>
                                    <div class="clear"></div>
                                </div>
                                @endforeach
                            </div>
                            <p class="more-from-category">
                                <a href="{{route('news_list_ctg',['title' => 'tin-amavet', 'id' => 1])}}">Xem thêm</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product & news-->

    <!--    video-->
    <section class="module-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 article-event">
                    <div class="box-title">
                        <h2>
                            <a class="text" href="{{route('news_list_ctg',['title' => str_slug(trans('messages.social_activities')), 'id' => 4])}}" target="_self">
                                {{trans('messages.social_activities')}}
                            </a>
                        </h2>
                    </div>
                    <article class="n-item first">
                        <div class="item-box">
                            <figure>
                                <a href="{{route('news_detail', ['title'=>str_slug($newsSocial['title']), 'id'=> $newsSocial['news_id']])}}" title="" target="_self">
                                    <img src="upload/{{$newsSocial['image']}}" class="img-responsive">
                                </a>
                            </figure>
                            <div class="n-title">
                                <a href="{{route('news_detail', ['title'=>str_slug($newsSocial['title']), 'id'=> $newsSocial['news_id']])}}" title="" class="title" target="_self">
                                    <h3>{{$newsSocial['title']}}</h3>
                                </a>
                            </div>
                            <div class="n-desc">
                                {{$newsSocial['description']}}
                                <p>
                                    <a class="more-link" href="{{route('news_detail', ['title'=>str_slug($newsSocial['title']), 'id'=> $newsSocial['news_id']])}}">
                                        Chi tiết<i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 article-gallery">

                    <div class="box-title">
                        <h2>
                            <a class="text" href="#" target="_self">
                                VIDEOS
                            </a>
                        </h2>
                    </div>

                    <div class="group-library">
                        <div class="gall-items">
                            {!! $videos['videos'] !!}
                            <div class="owl-carousel"></div>

                        </div>
                        <div class="library">

                            <div class="item">
                                <figure>
                                    <a href="#">
                                        <img src="styles/image/Images-anh_cat_bang_kt.jpg">
                                    </a>
                                </figure>
                                <a class="text album" href="#">
                                    <h4>Thư viện ảnh</h4>
                                </a>
                            </div>

                            <div class="item">
                                <figure>
                                    <a href="#">
                                        <img src="styles/image/Images-anh_cat_bang_kt.jpg">
                                    </a>
                                </figure>
                                <a class="text album" href="#">
                                    <h4>Thư viện ảnh</h4>
                                </a>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--    video-->

    <!--    brands-->
    <div class="container">
        <section class="customer-logos slider">
            <div class="slide">
                <img src="/image/Deasung.gif" style="height: 70px">
            </div>
            <div class="slide">
                <img src="/image/Innotech.png" style="height: 70px">
            </div>
            <div class="slide">
                <img src="/image/Formosa.jpg" style="height: 70px">
            </div>
            <div class="slide">
                <img src="/image/Dutchfarm.jpg" style="height: 70px">
            </div>
            <div class="slide">
                <img src="/image/Samu.gif" style="height: 70px">
            </div>
            <div class="slide">
                <img src="/image/biogne.jpg" style="height: 70px">
            </div>
            <div class="slide">
                <img src="/image/schauman.gif" style="height: 70px">
            </div>
        </section>
    </div>
    <!--    brands-->

@endsection