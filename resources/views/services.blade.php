@extends('main.template')

@section('content')
    <!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach ($servicesData as $service)
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->services_icone}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->services_titre}}</h2>
								<p>{{$service->services_texte}}</p>
							</div>
						</div>	
					</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@foreach ($servicesModifData as $services)
					@if ($services->balise == 'servicesServices-primésTitre')
						<h2>{{$services->texte}}</h2>
					@endif
				@endforeach
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicesDataOrderGauche as $service)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->services_titre}}</h2>
								<p>{{$service->services_texte}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->services_icone}}"></i>
							</div>
						</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicesDataOrderDroite as $service)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$service->services_titre}}</h2>
								<p>{{$service->services_texte}}</p>
							</div>
							<div class="icon">
								<i class="{{$service->services_icone}}"></i>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="text-center mt100">
				@foreach ($servicesModifData as $services)
					@if ($services->balise == 'servicesServices-primésBoutton')
						<a href="" class="site-btn">{{$services->texte}}</a>
					@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-1.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-2.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-12">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-3.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


	@include('partials.contactForm')

@endsection