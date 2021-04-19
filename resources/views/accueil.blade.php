@extends('main.template')

@section('content')
    <!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			@foreach ($logoData as $logo)
				<div class="hero-center">
					@if ($logo->created_at === NULL && $logo->updated_at === NULL)
						<div class="mb-5">
							<img src="{{$logo->src}}" style="height:200px;">
							<p>Get your freebie template now!</p>
						</div>
					@else
						<div class="mb-5">
							<img src="{{asset('img/'.$logo->src)}}" style="height:200px;">
							<p>Get your freebie template now!</p>
						</div>
					@endif
				</div>	
			@endforeach
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($bannièreData as $bannière)
				<div class="item  hero-item" data-bg="{{$bannière->src}}"></div>
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($servicesRand as $services)
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$services->services_icone}}"></i>
								</div>
								<h2>{{$services->services_titre}}</h2>
								<p>{{$services->services_texte}}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					@foreach ($homeData as $home)
						@if ($home->balise == 'Home : presentation, titre')
							<h2>{{$home->texte}}</h2>
						@endif
					@endforeach
				</div>
				<div class="row">
					<div class="col-md-6">
						@foreach ($homeData as $home)
							@if ($home->balise == 'Home : presentation, texte1')
								<p>{{$home->texte}}</p>
							@endif
						@endforeach
					</div>
					<div class="col-md-6">
						@foreach ($homeData as $home)
							@if ($home->balise == 'Home : presentation, texte2')
								<p>{{$home->texte}}</p>
							@endif
						@endforeach
					</div>
				</div>
				<div class="text-center mt60">
					@foreach ($homeData as $home)
						@if ($home->balise == 'Home : presentation, boutton')
							<a href="#contact" class="site-btn">{{$home->texte}}</a>
						@endif
					@endforeach
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							@foreach ($homeData as $home)
								@if ($home->balise == 'Home : video')
									<img src="img/video.jpg" alt="">
									<a href="{{$home->texte}}" class="video-popup">
										<i class="fa fa-play"></i>
									</a>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						@foreach ($homeData as $home)
							@if ($home->balise == 'Home : testimonial, titre')
								<h2>{{$home->texte}}</h2>
							@endif
						@endforeach
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($temoignageDataOrder as $temoignage)
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$temoignage->témoignageTexte}}.</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{$temoignage->team->photoSrc}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$temoignage->team->prénom}} {{$temoignage->team->nom}}</h2>
                        				<p>{{$temoignage->team->fonction}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
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


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@foreach ($homeData as $home)
					@if ($home->balise == 'Home : team, titre')
						<h2>{{$home->texte}}</h2>
					@endif
				@endforeach
			</div>
			<div class="row">
				<!-- single member -->
				@foreach ($teamRand as $team)
					<div class="col-sm-4">
						<div class="member">
							@if ($logo->created_at === NULL && $logo->updated_at === NULL)
								<img src="{{$team->photoSrc}}" alt="" style="height:435px">
							@else
								<img src="{{asset('img/'.$team->photoSrc)}}" alt="">
							@endif
							<h2>{{$team->prénom}} {{$team->nom}}</h2>
							<h3>{{$team->fonction}}</h3>
						</div>
					</div>
				@endforeach
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				@foreach ($teamRand2 as $team)
					<div class="col-sm-4">
						<div class="member">
							@if ($team->created_at === NULL && $team->updated_at === NULL)
								<img src="{{$team->photoSrc}}" alt="" style="height:435px">
							@else
								<img src="{{asset('img/'.$team->photoSrc)}}" alt="">
							@endif
							<h2>{{$team->prénom}} {{$team->nom}}</h2>
							<h3>{{$team->fonction}}</h3>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					@foreach ($homeData as $home)
						@if ($home->balise == 'Home : ready, titre')
							<h2>{{$home->texte}}</h2>
						@endif
					@endforeach
					@foreach ($homeData as $home)
						@if ($home->balise == 'Home : ready, sous-titre')
							<p>{{$home->texte}}</p>
						@endif
					@endforeach
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						@foreach ($homeData as $home)
							@if ($home->balise == 'Home : ready, boutton')
								<a href="" class="site-btn btn-2">{{$home->texte}}</a>
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->
	<div id="contact">
		@include('partials.contactForm')
	</div>

	
@endsection