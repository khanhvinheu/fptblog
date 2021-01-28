
@extends('layouts.app')
@section('title', 'AddBlog')
{{--
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}
@section('content')
    <p>This is my body content</p>
    <textarea name=text id="text" cols="30" rows="10"></textarea>
    <script src={{ url('ckeditor/ckeditor.js') }}></script>
    <script>
    CKEDITOR.replace( 'text', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',

    } );
    </script>
    @include('ckfinder::setup')
@stop

