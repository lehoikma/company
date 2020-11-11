@extends('user.layouts.app')

@section('title', 'Đấu Giá')
@section('meta-description', '')
@section('keywords', '')
@section('meta-fb-title', '')
@section('meta-fb-type', '')
@section('meta-fb-url', '')
@section('meta-fb-image', '')
@section('meta-fb-description', '')
@section('meta')
    <meta http-equiv="refresh" content="300">
@endsection

@section('content')
    <!-- link to magicslideshow.css file -->
    <link rel="stylesheet" type="text/css" href="http://www.unipresscorp.com/magicslideshow-commercial3/magicslideshow/magicslideshow.css" media="screen"/>
    <!-- link to magicslideshow.js file -->
    <script src="http://www.unipresscorp.com/magicslideshow-commercial3/magicslideshow/magicslideshow.js" type="text/javascript"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-12 flash-message" style="padding-top: 20px">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div> <!-- end .flash-message -->

            <div class="col-md-12 navigate" style="margin: 10px 0px">
                <ol itemscope="">
                    <li itemprop="itemListElement" itemscope="">
                        <a href="/" class="home" itemprop="item" style="color: black">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&gt;&nbsp;</span>
                        </a>
                    </li>
                    <li itemprop="itemListElement">
                        <a style="color: black">
                            <span itemprop="name">{{trans('messages.dau_gia_lon_giong')}}</span>
                        </a>
                    </li>
                </ol>
            </div>
            @if(!empty($detail))
                <div class="col-sm-6">
                    <div class="MagicSlideshow" data-options="width: 600px; height: 281px; selectors: bottom; selectors-style: thumbnails; selectors-size: 60px;">
                        @empty(!$detail['image1'])
                        <img style="padding: 10px;" src="/upload/{{$detail['image1']}}"/>
                        @endempty
                         @empty(!$detail['image2'])
                        <img style="padding: 10px;" src="/upload/{{$detail['image2']}}"/>
                        @endempty
                         @empty(!$detail['image3'])
                        <img style="padding: 10px;" src="/upload/{{$detail['image3']}}"/>
                        @endempty
                         @empty(!$detail['image4'])
                        <img style="padding: 10px;" src="/upload/{{$detail['image4']}}"/>
                        @endempty
                         @empty(!$detail['image5'])
                        <img style="padding: 10px;" src="/upload/{{$detail['image5']}}"/>
                        @endempty
                         @empty(!$detail['image6'])
                        <img style="padding: 10px;" src="/upload/{{$detail['image6']}}"/>
                        @endempty
                    </div>
                    <h4>GIÁ KHỞI ĐIỂM : <strong style="color: red">{{number_format($detail['price'])}} VNĐ</strong></h4>
                    <h4 style="padding-top: 10px">THÔNG TIN CHI TIẾT : <strong>{{$detail['title']}}</strong></h4>
                    {!! $detail['content'] !!}
                </div>
                <div class="col-sm-6">
                    @if(!empty($booking))
                        <div class="row col-sm-12">
                            <strong>Danh Sách Đấu Giá 1</strong>
                            <div style="margin-top: 10px;">
                                @foreach($booking as $key=>$value)
                                    <p style="font-size: 16px"><strong>{{$key+1}} . </strong>{{$value['name']}} - {{$value['tinh']}} đấu giá : <strong>{{number_format($value['price'])}}</strong> VNĐ vào lúc {{$value['created_at']}}</p>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="row col-sm-12">
                            <p><strong>Thời gian bắt đầu đấu giá : </strong><span>{{date_format(new DateTime($detail['start_date']), 'd-m-Y H:i')}}</span></p><br>
                            <p><strong>Thời gian kết thúc đấu giá : </strong><span>{{date_format(new DateTime($detail['end_date']), 'd-m-Y H:i')}}</span></p>
                        </div>
                    @endif
                </div>
            @endif
        </div>

        <div class="row">
            <div class="box-title">
                <h5 class="title-social" style="font-size: 20px; text-align: left; border-top: 1px dotted #009244;">
                    <a style="color: #009245" href="#" target="_self">
                        Sản Phẩm Đã Đấu Giá
                    </a>
                </h5>
            </div>
            <div class="gallery-listing">
                <div id="gall-list">
                    @foreach($daDauGia as $value)
                        <article class="col-lg-3 col-md-3 col-sm-3 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 213.514px;">
                                <a href="{{route('dau_gia_detail', $value['id'])}}">
                                    <img src="/upload/{{$value['image1']}}"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('dau_gia_detail', $value['id'])}}" target="_self">
                                    <p>{{$value['title']}}</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            adaptiveHeight: true,
            infinite: false,
            useTransform: true,
            speed: 400,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });

        $('.slider-nav')
            .on('init', function(event, slick) {
                $('.slider-nav .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
                slidesToShow: 7,
                slidesToScroll: 7,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                    }
                }, {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }]
            });

        $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
        });

        $('.slider-nav').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');

            $('.slider-single').slick('slickGoTo', goToSingleSlide);
        });
    </script>
@endsection