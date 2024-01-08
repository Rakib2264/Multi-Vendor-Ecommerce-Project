<!DOCTYPE html>
<html class="no-js" lang="en">
@include('include.head')
<body>
    <!-- Modal -->
    <!-- Quick view -->
    @include('include.quickview')
    <!-- Header  -->
    @include('include.header')
    <!-- End Header  -->
    @include('include.mobile_headder')
    <!--End header-->
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="{{asset('frontend')}}/assets/imgs/page/login-1.png" alt="">
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Login</h1>
                                            <p class="mb-30">Don't have an account? <a href="{{route('register')}}">Create here</a></p>
                                        </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                       <form method="post" action="{{route('login')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="email"  placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input  type="password" name="password" placeholder="Your password *">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <input type="text" name="security" placeholder="Security code *">
                                                </div>
                                                <span>
                                                    @php
                                                    $code = rand('10101','100')
                                                    @endphp
                                                    <input type="text" class="text-sale" name="randomcode" value="{{$code}}" readonly>
                                                </span>
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <a class="text-muted" href="{{route('password.request')}}">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- End footer  -->
    @include('include.footer')
    <!--End footer-->
    <!-- Preloader Start -->
    @include('include.loading')
    <!-- Vendor JS-->
    @include('include.js')
</body>
</html>
