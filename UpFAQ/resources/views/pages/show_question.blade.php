@extends('layouts.index')


@section('content')

<div id="questAnsCont" class="container">
	<div id="questHolder" class="col-lg-8">
		<div class="header col-lg-12">
			<img src="{{ asset('img/avatar.png') }}" class="col-lg-2">
			<div class="col-lg-10">
				<h4 class="questOwner col-lg-8">João Silva</h4>
				<p class="creationDate col-lg-4 text-muted">12-01-2015 at 12:10h</p>

				<h3 class="question col-lg-12">What is the answer for my question?</h3>
				<ul class="tags col-lg-12">
					<li>Porto</li>
					<li>FEUP</li>
				</ul>
				<ul class="icons col-lg-12">
					<li><a>Answer</a></li>
					<li>20&nbsp;<a><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
					<li>3&nbsp;<a><i class="glyphicon glyphicon-thumbs-down"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop