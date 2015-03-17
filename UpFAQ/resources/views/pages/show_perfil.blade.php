@extends('layouts.index')

@section('cssFiles')
	<link href="{{ asset('css/showProfile.css') }}" rel="stylesheet">
@stop


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
				<div class="main_achiev">
					<img class="col-lg-8 col-lg-offset-1" src="{{ asset('img/achiev3.png') }}" alt="last earned">
					<h2>You have answered 10 or more question !</h2>
					<p>Achievement unlocked 14th March 2015</p>
				</div>
				<div>
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
				</div>
		</div>
	</div>
</div>

@stop