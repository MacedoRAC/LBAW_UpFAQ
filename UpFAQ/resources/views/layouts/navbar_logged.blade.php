@extends('layouts.navbarLayout')

@section('navbar')
  	<li class="dropdown">
	  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, <span class="username">João</span></a>
	  	
	  	<ul class="dropdown-menu" role="menu">
	    	<li><a href="#">My Profile</a></li>
	    	<li><a href="#">Sign Out</a></li>
	  	</ul>
	</li>
@stop