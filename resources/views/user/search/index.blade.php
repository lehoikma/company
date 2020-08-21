{{--@extends('user.layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12" style="padding-bottom: 15px;--}}
{{--    border-bottom: 1px solid #fff3f3;">Trang Chủ > Tìm Kiếm</div>--}}
{{--        <h5 class="col-md-12" style="margin-bottom: 20px"> Từ Khóa tìm kiếm : {{$key}}</h5>--}}
{{--        --}}
{{--        @foreach($dataSearch as $value)--}}
{{--            <div class="col-md-4 col-xs-12" style="margin-bottom: 15px">--}}
{{--                <a class="title-name">{{$value['name']}}</a>--}}
{{--                <div class="img-height">--}}
{{--                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">--}}
{{--                        <img src="/upload/{{$value['image']}}" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="text-center" style="    border: 1px solid #ee9600;padding: 4px; border-radius: 5px;">--}}
{{--                    <a class="promotional">Giá : {{$value['price']}} VNĐ</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <div class="text-center">{{$dataSearch->links()}}</div>--}}
{{--@endsection--}}
@extends('user.layouts.app')

@section('content')
    <!--    navigate-->
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="">
                    <li itemprop="itemListElement">
                        <a class="home" href="/" style="color: black">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&nbsp;&gt;&nbsp;&nbsp;Tìm Kiếm</span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!--    navigate-->

    <section class="page-content page-article page-group">
        <div class="container">

            <div class="article-listing">
                <div class="box-title">
                    <h2 style="margin-top: 0px">
                        <a class="text" href="#" target="_self" style="color:#009244;">
                            Từ Khóa tìm kiếm : {{$key}}
                        </a>
                    </h2>
                </div>
                <div class="n-items row">
                    @foreach($dataSearch as $value)
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
                            <div class="post-thumb">
                                <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                                    <img style="width: 100%; height: 400px; padding: 30px;" src="/upload/{{$value['image']}}" alt="" title="{{$value['name']}}">
                                </a>
                            </div>

                            <h5 class="small-font" style="text-align: center;margin-top: 10px;">
                                <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}" style="color: #0a0a0a; font-size: 18px;font-weight: 600">
                                    {{$value['name']}}
                                </a>
                            </h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="text-center">{{$dataSearch->links()}}</div>
@endsection