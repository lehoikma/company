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
            <div class="col-sm-6">
                <div class="MagicSlideshow" data-options="width: 600px; height: 281px; selectors: bottom; selectors-style: thumbnails; selectors-size: 60px;">
                    <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_4_.jpg"/>
                    <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_1_.jpg"/>
                    <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_2_.jpg"/>
                    <img style="padding: 10px;" src="https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_3_.jpg"/>
                </div>
                <h4>GIÁ KHỞI ĐIỂM : <strong style="color: red">200.000.000 VNĐ</strong></h4>
                <h4 style="padding-top: 10px">THÔNG TIN CHI TIẾT : <strong>{{$dataTime['title']}}</strong></h4>
                {!! $dataTime['content'] !!}
            </div>
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <strong>Thời gian còn lại</strong>
                    <h3 id="demo" style="background: #fff7d2;padding: 10px 0px;color: red; text-align: center"></h3>
                </div>
                <div class="col-sm-12">
                    <strong>Danh Sách Đấu Giá</strong>
                    <div style="margin-top: 10px;">
                        <p>Nguyễn Văn A - QB đấu giá : <strong>20.000.000</strong> vào lúc 11:00:22 (20-11-2020)</p>
                        <p>Nguyễn Văn A - QB đấu giá : <strong>20.000.000</strong> vào lúc 11:00:22 (20-11-2020)</p>
                        <p>Nguyễn Văn A - QB đấu giá : <strong>20.000.000</strong> vào lúc 11:00:22 (20-11-2020)</p>
                        <p>Nguyễn Văn A - QB đấu giá : <strong>20.000.000</strong> vào lúc 11:00:22 (20-11-2020)</p>
                        <p>Nguyễn Văn A - QB đấu giá : <strong>20.000.000</strong> vào lúc 11:00:22 (20-11-2020)</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div style="text-align: center; padding-top: 15px">
                        <button data-toggle="modal" data-target="#exampleModal" data-whatever="49" data-project-id="46" type="button" class="btn btn-danger" style="margin-top: 20px;padding: 5px;border-radius: 5px;font-size: 12px;">Nhấn vào để đấu giá</button>

                    </div>
                </div>
            </div>
            <input type="hidden" id='startDate' name="startDate" value="{{strtotime($dataTime['start_date'])}}">
            <input type="hidden" id='endDate' name="endDate" value="{{$dataTime['end_date']}}">
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Nhập thông tin đấu giá</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Tên: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Số điện thoại: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Tỉnh: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Huyện: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Xã: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Số tiền: <span style="color: red">(*)</span></label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <div class="g-recaptcha" data-sitekey="6Lcvb90ZAAAAANRSUJGShgESPQ7EeHeIVL44sP3Z"></div>
{{--                                site key : 6Lcvb90ZAAAAANRSUJGShgESPQ7EeHeIVL44sP3Z--}}
{{--                                secret key: 6Lcvb90ZAAAAAJpbqpwf1ZEDsF8IpB7CWHjl7tDn--}}
                                @if ($errors->has('g-recaptcha-response'))
                                    <p class="help-block text-left" style="color: red">{{ $errors->first('g-recaptcha-response') }}</p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $(".alert" ).fadeOut(10000);
        });
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
                document.getElementById("demo").innerHTML = "EXPIRED";
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