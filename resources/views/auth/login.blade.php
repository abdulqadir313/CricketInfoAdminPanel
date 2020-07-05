@extends('layouts.app')
@section('title', 'Login')
@section('content')
<section class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign In To CricketInfo</h3>
			<div class="login-form">
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
				<div class="form-group form-floating-label">
					<input id="email" name="email" type="email" value="qadirabdul313@gmail.com" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
					<label for="username" class="placeholder">{{ __('E-Mail Address') }}</label>
                                         @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" value="admin@123" class="form-control input-border-bottom @error('password') is-invalid @enderror" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
					<label for="password" class="placeholder">{{ __('Password') }}</label>
					
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="custom-control-label" for="rememberme">{{ __('Remember Me') }}</label>
					</div>
					@if (Route::has('password.request'))
                                            <a class="link float-right" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
				</div>
				<div class="form-action mb-3">
                                        <button type="submit" class="btn btn-primary btn-rounded btn-login">
                                            {{ __('Login') }}
                                        </button>
				</div>
                                </form>
			</div>
		</div>
	</div>
</section>
@endsection
