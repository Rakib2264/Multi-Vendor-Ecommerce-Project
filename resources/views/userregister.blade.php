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
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Create an Account</h1>
                                            <p class="mb-30">Already have an account? <a
                                                    href="{{route('login')}}">Login</a></p>
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
                                        <form method="post" action="{{route('register')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name"
                                                    placeholder="Name">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="username"
                                                            placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="tel" name="phone"
                                                            placeholder="Phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input  type="password" name="password_confirmation"
                                                    placeholder="Confirm password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <input type="text" name="securityreg"
                                                        placeholder="Security code *">
                                                </div>
                                                <span>
                                                    @php
                                                    $code = rand('10101','100')
                                                    @endphp
                                                    <input type="text" class="text-sale" name="randomcoderegister" value="{{$code}}" readonly>
                                                </span>
                                            </div>

                                            <div class="form-group mb-30">
                                                <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                    name="login">Register</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <div class="card-login mt-115">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="">
                                        <span>Continue with Facebook</span>
                                    </a>
                                    <a href="#" class="social-login google-login">
                                        <img src="assets/imgs/theme/icons/logo-google.svg" alt="">
                                        <span>Continue with Google</span>
                                    </a>
                                    <a href="#" class="social-login apple-login">
                                        <img src="assets/imgs/theme/icons/logo-apple.svg" alt="">
                                        <span>Continue with Apple</span>
                                    </a>
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
