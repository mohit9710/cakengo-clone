<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>CakeOnGO</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      @include('layouts.css')
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   </head>
   <body class="hold-transition login-page h-auto" style="background:url({{URL::to('img/cakebg.jpg')}}); background-repeat: no-repeat;background-size: 100%; overflow: hidden!important; height: auto;">
      <div class="login-box">
         <div class="login-logo">
            <a href="{{URL::to('/')}}"><b style="color:#fff;">Cake On GO</b></a>
         </div>
         <!-- /.login-logo -->
         <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="{{ route('login') }}">
               @csrf
              <div class="form-group has-feedback">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="mohit.techosoft@gmail.com" required  placeholder="Enter Email" value="">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="form-group has-feedback">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password" value="admin">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="row">
                  <div class="col-xs-8">
                     <div class="checkbox icheck">
                        <label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                        </label>
                     </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">
                     {{ __('Login') }}
                     </button>
                  </div>
                  <!-- /.col -->
               </div>
            </form>
            <!-- /.social-auth-links -->
            <!-- <a href="{{ route('password.request') }}">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a> -->
         </div>
         <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->
      <!-- jQuery 3 -->
      <script src="{{URL::to('bower_components/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="{{URL::to('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- iCheck -->
      <script src="{{URL::to('plugins/iCheck/icheck.min.js')}}"></script>
      <script>
         $(function () {
           $('input').iCheck({
             checkboxClass: 'icheckbox_square-blue',
             radioClass: 'iradio_square-blue',
             increaseArea: '20%' /* optional */
           });
         });
      </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

   </body>
</html>