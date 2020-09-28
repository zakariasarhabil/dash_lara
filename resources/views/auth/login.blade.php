@extends('layouts.app')

@section('content')



<div class="container-fluid">
    <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
            <h4 class="company_title">Logo</h4>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
                <div class="row">
                    <h2>Log In</h2>
                </div>

                <div class="row">
                    <form control="" method="POST" action="{{ route('login')}}" class="form-group">
                        @csrf

                        <div class="row">
                            <input type="text" name="email" id="username" @error('email') is-invalid @enderror value="{{ old('email') }}" required  class="form__input" placeholder="Email">
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                        <div class="row">
                            <!-- <span class="fa fa-lock"></span> -->

                            <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>

                        <div class="row">
                            <input type="submit" value="Login" class="btn">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <p>Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->


@endsection








