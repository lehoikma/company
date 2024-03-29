@extends('user.layouts.app')

@section('title', 'VacXin FMD')
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
                    <li itemprop="itemListElement">
                        <span itemprop="name">VacXin FMD<span></span></span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $data['content'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection