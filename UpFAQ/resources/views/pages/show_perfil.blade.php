@extends('layouts.index')

@section('cssFiles')
	<link href="{{ asset('css/showProfile.css') }}" rel="stylesheet">
	<link href="{{ asset('css/carroussel.css') }}" rel="stylesheet">
@stop


@section('content')

<div id="profile_information">
	<div class="container">
		<div class="col-lg-3 avatar">
			<img src="{{ asset('img/ppic.jpg') }}" alt="profile avatar">
		</div>
		<div class="col-lg-9 info">
			<div class="col-lg-5">
				<h2>Pedro Lemos Faria</h2>
				<p>example&#64gmail.com</p>
				<p>+351 910000000</p>
				<div>
					<div>
						<img class="social" src="{{ asset('img/facebook.png') }}" alt="facebook_logo">
						<p class="social_text">https://www.facebook.com/user.8532</p>
					</div>
					<div>
						<img class="social" src="{{ asset('img/linkedin.png') }}" alt="linkedin_logo">
						<p class="social_text">https://www.linkedin.com/user.8532</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 rating">
				<div class="month">
					<h4>Rate this month</h4>
					<p class="profile_votes2">
						<i class="glyphicon glyphicon-thumbs-up"></i>
						20
						<i class="voting2 glyphicon glyphicon-thumbs-down"></i>
						5
					</p>
				</div>
				<div class="overall">
					<h4>Overall rate</h4>
					<p class="profile_votes2">
						<i class="glyphicon glyphicon-thumbs-up"></i>
						63
						<i class="voting2 glyphicon glyphicon-thumbs-down"></i>
						8
					</p>
				</div>
			</div>
		</div>

		<div class="bio col-lg-12">
			<h3>Bio</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nesciunt commodi dolorem incidunt, necessitatibus, porro accusantium officia illum minima repellat nam tenetur molestias numquam, pariatur possimus. Nemo repellat fuga optio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint excepturi assumenda quibusdam repellendus, esse labore voluptates praesentium culpa fugit dolorum, sunt in atque modi aliquam accusantium consectetur voluptas qui molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia culpa quibusdam rem, sit tenetur, consequatur. Numquam dolorem quo itaque dignissimos, iure dolor, alias omnis, explicabo id unde aliquam. Explicabo, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ab fugit id dolor, mollitia reiciendis doloremque optio quod eius? Aut vel placeat ipsam accusantium consequuntur, quasi temporibus! Dignissimos, quasi, quibusdam.</p>
		</div>
	</div>

	<div class="achievements">
		<div class="container">
			<img class="col-lg-offset-2 col-lg-6 image_banner" src="{{ asset('img/banner_achievents.png') }}" alt="Achivements">

			<div id="contentContainer" class="trans3d"> 
				<section id="carouselContainer" class="trans3d">
					<figure id="item1" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">1</div>
					</figure>
					<figure id="item2" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">2</div>
					</figure>
					<figure id="item3" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">3</div>
					</figure>
					<figure id="item4" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">4</div>
					</figure>
					<figure id="item5" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">5</div>
					</figure>
					<figure id="item6" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">6</div>
					</figure>
					<figure id="item7" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">7</div>
					</figure>
					<figure id="item8" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">8</div>
					</figure>
					<figure id="item9" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">9</div>
					</figure>
					<figure id="item10" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">10</div>
					</figure>
					<figure id="item11" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">11</div>
					</figure>
					<figure id="item12" class="carouselItem trans3d">
						<div class="carouselItemInner trans3d">12</div>
					</figure>	
				</section>
			</div>
		</div>
	</div>
</div>
@stop

@section('jsFiles')
	<script src="{{ asset('js/TweenMax.min.js') }}"></script>
	<script src="{{ asset('js/carrousel.js') }}"></script>
@stop

<!--<div class="main_achiev">
				<img class="col-lg-8 col-lg-offset-1" src="{{ asset('img/achiev3.png') }}" alt="last earned">
				<h2>You have answered 10 or more question !</h2>
				<p>Achievement unlocked 14th March 2015</p>
			</div>
			
			<div class="other_ach">
				<table class="achiev_table">
					<tr>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev1.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev2.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev1.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
					</tr>
					<tr>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev2.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev1.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev2.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
					</tr>
					<tr>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev1.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev2.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev1.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
					</tr>
					<tr>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev2.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev1.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
						<td>
							<img class="col-lg-3" src="{{ asset('img/achiev2.png') }}" alt="last earned">
							<p>Achievement's name</p>
						</td>
					</tr>
				</table>
			</div>-->