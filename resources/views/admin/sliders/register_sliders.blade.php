@extends('admin.layouts.app')
@section('title-content')
    Tạo Slider
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('save_register_slider')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh<span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Sliders</button>
            </div>
        </form>
    </div>

@endsection