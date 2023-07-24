@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Summary-->
                    <!--begin::User Info-->
                    <div class="d-flex flex-center flex-column py-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            @if ($patient_info->img)
                                <img src={{ $patient_info->img }} alt="image" />
                            @else
                                <img src='assets/media/avatars/300-1.jpg' alt="image" />
                            @endif
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $patient_info->first_name . ' ' . $patient_info->last_name }}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="mb-9">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">{{ $patient_info->user->type_account }}
                            </div>
                            <!--begin::Badge-->
                        </div>

                    </div>

                    <div class="separator"></div>
                    <!--begin::Details content-->
                    <div id="kt_user_view_details" class="collapse show">
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Account ID</div>
                            <div class="text-gray-600">ID-45453423</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Email</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $email->email }}</a>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Address</div>
                            <div class="text-gray-600">
                                {{ $patient_info->address . ', ' . $patient_info->city }}
                            </div>
                            <div class="fw-bolder mt-5">Phone Number</div>
                            <div class="text-gray-600">{{ $patient_info->phone }}</div>
                            <div class="fw-bolder mt-5">Age</div>
                            <div class="text-gray-600">{{ $patient_info->age }}</div>
                            <div class="fw-bolder mt-5">Gender</div>
                            <div class="text-gray-600">{{ $patient_info->gender }}</div>
                            <div class="fw-bolder mt-5">Notes</div>
                            <div class="text-gray-600">{{ $patient_info->notes }}</div>
                            <!--begin::Details item-->
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Connected Accounts-->

            <!--end::Connected Accounts-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">

                    <!--begin::Tasks-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            @if ($patient_info->gender == 'Male')
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">

                                        Mr.{{ $patient_info->last_name }} Consultations</h2>

                                    <div class="fs-6 fw-bold text-muted">Total {{ $count }}
                                        Consultations</div>
                                </div>
                            @else
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">

                                        Ms.{{ $patient_info->last_name }} Consultations</h2>

                                    <div class="fs-6 fw-bold text-muted">Total {{ $count }}
                                        Consultations
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        @foreach ($consultations as $item)
                            <div class="card-body d-flex flex-column">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center position-relative mb-7">
                                    <!--begin::Label-->
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                    <!--end::Label-->
                                    <!--begin::Details-->
                                    <div class="fw-bold ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bolder text-dark text-hover-primary">{{ $patient_info->first_name . ' ' . $patient_info->last_name }}</a>
                                        <!--begin::Info-->
                                        <div class="fs-7 text-muted">Consultation Date
                                            <a href="#"> {{ $item->consultation_date }}</a>
                                        </div>
                                        <!--end::Info-->

                                        <div class="fs-7 text-muted">Status
                                            @if ($item->payed == 0)
                                                <a href="#" class="text-danger">Not Payed</a>
                                            @else
                                                Payed
                                            @endif
                                        </div>
                                    </div>

                                    <!--end::User-->

                                    <!--end::Details-->
                                    <!--begin::Menu-->
                                    <button type="button"
                                        class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Task menu-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                        data-kt-menu-id="kt-users-tasks">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Update Status</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fs-6 fw-bold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" name="task_status"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="4">Rejected</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="button"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-users-update-task-status="reset">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-users-update-task-status="submit">
                                                    <span class="indicator-label">Apply</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Task menu-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <!--end::Item-->
                            </div>
                        @endforeach

                        <!--end::Card body-->
                    </div>
                    <!--end::Tasks-->
                </div>
                <!--end:::Tab pane-->

                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
@endsection
