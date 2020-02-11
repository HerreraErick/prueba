@extends('layout.app')

@section('title', 'Trainers Create')

@section('content')
@if ($errors->any())
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach	
	</div>
@endif
	
	{!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

	@include('trainers.form')

	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
	
@endsection
{{--
	<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="">Avatar</label>
				<input type="file" name="avatar">
			</div>

			<button type="submit" class="btn btn-primary">Guardar</button>
	</form>



 <html
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
	<body>

		
		</div>

	</body>
</html>
--}}
