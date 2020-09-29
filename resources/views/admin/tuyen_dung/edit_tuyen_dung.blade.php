@extends('admin.layouts.app')
@section('title-content')
    Sửa Bài Viết Tuyển Dụng
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('edit_tuyen_dung')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="tuyen_dung_id[0]" value="{{$news[0]['id']}}">
            <input type="hidden" name="tuyen_dung_id[1]" value="{{$news[1]['id']}}">
            <div class="col-md-6">
                <label>Tên Tuyển Dụng ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="name[0]" class="form-control" placeholder="Nhập tên Tuyển Dụng ..." value="{{$news[0]['name']}}">
                </div>
                @if ($errors->has('name.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('name.0') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                <label>Tên Tuyển Dụng ( Tiếng Anh )</label>
                <div class="form-group">
                    <input type="text" name="name[1]" class="form-control" placeholder="Nhập tên Tuyển Dụng ..." value="{{$news[1]['name']}}">
                </div>
                @if ($errors->has('name.1'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('name.1') }}</p>
                @endif
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Nội dung Tuyển Dụng ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content[0]" rows="7" class="form-control ckeditor">{{$news[0]['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>
                @if ($errors->has('content.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content.0') }}</p>
                @endif
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Nội dung Tuyển Dụng ( Tiếng Anh)</label>
                <textarea id="editor2" name="content[1]" rows="7" class="form-control ckeditor">{{$news[1]['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor2' );
                </script>
                @if ($errors->has('content.1'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content.1') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh đại diện <span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                <img id="image" src="/upload/{{$news[0]['image']}}" style="width: 150px; margin-top: 10px">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Sửa Bài Viết Tuyển Dụng</button>
            </div>
        </form>
    </div>

@endsection