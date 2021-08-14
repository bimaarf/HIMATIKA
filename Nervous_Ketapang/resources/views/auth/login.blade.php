@extends('layouts.frontend.auth')
@section('title', 'Login | Coretan Mahasiswa')
@section('content')

<div class="d-md-flex flex-row-reverse">
    <div class="signin-right">

      <div class="signin-box">
        <h2 class="signin-title-primary">ToKo | Evo.it</h2>
        <h3 class="signin-title-secondary">-scroll up-</h3>
        <br>
        <form action="{{ route('login') }}" method="POST">
            @csrf
        <div class="form-group">
          <input name="email" type="email" class="form-control " placeholder="Enter email" required autofocus>
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
          <input name="password" type="password" class="form-control" placeholder="Enter Password" required autocomplete="current-password">
        </div><!-- form-group -->

        {{-- remember me --}}
        <div class="form-group">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

            <button name="login" type="submit" value="login" class="block btn btn-primary btn-block btn-signin">SIGN IN</button>
           
        </form>
        <p class="mg-b-0">You don't have an account? <a href="{{ route('register') }}">SignUp</a></p>
      </div>

    </div><!-- signin-right -->
    <div class="signin-left">
      <div class="signin-box">
        <h2 class="slim-logo"><a href="{{ route('fe-index.index') }}">Evo.it<span> | ToKo</span></a></h2>

        <p>ToKo is a platform to help students promote their business.</p>

        <p>supported by coretanmahasiswa.com | Evo.it | ToKo</p>

        <p><a href="{{ route('fe-index.index') }}" class="btn btn-outline-secondary pd-x-25">Demo</a></p>

        <p class="tx-12">&copy; Copyright 2020. All Rights Reserved.</p>
      </div>
    </div><!-- signin-left -->
  </div><!-- d-flex -->
@endsection