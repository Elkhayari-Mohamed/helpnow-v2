@extends('layouts.app')
@section('content')
    <div class="card card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header align-items-center border-0 mt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="fw-bolder text-dark">Specialities List</span>
                <span class="text-muted mt-1 fw-bold fs-7">Gifts and more</span>
            </h3>

        </div>
        <!--end::Header-->
        @foreach ($specialities as $item)
            <!--begin::Body-->
            <div class="card-body pt-3">
                <!--begin::Item-->
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->

                    <div class="symbol symbol-60px symbol-2by3 me-4">
                        <div class="symbol-label"
                            style="background-image: url('assets/media/stock/600x400/{{ $item->name }}.jpg')">
                        </div>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                        <!--begin::Title-->
                        <div class="flex-grow-1 my-lg-0 my-2 me-2">
                            <a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">{{ $item->name }}
                            </a>

                            <span class="text-muted fw-bold d-block pt-1">{{ $item->description }}</span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Section-->

                        <div class="d-flex align-items-center">
                            <a href="patients/doctorsbyspecialitie/{{ $item['name'] }}"
                                class="btn btn-icon btn-light btn-sm border-0">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                    See Doctors By This Specialitie
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                            rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Item-->

                <!--begin::Symbol-->

                <!--end::Content-->
            </div>

            <!--end::Item-->
        @endforeach
    </div>
    <!--end::Body-->
    </div>
    <style>
        .btn-group-sm>.btn.btn-icon,
        .btn.btn-icon.btn-sm {
            height: calc(1.5em + 1.1rem + 4px);
            width: calc(16.5em + 1.5rem + 5px);
        }
    </style>
@endsection
