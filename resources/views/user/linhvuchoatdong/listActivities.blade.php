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
                    </li>
                    <li itemprop="itemListElement">
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3">
                            <span itemprop="name">{{trans('messages.scope_of_activities')}}<span></span></span>
                        </a>
                    </li>
                </ol>
            </div>

            <div class="col-xs-12 col-md-6" style="margin-bottom: 20px">
                <a href="{{route('detail_thuoc_thu_y')}}">
                    <img src="/styles/image/linhvuchoatdong_1.jpg">
                </a>
            </div>
            <div class="col-xs-12 col-md-6" style="margin-bottom: 20px">
                <a href="{{route('detail_duc_giong')}}">
                    <img src="/styles/image/linhvuchoatdong_2.jpg">
                </a>
            </div>
            <div class="col-xs-12 col-md-6" style="margin-bottom: 20px">
                <a href="{{route('detail_vac_xin_oie')}}">
                    <img src="/styles/image/linhvuchoatdong_3.jpg">
                </a>
            </div>
            <div class="col-xs-12 col-md-6" style="margin-bottom: 20px">
                <a href="{{route('detail_vac_xin_fmd')}}">
                    <img src="/styles/image/linhvuchoatdong_4.jpg">
                </a>
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