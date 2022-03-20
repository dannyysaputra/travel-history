@extends('main');

@section('title', 'Login')

@section('main.content')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <img src="{{ asset('dist/img/stisla-fill.svg') }}" alt="logo" width="100"
                        class="shadow-light rounded-circle">
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif

                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/loginUser">
                            @csrf
                            <div class="form-group">
                                <label for="email">Nama</label>
                                <input id="email" type="text"
                                    class="form-control" name="nama"
                                    tabindex="1" required autofocus value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">NIK</label>
                                <input id="password" type="text" class="form-control" name="password" tabindex="2"
                                    required>
                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                                <div class="float-right">
                                    <a href="auth-forgot-password.html" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4 mb-3">
                            <div class="text-job text-muted">Login With Social</div>
                        </div>
                        <div class="row sm-gutters">
                            <div class="col-6">
                                <a class="btn btn-block btn-social btn-facebook">
                                    <span class="fab fa-facebook"></span> Facebook
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-block btn-social btn-twitter">
                                    <span class="fab fa-twitter"></span> Twitter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="/register">Create One</a>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Stisla 2018
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
