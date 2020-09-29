@extends('user.layouts.app')

@section('title', $news['name'])
@section('keywords', 'tin tuc amavet')
@section('meta-fb-title', $news['name'])
@section('meta-fb-type', '')
@section('meta-fb-url', url()->current())
@section('meta-fb-image', '/upload/'.$news->image)

@section('content')
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="">
                    <li itemprop="itemListElement">
                        <a class="home" itemprop="item" href="/" style="color: black">
                            <span itemprop="name">Trang chủ&nbsp;&nbsp;&gt;&nbsp;</span>
                        </a>
                    </li>
                    <li itemprop="itemListElement">
                        <span itemprop="name">{{$news['name']}}<span></span></span>
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
                            <span class="title-article" style="color: #009245">{{$news['name']}}</span>
                        </h1>
                        <p style=" color: #aaaaaa; font-size: 12px">Ngày Đăng : {{date_format($news['updated_at'], 'Y-m-d')}}&nbsp;/&nbsp;View: {{$news['view']}}</p>
                    </div>
                    <div class="n-desc">
                        {!! $news['content'] !!}
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection