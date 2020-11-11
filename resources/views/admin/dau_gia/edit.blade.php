@extends('admin.layouts.app')
@section('title-content')
    Sửa bài viết đấu giá
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
        <form action="{{route('dau_gia_save_edit_form')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="col-md-12">
                <label>Tên Bài viết đấu giá<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Nhập tên đấu giá ..." value="{{$data['title']}}">
                </div>
            </div>
            <div class="col-md-12 ">
                @if ($errors->has('title'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('title') }}</p>
                @endif
            </div>

            <div class="col-md-12" style="margin-top: 15px">
                <label>Nội dung<span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content" rows="10" class="form-control ckeditor">{{$data['content']}}</textarea>
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
                    <input type="text" class="form-control" id="formattedNumberField" placeholder="Nhập giá tiền" value="{{$data['price']}}">
                    <input type="hidden" name="price" class="formattedNumberField" value="{{$data['price']}}">
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
                        <input class="form-control" name="start_date" placeholder="DD/MM/YYYY HH:mm" type="text" value="{{date("d/m/yy H:i", strtotime($data['start_date']))}}"/>
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
                        <input class="form-control" name="end_date" placeholder="DD/MM/YYYY HH:mm" type="text" value="{{date("d/m/yy H:i", strtotime($data['end_date']))}}"/>
                    </div>
                    @if ($errors->has('end_date'))
                        <p class="help-block text-left" style="color: red;">{{ $errors->first('end_date') }}</p>
                    @endif
                </div>
            </div>
            <div class=" col-md-12" style="margin-top: 10px"></div>
            <div class=" col-md-2" style="margin-top: 10px">
                <label>Hình ảnh 1 <span style="color: red">(*)</span></label>
                <input type="file" id="files1" name="files1" />
                @if(!empty($data['image1']))
                    <img src="/upload/{{$data['image1']}}" style="width: 80%;padding-top: 20px;">
                @endempty
                @if ($errors->has('files1'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('files1') }}</p>
                @endif
            </div>
            <div class=" col-md-2" style="margin-top: 10px">
                <label>Hình ảnh 2 <span style="color: red">(*)</span></label>
                <input type="file" id="files2" name="files2" />
                @if(!empty($data['image2']))
                    <img src="/upload/{{$data['image2']}}" style="width: 80%;padding-top: 20px;">
                @endempty
                @if ($errors->has('files2'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('files2') }}</p>
                @endif
            </div>
            <div class=" col-md-2" style="margin-top: 10px">
                <label>Hình ảnh 3 <span style="color: red">(*)</span></label>
                <input type="file" id="files3" name="files3" />
                @if(!empty($data['image3']))
                    <img src="/upload/{{$data['image3']}}" style="width: 80%;padding-top: 20px;">
                @endempty
                @if ($errors->has('files3'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('files3') }}</p>
                @endif
            </div>
            <div class=" col-md-2" style="margin-top: 10px">
                <label>Hình ảnh 4 <span style="color: red">(*)</span></label>
                <input type="file" id="files4" name="files4" />
                @if(!empty($data['image4']))
                    <img src="/upload/{{$data['image4']}}" style="width: 80%;padding-top: 20px;">
                @endempty
                @if ($errors->has('files4'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('files4') }}</p>
                @endif
            </div>
            <div class=" col-md-2" style="margin-top: 10px">
                <label>Hình ảnh 5 <span style="color: red">(*)</span></label>
                <input type="file" id="files5" name="files5" />
                @if(!empty($data['image5']))
                    <img src="/upload/{{$data['image5']}}" style="width: 80%;padding-top: 20px;">
                @endempty
                @if ($errors->has('files5'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('files5') }}</p>
                @endif
            </div>
            <div class=" col-md-2" style="margin-top: 10px">
                <label>Hình ảnh 6 <span style="color: red">(*)</span></label>
                <input type="file" id="files6" name="files6" />
                @if(!empty($data['image6']))
                    <img src="/upload/{{$data['image6']}}" style="width: 80%;padding-top: 20px;">
                @endempty
                @if ($errors->has('files6'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('files6') }}</p>
                @endif
            </div>

            <div class=" col-md-12" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Sửa Bài viết đấu giá</button>
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

        });
    </script>

@endsection