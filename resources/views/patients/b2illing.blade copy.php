@extends('layouts.app')
@section('content')
    <!--begin::Payment methods-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header card-header-stretch pb-0">
            <!--begin::Title-->
            <div class="card-title">
                <h3 class="m-0">Payment Methods</h3>
            </div>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bolder me-5 active" data-bs-toggle="tab"
                            role="tab" href="#kt_billing_creditcard">Credit / Debit Card</a>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bolder" data-bs-toggle="tab" role="tab"
                            href="#kt_billing_paypal">Paypal</a>
                    </li>
                    <!--end::Tab item-->
                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Tab content-->
        <div id="kt_billing_payment_tab_content" class="card-body tab-content">
            <!--begin::Tab panel-->
            <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
                <!--begin::Title-->
                <h3 class="mb-5">My Cards</h3>
                <!--end::Title-->
                <!--begin::Row-->
                <div class="row gx-9 gy-6">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Card-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Owner-->
                                <div class="d-flex align-items-center fs-4 fw-bolder mb-5">Marcus Morris
                                    <span class="badge badge-light-success fs-7 ms-2">Primary</span>
                                </div>
                                <!--end::Owner-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}" alt=""
                                        class="me-4" />
                                    <!--end::Icon-->
                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-4 fw-bolder">Visa **** 1679</div>
                                        <div class="fs-6 fw-bold text-gray-400">Card expires at 09/24</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                <button type="reset"
                                    class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                                <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_card">Edit</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->

                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Card-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Owner-->
                                <div class="d-flex align-items-center fs-4 fw-bolder mb-5">Jhon Larson</div>
                                <!--end::Owner-->
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}" alt=""
                                        class="me-4" />
                                    <!--end::Icon-->
                                    <!--begin::Details-->
                                    <div>
                                        <div class="fs-4 fw-bolder">Mastercard **** 1290</div>
                                        <div class="fs-6 fw-bold text-gray-400">Card expires at 03/23</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center py-2">
                                <button type="reset"
                                    class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                                <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_card">Edit</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">Important Note!</h4>
                                    <div class="fs-6 text-gray-700 pe-7">Please carefully read
                                        <a href="#" class="fw-bolder me-1">Product Terms</a>adding your new payment
                                        card
                                    </div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Action-->
                                <a class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_card">Add Card</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Tab panel-->
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <!--begin::Tab panel-->
            <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
                <!--begin::Title-->
                <h3 class="mb-5">My Paypal</h3>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-600 fs-6 fw-bold mb-5">To use PayPal as your payment method, you will need to make
                    pre-payments each month before your bill is due.</div>
                <!--end::Description-->
                <!--begin::Form-->
                <form class="form">
                    <!--begin::Input group-->
                    <div class="mb-7 mw-350px">
                        <select name="timezone" data-control="select2" data-placeholder="Select an option"
                            data-hide-search="true"
                            class="form-select form-select-solid form-select-lg fw-bold fs-6 text-gray-700">
                            <option>Select an option</option>
                            <option value="25">US $25.00</option>
                            <option value="50">US $50.00</option>
                            <option value="100">US $100.00</option>
                            <option value="125">US $125.00</option>
                            <option value="150">US $150.00</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Tab panel-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Payment methods-->
    <!--begin::Billing Address-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Title-->
            <div class="card-title">
                <h3>Billing Address</h3>
            </div>
            <!--end::Title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Addresses-->
            <div class="row gx-9 gy-6">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Address-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                        <!--begin::Details-->
                        <div class="d-flex flex-column py-2">
                            <div class="d-flex align-items-center fs-5 fw-bolder mb-5">Address 1
                                <span class="badge badge-light-success fs-7 ms-2">Primary</span>
                            </div>
                            <div class="fs-6 fw-bold text-gray-600">Ap #285-7193 Ullamcorper Avenue
                                <br />Amesbury HI 93373
                                <br />US
                            </div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">
                            <button type="reset"
                                class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_address">Edit</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Address-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Address-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                        <!--begin::Details-->
                        <div class="d-flex flex-column py-2">
                            <div class="d-flex align-items-center fs-5 fw-bolder mb-3">Address 2</div>
                            <div class="fs-6 fw-bold text-gray-600">Ap #285-7193 Ullamcorper Avenue
                                <br />Amesbury HI 93373
                                <br />US
                            </div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">
                            <button type="reset"
                                class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_address">Edit</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Address-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Address-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                        <!--begin::Details-->
                        <div class="d-flex flex-column py-2">
                            <div class="d-flex align-items-center fs-5 fw-bolder mb-3">Address 3</div>
                            <div class="fs-6 fw-bold text-gray-600">Ap #285-7193 Ullamcorper Avenue
                                <br />Amesbury HI 93373
                                <br />US
                            </div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">
                            <button type="reset"
                                class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_address">Edit</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Address-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Notice-->
                    <div
                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed flex-stack h-xl-100 mb-10 p-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-bold">
                                <h4 class="text-gray-900 fw-bolder">This is a very important note!</h4>
                                <div class="fs-6 text-gray-700 pe-7">Writing headlines for blog posts is much science and
                                    probably cool audience</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">New Address</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Addresses-->
            <!--begin::Tax info-->
            <div class="mt-10">
                <h3 class="mb-3">Tax Location</h3>
                <div class="fw-bold text-gray-600 fs-6">United States - 10% VAT
                    <br />
                    <a class="fw-bolder" href="#">More Info</a>
                </div>
            </div>
            <!--end::Tax info-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Billing Address-->
    <!--begin::Billing History-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header card-header-stretch border-bottom border-gray-200">
            <!--begin::Title-->
            <div class="card-title">
                <h3 class="fw-bolder m-0">Billing History</h3>
            </div>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                    <!--begin::Tab nav item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_6months_tab" class="nav-link fs-5 fw-bold me-3 active" data-bs-toggle="tab"
                            role="tab" href="#kt_billing_months">Month</a>
                    </li>
                    <!--end::Tab nav item-->
                    <!--begin::Tab nav item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_1year_tab" class="nav-link fs-5 fw-bold me-3" data-bs-toggle="tab"
                            role="tab" href="#kt_billing_year">Year</a>
                    </li>
                    <!--end::Tab nav item-->
                    <!--begin::Tab nav item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_alltime_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab" role="tab"
                            href="#kt_billing_all">All Time</a>
                    </li>
                    <!--end::Tab nav item-->
                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Tab Content-->
        <div class="tab-content">
            <!--begin::Tab panel-->
            <div id="kt_billing_months" class="card-body p-0 tab-pane fade show active" role="tabpanel"
                aria-labelledby="kt_billing_months">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-bordered align-middle gy-4 gs-9">
                        <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                            <tr>
                                <td class="min-w-150px">Date</td>
                                <td class="min-w-250px">Description</td>
                                <td class="min-w-150px">Amount</td>
                                <td class="min-w-150px">Invoice</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->
                            <tr>
                                <td>Nov 01, 2020</td>
                                <td>
                                    <a href="#">Invoice for Ocrober 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Oct 08, 2020</td>
                                <td>
                                    <a href="#">Invoice for September 2022</a>
                                </td>
                                <td>$98.03</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Aug 24, 2020</td>
                                <td>Paypal</td>
                                <td>$35.07</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Aug 01, 2020</td>
                                <td>
                                    <a href="#">Invoice for July 2022</a>
                                </td>
                                <td>$142.80</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jul 01, 2020</td>
                                <td>
                                    <a href="#">Invoice for June 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jun 17, 2020</td>
                                <td>Paypal</td>
                                <td>$523.09</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jun 01, 2020</td>
                                <td>
                                    <a href="#">Invoice for May 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div id="kt_billing_year" class="card-body p-0 tab-pane fade" role="tabpanel"
                aria-labelledby="kt_billing_year">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-bordered align-middle gy-4 gs-9">
                        <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                            <tr>
                                <td class="min-w-150px">Date</td>
                                <td class="min-w-250px">Description</td>
                                <td class="min-w-150px">Amount</td>
                                <td class="min-w-150px">Invoice</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->
                            <tr>
                                <td>Dec 01, 2021</td>
                                <td>
                                    <a href="#">Billing for Ocrober 2022</a>
                                </td>
                                <td>$250.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Oct 08, 2021</td>
                                <td>
                                    <a href="#">Statements for September 2022</a>
                                </td>
                                <td>$98.03</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Aug 24, 2021</td>
                                <td>Paypal</td>
                                <td>$35.07</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Aug 01, 2021</td>
                                <td>
                                    <a href="#">Invoice for July 2022</a>
                                </td>
                                <td>$142.80</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jul 01, 2021</td>
                                <td>
                                    <a href="#">Statements for June 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jun 17, 2021</td>
                                <td>Paypal</td>
                                <td>$23.09</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div id="kt_billing_all" class="card-body p-0 tab-pane fade" role="tabpanel"
                aria-labelledby="kt_billing_all">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-bordered align-middle gy-4 gs-9">
                        <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                            <tr>
                                <td class="min-w-150px">Date</td>
                                <td class="min-w-250px">Description</td>
                                <td class="min-w-150px">Amount</td>
                                <td class="min-w-150px">Invoice</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->
                            <tr>
                                <td>Nov 01, 2021</td>
                                <td>
                                    <a href="#">Billing for Ocrober 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Aug 10, 2021</td>
                                <td>Paypal</td>
                                <td>$35.07</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Aug 01, 2021</td>
                                <td>
                                    <a href="#">Invoice for July 2022</a>
                                </td>
                                <td>$142.80</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jul 20, 2021</td>
                                <td>
                                    <a href="#">Statements for June 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jun 17, 2021</td>
                                <td>Paypal</td>
                                <td>$23.09</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                            <!--begin::Table row-->
                            <tr>
                                <td>Jun 01, 2021</td>
                                <td>
                                    <a href="#">Invoice for May 2022</a>
                                </td>
                                <td>$123.79</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                </td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                </td>
                            </tr>
                            <!--end::Table row-->
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Tab panel-->
        </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Billing Address-->
    <!--begin::Modals-->
    <!--begin::Modal - New Card-->
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add New Card</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="#">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Name On Card</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Specify a card holder's name"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="card_name" value="Max Doe" id="card_name" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Enter card number" name="card_number" id="card_number" />
                                <!--end::Input-->
                                <!--begin::Card logos-->
                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                    <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}" alt=""
                                        class="hh-25px" />
                                    <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}" alt=""
                                        class="hh-25px" />
                                    <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}"
                                        alt="" class="hh-25px" />
                                </div>
                                <!--end::Card logos-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Col-->
                            <div class="col-md-8 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row fv-row">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="card_expiry_month" id="card_expiry_month"
                                            class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Month">
                                            <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="card_expiry_year" id="card_expiry_year"
                                            class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Year">
                                            <option></option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                    <span class="required">CVV</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Enter a card CVV code"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" minlength="3"
                                        maxlength="4" placeholder="CVV" name="card_cvv" id="card_cvv" />
                                    <!--end::Input-->
                                    <!--begin::CVV icon-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                        <span class="svg-icon svg-icon-2hx">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::CVV icon-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="me-5">
                                <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                                <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning
                                </div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                <span class="form-check-label fw-bold text-muted">Save Card</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card-->
    <!--begin::Modal - New Address-->
    <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="#" id="kt_modal_new_address_form">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_new_address_header">
                        <!--begin::Modal title-->
                        <h2>Add New Address</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_new_address_header"
                            data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Notice-->
                            <!--begin::Notice-->
                            <div
                                class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20"
                                            height="20" rx="10" fill="currentColor" />
                                        <rect x="11" y="14" width="7" height="2"
                                            rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                        <rect x="11" y="17" width="2" height="2"
                                            rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">Warning</h4>
                                        <div class="fs-6 text-gray-700">Updating address may affter to your
                                            <a href="#">Tax Location</a>
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--end::Notice-->
                            <!--begin::Input group-->
                            <div class="row mb-5">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-5 fw-bold mb-2">First name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="first-name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--end::Label-->
                                    <label class="required fs-5 fw-bold mb-2">Last name</label>
                                    <!--end::Label-->
                                    <!--end::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="last-name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                    <span class="required">Country</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Your payment statements may very based on selected country"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select name="country" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Select a Country..."
                                    class="form-select form-select-solid">
                                    <option value="">Select a Country...</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="HT">Haiti</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="VI">Virgin Islands</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Address Line 1</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address1" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Address Line 2</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="address2" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Town</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="city" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row g-9 mb-5">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold mb-2">State / Province</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="state" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold mb-2">Post Code</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="" name="postcode" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-bold">Use as a billing adderess?</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="fs-7 fw-bold text-muted">If you need more info, please check budget
                                            planning</div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input" name="billing" type="checkbox" value="1"
                                            checked="checked" />
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <span class="form-check-label fw-bold text-muted">Yes</span>
                                        <!--end::Label-->
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--begin::Wrapper-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_new_address_cancel"
                            class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Modal - New Address-->
    <style>
        .hh-25px {
            height: 25px !important;
        }
    </style>
    <script>
        var stripe = Stripe(
            'pk_test_51NUcDNJsO9qL82HNFcSzKt7PWHqOmWu4wBzq0N2Sj1wtrF0uC9bmfU5tNPnfPCDq9krtbsS8qPwjr4LVYyO0hqM200xVwvxAve'
        );

        $(document).ready(function() {

            var elements = stripe.elements({
                mode: 'payment',
                currency: 'usd',
                amount: 1099,
                name: $('#card_name').val(),
                number: $('#card_number').val(),
                exp_month: $('#card_expiry_month').val(),
                exp_year: $('#card_expiry_year').val(),
                cvc: $('#card_cvv').val()
            });
            $('#kt_modal_new_card_submit').click(function(e) {
                e.preventDefault();

                stripe.createToken(elements).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        console.log('token', result.token);
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler(token) {
                var form = $('#kt_modal_new_card_form');
                var hiddenInput = $('<input>');
                hiddenInput.attr('type', 'hidden');
                hiddenInput.attr('name', 'stripeToken');
                hiddenInput.attr('value', token.id);
                form.append(hiddenInput);
                form.submit(); // form is submitted after token is created
            }
        });
    </script>

@endsection
