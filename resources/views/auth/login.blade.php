@extends('layout.head')

@section('main')
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>
                        <form method="POST" action="{{ route('login') }}" class="mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <p>
                                            @error('email')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <label class="form-label text-dark" for="uname">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" required
                                            class="form-control" placeholder="Please enter your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <p>
                                            @error('password')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </p>
                                        <label class="form-label text-dark" for="pwd">Password</label>
                                        <input type="password" name="password" required class="form-control"
                                            placeholder="Enter your Password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn w-100 btn-dark">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="/register" class="text-danger">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
