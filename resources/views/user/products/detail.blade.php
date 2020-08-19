@extends('user.layouts.app')

@section('title'){{$product['name']}}@endsection
@section('meta-description', '')
@section('keywords', '')
@section('meta-fb-title'){{$product['name']}}@endsection
@section('meta-fb-type', '')
@section('meta-fb-url'){{url()->current()}}@endsection
@section('meta-fb-image', '/upload/'.$product->image)
@section('meta-fb-description', '')

@section('content')
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="">
                    <li itemprop="itemListElement">
                        <a class="home" href="/" style="color: black">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&nbsp;&gt;&nbsp;</span>
                        </a>
                    </li>
                    <li itemprop="itemListElement">
                        <a class="" href="/" style="color: black">
                            <span itemprop="name">{{trans('messages.products')}}&nbsp;&nbsp;&gt;&nbsp;</span>
                        </a>
                    </li>
                    <li itemprop="itemListElement" >
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3" style="color: black">
                            <span itemprop="name">{{$product['name']}}<span></span></span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="page-content page-article">
        <div class="container">
            <div class="row">
                <h3 class="col-md-12" style="margin-bottom: 0px; font-weight: 600">{{$product['name']}}</h3>
                <p class="col-md-12" style=" color: #aaaaaa; font-size: 12px">Ngày Đăng : {{date_format($product['updated_at'], 'Y-m-d')}}&nbsp;/&nbsp;View: {{$product['view']}}</p>
                <div class="col-xs-12 col-md-5">
                    <img src="/upload/{{$product['image']}}" alt="" title="{{$product['name']}}">
                    <p id="compartido" style="font-weight:600;text-align: center;padding-top: 10px;padding-bottom: 1.5%;line-height: 25px;color: #009244;margin: 0;font-size: 18px;">CHIA SẺ</p>
                    <div id="barra-xs" style="margin-bottom: 20px;">
                        <a href="#" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 facebook" id="fb-share-button">
                        </a>

                        <a href="#" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 facebook print" target="_blank">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7">
                    {!! $product['content'] !!}
                </div>
                <p class="col-md-12" style="font-weight: bold;border-top: 1px solid #d4d4d4;padding-top: 10px;">SẢN PHẨM TƯƠNG TỰ</p>
                <div class="col-md-12">
                    @foreach($prdFollows as$value)
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
                            <div class="post-thumb">
                                <a href="{{route('products_detail',['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                                    <img style="width: 100%; height: 350px" src="/upload/{{$value['image']}}" alt="" title="{{$value['name']}}">
                                </a>
                            </div>

                            <h5 class="small-font" style="text-align: center;margin-top: 10px;">
                                <a href="{{route('products_detail',['title' => str_slug($value['name']), 'id' => $value['products_id']])}}" style="color: #0a0a0a">
                                    {{$value['name']}}
                                </a>
                            </h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var fbButton = document.getElementById('fb-share-button');
        var url = window.location.href;

        fbButton.addEventListener('click', function() {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
                'facebook-share-dialog',
                'width=626,height=436'
            );

            return false;
        });
    </script>
@endsection