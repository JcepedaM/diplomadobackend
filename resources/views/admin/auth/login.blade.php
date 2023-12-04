@extends('admin.layouts.plain')

@section('content')
<h1>Ingresar</h1>
<p class="account-subtitle">Accede a nuestro panel de control</p>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<!-- Form -->
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Password">
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block" type="submit">Ingresar</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center forgotpass"><a href="{{route('password.request')}}">Se te olvido la contraseña?</a></div>
<div class="text-center dont-have">No tienes una cuenta? <a href="{{route('register')}}">Registrate</a></div>
@endsection