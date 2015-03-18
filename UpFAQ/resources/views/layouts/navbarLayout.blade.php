<nav class="navbar navbar-default" id="myNavbar">
  <div class="container-fluid container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('homepage') }}">
        <img src="{{ asset('img/logo-branco.svg') }}" alt="UpFAQ_logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="menuOptions">
        <li class=""><a href="{{ route('homepage') }}">Home</a></li>
        
        <li><a href="#">Tags</a></li>
        
        <li>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" id="search">
              
              <button type="submit" class="btn btn-default" id="searchBtn"><i class="fa fa-search fa-lg"></i>
              </button>
            </div>
          </form>
        </li>

        @yield('navbar')
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- SIGN IN MODAL -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="SignIn" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <!-- Email Form Input -->
        <div class = "form-group col-lg-10 col-lg-offset-1">
          <span class="glyphicon glyphicon-user col-lg-2"></span>
          <div class = "col-lg-10">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
          </div>

          <div class = "col-sm-12">
          </div>
        </div>

        <!-- Password Form Input -->
        <div class = "form-group col-lg-10 col-lg-offset-1">
          <span class="glyphicon glyphicon-lock col-lg-2"></span>
          <div class = "col-sm-10">
            {!! Form::email('password', null, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
          </div>

          <div class = "col-sm-12">
          </div>
        </div>

        <!-- Forgot passowrd -->
        <a href="" class="col-lg-10 col-lg-offset-1">Forgot password?</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->