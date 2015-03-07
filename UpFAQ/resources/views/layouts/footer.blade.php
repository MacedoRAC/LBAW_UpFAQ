<div id="myFooter">
	<div class="container">
		<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-12" id = "form">
			<h3 class = "introdutoryText">Help Us Helping YOU</h3>

			
			<!-- Name Form Input -->
			<div class = "form-group">
				<div class = "col-sm-12">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
				</div>

				<div class = "col-sm-12">
				</div>
			</div>

			<!-- Email Form Input -->
			<div class = "form-group">
				<div class = "col-sm-12">
					{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
				</div>

				<div class = "col-sm-12">
				</div>
			</div>

			<!-- Subject Form Input -->
			<div class = "form-group">
				<div class = "col-sm-12">
					{!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Message']) !!}
				</div>

				<div class = "col-sm-12">
				</div>
			</div>

			<div class = "form-group">
				<div class = "col-sm-12">
					<button type = "submit" class = "btn btn-default pull-right" id = "submitBtn">Send</button>
				</div>
			</div>

		</div>
	</div>
</div>