@extends('user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">Trang Chủ > Sản Phẩm > {{$product['name']}}</div>
        <h3 class="col-md-12" style="margin-bottom: 0px">{{$product['name']}}</h3>
        <p class="col-md-12" style=" color: #aaaaaa; font-size: 12px">{{$product['updated_at']}}</p>
        <p class="col-md-12">
            <a href="" rel="" title="" class="cboxElement">
                <img class="alignnone size-full wp-image-418" src="/upload/{{$product['image']}}" alt="" style="width: 100%">
            </a>
        </p>
        <p class="col-md-12" style="color: red; font-weight: bold">Giá : {{$product['price']}} VNĐ</p>
        <div class="col-md-12">
            {!! $product['content'] !!}
        </div>
        <p class="col-md-12" style="font-weight: bold;border-top: 1px solid #d4d4d4;padding-top: 10px;">BÀI CÙNG CHUYÊN MỤC</p>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
            <div class="post-thumb">
                <a href="http://rauantoandabaco.vn/tin-tuc/post/nhung-chuoi-thuc-pham-an-toan-tai-cac-tinh-phia-bac/2">
                    <img style="width: 100%; height: 180px" src="http://rauantoandabaco.vn/upload/1519559592.jpeg" alt="" title="Hà Nội: Sợ bão số 4 gây mưa lớn, chung cư – biệt thự “tậu” bao cát chặn hầm chống ngập">
                </a>
            </div>

            <h5 class="small-font">
                <a href="http://rauantoandabaco.vn/tin-tuc/post/nhung-chuoi-thuc-pham-an-toan-tai-cac-tinh-phia-bac/2" style="color: #0a0a0a">
                    Những chuỗi thực phẩm an toàn tại các tỉnh phía Bắc
                </a>
            </h5>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
            <div class="post-thumb">
                <a href="http://rauantoandabaco.vn/tin-tuc/post/nhung-chuoi-thuc-pham-an-toan-tai-cac-tinh-phia-bac/2">
                    <img style="width: 100%; height: 180px" src="http://rauantoandabaco.vn/upload/1519559592.jpeg" alt="" title="Hà Nội: Sợ bão số 4 gây mưa lớn, chung cư – biệt thự “tậu” bao cát chặn hầm chống ngập">
                </a>
            </div>

            <h5 class="small-font">
                <a href="http://rauantoandabaco.vn/tin-tuc/post/nhung-chuoi-thuc-pham-an-toan-tai-cac-tinh-phia-bac/2">
                    Những chuỗi thực phẩm an toàn tại các tỉnh phía Bắc
                </a>
            </h5>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
            <div class="post-thumb">
                <a href="http://rauantoandabaco.vn/tin-tuc/post/nhung-chuoi-thuc-pham-an-toan-tai-cac-tinh-phia-bac/2">
                    <img style="width: 100%; height: 180px" src="http://rauantoandabaco.vn/upload/1519559592.jpeg" alt="" title="Hà Nội: Sợ bão số 4 gây mưa lớn, chung cư – biệt thự “tậu” bao cát chặn hầm chống ngập">
                </a>
            </div>

            <h5 class="small-font">
                <a href="http://rauantoandabaco.vn/tin-tuc/post/nhung-chuoi-thuc-pham-an-toan-tai-cac-tinh-phia-bac/2">
                    Những chuỗi thực phẩm an toàn tại các tỉnh phía Bắc
                </a>
            </h5>
        </div>
    </div>
@endsection
@section('script')

@endsection