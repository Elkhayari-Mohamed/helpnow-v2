@extends('layouts.app')
@section('content')
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <div class="card">
        <form method="POST" action="{{ route('patientsConsultation.save', ['id' => $doctor->id]) }}">
            @csrf

            <input type="hidden" value={{ $doctor->id }} name="doctor_id">
            <input type="hidden" value={{ $patient->id }} name="patient_id">

            <!-- begin::Body-->
            <div class="card-body py-20">
                <!-- begin::Wrapper-->
                <div class="mw-lg-950px mx-auto w-100">
                    <!-- begin::Header-->
                    <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                        <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">REQUEST A CONSULTATION</h4>
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
                                <div class="mb-0">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                <li>{{ $errors->first() }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <label for="" class="form-label">Select date and time</label>
                                    <input name="consultation_date" class="form-control form-control-solid"
                                        placeholder="Pick date & time" id="kt_datepicker_3" />

                                    <label for="" class="form-label mt-2">Symptoms</label>
                                    <select name="symptoms" class="form-control form-control-solid">
                                        <option value="cough">Cough</option>
                                        <option value="fever">Fever</option>
                                        <option value="headache">Headache</option>
                                        <option value="sore throat">Sore throat</option>
                                        <option value="difficulty breathing">Difficulty breathing</option>
                                        <option value="loss of taste or smell">Loss of taste or smell</option>
                                        <option value="tiredness">Tiredness</option>
                                        <option value="aches and pains">Aches and pains</option>
                                        <option value="runny or stuffy nose">Runny or stuffy nose</option>
                                        <option value="nausea or vomiting">Nausea or vomiting</option>
                                        <option value="diarrhea">Diarrhea</option>
                                        <!-- Add more options as needed -->
                                    </select>


                                    <label for="" class="form-label mt-2">Current Medications</label>
                                    <input name="current_medications" class="form-control form-control-solid"
                                        placeholder="Enter current medications" />

                                    <label for="" class="form-label mt-2">Medical History</label>
                                    <input name="medical_history" class="form-control form-control-solid"
                                        placeholder="Enter medical history" />

                                    <label for="" class="form-label mt-2">Allergies</label>
                                    <select name="allergies" class="form-control form-control-solid">
                                        <option value="dairy">Dairy</option>
                                        <option value="egg">Egg</option>
                                        <option value="peanut">Peanut</option>
                                        <option value="tree nuts">Tree nuts</option>
                                        <option value="soy">Soy</option>
                                        <option value="wheat">Wheat</option>
                                        <option value="fish">Fish</option>
                                        <option value="shellfish">Shellfish</option>
                                        <option value="sesame">Sesame</option>
                                        <!-- Add more options as needed -->
                                    </select>

                                    <label for="" class="form-label mt-2">Family Medical History</label>
                                    <input name="family_medical_history" class="form-control form-control-solid"
                                        placeholder="Enter family medical history" />

                                    <label for="" class="form-label mt-2">Lifestyle Information</label>
                                    <input name="lifestyle_information" class="form-control form-control-solid"
                                        placeholder="Enter lifestyle information" />
                                </div>
                                <!--end::Modal-->
                                <br>
                                <div name="descriptions"class="table-responsive border-bottom mb-14">
                                    <table class="table">
                                        <thead>
                                            <tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
                                                <th class="min-w-175px pb-9">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>
                                                <div class="form-group shadow-textarea">
                                                    <label for="exampleFormControlTextarea6"></label>
                                                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" name="descriptions" rows="7"
                                                        placeholder="what do you feel ..."></textarea>
                                                </div>
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
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
                    <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                        <!-- begin::Actions-->
                        <div class="my-1 me-5">
                            <!-- begin::Pint-->

                            <!-- end::Pint-->
                            <!-- begin::Download-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Set</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button> <!-- end::Download-->
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
        </form>
    </div>
    <script>
        $("#kt_datepicker_3").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
@endsection
