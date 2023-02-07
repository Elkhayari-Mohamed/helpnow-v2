@extends('layouts.app')
@section('content')
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <div class="card">

        <!-- begin::Body-->
        <div class="card-body py-20">
            <!-- begin::Wrapper-->
            <div class="mw-lg-950px mx-auto w-100">
                <!-- begin::Header-->
                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                    <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">CONSULTATION REQUEST</h4>
                    <!--end::Logo-->
                    <div class="text-sm-end">
                        <!--begin::Logo-->
                        <a href="#">
                            <img alt="Logo" src="assets/media/svg/brand-logos/11.svg" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Text-->
                        <div class="text-sm-end fw-bold fs-4 text-muted mt-7">
                            <div></div>
                            <div></div>
                        </div>
                        <!--end::Text-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->

                <div class="border-bottom pb-12">
                    <!--begin::Image-->
                    <!--end::Image-->
                    <!--begin::Wrapper-->
                    <div class="d-flex justify-content-between flex-column flex-md-row">
                        <!--begin::Content-->
                        <div class="flex-grow-1 pt-8 mb-13">
                            <!--begin::Table-->
                            <div name="descriptions"class="table-responsive border-bottom mb-14">
                                <table class="table">
                                    <thead>
                                        <tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
                                            <th class="min-w-175px pb-9">Symptoms Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>
                                            <div class="form-group shadow-textarea">
                                                <label for="exampleFormControlTextarea6"></label>
                                                {{ $consultation->descriptions }}
                                            </div>
                                        </td>

                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                            <!--begin::Section-->
                            <!--begin::Modal-->
                            <div class="mb-0">
                                {{ $consultation->consultation_date }}
                            </div>
                            <!--end::Modal-->
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="border-end d-none d-md-block mh-450px mx-9"></div>
                        <!--end::Separator-->

                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
                <!-- begin::Footer-->

                <!-- end::Footer-->
            </div>
            <!-- end::Wrapper-->
        </div>
        <!-- end::Body-->

    </div>
    <script>
        $("#kt_datepicker_3").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
@endsection
