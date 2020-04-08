@extends('layouts.app')

@section('content')

    <!--Start  wrapper -->
    <div class="index2-wrapper">
        <div class="bg bg-color bg-main"></div>
            <div class="bg bg-image has-parallax js__parallax js__background_image" data-background-image="{{ asset('qualinet/assets/index2-bg.jpg') }}"></div>
        <div class="content">
            <div class="page-large-title section-index text-center">
                <h1>Contact Us</h1>
                <img src="{{ asset('qualinet/img/icon-wave-white.png') }}" alt="">
                <nav class="woocommerce-breadcrumb">
                    <a class="home" href="#">Home</a> / <span>Contact Us</span>
                </nav>
            </div>
        </div>
    </div>
    <!--End  wrapper -->


	<div class="container padding-top-75">
		<div class="row">
			<div class="col-md-6">
				<div class="box-contact">
					<h2 class="title">Contact Info</h2>
					<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
					<ul class="contact-list">
						<li>
							<div class="item-contact-info">
								<strong>Address:</strong>
								<span>1028 Wall Avenue - New York City<br>NY - USA</span>
							</div>
						</li>
						<li>
							<div class="item-contact-info">
								<strong>Email:</strong>
								<span>
									<a href="https://demo.ninjateam.org/cdn-cgi/l/email-protection#177e79717857747b72767962673974787a"><span class="__cf_email__" data-cfemail="b3daddd5dcf3d0dfd6d2ddc6c39dd0dcde">[email&#160;protected]</span></a><br>
									<a href="https://demo.ninjateam.org/cdn-cgi/l/email-protection#9df5f8f1edddfef1f8fcf3e8edb3fef2f0"><span class="__cf_email__" data-cfemail="deb6bbb2ae9ebdb2bbbfb0abaef0bdb1b3">[email&#160;protected]</span></a>
								</span>
							</div>
						</li>
						<li>
							<div class="item-contact-info">
								<strong>Phone & Fax:</strong>
								<span>
									<a href="tel:1234567890">+1 123 456 7890</a><br>
									<a href="tel:1234568900">+1 123 456 8900</a>
								</span>
							</span>
						</li>
						<li>
							<div class="item-contact-info">
								<strong>Social network:</strong>
								<ul class="item-contact-social-list">
									<li><a href="#" class="fa-icon-facebook-square"></a></li>
									<li><a href="#" class="fa-icon-twitter"></a></li>
									<li><a href="#" class="fa-icon-pinterest"></a></li>
									<li><a href="#" class="fa-icon-instagram"></a></li>
									<li><a href="#" class="fa-icon-skype"></a></li>
									<li><a href="#" class="fa-icon-dribbble"></a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box-contact">
					<h2 class="title">Contact Form</h2>
					<form action="#">
						<input type="text" class="input-text-contact" placeholder="Name">
						<input type="email" class="input-text-contact" placeholder="Email Address">
						<textarea cols="30" rows="10" class="input-text-contact" placeholder="Message"></textarea>
						<input type="submit" value="SEND NOW" class="inp-submit btn-blue">
					</form>
				</div>
			</div>
		</div>
    </div>

    <div id="js__map_1" class="map-full js__map" data-lat="33.320351" data-lng="-111.907141"></div>


    @include('component.footer')


@endsection