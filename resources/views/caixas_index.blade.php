@extends('template')

@section('titulo', 'Lista de Caixas')

@section('corpo')

<ul>

	@foreach ($caixas as $uma_caixa)

	<li>{{ $uma_caixa->nome }}</li>

	@endforeach
	
</ul>

@endsection