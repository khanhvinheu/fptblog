
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
      <div class="title-blog">
        <h4>BÀI VIẾT NỔI BẬT</h4>
      </div>
      <div class="blog">
          <div class="row">
            <div class="col-sm-6">
                <div class="img-blog-hot">
                    <img src="../img/4.png" alt="" style="width: 100%;">
                </div>
            </div>
            <div class="col-sm-6 item-blog">
                <div class="row">
                    <div class="col-sm-4 col-xs-4">
                        <div class="img-blog-hot">
                            <img src="../img/item1.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <h3 class="title-item-blog">
                            GIỚI THIỆU BẠN BÈ SỬ DỤNG INTERNET, TRUYỀN HÌNH FPT NHẬN QUÀ LAPTOP ‘SIÊU MỎNG’
                        </h3>
                        <span>
                            <i style="font-size:16px" class="fa">&#xf073;</i> 01/01/2021
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item-blog">
                <div class="row">
                    <div class="col-sm-4 col-xs-4">
                        <div class="img-blog-hot">
                            <img src="../img/item1.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <h3 class="title-item-blog">
                            GIỚI THIỆU BẠN BÈ SỬ DỤNG INTERNET, TRUYỀN HÌNH FPT NHẬN QUÀ LAPTOP ‘SIÊU MỎNG’
                        </h3>
                        <span>
                            <i style="font-size:16px" class="fa">&#xf073;</i> 01/01/2021
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item-blog">
                <div class="row">
                    <div class="col-sm-4 col-xs-4">
                        <div class="img-blog-hot">
                            <img src="../img/item1.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <h3 class="title-item-blog">
                            GIỚI THIỆU BẠN BÈ SỬ DỤNG INTERNET, TRUYỀN HÌNH FPT NHẬN QUÀ LAPTOP ‘SIÊU MỎNG’
                        </h3>
                        <span>
                            <i style="font-size:16px" class="fa">&#xf073;</i> 01/01/2021
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-expand">
            <br>
            <button type="button" class="btn btn-ex">Xem Thêm</button>
        </div>
      </div>
@stop

