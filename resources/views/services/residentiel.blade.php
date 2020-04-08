@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Secteur résidentiel</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Secteur résidentiel</span>
                </nav>
            </div>
        </div>
    </div>
    <!--End  wrapper -->


    <div class="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content text-center">
                        <p>
                            Époussetage et nettoyage des plinthes, cadres <br> luminaires, stores, moulures, ventilateurs, meubles, bibelots, vitres, miroirs, écrans, etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row items">
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                    <div class="bg-img js__background_image" data-background-image="{{ asset('qualinet/img/demo/wwd-hover-bg.png') }}"></div>
                        <div class="text-wrap">
                            <img src="{{asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4>
                                Nettoyer et laver les planchers et marches
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
                                Vider et nettoyer les poubelles;
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
                                Passer l’aspirateur sous et sur les meubles en tissu;
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
                                Nettoyer les portes-fenêtres à l’extérieur et à l’intérieur ;
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
                                Nettoyer l’extérieur des appareils ménagers, la robinetterie, la baignoire ainsi que les lavabos;

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
                                Nettoyer et désinfecter toutes les poignées de portes, thermostats et poignées de chasse d’eau;
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