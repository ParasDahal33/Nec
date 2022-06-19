<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from big-bang-studio.com/cosmos/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:47:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Cosmos</title>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.html">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/cosmos.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/application.min.css')}}">
  </head>
  <body class="authentication-body">
    <div class="container-fluid">
      <div class="authentication-header m-b-30">
        <div class="clearfix">
         
          <div class="pull-right">
            <a href="{{url('/register')}}" class="btn btn-outline-info">Sign up</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <div class="authentication-content m-b-30">
            <h3 class="m-t-0 m-b-30 text-center">You look great today!</h3>
            <form method="POST" action="{{ route('login') }}">
            @csrf

              <div class="form-group">
                <label for="form-control-1">Email address</label>
                <!-- <input type="email" class="form-control" id="form-control-1" placeholder="Email"> -->
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="form-control-2">Password</label>
                <!-- <input type="password" class="form-control" id="form-control-2" placeholder="Password"> -->
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label class="custom-control custom-control-info custom-checkbox active">
                  <input class="custom-control-input" type="checkbox" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <span class="custom-control-indicator"></span>

                  <!-- <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label> -->
                  <span class="custom-control-label">Keep me signed in</span>
                </label>
                <!-- <a href="http://big-bang-studio.com/pages-reset-password.html" class="text-info pull-right">Forgot password?</a> -->

                @if (Route::has('password.request'))
                                    <a class="text-info pull-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
              </div>
              <!-- <button type="submit" class="btn btn-info btn-block">Submit</button> -->

              <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Login') }}
              </button>
            </form>


            
          </div>
        </div>
      </div>
      <div class="authentication-footer">
        <span class="text-muted">Need help? Contact us mail@example.com</span>
      </div>
    </div>
    <script src="{{asset('frontend/js/vendor.min.js')}}"></script>
    <script src="{{asset('frontend/js/cosmos.min.js')}}"></script>
    <script src="{{asset('frontend/js/application.min.js')}}"></script>
  </body>

<!-- Mirrored from big-bang-studio.com/cosmos/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:47:31 GMT -->
</html>




 