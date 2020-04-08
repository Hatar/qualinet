@extends('layouts.app')

@section('content')


  <!--Start  wrapper -->
  <div class="index2-wrapper">
    <div class="bg bg-color bg-main"></div>
<div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
    <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Mission</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Mission</span>
                </nav>
            </div>
    </div>
</div>
<!--End  wrapper -->


<div class="who-we-are">
    <div class="container">
        <div class="row who-we-are-inner">
            <div class="col-xs-12 col-md-5 col-left pull-right">
                <div class="text">
                    <p>
                        Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.  Labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <p>
                        Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-7 col-right pull-left">
            <img src="{{ asset('qualinet/img/demo/who-we-are.png') }}" alt="" class="img-responsive" />
            </div>
        </div>
    </div>
</div>
<!-- /.who-we-are -->


<div class="container">
    <div class="what-we-do-2 section-index">
        <div class="row">
            <div class="col-md-12">
                <h2 class="q">Votre Mission</h2>
                <h3 class="a">Les meilleurs services de nettoyage</h3>
                <span class="tgs"></span>
            </div>
        </div>
        <div class="wwd-list row">
            <div class="col-md-4">
                <div class="item-what-we-do-2">
                    <a href="#" class="thumb"><img src="{{ asset('qualinet/img/demo/wwd-1.jpg') }}" alt="">/a>
                    <div class="content">
                        <h2 class="title"><a href="#">Nettoyage domestique</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-what-we-do-2">
                    <a href="#" class="thumb"><img src="{{ asset('qualinet/img/demo/wwd-2.jpg') }}" alt=""></a>
                    <div class="content">
                        <h2 class="title"><a href="#">Nettoyage de fenêtres</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-what-we-do-2">
                    <a href="#" class="thumb"><img src="{{ asset('qualinet/img/demo/wwd-3.jpg') }}" alt=""></a>
                    <div class="content">
                        <h2 class="title"><a href="#">Nettoyage des planchers en bois</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.what-we-do-2 -->

@include('component.footer')

@endsection