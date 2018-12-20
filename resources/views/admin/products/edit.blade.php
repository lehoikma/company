@extends('admin.layouts.app')
@section('title-content')
    Sửa Sản Phẩm
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
        <form action="{{route('prd_edit_save')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-6">
                <label>Tên Sản Phẩm (Tiếng Việt)<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="hidden" name="id[]" class="form-control" value="{{$prd[0]['id'] }}">
                    <input type="text" name="name[0]" class="form-control" placeholder="Nhập tên sản phẩm..." value="{{$prd[0]['name']}}">
                </div>
            </div>
            <div class="col-md-6">
                <label>Tên Sản Phẩm( Tiếng Anh)</label>
                <div class="form-group">
                    <input type="hidden" name="id[]" class="form-control" value="{{$prd[1]['id'] }}">
                    <input type="text" name="name[1]" class="form-control" placeholder="Nhập tên sản phẩm tiếng anh..." value="{{$prd[1]['name']}}">
                </div>
            </div>
            <div class="col-md-8">
                <label>Danh Mục Sản Phẩm:</label>
                <select class="form-control" id="sel1" name="select_cate_prd">
                    <option value=""></option>
                    @foreach($categoryPrd as $value)
                        <option value="{{$value['category_products_id']}}" {{ $value['category_products_id']==$prd[0]['category_product_id'] ? 'selected' : ''}}>{{$value['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Mô tả về sản phẩm <span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content[0]" rows="7" class="form-control ckeditor">{{$prd[0]['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Mô tả về sản phẩm <span style="color: red">(*)</span></label>
                <textarea id="editor2" name="content[1]" rows="7" class="form-control ckeditor">{{$prd[1]['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                    CKEDITOR.replace( 'editor2' );
                </script>
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label>Giá Bán :</label>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Nhập giá" value="{{$prd[0]['price'] or $prd[1]['price']}}">
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
                <img src="/upload/{{ $prd[0]['image'] }}" style="margin-top: 20px; width: 150px">
            </div>
            <div class=" col-md-12" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Sửa Sản Phẩm</button>
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