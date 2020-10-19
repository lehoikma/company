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
            <div class="col-md-12">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
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
            </div>
            <div class="col-sm-6">
                <form action="{{route('send_contacts')}}" method="post" class="block contactForm" >
                    {{csrf_field()}}
                    <div class="contactpage-form">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <p>
                                    <input name="fullname" value="" size="40" placeholder="Họ &amp; Tên*" type="text" required>
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <p>
                                    <input name="email" value="" size="40" placeholder="Email*" type="email" required>
                                </p>
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <p>
                                    <input name="phone" value="" size="40" placeholder="{{trans('messages.phone')}}" type="text" required>
                                </p>
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 mf-textarea-field">
                                <p>
                                    <textarea name="message" cols="40" rows="4" placeholder="Nội dung..." style="height: auto" required></textarea>
                                </p>
                            </div>
                            <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                                <button type="submit" class="btn-style-two">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function () {
            $(".alert" ).fadeOut(10000);
        });
    </script>
@endsection