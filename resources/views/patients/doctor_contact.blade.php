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
                            <img src="assets/media/avatars/300-6.jpg" alt="image" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $doctor->first_name . ' ' . $doctor->last_name }}
                        </a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="mb-9">
                            <!--begin::Badge-->
                            <div class="badge badge-lg badge-light-primary d-inline">{{ $doctor->specialitie_name }}</div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Position-->
                        <!--begin::Info-->
                        <!--begin::Info heading-->

                        <!--end::Info heading-->

                        <!--end::Info-->
                    </div>
                    <!--end::User Info-->
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details"
                            role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>

                    </div>
                    <!--end::Details toggle-->
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
                                <a href="#" class="text-gray-600 text-hover-primary"></a>

                                @php
                                    $user_id = $doctor->user_id;
                                    $email = DB::table('users')
                                        ->select('email')
                                        ->where('id', $user_id)
                                        ->first();
                                    
                                @endphp

                                {{ $email->email }}


                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Address</div>
                            <div class="text-gray-600">
                                {{ $doctor->address . ', ' . $doctor->city }}
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Language</div>
                            <div class="text-gray-600">English</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">Review</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#reviewModal">
                                Write a review
                            </button>

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
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_user_view_overview_tab">Consult</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->

                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item ms-auto">
                    <!--begin::Action menu-->
                    <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-2 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6"
                        data-kt-menu="true">
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="patients/consultation/{{ $doctor->id }}" class="menu-link px-5">Cunsult</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-3"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <!--end::Menu item-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu-->
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h2 class="mb-1">Consultations</h2>
                                <div class="fs-6 fw-bold text-muted">Total {{ $consultations->count() }}
                                </div>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->

                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-4">
                            <!--begin::Dates-->

                            <!--end::Dates-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Day-->
                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                    <div class="mb-0">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <li>{{ $errors->first() }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    @foreach ($consultations as $consultation)
                                        <!--begin::Time-->
                                        @if ($consultation->status == 1)
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1"> {{ $consultation->consultation_date }}
                                                        <span class="fs-7 text-muted text-uppercase"></span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a
                                                        class="fs-5 fw-bolder text-dark text-hover-primary mb-2">{{ $consultation->descriptions }}</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-muted">Price
                                                        <a>{{ $consultation->price }} Dh</a>
                                                    </div>
                                                    <div class="fs-7 text-muted">Status
                                                        @if ($consultation->payed == 0)
                                                            <a class="text-danger">Not Payed</a>
                                                        @else
                                                            <a class="text-success">Payed</a>
                                                        @endif
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->

                                                <div class="px-7 py-5">
                                                    @if ($consultation->payed == 0)
                                                        <a href="{{ route('ConsultShow', ['consultation_id' => $consultation->id, 'payed' => 1]) }}"
                                                            class="btn btn-light bnt-active-light-primary btn-sm text-warning">Pay
                                                            Now </a>
                                                    @else
                                                        <a href=" {{ route('patientsOrdonnance', ['id' => $consultation->id]) }}"
                                                            class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                                        <a href="live/{{ $consultation['link'] }}"
                                                            class="btn btn-light bnt-active-light-primary btn-sm">

                                                            <!--end::Svg Icon-->Go Live
                                                        </a>
                                                    @endif
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <br />
                                            <!--end::Time-->
                                        @endif
                                    @endforeach
                                </div>
                                <!--end::Day-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Tasks-->
                    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('reviews') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="stars">Rating</label>
                                            <div class='rating-stars text-center'>
                                                <ul id='stars'>
                                                    <li class='star' title='Poor' data-value='1'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='Fair' data-value='2'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='Good' data-value='3'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='Excellent' data-value='4'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                    <li class='star' title='WOW!!!' data-value='5'>
                                                        <i class='fa fa-star fa-fw'></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="hidden" id="star-rating" name="stars" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Comment</label>
                                            <textarea class="form-control" name="comment"></textarea>
                                        </div>
                                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            /* 1. Visualizing things on Hover - See next part for action on click */
                            $('#stars li').on('mouseover', function() {
                                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                                // Now highlight all the stars that's not after the current hovered star
                                $(this).parent().children('li.star').each(function(e) {
                                    if (e < onStar) {
                                        $(this).addClass('hover');
                                    } else {
                                        $(this).removeClass('hover');
                                    }
                                });
                            }).on('mouseout', function() {
                                $(this).parent().children('li.star').each(function(e) {
                                    $(this).removeClass('hover');
                                });
                            });

                            /* 2. Action to perform on click */
                            $('#stars li').on('click', function() {
                                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                                var stars = $(this).parent().children('li.star');

                                for (i = 0; i < stars.length; i++) {
                                    $(stars[i]).removeClass('selected');
                                }

                                for (i = 0; i < onStar; i++) {
                                    $(stars[i]).addClass('selected');
                                }

                                // THIS VARIABLE is your selected rating
                                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                                $("#star-rating").val(ratingValue);
                            });
                        });
                    </script>
                    <style>
                        /* .rating-stars ul > li.star {
                                    display: inline-block;
                                } */

                        /* Idle State of the stars */
                        .rating-stars ul>li.star>i.fa {
                            font-size: 18px;
                            /* Change the size of the stars */
                            color: #ccc;
                            /* Color on idle state */
                        }

                        /* Hover state of the stars */
                        .rating-stars ul>li.star.hover>i.fa {
                            color: #FFCC36;
                        }

                        /* Selected state of the stars */
                        .rating-stars ul>li.star.selected>i.fa {
                            color: #FF912C;
                        }
                    </style>
                @endsection
