@extends('layouts/app')
@section('content')
    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <!--begin::Mixed Widget 1-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Header-->
                <div class="px-9 pt-7 card-rounded h-275px w-100 bg-dark">
                    <!--begin::Heading-->
                    <div class="d-flex flex-stack">
                        <h3 class="m-0 text-white fw-bolder fs-3">Consultations Summary</h3>
                        <div class="ms-1">
                            <!--begin::Menu-->

                            <!--begin::Menu 3-->

                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Balance-->
                    <div class="d-flex text-center flex-column text-white pt-8">
                        <span class="fw-bold fs-7">You Balance</span>
                        <span class="fw-bolder fs-2x pt-1">{{ $balance }}</span>
                    </div>
                    <!--end::Balance-->
                </div>
                <!--end::Header-->
                <!--begin::Items-->
                <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1"
                    style="margin-top: -100px">
                    <!--begin::Item-->
                    @foreach ($consultations as $consultation)
                    @endforeach

                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45px w-40px me-5">
                            <span class="symbol-label bg-lighten">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                            fill="currentColor" />
                                        <rect x="7" y="17" width="6" height="2" rx="1"
                                            fill="currentColor" />
                                        <rect x="7" y="12" width="10" height="2" rx="1"
                                            fill="currentColor" />
                                        <rect x="7" y="7" width="6" height="2" rx="1"
                                            fill="currentColor" />
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Description-->
                        <div class="d-flex align-items-center flex-wrap w-100">
                            <!--begin::Title-->


                            <div class="mb-1 pe-3 flex-grow-1">
                                <a class="fs-5 text-gray-800 text-hover-primary fw-bolder">Total Consultations</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center">

                                <div class="fw-bolder fs-5 text-gray-800 pe-1">{{ $consultations->count() }}
                                </div>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->

                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45px w-40px me-5">
                            <span class="symbol-label bg-lighten">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect x="2" y="2" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                            rx="2" fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                            rx="2" fill="currentColor" />
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                            rx="2" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Description-->
                        <div class="d-flex align-items-center flex-wrap w-100">
                            <!--begin::Title-->
                            <div class="mb-1 pe-3 flex-grow-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Consultations
                                    Approved</a>
                                @php
                                    $count = $consultations->where(['status' => 1])->count();
                                @endphp
                            </div>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center">
                                <div class="fw-bolder fs-5 text-gray-800 pe-1">{{ $count }}</div>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->

                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45px w-40px me-5">
                            <span class="symbol-label bg-lighten">
                                <!--begin::Svg Icon | path: icons/duotune/electronics/elc005.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M15 19H7C5.9 19 5 18.1 5 17V7C5 5.9 5.9 5 7 5H15C16.1 5 17 5.9 17 7V17C17 18.1 16.1 19 15 19Z"
                                            fill="currentColor" />
                                        <path
                                            d="M8.5 2H13.4C14 2 14.5 2.4 14.6 3L14.9 5H6.89999L7.2 3C7.4 2.4 7.9 2 8.5 2ZM7.3 21C7.4 21.6 7.9 22 8.5 22H13.4C14 22 14.5 21.6 14.6 21L14.9 19H6.89999L7.3 21ZM18.3 10.2C18.5 9.39995 18.5 8.49995 18.3 7.69995C18.2 7.29995 17.8 6.90002 17.3 6.90002H17V10.9H17.3C17.8 11 18.2 10.7 18.3 10.2Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Description-->
                        <div class="d-flex align-items-center flex-wrap w-100">
                            <!--begin::Title-->
                            @php
                                
                                $count = $consultations->where(['payed' => 1])->count();
                            @endphp
                            <div class="mb-1 pe-3 flex-grow-1">
                                <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Consultations
                                    Payed</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center">
                                <div class="fw-bolder fs-5 text-gray-800 pe-1">{{ $count }}</div>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->

                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->

                    <!--end::Item-->

                </div>
                <!--end::Items-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 1-->
    </div>
    <!--end::Row-->
    <div class="row g-5 g-xl-8">

        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->

            <div class="card-header align-items-center border-0 mt-3">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bolder text-dark fs-3">My Cunsultations</span>
                    <span class="text-gray-400 mt-2 fw-bold fs-6"></span>
                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
                <!--begin::Item-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ $errors->first() }}</li>
                        </ul>
                    </div>
                @endif
                @foreach ($consultations as $consultation)
                    @if ($consultation->status == 1)
                        <div class="d-flex mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                <img src="assets/media/stock/600x400/pay1.jpg" class="mw-100" alt="" />
                            </div>

                            <!--end::Symbol-->
                            <!--begin::Section-->

                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a
                                        class="fs-5 text-gray-800 text-hover-primary fw-bolder">{{ $consultation->patient->first_name . ' ' . $consultation->patient->last_name }}</a>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Date:
                                        {{ $consultation->consultation_date }}</span>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Descriptions:
                                        {{ $consultation->descriptions }}</span>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">Price {{ $consultation->price }}</span>
                                    <div class="fs-7 text-muted">Status

                                        @if ($consultation->payed == 0)
                                            <a class="text-danger">Not Payed</a>
                                        @else
                                            <a class="text-success">Payed</a>
                                        @endif

                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Info-->


                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                    @endif
                    <!--end::Item-->
                    <!--begin::Item-->
                @endforeach

                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 9-->

    </div>
@endsection
