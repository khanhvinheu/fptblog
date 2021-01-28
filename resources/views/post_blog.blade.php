
@extends('layouts.app')
@section('title', 'AddBlog')
{{--
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}
@section('content')
    <h2 class="title-add-blog">THÊM MỚI BÀI VIẾT</h2>
    <form>
        <div class="form-group">
        <label for="usr">Danh mục</label>
        <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
        <label for="pwd">Tiêu đề</label>
        <input type="text" class="form-control" id="pwd">
        </div>
        <div class="form-group">
        <label for="pwd">Ảnh bìa</label>
        <input type="file" class="form-control" id="pwd">
        </div>
        <div class="form-group">
        <label for="pwd">Nội dung</label>
        <textarea name=text id="text" cols="30" rows="10"></textarea>
        <script src={{ url('ckeditor/ckeditor.js') }}></script>
        <script>
        CKEDITOR.replace( 'text', {
            filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

        } );
        </script>
        @include('ckfinder::setup')
        </div>
        <div>
            <button type="button" class="btn btn-success">Thêm</button>
            <button type="button" class="btn btn-danger">Hủy</button>
        </div>
    </form>
@stop

