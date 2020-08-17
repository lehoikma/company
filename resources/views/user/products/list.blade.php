@extends('user.layouts.app')

@section('content')
    <!--    navigate-->
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="">
                    <li itemprop="itemListElement">
                        <a class="home" href="/" style="color: black">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&nbsp;&gt;&nbsp;&nbsp;{{trans('messages.products')}}&nbsp;&nbsp;&gt;&nbsp;</span>
                        </a>
                    </li>
                    <li itemprop="itemListElement" >
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3" style="color: black">
                            <span itemprop="name">{{$title}}<span></span></span>
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
                <div class="box-title" style="margin-bottom: 20px">
                    <h2 style="margin-top: 0px">
                        <a class="text" href="#" target="_self" style="color: #009244">
                            {{$title}}
                        </a>
                    </h2>
                </div>
                <div class="n-items row">
                    @foreach($listProductCategory as $value)
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 single-post" style="margin-bottom: 30px;overflow-x: hidden;">
                <div class="post-thumb">
                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                        <img style="width: 100%; height: 400px" src="/upload/{{$value['image']}}" alt="" title="{{$value['name']}}">
                    </a>
                </div>

                <h5 class="small-font" style="text-align: center;margin-top: 10px;font-size: 17px;">
                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}" style="color: #0a0a0a">
                        {{$value['name']}}
                    </a>
                </h5>
            </div>
        @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="text-center">{{$listProductCategory->links()}}</div>
@endsection