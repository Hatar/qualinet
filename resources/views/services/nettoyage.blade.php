@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Nettoyage après sinistre et après chantier</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Nettoyage après sinistre et après chantier</span>
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
                        Le nettoyage/lessivage des murs
                    </p>
                    <h4>
                        La désinfection des sanitaires et de la cuisine s’il y en a une
                    </h4>
                    <h4>
                        L’évacuation des déchets et résidus (gravats, bris de plâtre, sciure de bois…) et le dépoussiérage/balayage/aspiration
                    </h4>
                    <h4>
                        Le nettoyage des diverses salissures (traces de colles, de peinture…)
                    </h4>
                    <h4>
                        Le dégraissage/grattage/lavage des vitres et des rebords de fenêtres
                    </h4>
                    <h4>
                        La remise en état des sols (parquets, carrelages, sols PVC…)
                    </h4>
                    <h4>
                        Le dépoussiérage et le nettoyage des placards
                    </h4>
                    <h4>
                        L’aération du bâtiment
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.who-we-are -->

    @include('component.footer')


@endsection