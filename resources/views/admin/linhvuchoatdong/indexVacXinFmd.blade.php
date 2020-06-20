@extends('admin.layouts.app')
@section('title-content')
    Tạo, Sửa Bài Viết VacXin FMD
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
        <form action="{{route('save_vac_xin_fmd')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="id[0]" value="{{$introduces[0]['id'] or ''}}" type="hidden">
            <input name="id[1]" value="{{$introduces[1]['id'] or ''}}" type="hidden">
            <div class="col-md-12" style="margin-top: 15px">
                <label>Mô tả ( Tiếng Việt ):  <span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content[0]" rows="7" class="form-control ckeditor">{{$introduces[0]['content'] or ''}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                  CKEDITOR.replace( 'editor1' );
                </script>
                @if ($errors->has('content.0'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content.0') }}</p>
                @endif
            </div>

            <div class="col-md-12" style="margin-top: 15px">
                <label>Mô tả ( Tiếng Anh ):  <span style="color: red">(*)</span></label>
                <textarea id="editor2" name="content[1]" rows="7" class="form-control ckeditor">{{$introduces[1]['content'] or ''}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                  CKEDITOR.replace( 'editor2' );
                </script>
                @if ($errors->has('content.1'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content.1') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary">Tạo, Sửa</button>
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