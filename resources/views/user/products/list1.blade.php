@extends('user.layouts.app')

@section('content')
    <!--    navigate-->
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol>
                    <li>
                        <a href="/"><span>Trang chủ&nbsp;&gt;&nbsp;</span></a>
                    </li>
                    <li>
                        <a href="" target="_self"><span>Danh Mục Sản Phẩm<span></span></span></a>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-gallery">
        <div class="container">
            <div class="box-title">
                <h1>
                    <a class="text" href="" target="_self">Danh Mục Sản Phẩm</a></h1>
            </div>
            <div class="gallery-listing">
                <div class="row" id="gall-list">
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 300px;">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug('heo'), 'id' => 3])}}">
                                    <img src="/styles/image/lon.jpg"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('list_category_danh_muc_2', ['title' => str_slug('heo'), 'id' => 3])}}" target="_self">
                                    <p>HEO</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 300px;">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug('Thú Cưng'), 'id' => 4])}}">
                                    <img src="/styles/image/cho-meo.jpg"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('list_category_danh_muc_2', ['title' => str_slug('Thú cưng'), 'id' => 4])}}" target="_self">
                                    <p>Thú Cưng</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 300px;">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug('gia súc lớn'), 'id' => 1])}}">
                                    <img src="/styles/image/gia-suc.jpg"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('list_category_danh_muc_2', ['title' => str_slug('gia súc lớn'), 'id' => 1])}}" target="_self">
                                    <p>GIA SÚC LỚN</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 300px;">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug('Gia Cầm'), 'id' => 2])}}">
                                    <img src="/styles/image/gia-cam.jpg"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('list_category_danh_muc_2', ['title' => str_slug('Gia Cầm'), 'id' => 2])}}" target="_self">
                                    <p>Gia Cầm</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 300px;">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug('Dinh Dưỡng'), 'id' => 2])}}">
                                    <img src="/styles/image/dinh_duong.jpg"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('list_category_danh_muc_2', ['title' => str_slug('Dinh Dưỡng'), 'id' => 5])}}" target="_self">
                                    <p>Dinh Dưỡng</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 300px;">
                                <a href="{{route('list_category_danh_muc_2', ['title' => str_slug('Thuốc sát trùng'), 'id' => 2])}}">
                                    <img src="/styles/image/thuoc_sat_trung.jpg"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('list_category_danh_muc_2', ['title' => str_slug('Thuốc sát trùng'), 'id' => 6])}}" target="_self">
                                    <p>Thuốc sát trùng</p>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection