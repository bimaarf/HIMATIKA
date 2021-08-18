@extends('layouts.frontend.auth')
@section('title', ('Register | Coretan Mahasiswa'))
@section('content')
<div class="d-md-flex flex-row-reverse">
    <div class="signin-right">

      <div class="signin-box signup">
        <h3 class="signin-title-primary">Get Started!</h3>
        <h5 class="signin-title-secondary lh-4">Free register</h5>
        <form action="{{ route('register') }}" method="POST">
            @csrf
        <div class="row row-xs mg-b-10">
          
            <div class="col-sm">
                <input name="name" type="text" class="form-control" placeholder="username" required autofocus>
            </div>
        </div><!-- row -->
        <div class="signup-separator">
            <span>enter active email</span>
        </div>
        <div class="row row-xs mg-b-10">
          
            <div class="col-sm">
                <input name="email" type="email" class="form-control" placeholder="email" required>
            </div>
        </div><!-- row -->
        <div class="row row-xs mg-b-10">
            <div class="col-sm">
                <input name="password" type="password" class="form-control" placeholder="password" required required autocomplete="new-password">
            </div>
            <div class="col-sm mg-t-10 mg-sm-t-0">
                <input name="password_confirmation" type="password" class="form-control" placeholder="confirm Password" required>
            </div>
        </div><!-- row -->

        <button type="submit" name="register" class="btn btn-primary btn-block btn-signin">SIGN UP</button>
        </form>
        <div class="signup-separator"><span>or</span></div>
{{-- 
        <button class="btn btn-facebook btn-block">register with facebook</button>
        <button class="btn btn-twitter btn-block">register with Twitter</button> --}}

        <p class="mg-t-40 mg-b-0">already have an account? <a href="{{ route('login') }}">SignIn</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-right -->
    <div class="signin-left">
      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.html">Evo.it<span> | Toko</span></a></h2>

        <p>Toko is a platform to help students promote their business.</p>

        <p><a href="#" class="btn btn-outline-secondary pd-x-25">Demo</a></p>

        <p class="tx-12">&copy; Copyright 2021. All Rights Reserved.</p>
      </div>
    </div><!-- signin-left -->
  </div><!-- d-flex -->
@endsection
