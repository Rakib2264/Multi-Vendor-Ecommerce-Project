@extends('vendor.master')
@section('page_title', 'Change Password')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Password</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Change</li>
                </ol>
            </nav>
        </div>

    </div>
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <div class="card">
                <div class="row g-0">
                    <div class="col-lg-5 border-end">
                        <div class="card-body">
                            <div class="p-5">
                                <div class="text-start">
                                    <img src="assets/images/logo-img.png" width="180" alt="">
                                </div>
                                <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('vendor.updatepassword') }}" method="post">
                                    @csrf
                                    <div class="mb-2 mt-5 p-0">
                                        <label class="form-label">Old Password</label>
                                        <input type="text" name="opas" class="form-control"
                                            placeholder="Enter old password">
                                    </div>
                                    <div class="mb-2 ">
                                        <label class="form-label">New Password</label>
                                        <input type="text" name="npas" class="form-control"
                                            placeholder="Enter new password">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="text" name="cpas" class="form-control"
                                            placeholder="Confirm password">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Change Password</button> <a
                                            href="{{ route('vendor.dashboard') }}" class="btn btn-light"><i
                                                class="bx bx-arrow-back mr-1"></i>Back to Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <img src="{{ asset('backend') }}/assets/images/login-images/forgot-password-frent-img.jpg"
                            class="card-img login-img h-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
