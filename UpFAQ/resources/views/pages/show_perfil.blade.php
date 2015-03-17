@extends('layouts.index')

@section('content')

<div id="profile_information">
	<div class="container ">
		<div class="col-lg-12"> <h3> Nome </h3> </div>
		<div class="col-lg-3">
			<img src="{{ asset('img/ppic.jpg') }}" alt="profile avatar">
		</div>
		<div class="col-lg-6 profile_votes">
			<p class="profile_votes2">
				<i class="glyphicon glyphicon-thumbs-up"></i>
				45
			</p>
			<p class="profile_votes2">
				<i class="glyphicon glyphicon-thumbs-down"></i>
				5
			</p>
		</div>

		<div> <h4> example&#64email.com </h4></div>
	</div>

	<div class="achievements">
		<div class="container">
			<img class="col-lg-offset-3 col-lg-6 image_banner" src="{{ asset('img/banner_achievents.png') }}" alt="Achivements">
			<div class="carousel-caption col-lg-12">
				<!--<img class="col-lg-offset-4 col-lg-2" src="{{ asset('img/ppic.jpg') }}" alt="profile avatar">-->
			</div>	
		</div>
	</div>
</div>

@stop