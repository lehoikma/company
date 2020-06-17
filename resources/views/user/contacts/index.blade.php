@extends('user.layouts.app')

@section('title', '')
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
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="home" itemprop="item" href="/vi/home.h.html">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&gt;&nbsp;</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3">
                            <span itemprop="name">{{trans('messages.contact')}}<span></span></span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
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
                                    <a href="tel:0971093355" title="phone">0971 09 33 55</a>
                                </p>
                            </li>
                            <li>
                                <p class="name">Email</p>
                                <p class="value">
                                    <a href="mailto:info@hanofeed.com" title="email">
                                        <span class="p-navgroup-linkText">info@hanofeed.com</span>
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

                <form action="#" method="post" class="block contactForm" data-xf-init="ajax-submit" data-force-flash-message="true">

                    <div class="contactpage-form">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <p>
                                    <input name="fullname" value="" size="40" placeholder="Họ &amp; Tên*" type="text">
                                </p>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-12">
                                <p>
                                    <input name="email" value="" size="40" placeholder="Email*" type="email">
                                </p>
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <p>
                                    <input name="phone" value="" size="40" placeholder="{{trans('messages.phone')}}" type="text">
                                </p>
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 mf-textarea-field">
                                <p>
                                    <textarea name="message" cols="40" rows="4" placeholder="Nội dung..." style="height: auto"></textarea>
                                </p>
                            </div>
                            <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                                <button type="submit" class="btn-style-two">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-message"></div>

                </form>

            </div>
        </div>
    </div>
@endsection