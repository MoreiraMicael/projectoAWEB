<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Criar Novo Utilizador</title>
</head>
<body>

	<h1>Criar Novo Utilizador</h1>

	<form action="/rota2" method="post">

		@csrf

		Nome: <input name="nome" value="{{ old('nome') }}">
		@if ( $errors->has('nome'))
			{{ $errors->first('nome') }}
		@endif
		<br>

		Idade: <input name="idade" value="{{ old('idade') }}">
		@if ( $errors->has('idade'))
			{{ $errors->first('idade') }}
		@endif
		<br>

		<input type="submit" value="Gravar">
		
	</form>
	
</body>
</html>