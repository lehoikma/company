@extends('admin.layouts.app')
@section('title-content')
    Sửa Tin Tức
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('edit_news')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="news_id[0]" value="{{$news[0]['id']}}">
            <input type="hidden" name="news_id[1]" value="{{$news[1]['id']}}">
            <div class="col-md-6">
                <label>Tên Tin Tức ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title_news[0]" class="form-control" placeholder="Nhập tên tin tức ..." value="{{$news[0]['title']}}">
                </div>
                @if ($errors->has('title_news.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('title_news.0') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                <label>Tên Tin Tức ( Tiếng Anh )</label>
                <div class="form-group">
                    <input type="text" name="title_news[1]" class="form-control" placeholder="Nhập tên tin tức ..." value="{{$news[1]['title']}}">
                </div>
                @if ($errors->has('title_news.1'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('title_news.1') }}</p>
                @endif
            </div>
            <div class="col-md-8">
                <label>Danh Mục Tin Tức:</label>
                <select class="form-control" id="sel1" name="select_cate_news">
                    <option value=""></option>
                    @foreach($categoryNews as $value)
                        <option value="{{$value['news_category_id']}}" {{ $value['category_news_id']==$news[0]['news_category_id'] ? 'selected' : ''}}>{{$value['name']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6" style="margin-top: 15px">
                <label>Mô tả về tin tức ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content_news[0]" rows="7" class="form-control ckeditor">{{$news[0]['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>
                @if ($errors->has('content_news.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content_news.0') }}</p>
                @endif
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Mô tả về tin tức ( Tiếng Anh)</label>
                <textarea id="editor2" name="content_news[1]" rows="7" class="form-control ckeditor">{{$news[1]['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor2' );
                </script>
                @if ($errors->has('content_news.1'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content_news.1') }}</p>
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
                <button type="submit" class="btn btn-primary"> Sửa Tin Tức</button>
            </div>
        </form>
    </div>

@endsection