@php
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
@endphp
@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.pages.index')}}">Pages</a></li>
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
						<h2>Inserisci una nuova pagina</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<form class="" action="" method="post">
							@csrf
							@method('POST')
							<div class="form-group">
							   <label for="title">Title</label>
							   <input type="text" class="form-control" id="title"  placeholder="Type a title">
							   @error('title')
							   <small class="form-text">Error</small>
						   	   @enderror
							 </div>
							<div class="form-group">
							   <label for="summary">Summary</label>
							   <input type="text" class="form-control" id="summary"  placeholder="Type a summary">
							   @error('summary')
							   <small class="form-text">Error</small>
						   	   @enderror
							 </div>
							<div class="form-group">
							   <label for="category">Category</label>
								<select class="custom-select" name="category" id="category">
									<option value="1">Miscellanea</option>
									<option value="2">Lorem</option>
									<option value="3">Ipsum</option>
									<option value="4">Dolor</option>
									<option value="5">Sit</option>
								</select>
							   @error('summary')
							  	 <small class="form-text">Error</small>
						   	   @enderror
							 </div>
							 <div class="form-group">
 							   <label for="body">Body</label>
 								<textarea class="form-control" name="body" rows="10" id="body"></textarea>
 							   @error('body')
 							   	<small class="form-text">Error</small>
 						   	   @enderror
 							 </div>
							 @foreach ($tags as $key => $tag)
								 <div class="form-check">
								   <input class="form-check-input" type="checkbox" name="tags[]" id="tag{{$tag['id']}}" value="{{$tag['id']}}">
	 							   <label class="form-check-label" for="{{$tag['id']}}">{{$tag['name']}}</label>
	 							 </div>
							 @endforeach

							 @error('body')
							  <small class="form-text">Error</small>
							 @enderror
						</form>

					</div>
				</div>

			</div>
		</div>
@endsection
