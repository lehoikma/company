@extends('user.layouts.app')
@section('content')
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol>
                    <li>
                        <a href="/"><span>Trang chủ&nbsp;&gt;&nbsp;</span></a>
                    </li>
                    <li>
                        <a href="" target="_self"><span>Videos<span></span></span></a>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-gallery">
        <div class="container">
            <div class="box-title">
                <h1>
                    <a class="text" href="" target="_self">Videos</a></h1>
            </div>
            <div class="video-listing">
                <div class="row">
                    @foreach($videos as $video)
                        <div class="videos-custom col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px">
                            {!! $video['videos'] !!}
                            <h5 style="font-weight: 600">{{$video['name']}}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
