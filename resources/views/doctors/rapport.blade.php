@extends('layouts.app')
@section('content')
    @foreach ($patient_info as $info)
        <div class="card">
            <!-- begin::Body-->
            <form method="POST" action="{{ route('doctorsRapport') }}">
                @csrf
                <input type="hidden" value={{ $info->patient->first_name . '' . $info->patient->last_name }}
                    name="patient_name">
                <input type="hidden" value={{ $info->id }} name="consultation_id">

                <div class="card-body py-20">
                    <!-- begin::Wrapper-->
                    <div class="mw-lg-950px mx-auto w-100">
                        <!-- begin::Header-->
                        <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                            <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">Ordonnance</h4>
                            <!--end::Logo-->

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
                                                    <th class="min-w-175px pb-9">Description</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="prescription" id="prescription" rows="8"></textarea>
                                    </div>
                                </div>
                                <!-- Medical Records -->
                                @if ($info->medical_record)
                                    <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">Medical Records</h4>
                                    <div class="table-responsive border-bottom mb-14">
                                        <table class="table">
                                            <thead>
                                                <tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
                                                    <th class="min-w-175px pb-9">Symptoms</th>
                                                    <th class="min-w-175px pb-9">Current Medications</th>
                                                    <th class="min-w-175px pb-9">Medical History</th>
                                                    <th class="min-w-175px pb-9">Allergies</th>
                                                    <th class="min-w-175px pb-9">Family Medical History</th>
                                                    <th class="min-w-175px pb-9">Lifestyle Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $info->medical_record->symptoms }}</td>
                                                    <td>{{ $info->medical_record->current_medications }}</td>
                                                    <td>{{ $info->medical_record->medical_history }}</td>
                                                    <td>{{ $info->medical_record->allergies }}</td>
                                                    <td>{{ $info->medical_record->family_medical_history }}</td>
                                                    <td>{{ $info->medical_record->lifestyle_information }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="border-end d-none d-md-block mh-450px mx-9"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="text-end pt-10">
                                    <!--begin::Total Amount-->
                                    <div class="fs-3 fw-bolder text-muted mb-3">Patient Infos</div>

                                    <div class="border-bottom w-100 my-7 my-lg-16"></div>
                                    <!--begin::Invoice To-->
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">FullName</div>
                                    <div class="fs-6 text-gray-800 fw-bold mb-8">
                                        {{ $info->patient->first_name . ' ' . $info->patient->last_name }}
                                        <br />
                                    </div>
                                    <!--end::Invoice To-->
                                    <!--begin::Invoice No-->
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">Address</div>
                                    <div class="fs-6 text-gray-800 fw-bold mb-8">
                                        {{ $info->patient->address . ', ' . $info->patient->city }}
                                    </div>
                                    <!--end::Invoice No-->
                                    <!--begin::Invoice Date-->
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">Phone Number</div>
                                    <div class="fs-6 text-gray-800 fw-bold">{{ $info->patient->phone }} </div><br />
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">DATE</div>
                                    <div class="fs-6 text-gray-800 fw-bold">{{ Date('Y-m-d') }}</div>
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

                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!-- end::Actions-->
                            <!-- begin::Action-->
                            <!-- end::Action-->
                        </div>
                        <!-- end::Footer-->
                    </div>
                    <!-- end::Wrapper-->
                </div>
                <!-- end::Body-->
            </form>
        </div>
    @endforeach
@endsection
