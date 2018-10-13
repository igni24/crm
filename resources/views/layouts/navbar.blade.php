<nav class="navbar navbar-expand-lg navbar-dark navbar-start">
	<div class="container">
		<a href="#" class="navbar-brand">
			<img src="img/logo.svg" />
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbarSupportedContent" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a href="login" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<button type="button" class="btn btn-primary">Pruebalo</button>
				</li>
			</ul>
		</div>
	</div>
</nav>

<script>
	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if(scroll > 50) $("nav.navbar ").addClass("navbar-light").removeClass("navbar-dark navbar-start");
			else $("nav.navbar ").removeClass("navbar-light").addClass("navbar-dark navbar-start");
		});
	});
</script>