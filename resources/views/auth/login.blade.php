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
								<input type="password" id="loginPass" class="form-control" placeholder="Password" required>
								<small class="help-block">
									<a href="#" data-toggle="modal" data-target="#exampleModal">Has olvidado tu contraseña?</a>
								</small>
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

	<div id="exampleModal" class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					modal example
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		// $('#exampleModal').modal("show")
	</script>
@endsection