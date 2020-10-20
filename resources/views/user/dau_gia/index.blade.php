@extends('user.layouts.app')

@section('title', 'Liên Hệ')
@section('meta-description', '')
@section('keywords', '')
@section('meta-fb-title', '')
@section('meta-fb-type', '')
@section('meta-fb-url', '')
@section('meta-fb-image', '')
@section('meta-fb-description', '')

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
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-01-600.jpg"/>
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-02-600.jpg"/>
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-03-600.jpg"/>
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-04-600.jpg"/>
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-05-600.jpg"/>
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-06-600.jpg"/>
                    <img src="http://www.unipresscorp.com/magicslideshow-commercial3/images/places-07-600.jpg"/>
                </div>
                <h4>THÔNG TIN CHI TIẾT</h4>
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
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $(".alert" ).fadeOut(10000);
        });
        // Set the date we're counting down to
        var countDownDate = new Date("2020-10-21 00:00:00").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection