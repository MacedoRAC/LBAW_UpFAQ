@extends('layouts.index')


@section('content')

<div id="questAnsCont" class="container">
	<div id="questionHolder" class="col-lg-8">
		<div class="header col-lg-12">
			<img src="{{ asset('img/avatar.png') }}" class="col-lg-2">
			<h3 class="questOwner" class="col-lg-8">João Silva</h3>
			<p class="tags"></p>
			<p class="creationDate">12-01-2015 at 12:10h</p>
		</div>
		<div class="body">
			<h3 class="">What is the answer for my question?</h3>
		</div>
	</div>
</div>

@stop