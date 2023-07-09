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
                        <div class="flex-fill">
                            <div class="mb-0">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{{ $errors->first() }}</li>
                                        </ul>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-between">
                                    <div class="flex-fill" style="margin-right: 20px;">
                                        <label for="" class="form-label mt-2">Patient Name</label>
                                        <input class="form-control form-control-solid"
                                            placeholder="Enter current medications"
                                            value="{{ $consultationRequest->patient->first_name . ' ' . $consultationRequest->patient->last_name }}"
                                            readonly />
                                    </div>

                                    <div class="flex-fill ml-2">
                                        <label for="" class="form-label mt-2">Patient Age and Gender</label>
                                        <input class="form-control form-control-solid"
                                            placeholder="Enter current medications"
                                            value="{{ $consultationRequest->patient->age . ' Years Old  / ' . $consultationRequest->patient->gender }}"
                                            readonly />
                                    </div>
                                </div>
                                <br>
                                <label for="" class="form-label">Select date and time</label>
                                <input name="consultation_date" class="form-control form-control-solid"
                                    value="{{ \Carbon\Carbon::parse($consultationRequest->consultation_date)->format('d-m-Y') }}"
                                    readonly />
                                <br>
                                <div class="d-flex justify-content-between">
                                    <div class="flex-fill" style="margin-right: 20px;">
                                        <label for="" class="form-label mt-2">Symptoms</label>
                                        <select name="symptoms" class="form-control form-control-solid">
                                            <option value="cough"
                                                {{ $consultationRequest->medical_record->symptoms == 'cough' ? 'selected' : '' }}>
                                                Cough</option>
                                            <option value="fever"
                                                {{ $consultationRequest->medical_record->symptoms == 'fever' ? 'selected' : '' }}>
                                                Fever</option>
                                            <option value="headache"
                                                {{ $consultationRequest->medical_record->symptoms == 'headache' ? 'selected' : '' }}>
                                                Headache</option>
                                            <option value="sore throat"
                                                {{ $consultationRequest->medical_record->symptoms == 'sore throat' ? 'selected' : '' }}>
                                                Sore throat</option>
                                            <option value="difficulty breathing"
                                                {{ $consultationRequest->medical_record->symptoms == 'difficulty breathing' ? 'selected' : '' }}>
                                                Difficulty breathing</option>
                                            <option value="loss of taste or smell"
                                                {{ $consultationRequest->medical_record->symptoms == 'loss of taste or smell' ? 'selected' : '' }}>
                                                Loss of taste or smell</option>
                                            <option value="tiredness"
                                                {{ $consultationRequest->medical_record->symptoms == 'tiredness' ? 'selected' : '' }}>
                                                Tiredness</option>
                                            <option value="aches and pains"
                                                {{ $consultationRequest->medical_record->symptoms == 'aches and pains' ? 'selected' : '' }}>
                                                Aches and pains</option>
                                            <option value="runny or stuffy nose"
                                                {{ $consultationRequest->medical_record->symptoms == 'runny or stuffy nose' ? 'selected' : '' }}>
                                                Runny or stuffy nose</option>
                                            <option value="nausea or vomiting"
                                                {{ $consultationRequest->medical_record->symptoms == 'nausea or vomiting' ? 'selected' : '' }}>
                                                Nausea or vomiting</option>
                                            <option value="diarrhea"
                                                {{ $consultationRequest->medical_record->symptoms == 'diarrhea' ? 'selected' : '' }}>
                                                Diarrhea</option>
                                        </select>
                                    </div>

                                    <div class="flex-fill ml-2" style="margin-left: 10rem">

                                        <label for="" class="form-label mt-2">Current Medications</label>
                                        <input name="current_medications" class="form-control form-control-solid"
                                            placeholder="Enter current medications"
                                            value="{{ $consultationRequest->medical_record->current_medications }}"
                                            readonly />
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <div class="flex-fill" style="margin-right: 20px;">
                                        <label for="" class="form-label mt-2">Allergies</label>
                                        <select name="allergies" class="form-control form-control-solid">
                                            <option value="dairy"
                                                {{ $consultationRequest->medical_record->allergies == 'dairy' ? 'selected' : '' }}>
                                                Dairy</option>
                                            <option value="egg"
                                                {{ $consultationRequest->medical_record->allergies == 'egg' ? 'selected' : '' }}>
                                                Egg</option>
                                            <option value="peanut"
                                                {{ $consultationRequest->medical_record->allergies == 'peanut' ? 'selected' : '' }}>
                                                Peanut</option>
                                            <option value="tree nuts"
                                                {{ $consultationRequest->medical_record->allergies == 'tree nuts' ? 'selected' : '' }}>
                                                Tree nuts</option>
                                            <option value="soy"
                                                {{ $consultationRequest->medical_record->allergies == 'soy' ? 'selected' : '' }}>
                                                Soy</option>
                                            <option value="wheat"
                                                {{ $consultationRequest->medical_record->allergies == 'wheat' ? 'selected' : '' }}>
                                                Wheat</option>
                                            <option value="fish"
                                                {{ $consultationRequest->medical_record->allergies == 'fish' ? 'selected' : '' }}>
                                                Fish</option>
                                            <option value="shellfish"
                                                {{ $consultationRequest->medical_record->allergies == 'shellfish' ? 'selected' : '' }}>
                                                Shellfish</option>
                                            <option value="sesame"
                                                {{ $consultationRequest->medical_record->allergies == 'sesame' ? 'selected' : '' }}>
                                                Sesame</option>
                                        </select>
                                    </div>
                                    <div class="flex-fill ml-2"  style="margin-left: 16rem">
                                        <label for="" class="form-label mt-2 ">Medical History</label>
                                        <input name="medical_history" class="form-control form-control-solid"
                                            placeholder="Enter medical history"
                                            value="{{ $consultationRequest->medical_record->medical_history }}" readonly />
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <div class="flex-fill mr-2" style="margin-right: 20px;">
                                    <label for="" class="form-label mt-2">Family Medical History</label>
                                    <input name="family_medical_history" class="form-control form-control-solid"
                                        placeholder="Enter family medical history"
                                        value="{{ $consultationRequest->medical_record->family_medical_history }}"
                                        readonly />
                                    </div>
                                    <div class="flex-fill ml-2" style="margin-left: 20px;">

                                    <label for="" class="form-label mt-2">Lifestyle Information</label>
                                    <input name="lifestyle_information" class="form-control form-control-solid"
                                        placeholder="Enter lifestyle information"
                                        value="{{ $consultationRequest->medical_record->lifestyle_information }}"
                                        readonly />
                                </div>
                                </div>
                            </div>

                                <!--end::Modal-->
                                <br>
                                <div name="descriptions" class="table-responsive border-bottom mb-14">
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
                                                        readonly>{{ $consultationRequest->descriptions }} </textarea>
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
