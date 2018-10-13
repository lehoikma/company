@extends('user.layouts.app')
@section('slide')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <?php
            $catePrd = \App\Models\ProductsLanguages::User()->orderBy('updated_at', 'desc')->limit(10)->get();
            ?>
            @foreach($catePrd as $key=>$value)
                <div class="carousel-item col-md-3 {{$key == 0 ? 'active' : ''}}">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="/upload/{{$value['image']}}">
                            </a>
                            <p>{{$value['name']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('content')
    <!-- san pham -->
    <?php
        $catePrd1 = \App\Models\ProductsLanguages::User()->orderBy('updated_at', 'desc')->limit(6)->get();
    ?>
    @foreach($catePrd1 as $key=>$value)
        <div class="col-md-4 col-xs-12" >
            <a class="title-name">{{$value['name']}}</a>
            <div class="img-height">
                <a href=""><img src="/upload/{{$value['image']}}" alt=""></a>
            </div>
            <div class="text-center">
                <a class="promotional">{{$value['price'] ? number_format($value['price']).' VNĐ' : 'Liên Hệ'}}</a>
            </div>

            <div class="footer-product">
                <a href="#" class="btn btn-outline-warning">{{trans('messages.order')}}</a>
            </div>
        </div>
    @endforeach
    <!-- san pham -->


    <!-- hoi dap -->
    <div class="hdap col-md-6 col-sx-12">
        <a href="" class="hdaps">
            <div class="title-hd">
                <h5> HỎI ĐÁP PHONG THỦY</h5>
            </div>
        </a>

        <div class="tt-text">
            <a class="linkss" href="">NHỜ TƯ VẤN GIÚP TÔI SỬA NHÀ</a>
            <p>Kính chào laido Trước tiên cho tôi thay mặt gia đình gởi đến ngài lời chúc sức khỏe và lời...</p>
            <ul>
                <li>
                    <a href="">
                        <ins>cất nhà</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>nhà vót đuôi chuột</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>Thông báo</ins></a>
                </li>
            </ul>
        </div>

    </div>
    <div class="hdap col-md-6 col-sx-12">
        <a href="" class="hdaps">
            <div class="title-hd">
                <h5>THIẾT KẾ THEO PHONG THỦY</h5>
            </div>
        </a>

        <div class="tt-text">
            <a class="linkss" href="">LA KÍNH TIẾNG VIỆT 36 TỪNG MỚI</a>
            <p>La kinh 36 tầng đế gỗ in trên hợp kim chống rỉ, độ sắc nét cao. Kích thước 22.5cm x 22.5cm x 2,5...</p>
            <ul>
                <li>
                    <a href="">
                        <ins>Mẫu túi giấy, Phong cách hiện đại</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>Thiết kế thương hiệu công ty dưới góc độ Phong thủy</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>Nhà thượng sơn hạ thủy (tiếp theo)</ins>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hdap col-md-6 col-sx-12">
        <a href="" class="hdaps">
            <div class="title-hd">
                <h5>SÁCH PHONG THỦY</h5>
            </div>
        </a>

        <div class="tt-text">
            <a class="linkss" href="">Sách: Khai Môn Phong Thủy</a>
            <p>Bài giảng của thầy Trần Mạnh Linh – Hà Nội PVChiến lược ghihttp://www.tuvilyso.com1Sơ lược các...</p>
            <ul>
                <li>
                    <a href="">
                        <ins>LA KINH TIẾNG VIỆT</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>Cầu thủy tinh Cát tường</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>Cổ phiếu Hót</ins>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hdap col-md-6 col-sx-12">
        <a href="" class="hdaps">
            <div class="title-hd">
                <h5>PHONG THỦY TÙY BÚT</h5>
            </div>
        </a>

        <div class="tt-text">
            <a class="linkss" href="">ẤT MÙI NIÊN, XUẤT HÀNH, XU CÁT TỊ HUNG (tiếp)</a>
            <p>ẤT MÙI NIÊN, XUẤT HÀNH, XU CÁT TỊ HUNG (tiếp) Việc cúng tiễn ông Táo và dọn dẹp đã xong. Đâ...</p>
            <ul>
                <li>
                    <a href="">
                        <ins>NĂM 2015 - ẤT MÙI XU CÁT TỊ HUNG</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>XU CÁT TỊ HUNG CHO NĂM 2014 – GIÁP NGỌ</ins>
                    </a>
                </li>
                <li>
                    <a href="">
                        <ins>LỚP PHONG THỦY SƠ TRUNG CẤP</ins>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- hoi dap -->
@endsection