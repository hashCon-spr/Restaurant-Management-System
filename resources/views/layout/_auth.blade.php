@extends('layout.master')

@section('content')

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Page-->
                        {{ $slot }}
                        <!--end::Page-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->

                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap px-5">
                    <!--begin::Links-->
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="#" class="px-5" target="_blank">Terms</a>

                        <a href="#" class="px-5" target="_blank">Plans</a>

                        <a href="#" class="px-5" target="_blank">Contact Us</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->

            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{ image('misc/Food-Background.png') }})">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <!--begin::Logo-->
                    {{-- <a href="{{ route('dashboard') }}" class="mb-12">
                        <img alt="Logo" src="{{ image('') }}" class="h-60px h-lg-200px"/>
                    </a> --}}
                    <!--end::Logo-->

                    <!--begin::Image-->
                    {{-- <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ image('') }}" alt=""/> --}}
                    <!--end::Image-->

                    <div class="wrapper" style="margin-top: 200px;">
                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                            Experience the Authentic Taste of Indonesia
                        </h1>
                        <!--end::Title-->

                        <!--begin::Text-->
                        <div class="d-none d-lg-block text-white fs-base text-center">
                            <p class="fs-3">Welcome to Nusantara Restaurant.
                                We bring you a rich variety of Indonesian dishes, crafted with traditional spices and the finest ingredients.
                                From Sumatra to Papua — every flavor tells a story.
                                Sign in now and start your culinary journey with us</p>
                        </div>
                        <!--end::Text-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::App-->

@endsection
