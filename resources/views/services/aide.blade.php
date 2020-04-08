@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Aide à domicile</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Aide à domicile</span>
                </nav>
            </div>
        </div>
    </div>
    <!--End  wrapper -->


    <div class="what-we-do" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content text-center">
                        <p>
                            Une aide concrète pour les taches domestiques.
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
                                entretien ménager
                            </h4>
                        </div><!-- /.text-wrap -->
                    </div><!-- /.item-->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                    <div class="bg-img js__background_image" data-background-image="{{ asset('qualinet/img/demo/wwd-hover-bg.png') }}"></div>
                        <div class="text-wrap">
                            <img src="{{asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4 style="font-size: 15px;">
                                Grand ménage, lavage des vitres
                            </h4>
                        </div><!-- /.text-wrap -->
                    </div><!-- /.item-->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                    <div class="bg-img js__background_image" data-background-image="{{ asset('qualinet/img/demo/wwd-hover-bg.png') }}"></div>
                        <div class="text-wrap">
                            <img src="{{asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4>
                                entretien des vêtements
                            </h4>
                        </div><!-- /.text-wrap -->
                    </div><!-- /.item-->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                    <div class="bg-img js__background_image" data-background-image="{{ asset('qualinet/img/demo/wwd-hover-bg.png') }}"></div>
                        <div class="text-wrap">
                            <img src="{{asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4>
                                préparation des repas
                            </h4>
                        </div><!-- /.text-wrap -->
                    </div><!-- /.item-->
                </div>
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="item-what-we-do">
                        <div class="bg-color"></div>
                    <div class="bg-img js__background_image" data-background-image="{{ asset('qualinet/img/demo/wwd-hover-bg.png') }}"></div>
                        <div class="text-wrap">
                            <img src="{{asset('qualinet/img/demo/wwd-icon-2.png') }}" height="24" width="22" alt="" />
                            <h4>
                                commissions diverses.
                            </h4>
                        </div><!-- /.text-wrap -->
                    </div><!-- /.item-->
                </div>
            </div>
        </div>
    </div>
    <!-- /.what-we-do -->



    <div class="who-we-are js__background_color" data-background-color="#ffffff">
        <div class="container">
            <div class="row who-we-are-inner">
                <div class="col-md-5 col-left">
                    <h2 class="q">Aide à la personne</h2>
                    <span class="tgs"></span>
                    <div class="text">
                        <p>
                            Aider, c est une chose. Etre présent, c'en est une autre. Avec honnêteté, discrétion et serviabilité, nous sommes la chaque fois que c'est important
                        </p>
                        <p>
                            De jour, de soir, de fin de semaine, notre équipe de préposé(e)s saura répondre à vos besoins quotidiens
                        </p>
                    </div>
                    <ul class="list-unstyled">
                        <li style="font-size: 16px;letter-spacing: .8px;color: #909090;margin-bottom:10px">Assistance (lever, coucher, transfert)</li>
                        <li style="font-size: 16px;letter-spacing: .8px;color: #909090;">Soins d'hygiène.</li>
                    </ul>
                </div>
                <div class="col-md-7 col-right">
                <img src="{{ asset('qualinet/img/demo/who-we-are.png') }}" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <!-- /.who-we-are -->


    @include('component.footer')


@endsection