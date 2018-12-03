@extends('user.layouts.app')
@section('content')
    <div class="mobile-content col-lg-9 col-md-9 col-sm-9 col-xs-12" style="padding: 0px">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">{{trans('messages.home')}} > Hình Ảnh</div>
        <h3 class="col-md-12" style="margin-bottom: 10px; margin-top: 10px">Hình Ảnh</h3>
        @foreach($categoryImage as $category)
            <div class="image" style="text-align: center; margin-bottom: 10px;">
                @foreach($listImage as $image)
                    @if($category['id'] == $image['category_image_id'])
                        <img src="upload/{{$image['image']}}" style="width: 100%; margin-bottom: 10px; margin-top:10px;"></br>
                        @if(isset($image['description']))
                            <i>{{$image['description']}}</i></br>
                        @endif
                    @endif
                @endforeach
            </div>
        @endforeach
        <div class="col-md-12" style="border-bottom: 1px solid #eee;margin-bottom: 10px;"></div>
    </div>
@endsection