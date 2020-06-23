@extends('user.layouts.app')
@section('title', 'Hình Ảnh')
@section('content')
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol>
                    <li>
                        <a href="/"><span>Trang chủ&nbsp;&gt;&nbsp;</span></a>
                    </li>
                    <li>
                        <a href="" target="_self"><span>Thư viện ảnh<span></span></span></a>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-gallery">
        <div class="container">
            <div class="box-title">
                <h1>
                    <a class="text" href="" target="_self">Thư viện ảnh</a></h1>
            </div>
            <div class="gallery-listing">
                <div class="row" id="gall-list">
                    @foreach($categoryImage as $category)
                        <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gall-item">
                        <div class="item-box">
                            <figure style="width: 100%; height: 213.514px;">
                                <a href="{{route('detail_image', ['title' => str_slug($category['name']), 'id' => $category['id']])}}">
                                    <img src="/upload/{{$category['image']}}"></a>
                            </figure>
                            <div class="gall-content">
                                <a class="gall-title" href="{{route('detail_image', ['title' => str_slug($category['name']), 'id' => $category['id']])}}" target="_self">
                                    <p>{{$category['name']}}</p>
                                </a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                <div class="text-center">{{$categoryImage->links()}}</div>
            </div>
        </div>
    </section>
@endsection