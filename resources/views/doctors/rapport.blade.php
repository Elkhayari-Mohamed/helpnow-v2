@extends('layouts.app')
@section('content')
    @foreach ($patient_info as $info)
        <div class="card">
            <form method="POST" action="{{ route('doctorsRapport') }}">
                @csrf
                <input type="hidden" value={{ $info->patient->first_name . ' ' . $info->patient->last_name }}
                    name="patient_name">
                <input type="hidden" value={{ $info->id }} name="consultation_id">

                <div class="card-body py-20">
                    <div class="mw-lg-950px mx-auto w-100">
                        <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                            <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">Write An E-Prescription</h4>
                        </div>
                        <div class="border-bottom pb-12">
                            <div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-cover card-rounded h-150px h-lg-250px mb-lg-20"
                                style="background-image: url(assets/media/misc/e-prescription.jpg)"></div>
                            <div class="d-flex justify-content-between flex-column flex-md-row">
                                <div class="flex-grow-1 pt-8 mb-13">
                                    <div class="form-group mb-3">
                                        <label for="prescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="prescription" name="prescription" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="medication_name" class="form-label">Medication Name</label>
                                        <input type="text" class="form-control" id="medication_name"
                                            name="medication_name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dosage" class="form-label">Dosage</label>
                                        <input type="text" class="form-control" id="dosage" name="dosage">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="frequency" class="form-label">Frequency</label>
                                        <input type="text" class="form-control" id="frequency" name="frequency">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" id="duration" name="duration">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="instructions" class="form-label">Instructions</label>
                                        <textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="border-end d-none d-md-block mh-450px mx-9"></div>
                                <div class="text-end pt-10">
                                    <div class="fs-3 fw-bolder text-muted mb-3">Patient Infos</div>
                                    <div class="border-bottom w-100 my-7 my-lg-16"></div>
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">FullName</div>
                                    <div class="fs-6 text-gray-800 fw-bold mb-8">
                                        {{ $info->patient->first_name . ' ' . $info->patient->last_name }}
                                        <br />
                                    </div>
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">Address</div>
                                    <div class="fs-6 text-gray-800 fw-bold mb-8">
                                        {{ $info->patient->address . ', ' . $info->patient->city }}
                                    </div>
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">Phone Number</div>
                                    <div class="fs-6 text-gray-800 fw-bold">{{ $info->patient->phone }} </div><br />
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">DATE</div>
                                    <div class="fs-6 text-gray-800 fw-bold">{{ Date('Y-m-d') }}</div>
                                </div>
                            </div>
                        </div>
                        <!-- ... rest of your code ... -->

                        <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <div class="signature" style="text-align:right;">
                            <div class="text-gray-600 fs-6 fw-bold mb-3">Doctor's Signature</div>
                            <div class="fs-6 text-gray-800 fw-bold">
                                {{ auth()->user()->doctor->last_name . ' ' . auth()->user()->doctor->first_name }}</div>
                        </div>

                        <!-- ... rest of your code ... -->

                    </div>
            </form>
        </div>
    @endforeach
@endsection
