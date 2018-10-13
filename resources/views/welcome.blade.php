@extends("layouts.web")
@section("title", "hello")
@section("idPage", "landingHome")

@section('content')
	<section id="home" class="home-header">
		<div class="hh-form">
			<div class="container h-100">
				<div class="row align-items-center justify-content-between h-100">
					<div class="col-sm-5 col-md-4">
						<p class="hh-subtitle mb-2">Join the change</span>
						<h1 class="hh-title display-4">Space service that moves work forward</h1>
					</div>
					<div class="col-sm-5">
						<div class="card">
							<div class="card-body">
								<h2 class="card-title h4">Get started for free</h2>
								<div class="form-group">
									<label for="inputEmail" class="sr-only">Email address</label>
									<input type="email" id="loginEmail" class="form-control" placeholder="Email address" required autofocus />
								</div>
								<a href="#" class="btn btn-primary btn-block">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="partnersCarrousel" class="hh-partners carousel carrousel-multiple slide" data-ride="carousel">
			<div class="container">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<a class="hh-partner" href="#" target="_blank">
							<img title="Veritas" src="{{URL::asset('/img/partners/veritas.svg')}}" />
						</a>
					</div>
					<div class="carousel-item">
						<a class="hh-partner" href="#" target="_blank">
							<img title="Club Dir" src="{{URL::asset('/img/partners/dir.svg')}}" />
						</a>
					</div>
					<div class="carousel-item">
						<a class="hh-partner" href="#" target="_blank">
							<img title="Nostrumtas" src="{{URL::asset('/img/partners/nostrum.svg')}}" />
						</a>
					</div>
					<div class="carousel-item">
						<a class="hh-partner" href="#" target="_blank">
							<img title="New Balance" src="{{URL::asset('/img/partners/newBalance.svg')}}" />
						</a>
					</div>
					<div class="carousel-item">
						<a class="hh-partner" href="#" target="_blank">
							<img title="Veritas" src="{{URL::asset('/img/partners/saladMarket.svg')}}" />
						</a>
					</div>
					<div class="carousel-item">
						<a class="hh-partner" href="#" target="_blank">
							<img title="GoPro" src="{{URL::asset('/img/partners/goPro.svg')}}" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="features" class="home-features">
		<div class="container">
			<div class="card-deck card-deck-separated">
				<div class="card">
					<div class="card-body">
						<object type="image/svg+xml" title="Choose" data="{{URL::asset('/img/icons/choose.svg')}}"></object>
						<h2 class="h5 card-title">Card title</h2>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec lorem quis erat consectetur commodo quis eget dolor.</p>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<object type="image/svg+xml" title="Cook" data="{{URL::asset('/img/icons/cook.svg')}}"></object>
						<h2 class="h5 card-title">Card title</h2>
						<p class="card-text">Phasellus sed urna sit amet purus euismod mollis vitae id nulla. Aenean consequat luctus justo, rhoncus pretium tortor feugiat eget. Curabitur eu ex hendrerit, vulputate sapien et, eleifend urna. </p>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<object type="image/svg+xml" title="Fun" data="{{URL::asset('/img/icons/fun.svg')}}"></object>
						<h2 class="h5 card-title">Card title</h2>
						<p class="card-text">Curabitur ac tristique nunc. Pellentesque felis sem, tincidunt nec purus ac, posuere ullamcorper sem.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="workFlow" class="home-workflow">
		<div class="container">
			<h2 class="h1">Como funciona</h2>
			<div class="row align-items-md-center justify-content-between">
				<div class="col-md-6 order-md-2">
					<h3 class="h2">Manage projects</h3>
					<p>This is where we sit down, grab a cup of coffee and dial in the details. Understanding the task at hand and ironing out the wrinkles is key. Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
				</div>
				<div class="col-md-5 order-md-1">
					<figure class="device-laptop">
						<object type="image/svg+xml" data="{{URL::asset('/img/devices/laptop.svg')}}"></object>
						<img title="" src="{{URL::asset('/img/screen.jpg')}}" />
					</figure>
				</div>
			</div>

			<div class="row align-items-md-center justify-content-between">
				<div class="col-md-6">
					<h3 class="h2">Monitor details</h3>
					<p>Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs. The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
				</div>
				<div class="col-md-5">
					<figure class="device-laptop">
						<object type="image/svg+xml" data="{{URL::asset('/img/devices/laptop.svg')}}"></object>
						<img title="" src="{{URL::asset('/img/screen.jpg')}}" />
					</figure>
				</div>
			</div>

			<div class="row align-items-md-center justify-content-between">
				<div class="col-md-6 order-md-2">
					<h3 class="h2">Measure performance</h3>
					<p>We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation. Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already.</p>
				</div>
				<div class="col-md-5 order-md-1">
					<figure class="device-laptop">
						<object type="image/svg+xml" data="{{URL::asset('/img/devices/laptop.svg')}}"></object>
						<img title="" src="{{URL::asset('/img/screen.jpg')}}" />
					</figure>
				</div>
			</div>
		</div>
	</section>
		
	<script>
		$(function() {
			carruselMultiple();

			$(".carrousel").carousel({
				interval: 3500,
				pause: "hover"
			});
		});
	</script>
@endsection