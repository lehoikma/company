@extends('admin.layouts.app')
@section('title-content')
    Sửa Slider
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('edit_slider')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="image_id" value="{{$image['id']}}">
            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh<span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                <img id="image" src="/upload/{{$image['image']}}" style="width: 500px; margin-top: 10px">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>
            <div class=" col-md-8" style="margin-top: 20px">
                <label>URL : </label>
                <input type="text" name="url" class="form-control" value="{{$image['url']}}">
            </div>
            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Sửa Slider</button>
            </div>
        </form>
    </div>

@endsection