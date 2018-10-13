@extends("layouts.modal")
@section("modalId", "recoverLogin")
@section("modalTitle", "Recuperar contraseña")
@section("modalContent")
	<div class="modal-body">
		<form method="POST" action="{{ route('password.request') }}">
			@csrf

			<div class="form-group">
				<label for="email">{{ __('E-Mail Address') }}</label>
				<input type="email" name="email" id="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autofocus />
			</div>
			<div class="form-group">
				<label for="password">{{ __('Password') }}</label>
				<input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required />
			</div>
			<div class="form-group">
				<label for="password-confirm">{{ __('Confirm Password') }}</label>
				<input type="password" name="password_confirmation" id="password-confirm" class="form-control" required />
			</div>

			<button type="submit" class="btn btn-primary">
				{{ __('Reset Password') }}
			</button>
		</form>
	</div>
@endsection