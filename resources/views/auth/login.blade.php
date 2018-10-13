@extends("layouts.main")

@section("title", "hello")

@section('content')
	<div id="formLogin" class="container-fluid">
		<div class="row align-items-center justify-content-center">
			<div class="col-9 col-md-4 col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="{{ route('login') }}" method="POST">
							@csrf
							<div class="text-center">
								<img src="{{URL::asset('/img/logo.svg')}}" />
							</div>
							<h1 class="h3 mb-3">Please sign in</h1>
							<div class="form-group">
								<label for="inputEmail" class="sr-only">Email address</label>
								<input type="email" id="loginEmail" class="form-control" placeholder="Email address" required autofocus />
							</div>
							<div class="form-group">
								<label for="inputPassword" class="sr-only">Password</label>
								<input type="password" id="loginPass" class="form-control" placeholder="Password" required>
								<small class="help-block">
									{{-- <a href="#" data-toggle="modal" data-target="#exampleModal">Has olvidado tu contraseña?</a> --}}
									<a href="#" data-toggle="modal" data-target="#recoverLogin">Has olvidado tu contraseña?</a>
								</small>
							</div>
							<div class="form-group custom-control custom-checkbox">
								<input type="checkbox" name="" id="loginRemember" class="custom-control-input" />
								<label for="loginRemember" class="custom-control-label">Remember me</label>
							</div>
							<button class="btn btn-primary btn-lg btn-block" type="submit">Sign in</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- @extends("auth.ejemplo") --}}
	@extends("auth.passwords.recover")
@endsection