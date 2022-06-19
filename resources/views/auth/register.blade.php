<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from big-bang-studio.com/cosmos/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:47:30 GMT -->
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
            <a href="{{url('/admin/login')}}" class="btn btn-outline-info">Login</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <ul class="authentication-progress m-b-30">
            <li></li>
            <li class="active"></li>
            <li></li>
            <li></li>
          </ul>
          <div class="authentication-content m-b-30">
            <h3 class="m-b-30">Create Your Cosmos Account</h3>
            <form method="POST" action="{{ route('register') }}">
                        @csrf

            <div class="form-group">
                <label for="form-control-2">Name</label>

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!-- <input type="text" class="form-control" id="form-control-2" placeholder="Jon Snow"> -->
              </div>
              <div class="form-group">
                <label for="form-control-1">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!-- <input type="email" class="form-control" id="form-control-1" placeholder="email@example.com"> -->
              </div>
              <div class="form-group">
                <label for="form-control-2">Password</label>
                <!-- <input type="password" class="form-control" id="form-control-2" placeholder="min. 6 characters"> -->
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="form-control-2">Confirm Password</label>
                <!-- <input type="password" class="form-control" id="form-control-2" placeholder="min. 6 characters"> -->
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>  
             
            
              <div class="clearfix">
              
                <div class="pull-right">
                  <!-- <button type="button" class="btn btn-info btn-labeled">Next
                    <span class="btn-label btn-label-right">
                     
                    </span>
                  </button> -->
                  <button type="submit" class="btn btn-info btn-labeled">
                                    {{ __('Register') }}
                                </button>
                </div>
              </div>
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

<!-- Mirrored from big-bang-studio.com/cosmos/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Oct 2017 03:47:31 GMT -->
</html>