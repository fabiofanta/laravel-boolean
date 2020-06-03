@php
	$photos = [
		[
		'id' => 1,
		'title' => 'Titolo foto 1',
		],
		[
		'id' => 2,
		'title' => 'Titolo foto 2',
		],
		[
		'id' => 3,
		'title' => 'Titolo foto 3',
		],
		[
		'id' => 4,
		'title' => 'Titolo foto 4',
		],
	];
@endphp
@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Photos</li>
				  </ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-10">
				<div class="row">
					<div class="col-8">
						<h2>Photos</h2>
					</div>
					<div class="offset-2 col-2">
						<a href="">Crea una photo</a>
					</div>
				</div>
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th colspan="3">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($photos as $key => $photo)
							<tr>
								<td>{{$photo['id']}}</td>
								<td>{{$photo['title']}}</td>
								<td><a class="btn btn-primary" href="#">Visualizza</a></td>
								<td><a class="btn btn-info" href="#">Modifica</a></td>
								<td><form class="" action="" method="post">
									<input class="btn btn-danger" type="submit" name="" value="Elimina">
								</form></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection
