@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Peinture et bricolage</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Peinture et bricolage</span>
                </nav>
            </div>
        </div>
    </div>
    <!--End  wrapper -->

    <div class="who-we-are js__background_color" style="padding:50px 0" data-background-color="#ffffff">
        <div class="container">
            <div class="row who-we-are-inner">
                <div class="col-md-12">
                    <p>
                        Qualinet  met  disposition un personnel peintre, des décorateurs et des techniciens spécialisés dans plusieurs domaines afin de satisfaire tous les besoins de ses clients.
                    </p>
                    <p>
                        Quelques services offerts :
                    </p>

                    <h4>
                        Achat et installation des climatiseurs (Air conditionné)
                    </h4>
                    <h4>
                        Plomberie/ électricité.
                    </h4>
                    <h4>
                        Peinture des façades et des intérieurs.
                    </h4>
                    <h4>
                        Décorations.
                    </h4>
                    <h4>
                        Installation de moustiquaires amovibles.
                    </h4>
                    <h4>
                        Et bien d’autres (selon les besoin des clients).
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.who-we-are -->


    @include('component.footer')


@endsection