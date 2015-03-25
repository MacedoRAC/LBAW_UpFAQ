@extends('layouts.index')

@section('cssFiles')
	<link href="{{ asset('css/searchPage.css') }}" rel="stylesheet">
@stop

@section('content')
	<div id="searchPage" class="container">
		<div class="filters col-lg-12">
			<div class="search_dropdown search_drop col-lg-1">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Search for:
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Questions</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tags</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Users</a></li>
			  </ul>
			</div>

			<div class="search_dropdown order_drop col-lg-1">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Order By:
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Most recent</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Oldest </a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Last voted</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Best ratio</a></li>
			  </ul>
			</div>
		</div>

		<div class="results col-lg-12">
			<div class="results_group col-lg-12">
				<div class="separator col-lg-12">
					<h3> Questions</h3>
					<hr></hr>
				</div>
				<div class="questions col-lg-12">
					<div class="question col-lg-5">
						<h5 class="col-lg-12"> Quando começa a epoca de exames?</h5>
						<h6 class="col-lg-3"> 5 answers</h6>
						<h6 class="pergtag col-lg-2"> Exames </h6>
						<h6 class="pergtag col-lg-2"> FEUP </h6>
					</div>

					<div class="question col-lg-5">
						<h5 class="col-lg-12"> Quando são as férias de carnaval?</h5>
						<h6 class="col-lg-3"> 4 answers</h6>
						<h6 class="pergtag col-lg-2"> FMUP </h6>
					</div>

					<div class="question col-lg-5">
						<h5 class="col-lg-12"> Quando é o proximo FEUPCaffe?</h5>
						<h6 class="col-lg-3"> 9 answers</h6>
						<h6 class="pergtag col-lg-2"> Festas Academicas </h6>
						<h6 class="pergtag col-lg-2"> FEUP </h6>
					</div>
				</div>	
			</div>

			<div class="results_group col-lg-12">
				<div class="separator col-lg-12">
					<h3> Tags</h3>
					<hr></hr>
				</div>
				<div class="tags col-lg-12">
					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Festas Academicas</h5>
						<h6 class="col-lg-12">18 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Faculdade</h5>
						<h6 class="col-lg-12">39 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Cantinas</h5>
						<h6 class="col-lg-12">6 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Secretaria</h5>
						<h6 class="col-lg-12">64 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Queima das Fitas</h5>
						<h6 class="col-lg-12">71 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Horários</h5>
						<h6 class="col-lg-12">420 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Classificações</h5>
						<h6 class="col-lg-12">843 questions</h6>
					</div>

					<div class="tag col-lg-2">
						<h5 class="col-lg-12">Exames</h5>
						<h6 class="col-lg-12">1127 questions</h6>
					</div>
				</div>	
			</div>

			<div class="results_group col-lg-12">
				<div class="separator col-lg-12">
					<h3> Users</h3>
					<hr></hr>
				</div>
				<div class="users col-lg-12">
					<div class="col-lg-3 user1">
						<img class="col-lg-5" src="{{ asset('img/avatar.png') }}" alt="">
						<div class="info col-lg-8">
							<h5 class="col-lg-12"> Pedro Faria </h5>
							<h6 class="col-lg-12"> 5 questions</h6>
							<h6 class="col-lg-12"> 15 answers</h6>
						</div>
					</div>

					<div class="col-lg-3 user1">
						<img class="col-lg-5" src="{{ asset('img/avatar.png') }}" alt="">
						<div class="info col-lg-8">
							<h5 class="col-lg-12"> Paulo Faria </h5>
							<h6 class="col-lg-12"> 32 questions</h6>
							<h6 class="col-lg-12"> 4 answers</h6>
						</div>
					</div>

					<div class="col-lg-3 user1">
						<img class="col-lg-5" src="{{ asset('img/avatar.png') }}" alt="">
						<div class="info col-lg-8">
							<h5 class="col-lg-12"> Andre Pinheiro </h5>
							<h6 class="col-lg-12"> 2 questions</h6>
							<h6 class="col-lg-12"> 1200 answers</h6>
						</div>
					</div>

					<div class="col-lg-3 user1">
						<img class="col-lg-5" src="{{ asset('img/avatar.png') }}" alt="">
						<div class="info col-lg-8">
							<h5 class="col-lg-12"> Mario Macedo </h5>
							<h6 class="col-lg-12"> 6 questions</h6>
							<h6 class="col-lg-12"> 20 answers</h6>
						</div>
					</div>
				</div>				
			</div>
		</div>


	</div>
@stop

@section('jsFiles')
@stop

