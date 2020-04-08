@extends('layouts.app')

@section('content')

  <!--Start  wrapper -->
  <div class="index2-wrapper">
    <div class="bg bg-color bg-main"></div>
<div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
    <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Notre engagement</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Notre engagement</span>
                </nav>
            </div>
    </div>
</div>
<!--End  wrapper -->

@include('component.footer')

@endsection