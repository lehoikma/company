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
    <div class="container">
        <div class="row">
            <div class="col-md-12 navigate" style="margin: 10px 0px">
                <ol itemscope="">
                    <li itemprop="itemListElement" itemscope="">
                        <a class="home" itemprop="item">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&gt;&nbsp;</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement">
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3">
                            <span itemprop="name">{{trans('messages.contact')}}<span></span></span>
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
            <div class="col-sm-5">
                <div class="contact-pagebox">
                    <div class="grd-contact-box">
                        <div class="grd-section-title  grd_title-type-2 margbtm20">
                            <h3 class="title  fsize30">{{trans('messages.contact')}}</h3>
                        </div>
                        <ul>
                            <li>
                                <p class="name">{{trans('messages.phone')}}</p>
                                <p class="value">
                                    <a href="tel:0971093355" title="phone">0971 99 88 77</a>
                                </p>
                            </li>
                            <li>
                                <p class="name">Email</p>
                                <p class="value">
                                    <a href="mailto:info@amavet.com.vn" title="email">
                                        <span class="p-navgroup-linkText">info@amavet.com.vn</span>
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="name">{{trans('messages.WORKING_TIME')}}</p>
                            </li>
                            <li>
                                <p class="value">T.Hai - T.Bảy: 7.30 to 17.00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">

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