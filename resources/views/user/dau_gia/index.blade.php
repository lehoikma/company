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
                        <a class="home" itemprop="item" style="color: black">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&gt;&nbsp;</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement">
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3" style="color: black">
                            <span itemprop="name">{{trans('messages.dau_gia_lon_giong')}}<span></span></span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
            @if(!empty($dangDauGia))
                <div class="col-sm-6">
                    <div class="MagicSlideshow" data-options="width: 600px; height: 281px; selectors: bottom; selectors-style: thumbnails; selectors-size: 60px;">
                        <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_4_.jpg"/>
                        <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_1_.jpg"/>
                        <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_2_.jpg"/>
                        <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_3_.jpg"/>
                    </div>
                    <h4>GIÁ KHỞI ĐIỂM : <strong style="color: red">200.000.000 VNĐ</strong></h4>
                    <h4 style="padding-top: 10px">THÔNG TIN CHI TIẾT : <strong>{{$dangDauGia['title']}}</strong></h4>
                    {!! $dangDauGia['content'] !!}
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <strong>Thời gian còn lại</strong>
                        <h3 id="demo" style="background: #fff7d2;padding: 10px 0px;color: red; text-align: center"></h3>
                    </div>
                    <div class="col-sm-12">
                        <strong>Danh Sách Đấu Giá</strong>
                        @if(!empty($booking))
                            <div style="margin-top: 10px;">
                                @foreach($booking as $value)
                                    <p style="font-size: 16px">{{$value['name']}} - {{$value['tinh']}} đấu giá : <strong>{{number_format($value['price'])}}</strong> VNĐ vào lúc {{$value['created_at']}}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12">
                        <div style="text-align: center; padding-top: 15px">
                            <button data-toggle="modal" data-target="#exampleModal" data-whatever="49" data-project-id="46" type="button" class="btn btn-danger" style="margin-top: 20px;padding: 10px;border-radius: 5px;font-size: 15px;margin-bottom: 20px;">Nhấn vào để đấu giá</button>

                        </div>
                    </div>
                </div>
                <input type="hidden" id='startDate' name="startDate" value="{{strtotime($dangDauGia['start_date'])}}">
                <input type="hidden" id='endDate' name="endDate" value="{{$dangDauGia['end_date']}}">
            @endif
        </div>
        @if(!empty($sapDauGia))
            <div class="row">
                <div class="box-title">
                    <h5 class="title-social" style="font-size: 20px; text-align: left; border-top: 1px dotted #009244;">
                        <a style="color: #009245" href="#" target="_self">
                            Sản Phẩm Sắp Đấu Giá
                        </a>
                    </h5>
                </div>
                <div class="gallery-listing">
                    <div class="row" id="gall-list">
                        <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gall-item">
                            <div class="item-box">
                                <figure style="width: 100%; height: 213.514px;">
                                    <a href="">
                                        <img src="/upload/{{$sapDauGia['image1']}}"></a>
                                </figure>
                                <div class="gall-content">
                                    <a class="gall-title" href="" target="_self">
                                        <p>{{$sapDauGia['title']}}</p>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        @endif
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
                                <a href="#">
                                    <img src="/upload/{{$value['image1']}}"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="#" target="_self">
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Nhập thông tin đấu giá</h4>
                </div>
                <form action="{{route('luu_thong_tin_dau_gia')}}" method="post" id="myForm">
                <div class="modal-body">
                        {{csrf_field()}}
                        @if(!empty($dangDauGia['id']))
                            <input type="hidden" name="id" value="{{$dangDauGia['id']}}">
                        @endif
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Tên: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Số điện thoại: <span style="color: red">(*)</span></label>
                            <input type="number" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email: <span style="color: red">(*)</span></label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Tỉnh: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" name="tinh" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Huyện: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" name="huyen" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Xã: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" name="xa" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Số tiền: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <div class="g-recaptcha" data-sitekey="6Lcvb90ZAAAAANRSUJGShgESPQ7EeHeIVL44sP3Z" data-callback="correctCaptcha"></div>
{{--                                site key : 6Lcvb90ZAAAAANRSUJGShgESPQ7EeHeIVL44sP3Z--}}
{{--                                secret key: 6Lcvb90ZAAAAAJpbqpwf1ZEDsF8IpB7CWHjl7tDn--}}
                                @if ($errors->has('g-recaptcha-response'))
                                    <p class="help-block text-left" style="color: red">{{ $errors->first('g-recaptcha-response') }}</p>
                                @endif
                            </div>
                        </div>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button id="btn-sbmit" type="submit" class="btn btn-primary">Gửi đấu giá</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("form").each(function() {
                $('#btn-sbmit').prop('disabled', true);
            });
        });
        function correctCaptcha() {
            $("form").each(function() {
                $('#btn-sbmit').prop('disabled', false);
            });
        }

        $('#exampleModal').on('show.bs.modal', function (e) {
            $(this).find('#group_id').attr('value', $(e.relatedTarget).data('whatever'));
            $(this).find('#project_id').attr('value', $(e.relatedTarget).data('project-id'));
        })
        // Set the date we're counting down to
        var countDownDate = new Date($('#endDate').val()).getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML =  days + " ngày " + hours + " giờ " + minutes + " phút " + seconds + " giây ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                location.reload(true);
            }
        }, 1000);

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