@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left font-normal">
	<div class="py-15">
		<h1 class="text-6xl">
			Create Post
		</h1>
	</div>
</div>

@if ($errors->any())
	<div class="w-4/5 m-auto">
		<ul>
			@foreach ($errors->all() as $error)
			<li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
				{{ $error }}
			</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="w-4/5 m-auto pt-20">
	<form action="/blog" method="POST" enctype="multipart/form-data">@csrf

		<input type="text" name="title" placeholder="Judul" class="border-4 w-full h-20 text-6xl outline-none form-input rounded-3xl">
		<br><br>
		<textarea name="description" placeholder="Deskripsi" class="border-4 w-full h-60 text-xl outline-none form-input rounded-3xl"></textarea>

		<div class="pt-15">
				<input type="file" name="image" class="form-input border-4 w-full  text-xl outline-none form-input rounded-3xl">
		</div>

		<button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
			Submit Post
		</button>
	</form>
</div>
<br>


@endsection