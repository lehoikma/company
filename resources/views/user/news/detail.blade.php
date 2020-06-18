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
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="">
                    <li itemprop="itemListElement">
                        <a class="home" itemprop="item" href="/">
                            <span itemprop="name">Trang chủ&nbsp;&nbsp;&gt;&nbsp;</span>
                        </a>
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <span itemprop="name">{{$news['title']}}<span></span></span>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="page-content page-article">
        <div class="container">
            <div class="row">
                <article class="col-md-12 col-sm-12 col-xs-12 article-detail">
                    <div class="n-title">
                        <h1>
                            <span class="title-article">{{$news['title']}}</span>
                        </h1>
                    </div>

                    <div class="n-desc">
                        {!! $news['content'] !!}
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news-list-detail">
                            <div class="related-article">
                                <div class="box-title related-title">
                                    <h2>
                                        <span class="text">Tin tức liên quan</span>
                                    </h2>
                                </div>
                                <div class="related-content">
                                    <ul>
                                        @foreach($newsFollows as $value)
                                            <li>
                                            <a href="{{route('news_detail', ['title'=>str_slug($value['title']), 'id'=> $value['news_id']])}}" title="{{$value['title']}}" class="title" target="_self">
                                                {{$value['title']}}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection