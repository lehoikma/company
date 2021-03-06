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
    <!--    navigate-->
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
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3" style="color: black">
                            <span itemprop="name">{{trans('messages.news')}}<span></span></span>
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
                        <a class="text" href="#" target="_self" style="color: #009244; font-weight: 600; font-family: 'Roboto Condensed',sans-serif;">
                            {{trans('messages.news')}}
                        </a>
                    </h2>
                </div>
                <div class="n-items row">
                    @foreach($listNews as $key => $value)
                        <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 n-item">
                            <div class="item-box">
                                <figure>
                                    <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" title="" target="_self">
                                        <img src="/upload/{{$value['image']}}" alt="" class="img-responsive" style="height: 170px"/>
                                    </a>
                                </figure>
                                <div class="n-title">
                                    <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" title='' class='title' target='_self'
                                       style="color: #009244">
                                        {{$value['title']}}
                                    </a>
                                </div>
                                <div class="n-desc">
                                    {{$value['description']}} ...
                                    <p><a class="more-link" href="#">Chi tiết<i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </article>
                        @if(in_array($key,[3,7,11,15,19,23]))
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <div class="text-center">{{$listNews->links()}}</div>
@endsection