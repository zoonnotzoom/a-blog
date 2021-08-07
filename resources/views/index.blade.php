@extends('layouts.app')

@section('content')
	<div class="grid grid-cols-1 m-auto" style="background-image: url(https://cdn.pixabay.com/photo/2017/08/23/11/12/notebook-2672467_960_720.jpg); height: 600px; background-repeat: no-repeat;
	background-position: center center; background-attachment: fixed; background-size: cover;">
		<div class="flex text-gray-100 pt-10">
			<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
				<h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
					Anda siap untuk membaca blog menarik ?
				</h1>
				<button class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-3xl">
					<a href="/blog">
					Klik Disini
				</a>
				</button>
			</div>
		</div>	
	</div>

	<div class="sm:grid grid-cols-2 w-4/5 m-auto py-10">
		<div class="flex bg-yellow-500 text-gray-100 pt-10">
			<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block font-bold">
				<span class="uppercase text-xl">
					elon musk
				</span>

				<h3 class="font-light py-10">
					"Saya membaca buku dan berbicara dengan orang lain. Maksud saya, itulah cara seseorang belajar sesuatu. Ada banyak buku bagus di luar sana dan ada banyak orang pintar."
				</h3>

				<a href="/blog" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
					Mulai Baca Blog sekarang
				</a>
			</div>
		</div>
		<div>
		<img src="https://www.analyticsinsight.net/wp-content/uploads/2019/08/elon-musk-1100x733.jpg" alt="">
		</div>
	</div>
@endsection