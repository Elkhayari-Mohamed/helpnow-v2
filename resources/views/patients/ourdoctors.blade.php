@extends('layouts.app')
@section('content')
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-17">
            <!--begin::Meet-->
            <div class="mb-18">
                <!--begin::Wrapper-->
                <div class="mb-11">
                    <!--begin::Top-->
                    <div class="text-center mb-18">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-dark mb-6">Meet Our Team</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool for
                            different
                            <br />amazing and outstanding and usefull great and useful admin
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Overlay-->
                    <div class="overlay">
                        <!--begin::Image-->
                        <img class="w-100 card-rounded" src="assets/media/stock/1600x800/ourdocs.jpg" alt="" />
                        <!--end::Image-->
                        <!--begin::Links-->
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <a href="../../demo1/dist/pages/pricing/pricing-1.html" class="btn btn-primary">Pricing</a>
                            <a href="../../demo1/dist/pages/careers/apply.html" class="btn btn-light-primary ms-3">Join
                                Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Overlay-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Description-->
                <div class="fs-5 fw-bold text-gray-600">
                    <!--begin::Text-->
                    <p class="m-0">The American Hospital provides effective and high-quality healthcare services with 33
                        departments, 16 special units and 671 physicians. We offer an up-to-date medical approach in an
                        ethical and reliable environment. We maintain our reputation in the health sector with our
                        experienced medical staff who continuously improve qualified healthcare with an uncompromising focus
                        when it comes to proficiency and academic values.
                    </p>
                    <!--end::Text-->
                </div>
                <!--end::Description-->
            </div>
            <!--end::Meet-->
            <!--begin::Team-->
            <div class="mb-18">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5">Our Great Doctors</h3>
                    <!--end::Title-->
                    <!--begin::Sub-title-->
                    <div class="fs-5 text-muted fw-bold">Meet the heart of our application: a distinguished team of
                        healthcare professionals devoted to patient care. Handpicked for their expertise and commitment,
                        they redefine healthcare delivery by offering personalized and compassionate care.
                        <br />integrate and test each extra feature creeps up and haunts most of us.
                    </div>
                    <!--end::Sub-title=-->
                </div>
                <!--end::Heading-->
                <!--begin::Wrapper-->
                <br /><br /><br />
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
                    <!--begin::Item-->
                    @foreach ($listdoctors as $list)
                        <div class="col text-center mb-9">
                            <!--begin::Photo-->
                            @if ($list->img)
                                <div
                                    class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center">
                                    <img src={{ $list->img ?? 'assets/media/avatars/300-1.jpg' }} alt="image" />

                                </div>
                            @else
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
                            @endif
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="patients/doctorcontact/{{ $list['id'] }}"
                                    class="text-dark fw-bolder text-hover-primary fs-3">{{ $list->first_name . ' ' . $list->last_name }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-bold">{{ $list->specialitie_name }}</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                            <div class="fw-bolder mt-5">Reviews</div>

                            @if (count($list->reviews) > 0)
                                @php
                                    $totalStars = 0;
                                @endphp

                                @foreach ($list->reviews as $review)
                                    @php
                                        $totalStars += $review->stars;
                                    @endphp
                                @endforeach

                                @php
                                    $averageRating = $totalStars / count($list->reviews);
                                    $averageRating = round($averageRating, 0);
                                @endphp

                                <div class="fw-bolder mt-5">Average Rating:</div>

                                @for ($i = 0; $i < $averageRating; $i++)
                                    <i style="color: #e5eb30;" class="fas fa-star text-yellow-500 "></i>
                                @endfor

                                @for ($i = 5; $i > $averageRating; $i--)
                                    <i style="color: #e5eb30;" class="far fa-star text-yellow-500 "></i>
                                @endfor
                            @else
                                <div class="text-gray-600">
                                    This doctor has not been reviewed yet.
                                </div>
                            @endif

                        </div>
                        <!--end::Item-->
                        <!--end::Item-->
                    @endforeach
                </div>
                <!--end::Wrapper-->

                <!--end::Team-->
                <!--begin::Join--><br /><br /><br /><br />

                <!--end::Join-->
                <!--begin::Card-->
                <div class="card mb-4 bg-light text-center">
                    <!--begin::Body-->
                    <div class="card-body py-12">
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
                        </a>
                        <!--end::Icon-->
                        <!--begin::Icon-->
                        <a href="#" class="mx-4">
                            <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2"
                                alt="" />
                        </a>
                        <!--end::Icon-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
    @endsection
