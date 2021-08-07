@extends('layouts.app_show')

@section('content')
<div class="w-4/5 m-auto text-left">
	<div class="py-15">
		<h1 class="text-6xl">
			{{ $post->title }}
		</h1>
		<br>
		<br>
		<img src="{{ asset('images/' . $post->image_path) }}" alt="" style="height: 500px; width: 1000px;">
		<br>
		<br>
		<span class="text-gray-500">
			By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
		</span>
		<p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
			{{ $post->description }}
		</p>
	</div>
</div>
<div class="container">
	@comments(['model' => $post])
</div>
<br>


@endsection