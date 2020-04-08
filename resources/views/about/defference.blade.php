@extends('layouts.app')

@section('content')

  <!--Start  wrapper -->
  <div class="index2-wrapper">
    <div class="bg bg-color bg-main"></div>
<div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
    <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Ce qui fait la différence</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Ce qui fait la différence</span>
                </nav>
            </div>
    </div>
</div>
<!--End  wrapper -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content text-center">
                <div class=" section-index text-center">
                  <div class="content">
                    <p>
                        C’est grâce à son savoir-faire admirable que Qualinet à su imposer sa vision dans un domaine en pleine expansion et en pleine mutation. L’uniformisation des méthodes d’exécution et des dispositifs ainsi que les normes mises par Qualinet  ont permis la création d’un service d’une constance et d’une qualité inégalables.
                    </p>
                    <p>
                        Chaque employé reçoit une formation aux techniques de travail et aux matériels  et produits utilisés. Nos collaborateurs sont des experts dans tout ce qui concerne le nettoyage, la dératisation et la désinsectisation.
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('component.footer')

@endsection