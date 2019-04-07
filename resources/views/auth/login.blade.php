@extends('layouts.login-master')

@section('content')
<div class="login-box">
        
        <!-- /.login-logo -->
        <div class="login-box-body">
          <div class="login-logo"><a href="/">Smart Pharma Pro</a></div>
          <p class="login-box-msg">Sign in to start your session</p>
      
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">

              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email..." required autofocus>
              
            </div>

            <div class="form-group">

              <input id="password" type="password" class="form-control" name="password" placeholder="Password..." required>

            </div>
            
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          @if ($errors->has('email'))
          <div class="alert alert-danger alert-dismissible mt10">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i>Error!</h4>
              {{ $errors->first('email') }}
          </div>
          @endif
      
          {{-- <a href="#">I forgot my password</a><br> --}}
          {{-- <a href="register.html" class="text-center">Register a new membership</a> --}}
      
        </div>
        <!-- /.login-box-body -->
      </div>
@endsection
