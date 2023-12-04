@extends('admin.layouts.plain')

@section('content')
<h1>¿Has olvidado tu contraseña?</h1>
<p class="account-subtitle">Ingrese su correo electrónico para obtener un enlace para restablecer su contraseña</p>
<!-- Form -->
<form action="{{route('password.request')}}" method="post">
	@csrf
    <input type="hidden" name="token" value="{{request()->token}}">
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
    <div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Enter new password">
	</div>
    <div class="form-group">
		<input class="form-control" name="password_confirmation" type="password" placeholder="Repeat new password">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Restablecer la contraseña</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Recuerdas tu contraseña? <a href="{{route('login')}}">Ingresar</a></div>
@endsection