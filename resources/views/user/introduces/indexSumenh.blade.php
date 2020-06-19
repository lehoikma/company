@extends('user.layouts.app')

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
                        <span itemprop="name">{{trans('messages.su_menh')}}<span></span></span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $introduces['content'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection