@extends('layouts.app')


@section('content')
    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
    <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
                <div class="page-large-title section-index text-center">
                    <h1>Qui Somme Nous</h1>
                    <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                    <nav class="woocommerce-breadcrumb">
                        <a class="home" href="#">Home</a> / <span>Qui Some Nous</span>
                    </nav>
                </div>
        </div>
    </div>
    <!--End  wrapper -->

    <div class="who-we-are js__background_color" data-background-color="#ffffff">
        <div class="container">
            <div class="row who-we-are-inner">
                <div class="col-md-5 col-left">
                    <h2 class="q">Qui sommes-nous ?</h2>
                    <h3 class="a">NOUS SOMMES LE MEILLEUR NETTOYAGE D'ÉQUIPE</h3>
                    <span class="tgs"></span>
                    <div class="text">
                        <p>
                            Qualinet est une entreprise de services spécialisée dans plusieurs métiers : le nettoyage, l’hygiène 3D.</p>
                        <p>
                            Que vous n’ayez qu’une petite société ou une  tour de bureaux de 20 étages. Que vous soyez un commerçant, un syndic, ou un particulier, Qualinet dispose d’un savoir-faire pour accomplir les exigences de ses clients.                        </p>
                    </div>
                    <a href="#" class="btn-yellow">See more</a>
                </div>
                <div class="col-md-7 col-right">
                <img src="{{ asset('qualinet/img/demo/who-we-are.png') }}" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <!-- /.who-we-are -->


    <div class="fun-facts counter js__counters">
        <div class="container content">
			<div class="text-center margin-bottom-100">
				<h2 class="q">Réalisations de notre entreprise</h2>
				<h3 class="a">Les meilleurs services de nettoyage</h3>
				<span class="tgs"></span>
			</div>
            <div class="row">
                <div class="col-sm-3">
					<div class="item-counter item-gray">
						<div class="counter-icon">
							<i class="fa-icon-paper-plane-o"></i>
						</div>
						<span class="num js__counter_num" data-from="1" data-to="2310">
							2310
						</span>
						<span class="name">
							Project Terminer
						</span>
					</div>
                </div>
                <div class="col-sm-3">
					<div class="item-counter item-gray">
						<div class="counter-icon">
							<i class="fa-icon-thumbs-up"></i>
						</div>
						<span class="num js__counter_num" data-from="1" data-to="1680">
							1680
						</span>
						<span class="name">
							Clients satisfaits
						</span>
					</div>
                </div>
                <div class="col-sm-3">
					<div class="item-counter item-gray">
						<div class="counter-icon">
							<i class="fa-icon-comment-o"></i>
						</div>
						<span class="num js__counter_num" data-from="1" data-to="3152">
							3152
						</span>
						<span class="name">
                            Conseils de nettoyage
						</span>
					</div>
                </div>
                <div class="col-sm-3">
					<div class="item-counter item-gray">
						<div class="counter-icon">
							<i class="fa-icon-users"></i>
						</div>
						<span class="num js__counter_num" data-from="1" data-to="529">
							529
						</span>
						<span class="name">
							Personnel dans le monde
						</span>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.fun-facts -->


    <div class="clients style-yellow">
        <div class="container">
            <div class="list-client">
                <div class="item">
                    <a href="#"><img src="{{ asset('qualinet/img/demo/partner-w-1.png') }}" alt="" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('qualinet/img/demo/partner-w-2.png') }}" alt="" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('qualinet/img/demo/partner-w-3.png') }}" alt="" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('qualinet/img/demo/partner-w-4.png') }}" alt="" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('qualinet/img/demo/partner-w-5.png') }}" alt="" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('qualinet/img/demo/partner-w-6.png') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.clients -->


    @include('component.footer')
@endsection