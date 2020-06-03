@php
	$photo = [

			'id' => 1,
			'title' => 'Lorem ipsum',
			'description' => 'Questo testo',
			'path' => 'images/DM9ZKf8mlnI2Wt1BECBUo3mefo5QfhFlrQDlKzde.png'
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
				    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.photos.index')}}">Photos</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{{$photo['title']}}</li>
					<a href="#"></a>
				  </ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<div class="row">
					<div class="col-12">
						<h2>{{$photo['title']}}</h2>
						<form class="" action="{{route('admin.photos.update',$photo['id'])}}" method="post">
							@csrf
							@method('PATCH')
							<div class="form-group">
							   <label for="title">Title</label>
							   <input type="text" class="form-control" id="title"  placeholder="Type a title" value="{{$photo['title']}}">
							   @error('title')
							   <small class="form-text">Error</small>
						   	   @enderror
							 </div>
							<div class="form-group">
							   <label for="description">description</label>
							   <input type="text" class="form-control" id="description"  placeholder="Type a description" value="{{$photo['description']}}">
							   @error('description')
							   <small class="form-text">Error</small>
						   	   @enderror
							</div>
							<div class="form-group">
				                <div class="custom-file">
				                  <input type="file" class="custom-file-input" id="inputGroupFile01" name="path">
				                  <label class="custom-file-label" for="inputGroupFile01">Carica una nuova foto</label>
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
			<div class="col-4">
          		<img src="{{asset('storage/'. $photo['path'])}}" alt="">
        	</div>
		</div>
@endsection
