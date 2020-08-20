@extends('user.layouts.app')

@section('content')
    <!--    navigate-->
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="">
                    <li itemprop="itemListElement">
                        <a class="home" href="/" style="color: black">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&nbsp;&gt;&nbsp;&nbsp;{{trans('messages.products')}}&nbsp;&nbsp;&gt;&nbsp;{{$nameCtg}}</span>
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
                            {{$nameCtg}}
                        </a>
                    </h2>
                </div>
                <div class="n-items row">
                    @foreach($data as $value)
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

    <div class="text-center">{{$data->links()}}</div>
@endsection