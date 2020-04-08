@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Répit accompagnement</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Répit accompagnement</span>
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
                        Pour les proches ? Quelques heures de répit pour avoir encore des moments de qualité lorsque survient la maladie.
                    </p>
                    <h4>
                        Assurer une présence auprès de personnes ayant besoin de surveillance.
                    </h4>
                    <h4>
                        Faire participer le client à différentes activités.
                    </h4>
                    <h4>
                        Accompagner le client lors de sorties.
                    </h4>
                    <h4>
                        Entretien ménager léger.
                     </h4>
                     <h4>
                        Préparation de repas léger.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.who-we-are -->


    @include('component.footer')


@endsection