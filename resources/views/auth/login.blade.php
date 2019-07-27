@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="login-box">
                <div class="login-logo">
                    <a href=""><b>Social</b>LITE</a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group has-feedback">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <div class="social-auth-links text-center mb-3">
                            <p>- OR -</p>
                            <div class="row">

                                <div class="col-2" style="margin-right: 15px;"></div>

                                <div class="col-2">
                                    <a href="{{ url('/login/facebook') }}" class="btn btn-primary btn-sm social"><i class="fa fa-facebook"></i> </a>
                                </div>

                                <div class="col-2">
                                    <a href="{{ url('/login/google') }}" class="btn btn-danger btn-sm social"><i class="fa fa-google"></i> </a>
                                </div>

                                <div class="col-2">
                                    <a href="{{ url('/login/github') }}" class="btn btn-dark btn-sm social"><i class="fa fa-github"></i> </a>
                                </div>

                                <div class="col-3"></div>
                            </div>
                        </div>
                        <!-- /.social-auth-links -->

                        <p class="mb-1">
                            <a href="{{ route('password.request') }}">I forgot my password</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
