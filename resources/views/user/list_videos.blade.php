@extends('user.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">Trang Chủ > Videos</div>
        <h3 class="col-md-12" style="margin-bottom: 20px">Videos</h3>
        @foreach($videos as $video)
            <h4 class="col-md-12">{{$video['name']}}</h4>
            <div class="videos-custom col-md-12" style="margin-bottom: 20px">
                {!! $video['videos'] !!}
            </div>
        @endforeach
        <div style="text-align: center">
            {{$videos->render()}}
        </div>
    </div>
@endsection
