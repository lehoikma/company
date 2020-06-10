@extends('user.layouts.app')

@section('content')
    <!--    navigate-->
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="home" itemprop="item" href="/vi/home.h.html">
                            <span itemprop="name">{{trans('messages.home')}}&nbsp;&gt;&nbsp;</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="#" itemprop="item" target="_self" class="arr firt" id="menu3">
                            <span itemprop="name">{{$categoryName['name']}}<span></span></span>
                        </a>
                        <meta itemprop="position" content="2">
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
                    <h2>
                        <a class="text" href="#" target="_self">
                            {{$categoryName['name']}}
                        </a>
                    </h2>
                </div>
                <div class="n-items row">
                    @foreach($listNewsCategory as $value)
                        <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 n-item">
                        <div class="item-box">
                            <figure>
                                <a href="#" title="" target="_self">
                                    <img src="/upload/{{$value['image']}}" alt="" class="img-responsive" style="height: 170px"/>
                                </a>
                            </figure>
                            <div class="n-title">
                                <a href="#" title='' class='title' target='_self'>
                                    {{$value['title']}}
                                </a>
                            </div>
                            <div class="n-desc">
                                {{$value['description']}} ...
                                <p><a class="more-link" href="#">Chi tiết<i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection