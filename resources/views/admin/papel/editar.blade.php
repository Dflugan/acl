@extends('layouts.app')

@section('content')
<div class="container">
	<h3 class="center">Editar Papeis</h3>
	@include('admin._caminho')	

	<form action="{{route('papeis.update', $registro->id)}}" method="post">
		
		{{csrf_field()}}
		{{method_field('PUT')}}
		@include('admin.papel._form')

		<button class="btn blue">Atualizar</button>
	</form>		
</div>

@endsection