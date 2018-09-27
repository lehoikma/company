@extends('admin.layouts.app')
@section('title-content')
    Tạo Sản Phẩm
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
        <form action="{{route('prd_save')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <label>Tên Sản Phẩm (Tiếng Việt)<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="name[0]" class="form-control" placeholder="Nhập tên sản phẩm..." value="">
                </div>
            </div>
            <div class="col-md-6">
                <label>Tên Sản Phẩm( Tiếng Anh)</label>
                <div class="form-group">
                    <input type="text" name="name[1]" class="form-control" placeholder="Nhập tên sản phẩm tiếng anh..." value="">
                </div>
            </div>
            <div class="col-md-12">
                @if ($errors->has('name.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('name.0') }}</p>
                @endif
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Mô tả về sản phẩm <span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content[0]" rows="7" class="form-control ckeditor">{{old('content.0')}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Mô tả về sản phẩm <span style="color: red">(*)</span></label>
                <textarea id="editor2" name="content[1]" rows="7" class="form-control ckeditor">{{old('content.1')}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor2' );
                </script>
            </div>
            <div class="col-md-12">
                @if ($errors->has('content.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content.0') }}</p>
                @endif
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Giá Bán :</label>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Nhập giá" value="{{old('price')}}">
                </div>
                @if ($errors->has('price'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('price') }}</p>
                @endif
            </div>
            <div class=" col-md-12" style="margin-top: 10px">
                <label>Hình ảnh đại diện <span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>
            <div class=" col-md-12" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Sản Phẩm</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(function () {
            $(".alert" ).fadeOut(5000);
        });
    </script>
@endsection