@extends('layouts.app')
@section('content')
<div class="container">

      <div class="starter-template">
        <div  id="page-content" class="row">
            <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3"><div class="well well-sm">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#" class="active" id="login-form-link">Ticketing Login</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-md-12">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                                <form id="login-form" action="{{ URL::to('/') }}/brand/login" method="post" role="form" style="display: block;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>

    </div>
    <div id="footer">
  <div class="container">
    <p class="text-muted credit text-center">&copy {{ date('Y') }} All Rights Resesrved </p>
  </div>
</div>
@endsection