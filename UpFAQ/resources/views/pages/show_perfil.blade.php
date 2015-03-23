@extends('layouts.index')

@section('cssFiles')
	<link href="{{ asset('css/showProfile.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
@stop


@section('content')

<div id="profile_information">
	<div class="container">
		<div class="col-lg-3 avatar">
			<img src="{{ asset('img/ppic.jpg') }}" alt="profile avatar">
		</div>
		<div class="col-lg-9 info">
			<div class="col-lg-7">
				<h2>Pedro Lemos Faria</h2>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/university.png') }}" alt="course_logo">
					<p class="social_text col-lg-10">Mestrado Integrado em Engenharia Informática e Computação</p>
				</div>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/email.png') }}" alt="email_logo">
					<p class="social_text col-lg-10">example&#64gmail.com</p>
				</div>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/phone.png') }}" alt="phone_logo">
					<p class="social_text col-lg-10">+351 910000000</p>
				</div>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/twitter.png') }}" alt="twitter_logo">
					<p class="social_text col-lg-10">https://www.twitter.com</p>
				</div>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/google+.png') }}" alt="google_logo">
					<p class="social_text col-lg-10">https://plus.google.com</p>
				</div>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/facebook.png') }}" alt="facebook_logo">
					<p class="social_text col-lg-10">https://www.facebook.com</p>
				</div>
				<div class="col-lg-12 contactCont">
					<img class="social col-lg-2" src="{{ asset('img/linkedin.png') }}" alt="linkedin_logo">
					<p class="social_text col-lg-10">https://www.linkedin.com/user.8532</p>
				</div>
			</div>

			<div class="col-lg-5 rating">
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
			<h3>About Me</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nesciunt commodi dolorem incidunt, necessitatibus, porro accusantium officia illum minima repellat nam tenetur molestias numquam, pariatur possimus. Nemo repellat fuga optio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint excepturi assumenda quibusdam repellendus, esse labore voluptates praesentium culpa fugit dolorum, sunt in atque modi aliquam accusantium consectetur voluptas qui molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia culpa quibusdam rem, sit tenetur, consequatur. Numquam dolorem quo itaque dignissimos, iure dolor, alias omnis, explicabo id unde aliquam. Explicabo, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ab fugit id dolor, mollitia reiciendis doloremque optio quod eius? Aut vel placeat ipsam accusantium consequuntur, quasi temporibus! Dignissimos, quasi, quibusdam.</p>
		</div>
	</div>

	<div class="achievements">
		<div class="container">
			<img class="col-lg-offset-3 col-lg-6 image_banner" src="{{ asset('img/banner_achievents.png') }}" alt="Achivements">

			<div class="carousel col-lg-offset-3 col-lg-6">
			    <div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev1.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
			    <div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev2.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev1.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev2.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev1.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev2.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev1.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
				<div class="achiev col-lg-12">
			    	<img class="col-lg-8 col-lg-offset-2 col-sm-12" src="{{ asset('img/achiev2.png') }}" alt="last earned">
					<h2 class="col-lg-10 col-lg-offset-1">You have answered 10 or more question !</h2>
					<p class="col-lg-10 col-lg-offset-1">Achievement unlocked 14th March 2015</p>
				</div>
			</div>

		</div>
	</div>
</div>
@stop

@section('jsFiles')
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel').slick({
				autoplay: true,
				autoplaySpeed: 2000,
				swipe: true,
				infinite: true,
				adaptiveHeight: true,
				dots: true
			});
		});
	</script>
@stop