@extends('layouts.auth')
@section('content')
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Sign In to TeleConsult</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">New Here?
                            <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input id="email" class="form-control form-control-lg form-control-solid" type="email"
                            name="email" :value="old('email')" required autofocus />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            <a href="../../demo1/dist/authentication/layouts/aside/password-reset.html"
                                class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Input-->
                        <input id="password" class="form-control form-control-lg form-control-solid" type="password"
                            name="password" required autocomplete="current-password" />
                        <!--end::Input-->
                    </div>



                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}

                                </button>
                                <!--end::Submit button-->
                                <!--begin:
                                            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                            
                                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                                    class="h-20px me-3" />Continue with Google</a>
                             
                                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                                <img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg"
                                                    class="h-20px me-3" />Continue with Facebook</a>
                             
                                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg"
                                                    class="h-20px me-3" />Continue with Apple</a>
                            
                                        </div>
                                   send::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    @endsection
