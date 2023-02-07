@extends('layouts/app')
@section('content')
    <!--begin::Content-->

    @foreach ($infos as $info)
        <!--begin::Contacts-->
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_chat_contacts_header">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                    <span class="svg-icon svg-icon-1 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                fill="currentColor" />
                            <path opacity="0.3"
                                d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <h2>Profile</h2>
                </div>

                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar gap-3">
                    <!--begin::Action menu-->
                    <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="10" y="10" width="4" height="4" rx="2"
                                    fill="currentColor" />
                                <rect x="17" y="10" width="4" height="4" rx="2"
                                    fill="currentColor" />
                                <rect x="3" y="10" width="4" height="4" rx="2"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{ route('patientsProfils') }}" class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Action menu-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->

            <div class="card-body pt-5">
                <!--begin::Profile-->
                <div class="d-flex gap-7 align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-circle symbol-100px">
                        <img src="assets/media/avatars/300-6.jpg" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Profile-->

                    <div class="d-flex flex-column gap-2">
                        <!--begin::Name-->


                        <h3 class="mb-0"></h3>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <div class="d-flex align-items-center gap-2">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path opacity="0.3"
                                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                        fill="currentColor" />
                                    <path
                                        d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <a href="#" class="text-muted text-hover-primary"> {{ Auth::user()->email }} </a>
                        </div>
                        <!--end::Email-->
                        <!--begin::Phone-->
                        <div class="d-flex align-items-center gap-2">
                            <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z"
                                        fill="currentColor" />
                                    <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor" />
                                </svg>
                            </span>

                            <!--end::Svg Icon-->
                            <a href="#" class="text-muted text-hover-primary">{{ $info->phone }}</a>
                        </div>
                        <!--end::Phone-->
                    </div>
                    <!--end::Profile-->
                </div>
                <!--end::Profile-->
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-bold mt-6 mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_contact_view_general">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->General
                        </a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_contact_view_meetings">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                        fill="currentColor" />
                                    <path
                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Meetings
                        </a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_contact_view_activity">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Activity
                        </a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content" id="">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">
                        <!--begin::Additional details-->
                        <div class="d-flex flex-column gap-5 mt-7">
                            <!--begin::Company name-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">full Name</div>
                                <div class="fw-bolder fs-5">{{ $info->first_name . ' ' . $info->last_name }}</div>
                            </div>
                            <!--end::Company name-->
                            <!--begin::City-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">City</div>
                                <div class="fw-bolder fs-5">{{ $info->city }}</div>
                            </div>
                            <!--end::City-->
                            <!--begin::Country-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Country</div>
                                <div class="fw-bolder fs-5">{{ $info->country }}</div>
                            </div>
                            <!--end::Country-->
                            <!--begin::Notes-->
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bolder text-muted">Notes</div>
                                <p>
                                    {{ $info->notes }}
                                </p>
                            </div>
                            <!--end::Notes-->
                        </div>
                        <!--end::Additional details-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">
                        <!--begin::Dates-->
                        <ul class="nav nav-pills d-flex flex-stack flex-nowrap hover-scroll-x">
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_0">
                                    <span class="opacity-50 fs-7 fw-bold">Su</span>
                                    <span class="fs-6 fw-bolder">22</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary active"
                                    data-bs-toggle="tab" href="#kt_schedule_day_1">
                                    <span class="opacity-50 fs-7 fw-bold">Mo</span>
                                    <span class="fs-6 fw-bolder">23</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_2">
                                    <span class="opacity-50 fs-7 fw-bold">Tu</span>
                                    <span class="fs-6 fw-bolder">24</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_3">
                                    <span class="opacity-50 fs-7 fw-bold">We</span>
                                    <span class="fs-6 fw-bolder">25</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_4">
                                    <span class="opacity-50 fs-7 fw-bold">Th</span>
                                    <span class="fs-6 fw-bolder">26</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_5">
                                    <span class="opacity-50 fs-7 fw-bold">Fr</span>
                                    <span class="fs-6 fw-bolder">27</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_6">
                                    <span class="opacity-50 fs-7 fw-bold">Sa</span>
                                    <span class="fs-6 fw-bolder">28</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_7">
                                    <span class="opacity-50 fs-7 fw-bold">Su</span>
                                    <span class="fs-6 fw-bolder">29</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_8">
                                    <span class="opacity-50 fs-7 fw-bold">Mo</span>
                                    <span class="fs-6 fw-bolder">30</span>
                                </a>
                            </li>
                            <!--end::Date-->
                            <!--begin::Date-->
                            <li class="nav-item me-1">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-dark text-active-white btn-active-primary"
                                    data-bs-toggle="tab" href="#kt_schedule_day_9">
                                    <span class="opacity-50 fs-7 fw-bold">Tu</span>
                                    <span class="fs-6 fw-bolder">31</span>
                                </a>
                            </li>
                            <!--end::Date-->
                        </ul>
                        <!--end::Dates-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Day-->
                            <div id="kt_schedule_day_0" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch
                                            &amp; Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">David Stevenson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development
                                            Team
                                            Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Michael Walters</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9
                                            Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development
                                            Team
                                            Capacity Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch
                                            &amp; Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Naomi Hayabusa</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch
                                            &amp; Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">David Stevenson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_2" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard
                                            UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Kendell Trevor</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch
                                            &amp; Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Walter White</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_3" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team
                                            Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing
                                            Campaign Discussion</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project
                                            Review &amp; Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Sean Bean</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_4" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project
                                            Review &amp; Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">10:00 - 11:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9
                                            Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Walter White</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Michael Walters</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_5" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9
                                            Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Kendell Trevor</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team
                                            Backlog Grooming Session</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Walter White</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard
                                            UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">David Stevenson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_6" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales
                                            Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales
                                            Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Terry Robins</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative
                                            Content Initiative</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_7" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9
                                            Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Caleb Donaldson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee
                                            Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Peter Marcus</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9
                                            Degree
                                            Project Estimation Meeting</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Peter Marcus</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>

                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_8" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">11:00 - 11:45
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch
                                            &amp; Learn Catch Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales
                                            Pitch Proposal</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Mark Randall</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">14:30 - 15:30
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee
                                            Review Approvals</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Terry Robins</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                            <!--begin::Day-->
                            <div id="kt_schedule_day_9" class="tab-pane fade show">
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">9:00 - 10:00
                                            <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard
                                            UI/UX Design Review</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Yannis Gloverson</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">13:00 - 14:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project
                                            Review &amp; Testing</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Kendell Trevor</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                                <!--begin::Time-->
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <!--begin::Bar-->
                                    <div class="position-absolute h-100 w-4px bg-success rounded top-0 start-0"></div>
                                    <!--end::Bar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold ms-5 text-gray-600">
                                        <!--begin::Time-->
                                        <div class="fs-5">12:00 - 13:00
                                            <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                        </div>
                                        <!--end::Time-->
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly
                                            Team Stand-Up</a>
                                        <!--end::Title-->
                                        <!--begin::User-->
                                        <div class="text-gray-400">Lead by
                                            <a href="#">Sean Bean</a>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Time-->
                            </div>
                            <!--end::Day-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
                        <!--begin::Timeline-->
                        <div class="timeline-label">
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And
                                    keep
                                    structure</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Content-->
                                <div class="timeline-content d-flex">
                                    <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                    <a href="#" class="text-primary">USD 700</a>. to ESL
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and
                                    keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                    <a href="#" class="text-primary">#XF-2356</a>.
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and
                                    keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                    <a href="#" class="text-primary">#XF-2356</a>.
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch
                                    preparion meeting</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Contacts-->
    @endforeach

    <!--end::Content-->
@endsection