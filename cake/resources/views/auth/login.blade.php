@extends('layouts.app')

@section('content')
<main>
            <div class="main-part">
                <!-- Start Login & Register -->   

                <section class="default-section login-register bg-grey" style="margin-top:120px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="login-wrap form-common">
                                    <div class="title text-center">
                                        <h3 class="text-coffee">Login</h3>
                                    </div>
                                     <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address..." required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input id="password" type="password" class="form-control" name="password" required placeholder="********" autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label><input type="checkbox" name="chkbox">Remember me</label>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <a href="{{ route('password.request') }}" class="pull-right">Lost your password</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="submit" name="submit" value="LOGIN" class="button-default button-default-submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="register-wrap form-common">
                                    <div class="title text-center">
                                        <h3 class="text-coffee">Register</h3>
                                    </div>
                                    <form class="register-form" method="post" name="register" action="{{URL::to('register')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="User Name...">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address...">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input id="phone" type="number" class="form-control " name="mobile" value="{{ old('mobile') }}" required autocomplete="email" placeholder="Mobile...">

                                                @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password...">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password...">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="submit" name="submit" class="button-default button-default-submit" value="RegIster now">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- End Login & Register List -->

            </div>
        </main> @endsection
