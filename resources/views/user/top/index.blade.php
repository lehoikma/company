@extends('user.layouts.app')
@section('slide')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 1" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide1.jpg" alt="slide 1">
                        </a>
                        <p>abc1</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 3" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide2.jpg" alt="slide 2">
                        </a>
                        <p>abc2</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 4" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide3.jpg" alt="slide 3">
                        </a>
                        <p>abc3</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 active">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 5" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide4.jpg" alt="slide 4">
                        </a>
                        <p>abc4</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 6" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide5.jpg" alt="slide 5">
                        </a>
                        <p>abc5</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 7" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide6.jpg" alt="slide 6">
                        </a>
                        <p>abc6</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 8" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide7.jpg" alt="slide 7">
                        </a>
                        <p>abc7</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 2" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide8.jpg" alt="slide 8">
                        </a>
                        <p>abc8</p>
                    </div>

                </div>
            </div>
            <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 2" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="image/slide9.jpg" alt="slide 9">
                        </a>
                        <p>abc9</p>
                    </div>

                </div>
            </div>
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
    <div class="col-md-4 col-xs-12" >
        <a class="title-name">abc1</a>
        <div class="img-height">
            <a href=""><img src="image/anh1.jpg" alt=""></a>
        </div>
        <div class="text-center">
            <a class="promotional">100.000Đ</a>
        </div>

        <div class="footer-product">
            <a href="#" class="btn btn-outline-warning">Đặt Hàng</a>
        </div>
    </div>
    <div class="col-md-4 col-xs-12" >
        <a class="title-name">abc2</a>
        <div class="img-height">
            <a href=""><img src="image/anh2.jpg" alt=""></a>
        </div>
        <div class="text-center">
            <a class="promotional">100.000Đ</a>
        </div>

        <div class="footer-product">
            <a href="#" class="btn btn-outline-warning">Đặt Hàng</a>
        </div>
    </div>
    <div class="col-md-4 col-xs-12" >
        <a class="title-name">abc3</a>
        <div class="img-height">
            <a href=""><img src="image/anh3.jpg" alt=""></a>
        </div>
        <div class="text-center">
            <a class="promotional">100.000Đ</a>
        </div>

        <div class="footer-product">
            <a href="#" class="btn btn-outline-warning">Đặt Hàng</a>
        </div>
    </div>
    <div class="col-md-4 col-xs-12" >
        <a class="title-name">abc3</a>
        <div class="img-height">
            <a href=""><img src="image/anh3.jpg" alt=""></a>
        </div>
        <div class="text-center">
            <a class="promotional">100.000Đ</a>
        </div>

        <div class="footer-product">
            <a href="#" class="btn btn-outline-warning">Đặt Hàng</a>
        </div>
    </div>
    <div class="col-md-4 col-xs-12" >
        <a class="title-name">abc4</a>
        <div class="img-height">
            <a href=""><img src="image/anh3.jpg" alt=""></a>
        </div>
        <div class="text-center">
            <a class="promotional">100.000Đ</a>
        </div>

        <div class="footer-product">
            <a href="#" class="btn btn-outline-warning">Đặt Hàng</a>
        </div>
    </div>
    <div class="col-md-4 col-xs-12" >
        <a class="title-name">abc5</a>
        <div class="img-height">
            <a href=""><img src="image/anh3.jpg" alt=""></a>
        </div>
        <div class="text-center">
            <a class="promotional">100.000Đ</a>
        </div>

        <div class="footer-product">
            <a href="#" class="btn btn-outline-warning">Đặt Hàng</a>
        </div>
    </div>
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