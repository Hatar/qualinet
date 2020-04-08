@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Secteurs industriel et commercial</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Secteurs industriel et commercial</span>
                </nav>
            </div>
        </div>
    </div>
    <!--End  wrapper -->


    <div class="what-we-do">
        <div class="container">
            <div class="row items">
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                    <div class="bg-img js__background_image" data-background-image="{{ asset('qualinet/img/demo/wwd-hover-bg.png') }}"></div>
                        <div class="text-wrap">
                            <img src="{{asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Services de conciergerie
                            </h4>
                        </div><!-- /.text-wrap -->
                    </div><!-- /.item-->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyage de tapis
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-3.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Dégarnissage et cirage de planchers
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-4.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyage de fenêtres
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-5.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyage de meubles
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-6.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyage d'équipement industriel
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-6.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyage à pression
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-6.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyage de conduits d’aération et systèmes de ventilation
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                        <div class="bg-img"></div>
                        <div class="text-wrap">
                            <img src="{{ asset('qualinet/img/demo/wwd-icon-6.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Remplacement d’ampoules et de ballasts
                            </h4>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.what-we-do -->

    @include('component.footer')


@endsection