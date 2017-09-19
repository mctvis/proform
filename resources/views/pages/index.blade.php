@extends('layouts.app')

@section('content')
<!-- <h1>{{$title}}</h1>    this variable was passed from index() function in page controller -->

@if(Auth::guest())
	<div class="jumbotron text-center">
		<h1>Welcome to BlogZ</h1>
		<p>Site on BETA</p>
		<a class= "btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
	</div>
	
@elseif(Auth::user())


	<h4>Your recent posts</h4>
	@foreach(Auth::user()->posts as $post)
			<div class="well">

				<div class="row">

						<div class="col-md-4 col-sm-4">
							<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
						</div>

						<div class="col-md-8 col-sm-8">
							<h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
							<small>Written on {{$post->created_at}} &nbsp by &nbsp {{$post->user->name}}</small>
						</div>

				</div>
	
			</div>
		@endforeach




@endif		


@endsection