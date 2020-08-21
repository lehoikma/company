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
    <div class="slider sliderBanner" style="padding-top: 15px;">
        @foreach($sliders as $value)
            <img src="/upload/{{$value['image']}}" style="width: 100%; height: 100%"/>
        @endforeach
    </div>

    <div class="introduction">
        <div class="container">
            <div class="banner-content col-lg-9 col-md-9 col-xs-9">
                <div class="banner-video">
                    {!! $introduces['videos'] !!}
                </div>
            </div>
            <div class="banner-content col-lg-3 col-md-3 col-xs-3">
                <div class="banner-text">
                    <h3 style="text-align: center;margin-top: 0px; color: #009245;font-weight: 600;font-family: 'Roboto Condensed',sans-serif;">GIỚI THIỆU AMAVET</h3>
                    <p>
                        {{$introduces['description']}}
                    </p>
                    <p style="text-align: center">
                        <a href="{{route('lich_su_user')}}" style="background: #009245;color: #fff;display: inline-block;font-size: 13px;padding: 8px;">Xem thêm</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--product & news-->
    <div id="wrap">
        <div id="inner" class="container">
            <div id="content-sidebar-wrap" style="border-top: 2px dotted #009245;padding-top: 10px;border-bottom: 2px dotted #009245;padding-bottom: 10px;">
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
                                        <p class="text-center " style="font-size: 16px; font-weight: 600">
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
                                <div class="post entry" style="border-bottom: 1px dashed #b0b0b0;padding-bottom: 15px;">
                                    <a href="{{route('news_detail', ['title'=>str_slug($firstNewsAmavet['title']), 'id'=> $firstNewsAmavet['news_id']])}}" title="" class="alignleft">
                                        <img width="320" src="upload/{{$firstNewsAmavet['image']}}"/>
                                    </a>
                                    <h3 class="widget-item-title">
                                        <a href="{{route('news_detail', ['title'=>str_slug($firstNewsAmavet['title']), 'id'=> $firstNewsAmavet['news_id']])}}" style="font-weight: 600; font-size: 18px">
                                            {{$firstNewsAmavet['title']}}
                                        </a>
                                    </h3>
                                    <p class="byline post-info">Ngày đăng : <span class="date time">{{date_format($firstNewsAmavet['created_at'],"Y-m-d")}}</span>
                                    </p>
                                    <p>{{$firstNewsAmavet['description']}}</p>
                                    <div class="clear"></div>
                                </div>
                                <ul class="more-news">
                                    @foreach($newsAmavet as $key => $value)
                                        @if($key == 0)
                                            @continue
                                        @endif
                                        <li>
                                            <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" style="font-weight: 600; font-size: 18px">{{$value['title']}}</a>
                                            <span class="time-posted">Ngày {{date_format($value['created_at'],"Y-m-d")}}</span>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            <p class="more-from-category" style="margin-top: 20px">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 article-event">
                    <div class="box-title">
                        <h2 class="title-social">
                            <a style="color: #009245" href="{{route('news_list_ctg',['title' => str_slug(trans('messages.social_activities')), 'id' => 4])}}" target="_self">
                                {{trans('messages.social_activities')}}
                            </a>
                        </h2>
                    </div>
                    @foreach($newsSocial as $value)
                        <div class="hoat-dong-xa-hoi col-lg-4">
                        <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" title="" target="_self">
                            <img src="/upload/{{$value['image']}}" class="img-responsive" style="height: 200px;width: 100%;object-fit: cover;">
                        </a>
                        <div class="item-social">
                            <div class="n-title" style="padding:0px">
                                <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" title="" class="title" target="_self">
                                    <h3 style="color: black; font-size: 18px">{{$value['title']}}</h3>
                                </a>
                            </div>
                            <div class="n-desc">
                                {{$value['description']}}
                            </div>
                            <div class="btn-seeMore">
                                <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}">Xem thêm</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--    video-->

    <section class="module-event">
        <div class="container">
            <div class="col-md-12" style="    border-top: 2px dotted #009245;padding-top: 10px;"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 article-event">
                    <div class="box-title col-lg-4">
                        <div class="box-title">
                            <h2 class="title-social">
                                <a style="color: #009245" href="{{route('videos')}}" target="_self">Video</a>
                            </h2>
                        </div>

                        <div class="gall-video">
                            {!! $videos['videos'] !!}
                            <div class="owl-carousel"></div>
                        </div>
                    </div>

                    <div class="box-title col-lg-4">

                        <div class="box-title">
                            <h2 class="title-social">
                                <a style="color: #009245" href="{{route('list_image')}}" target="_self">Hình ảnh</a>
                            </h2>
                        </div>

                        <div class="item">
                            <figure>
                                <a href="{{route('detail_image', ['title' => str_slug($images[0]['name']), 'id' => $images[0]['id']])}}">
                                    <img src="/image/hinh_anh_amave2t.jpg">
                                </a>
                            </figure>
                        </div>

                    </div>

                    <div class="box-title col-lg-4">
                        <div class="box-title">
                            <h2 class="title-social">
                                <a style="color: #009245" href="#" target="_self">Map</a>
                            </h2>
                        </div>

                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0171560965646!2d105.94787361533261!3d21.071976991676507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a815cd7ded85%3A0x31dc1fe90866ee85!2sAmavet%20J.S.C!5e0!3m2!1svi!2s!4v1597029004405!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--    brands-->
    <div class="container">
        <section class="customer-logos slider">
            <div class="slide">
                <img src="/image/biogenesis_bago_logo.png" >
            </div>
            <div class="slide">
                <img src="/image/dae_sung_logo.png" >
            </div>
            <div class="slide">
                <img src="/image/dutch_farmlogo.png" >
            </div>
            <div class="slide">
                <img src="/image/Formosa_bio.png" >
            </div>
            <div class="slide">
                <img src="/image/innotech_logo.png" >
            </div>
            <div class="slide">
                <img src="/image/samu_logo.png" >
            </div>
            <div class="slide">
                <img src="/image/schaumann_logo.png" >
            </div>
        </section>
    </div>
    <!--    brands-->

@endsection