@extends('user.layouts.app')
@section('content')
    <section class="navigate-container">
        <div class="container">
            <div class="navigate">
                <ol>
                    <li>
                        <a href="/" style="color: black"><span>{{ trans('messages.home') }}&nbsp;&gt;&nbsp;</span></a>
                    </li>
                    <li>
                        <a href="" target="_self" style="color: black"><span>Videos<span></span></span></a>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section class="page-content page-gallery">
        <div class="container">
            <div class="box-title">
                <h1 style="margin-top: 0px">
                    <a class="text" href="" target="_self" style="color: #009244; font-weight: 600; font-family: 'Roboto Condensed',sans-serif;">Videos</a></h1>
            </div>
            <div class="video-listing">
                <div class="row">
                    @foreach($videos as $video)
                        <div class="videos-custom col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px">
                            {!! $video['videos'] !!}
                            <h5 style="font-weight: 600; font-size: 17px;">{{$video['name']}}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
