@extends('layouts.app')
@section('content')
    <div id="kt_content_container">

        <!--begin::Navbar-->
        <form method="POST" action="/profile">
            @csrf
            <!--end::Navbar-->
            <!--begin::Followers toolbar-->
            <!--end::Followers toolbar-->
            <!--begin::Row-->

            <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                <!--begin::Followers-->
                <!--begin::Col-->
                <div class="mb-11">
                    <!--begin::Top-->
                    <!--end::Top-->
                    <!--begin::Overlay-->
                    <div class="overlay">
                        <!--begin::Image-->
                        <img class="w-100 card-rounded" src="assets/media/stock/1600x800/{{ $speciality }}.jpg"
                            alt="" />
                        <!--end::Image-->
                        <!--begin::Links-->
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">

                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Overlay-->
                </div>

                <div class="text-center mb-18">
                    <!--begin::Title-->

                    <h3 class="fs-2hx text-dark mb-6">{{ $speciality }}</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <!--end::Text-->
                </div>
                @foreach ($listdoctors as $list)
                    <div class="col-md-6 col-xxl-4">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-center flex-column p-9">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-65px symbol-circle mb-5">
                                    <img src="assets/media//avatars/300-11.jpg" alt="image" />
                                    <div
                                        class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-white h-15px w-15px ms-n3 mt-n3">
                                    </div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="patients/doctorcontact/{{ $list['id'] }}"
                                    class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{ $list->first_name . ' ' . $list->last_name }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fw-bold text-gray-400 mb-0">{{ $list->specialitie_name }}</div>
                                <!--end::Position-->
                                <!--begin::Info-->
                                <div class="card-body d-flex flex-center flex-column p-5">
                                    <!--begin::Stats-->
                                    <div class="card-body d-flex flex-center flex-column p-5">
                                        <div class="fs-6 fw-bolder text-gray-700"></div>
                                        <div class="fw-bold text-gray-400">{{ $list->age }}</div>
                                    </div>

                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Follow-->
                                <a href="patients/doctorcontact/{{ $list['id'] }}" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Details
                                </a>
                                <!--end::Follow-->
                            </div>
                            <!--begin::Card body-->
                        </div>
                        <!--begin::Card-->
                    </div>
                @endforeach

                <!--end::Row-->
                <!--begin::Row(for show more)-->

                <!--end::Row-->
                <!--begin::Show more-->
                <div class="d-flex flex-center">
                    <button class="btn btn-primary" id="kt_followers_show_more_button">
                        <!--begin::Indicator-->
                        <span class="indicator-label">Show more</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator-->
                    </button>
                </div>
                <!--end::Show more-->
            </div>
        </form>
    </div>
@endsection
