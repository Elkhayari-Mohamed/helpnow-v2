@extends('layouts.app')
@section('content')
    @foreach ($ordonnance_info as $info)
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
                            {{ $info->doctor_adresse }}
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="border-bottom pb-12">
                        <!--begin::Image-->
                        <div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-cover card-rounded h-150px h-lg-250px mb-lg-20"
                            style="background-image: url(assets/media/misc/pattern-4.jpg)"></div>
                        <!--end::Image-->

                        <!--begin::Wrapper-->
                        <div class="d-flex justify-content-between flex-column flex-md-row">
                            <!--begin::Content-->
                            <div class="flex-grow-1 pt-8 mb-13">
                                <!--begin::Table-->
                                <div class="table-responsive border-bottom mb-14">
                                    <table class="table">
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
                                                <th class="min-w-175px pb-9">Prescription</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="form-group">
                                    {{ $info->prescription }}
                                </div>
                                <!--end::Table-->
                                <!--begin::Section-->

                                <!--end::Section-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="border-end d-none d-md-block mh-450px mx-9"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="text-end pt-10">
                                <!--begin::Total Amount-->
                                <div class="fs-3 fw-bolder text-muted mb-3">Doctor Infos</div>

                                <div class="border-bottom w-100 my-7 my-lg-16"></div>
                                <!--begin::Invoice To-->
                                <div class="text-gray-600 fs-6 fw-bold mb-3">FullName</div>
                                <div class="fs-6 text-gray-800 fw-bold mb-8">
                                    {{ $info->doctor_name }}
                                    <br />
                                </div>
                                <!--end::Invoice To-->
                                <!--begin::Invoice No-->

                                <!--end::Invoice No-->
                                <!--begin::Invoice Date-->
                                <div class="text-gray-600 fs-6 fw-bold mb-3">Phone Number</div>
                                <div class="fs-6 text-gray-800 fw-bold">{{ $info->doctor_phone }} </div><br />
                                <div class="text-gray-600 fs-6 fw-bold mb-3">DATE</div>
                                <div class="fs-6 text-gray-800 fw-bold">{{ $info->created_at }}</div>
                                <!--end::Invoice Date-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
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
    @endforeach
@endsection
