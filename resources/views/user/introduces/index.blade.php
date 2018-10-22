@extends('user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">{{trans('messages.home')}} > {{ trans('messages.introduce') }}</div>
        <h3 class="col-md-12" style="margin-bottom: 10px; margin-top: 10px">Giới Thiệu</h3>

        <div class="col-md-12">
            {!! $introduces['content'] !!}
        </div>
    </div>
@endsection
@section('script')

@endsection