@extends ('layouts.app')
@section ('content')
	<a href="/posts" class="btn btn-default">Go back</a>
	<h1>{{$post->title}}</h1>
	
	<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
	<br>
	
					
    <small>Written on {{$post->created_at}} &nbsp by &nbsp {{$post->user->name}}</small>
    <br>
	<div>
		{!!$post->body!!}
	</div> <!--parse the html using {! !} -->
	<hr>
	@if(!Auth::guest()) {{-- If guest enters flow of program doesnot go through this if block --}}

		@if(Auth::user()->id==$post->user_id)

			<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

			{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'DELETE', 'class'=>'pull-right'])!!}

			{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

			{!!Form::close()!!}

		@endif	

	@endif
@endsection