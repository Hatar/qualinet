@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Conciliation travail-famille</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Conciliation travail-famille</span>
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
                        Vous manquez de temps pour votre entretien ménager? Nous vous comprenons, il y a tant de chose à faire.
                    </p>
                    <p>
                        Quelques unes des taches effectuées :
                    </p>
                    <h4>
                        nettoyer la cuisine à la salle de bain.
                    </h4>
                    <h4>
                        épousseter les meubles, les cadres et les plinthes
                    </h4>
                    <h4>
                        Passer l'aspirateur, laver les planchers ou toutes taches sur demande.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.who-we-are -->


    @include('component.footer')


@endsection