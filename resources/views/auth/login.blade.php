@extends('components.weblayout')
    @section('content') 
    <!--Start Up side-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Login</h1>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('login')}}">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Up side-->

    <!---->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8">
                    <div class="nav nav-tabs request-quote-tabs style3" id="nav-tab" role="tablist"><button
                            class="nav-link active" id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1"
                            type="button">Login</button> <button class="nav-link" id="nav-step2-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-step2" type="button">Forget Password?</button>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                            <div class="themeholy-request-form">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div 
                                                class="col-md-12 form-group"><input type="text" placeholder="Your Email"
                                                    class="form-control" name="email"> <i class="fal fa-envelope"></i>
                                            </div>
                                            <div class="col-md-12 form-group"><input type="Password" placeholder="Password"
                                                class="form-control" name="password"> <i class="fa-regular fa-security"></i>
                                            </div>
                                            <div class=""><input id="remember_me" type="checkbox" name="remember"
                                                class=""> 
                                            </div>
                                            <button type="submit" class="themeholy-btn white-btn">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                            <div class="themeholy-request-form">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                                <div class="row">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="col-md-12 mt-3 mb-3 text-white">
                                            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                                        </div>
                                        <div class="col-md-12 form-group"><input type="text" placeholder="Your Email"
                                                class="form-control" name="email"> <i class="fal fa-envelope"></i></div><button type="submit" class="themeholy-btn white-btn">Forget Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
@endsection
