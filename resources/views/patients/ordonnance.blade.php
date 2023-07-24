@extends('layouts.app')
@section('content')
    <div class="card">
        <!-- begin::Body-->
        <div class="card-body py-20">
            <!-- begin::Wrapper-->
            <div class="mw-lg-950px mx-auto w-100">
                <!-- begin::Header-->
                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                    <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">Ordonnance</h4>
                    <!--end::Logo-->
                    <div class="fs-6 text-gray-800 fw-bold mb-8">
                        {{ $ordonnance_info[0]->doctor_adresse }}
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                @foreach ($ordonnance_info as $key => $info)
                    <div class="border-bottom pb-12">
                        <!--begin::Image-->
                        <div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-cover card-rounded h-150px h-lg-250px mb-lg-20"
                            style="background-image: url(assets/media/misc/e-prescription.jpg)"></div>
                        <!--end::Image-->

                        <!--begin::Doctor Info-->
                        <div class="d-flex justify-content-between align-items-center mb-10">
                            <div>
                                <h5 class="fw-boldest">Doctor Name:
                                    {{ $doctor_info->last_name . ' ' . $doctor_info->first_name }}</h5>
                                <p class="mb-0">Phone Number: {{ $doctor_info->phone }}</p>
                                <p class="mb-0">Address: {{ $doctor_info->address }}</p>
                            </div>
                        </div>
                        <!--end::Doctor Info-->

                        <!--begin::Wrapper-->

                        <div class="d-flex flex-column mb-13">
                            <!--begin::Content-->
                            <div class="flex-grow-1 pt-8">
                                <!--begin::Fields-->
                                <div class="border-bottom mb-14">
                                    <p><strong>Prescription: </strong>{{ $info->prescription }}</p>
                                    <p><strong>Medication Name: </strong>{{ $info->medication_name }}</p>
                                    <p><strong>Dosage: </strong>{{ $info->dosage }}</p>
                                    <p><strong>Frequency: </strong>{{ $info->frequency }}</p>
                                    <p><strong>Duration: </strong>{{ $info->duration }}</p>
                                    <p><strong>Instructions: </strong>{{ $info->instructions }}</p>
                                    <p><strong>Date:
                                        </strong>{{ \Carbon\Carbon::parse($info->created_at)->format('d-m-Y H:i') }}</p>
                                    <div class="signature" style="text-align:right;">
                                        <div class="text-gray-600 fs-6 fw-bold mb-3">Doctor's Signature</div>
                                        <div class="fs-6 text-gray-800 fw-bold">
                                            {{ $doctor_info->last_name . ' ' . $doctor_info->first_name }}
                                        </div>
                                    </div>
                                </div>
                                <!--end::Fields-->
                            </div>
                        </div>

                        <!--end::Wrapper-->
                    </div>
                @endforeach
                <!--end::Body-->
                <!-- begin::Footer-->
                <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                    <!-- begin::Actions-->
                    <div class="my-1 me-5">
                        <!-- begin::Pint-->
                        <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print
                        </button>
                        <!-- end::Pint-->
                    </div>
                    <!-- end::Actions-->
                    <!-- begin::Action-->
                    <!-- end::Action-->
                </div>
                <!-- end::Footer-->
            </div>
            <!-- end::Wrapper-->
        </div>
        <!-- end::Body-->
    </div>
@endsection
