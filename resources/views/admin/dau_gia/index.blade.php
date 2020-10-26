@extends('admin.layouts.app')
@section('title-content')
    Tạo bài viết đấu giá
@endsection
@section('content')
    <div class="col-md-12 flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <div class="col-md-12">
        <form action="{{route('dau_gia_save')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-12">
                <label>Tên Bài viết đấu giá<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Nhập tên đấu giá ..." value="{{old('title')}}">
                </div>
            </div>
            <div class="col-md-12 ">
                @if ($errors->has('title'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('title') }}</p>
                @endif
            </div>

            <div class="col-md-12" style="margin-top: 15px">
                <label>Nội dung<span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content" rows="10" class="form-control ckeditor">{{old('content')}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
            <div class="col-md-12 ">
                @if ($errors->has('content'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <div class="col-md-8" style="padding-top: 15px">
                <label>Giá khởi điểm:<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" class="form-control" id="formattedNumberField" placeholder="Nhập giá tiền" value="{{old('price')}}">
                    <input type="hidden" name="price" class="formattedNumberField" value="{{old('price')}}">
                </div>
            </div>
            <div class="col-md-12 ">
                @if ($errors->has('price'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('price') }}</p>
                @endif
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-4">
                <label>Thời Gian Bắt Đầu</label>
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
                <label>Thời Gian Kết Thúc</label>
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

            //jQuery
            $("#formattedNumberField").on('keyup', function(){
                var n = parseInt($(this).val().replace(/\D/g,''),10);
                $('.formattedNumberField').val(n);
                $(this).val(n.toLocaleString());
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