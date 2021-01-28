
@extends('layouts.app')
@section('title', 'Home')
{{--
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}
@section('content')
    {{-- <p>This is my body content</p> --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="../img/1.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="../img/2.png" alt="" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@stop

