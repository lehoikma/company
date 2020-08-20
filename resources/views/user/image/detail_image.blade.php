@extends('user.layouts.app')
@section('title', 'Hình Ảnh')
@section('content')
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol>
                    <li>
                        <a href="/" style="color: black"><span>Trang chủ&nbsp;&gt;&nbsp;</span></a>
                    </li>
                    <li>
                        <a href="{{route('list_image')}}" style="color: black"><span>Thư viện ảnh&nbsp;&gt;&nbsp;</span></a>
                    </li>
                    <li>
                        <a href="" target="_self" style="color: black"><span>{{$title}}<span></span></span></a>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-gallery">
        <div class="container">
            <div class="box-title">
                <h1 style="margin-top: 0px">
                    <a class="text" style="color: #009245;font-weight: 600;font-family: 'Roboto Condensed',sans-serif;">{{$title}}</a>
                </h1>
            </div>
            <div class="gallery-listing">
                <div class="row" id="gall-list">
                    <div class="image mobile-content" style="text-align: center; margin-bottom: 10px;">
                        @foreach($images as $category)
                            <img src="/upload/{{$category['image']}}" style="width: 50%; margin-bottom: 10px; margin-top:10px;"><br>
                            <i>{{$category['description']}}</i><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection