@extends('admin.layouts.app')
@section('title-content')
    Tạo Bài viết đấu giá
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('create_news')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <label>Tên Bài viết đấu giá ( Tiếng Việt )<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title_news[0]" class="form-control" placeholder="Nhập tên tin tức ..." value="{{old('title_news.0')}}">
                </div>
            </div>

            <div class="col-md-6">
                <label>Tên Bài viết đấu giá ( Tiếng Anh )</label>
                <div class="form-group">
                    <input type="text" name="title_news[1]" class="form-control" placeholder="Nhập tên tin tức ..." value="{{old('title_news.1')}}">
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
            <div class="col-md-12">
                <label>Giá khởi điểm:<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title_news[0]" class="form-control" placeholder="Nhập tên tin tức ..." value="{{old('title_news.0')}}">
                </div>
            </div>
            <div class="col-md-4">
                <label>Ngày Bắt Đầu</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar">
                            </i>
                        </div>
                        <input class="form-control" name="start_date" placeholder="DD/MM/YYYY HH:mm" type="text" value="{{old('start_date')}}"/>
                    </div>
                    @if ($errors->has('start_date'))
                        <p class="help-block text-left" style="color: red;">{{ $errors->first('start_date') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <label>Ngày Kết Thúc</label>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar">
                            </i>
                        </div>
                        <input class="form-control" name="end_date" placeholder="DD/MM/YYYY HH:mm" type="text" value="{{old('end_date')}}"/>
                    </div>
                    @if ($errors->has('end_date'))
                        <p class="help-block text-left" style="color: red;">{{ $errors->first('end_date') }}</p>
                    @endif
                </div>
            </div>

            <style type="text/css">

                input[type="file"] {
                    display: block;
                }
                .imageThumb {
                    max-height: 75px;
                    border: 1px solid;
                    padding: 1px;
                    cursor: pointer;
                }
                .pip {
                    display: inline-block;
                    margin: 10px 10px 0 0;
                }
                .remove {
                    display: block;
                    background: #444;
                    border: 1px solid black;
                    color: white;
                    text-align: center;
                    cursor: pointer;
                }
                .remove:hover {
                    background: white;
                    color: black;
                }

            </style>
            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh <span style="color: red">(*)</span></label>
                <input type="file" id="files" name="files[]" multiple />


            @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Bài viết đấu giá</button>
            </div>
        </form>
    </div>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript">
        $(document).ready(function() {
            var date_start=$('input[name="start_date"]'); //our date input has the name "date"
            var date_end=$('input[name="end_date"]'); //our date input has the name "date"

            date_start.datetimepicker({
                format:'DD/MM/YYYY HH:mm',

            });
            date_end.datetimepicker({
                format:'DD/MM/YYYY HH:mm',
            });

            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Xóa Hình Ảnh</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function(){
                                $(this).parent(".pip").remove();
                            });

                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>

@endsection