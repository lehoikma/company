@extends('admin.layouts.app')
@section('title-content')
    Tạo Bài Viết Tuyển Dụng
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('save_tuyen_dung')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <label>Tên tuyển dụng ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title_news[0]" class="form-control" placeholder="Nhập tên sản phẩm ..." value="{{old('title_news.0')}}">
                </div>
            </div>

            <div class="col-md-6">
                <label>Tên tuyển dụng ( Tiếng Anh )</label>
                <div class="form-group">
                    <input type="text" name="title_news[1]" class="form-control" placeholder="Nhập tên sản phẩm ..." value="{{old('title_news.1')}}">
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="col-md-6" style="padding-left: 0px">
                    @if ($errors->has('title_news.0'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('title_news.0') }}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    @if ($errors->has('title_news.1'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('title_news.1') }}</p>
                    @endif
                </div>
            </div>

            <div class="col-md-12 ">
                <div class="col-md-6" style="padding-left: 0px">
                    @if ($errors->has('description_news.0'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('description_news.0') }}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    @if ($errors->has('description_news.1'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('description_news.1') }}</p>
                    @endif
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 15px">
                <label>Nội dung ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content_news[0]" rows="7" class="form-control ckeditor">{{old('content_news.0')}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>

            <div class="col-md-6" style="margin-top: 15px">
                <label>Nội dung ( Tiếng Anh)</label>
                <textarea id="editor2" name="content_news[1]" rows="7" class="form-control ckeditor">{{old('content_news.1')}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor2' );
                </script>
            </div>
            <div class="col-md-12 ">
                <div class="col-md-6" style="padding-left: 0px">
                    @if ($errors->has('content_news.0'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('content_news.0') }}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    @if ($errors->has('content_news.1'))
                        <p class="help-block text-left" style="color: red">{{ $errors->first('content_news.1') }}</p>
                    @endif
                </div>
            </div>

            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh đại diện <span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Tin Tức</button>
            </div>
        </form>
    </div>

@endsection