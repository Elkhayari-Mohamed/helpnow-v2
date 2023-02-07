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
                            <a href="{{ route('doctorsProfils') }}" class="menu-link px-3">Edit</a>
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
