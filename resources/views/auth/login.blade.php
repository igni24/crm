@extends("layouts.main")

@section("title", "hello")

@section('content')
	<div id="formLogin" class="container-fluid">
		<div class="row align-items-center justify-content-center">
			<div class="col-9 col-md-3">
				<div class="card">
					<div class="card-body">
						<form action="{{ route('login') }}" method="POST">
							@csrf
							<div class="text-center">
								<img src="http://127.0.0.1:8000/img/logo.svg" />
							</div>
							<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
							<div class="form-group">
								<label for="inputEmail" class="sr-only">Email address</label>
								<input type="email" id="loginEmail" class="form-control" placeholder="Email address" required autofocus />
							</div>
							<div class="form-group">
								<label for="inputPassword" class="sr-only">Password</label>
								<input type="password" id="loginPass" class="form-control" placeholder="Password" required="">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" id="loginRemember" value="" />
								<label for="loginRemember" class="form-check-label">Remember me</label>
							</div>
							<button class="btn btn-primary btn-lg btn-block" type="submit">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection