@extends('layout.app')

@section('title', 'Trainers Edit')

@section('content')
	{!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}

	@include('trainers.form')

	{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

{{--
	<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="name" class="form-control" value="{{$trainer->name}}">
			</div>

			<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block"src="/images/{{$trainer->avatar}}">

			<div class="form-group">
				<label for="">Avatar</label>
				<input type="file" name="avatar">
			</div>

			<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
--}}
@endsection
