@php
	$categories =  [
		  [
			'id' => 1,
			'name' =>'Miscellanea'
		  ],
		  [
			'id' => 2,
			'name' =>'Lorem'
		  ],
		  [
			'id' => 3,
			'name' =>'Ipsum'
		  ],
		  [
			'id' => 4,
			'name' =>'Dolor'
		  ],
		  [
			'id' => 5,
			'name' =>'Sit'
		  ]
	];

	$tags = [
		[
			'id' => 1,
			'name' => 'Tag1'
		],
		[
			'id' => 2,
			'name' => 'Tag2'
		],
		[
			'id' => 3,
			'name' => 'Tag3'
		],
		[
			'id' => 4,
			'name' => 'Tag4'
		],
		[
			'id' => 5,
			'name' => 'Tag5'
		],
		[
			'id' => 6,
			'name' => 'Tag6'
		],
		[
			'id' => 7,
			'name' => 'Tag7'
		]
	];

	$photos = [
		[
			'id' => 1,
			'title' => 'Lorem ipsum',
			'path' => 'images/nomefoto.jpg'
		],
		[
			'id' => 2,
			'title' => 'Due Lorem fpsum',
			'path' => 'images/nomefoto.jpg'
		],
		[
			'id' => 3,
			'title' => 'Tre Lorem ipsum',
			'path' => 'images/nomefoto.jpg'
		]

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
				    <li class="breadcrumb-item active" aria-current="page"><a href="">Photos</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Create</li>
					<a href="#"></a>
				  </ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12">
						<h2>Inserisci una nuova foto</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<form class="" action="" method="post" enctype="multipart/form-data">
							@csrf
							@method('POST')
							<div class="form-group">
							   <label for="title">Title</label>
							   <input type="text" class="form-control" id="title"  placeholder="Type a title" name="title">
							   @error('title')
							   <small class="form-text">Error</small>
						   	   @enderror
							</div>
							<div class="form-group">
							   <label for="description">Summary</label>
							   <input type="text" class="form-control" id="description"  placeholder="Type a description" name="description">
							   @error('description')
							   <small class="form-text">Error</small>
						   	   @enderror
							</div>
							<div class="form-group">
				                <div class="custom-file">
				                  <input type="file" class="custom-file-input" id="inputGroupFile01" name="path">
				                  <label class="custom-file-label" for="inputGroupFile01">Browse</label>
				               	</div>
				                @error('path')
				                  <small class="form-text">Errore</small>
				                @enderror
			             	</div>
							<div class="form-group">
								<input class="btn btn-primary" type="submit" name="" value="Salva">
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
@endsection
