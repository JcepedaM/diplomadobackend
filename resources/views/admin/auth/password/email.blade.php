@extends('admin.layouts.plain')

@section('content')
<h1>¿Has olvidado tu contraseña?</h1>
<p class="account-subtitle">Ingresa tu email para recuperar la contraseña</p>
<!-- Form -->
<form action="{{route('password.request')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Enviar</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Recuerdas tu contraseña? <a href="{{route('login')}}">Ingresar</a></div>
@endsection