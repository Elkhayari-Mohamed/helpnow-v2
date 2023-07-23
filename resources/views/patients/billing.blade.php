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
                    <form action="{{ route('CardActions') }}" method="post">
                        @csrf
                        <div class="col-xl-6">
                            <!--begin::Card-->
                            @if ($card)
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Info-->

                                    <div class="d-flex flex-column py-2">
                                        <!--begin::Owner-->
                                        <div class="d-flex align-items-center fs-4 fw-bolder mb-5">
                                            {{ $user->first_name . ' ' . $user->last_name }}
                                            <span class="badge badge-light-success fs-7 ms-2">Primary</span>
                                        </div>
                                        <!--end::Owner-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Icon-->
                                            @if ($card->card_brand == 'visa')
                                                <img src="{{ asset('assets/media/svg/card-logos/visa.svg') }}"
                                                    alt="" class="me-4" />
                                            @elseif($card->card_brand == 'mastercard')
                                                <img src="{{ asset('assets/media/svg/card-logos/mastercard.svg') }}"
                                                    alt="" class="me-4" />
                                            @elseif ($card->card_brand == 'american-express')
                                                <img src="{{ asset('assets/media/svg/card-logos/american-express.svg') }}"
                                                    alt="" class="me-4" />
                                            @endif()
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div>
                                                <div class="fs-4 fw-bolder">{{ $card->card_brand }} ****
                                                    {{ $card->card_last_four }}
                                                </div>
                                                <div class="fs-6 fw-bold text-gray-400">Card expires at
                                                    {{ $card->date_exp }}
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center py-2">
                                        <button type="submit"
                                            class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                                        <button class="btn btn-sm btn-light btn-active-light-primary"
                                            @readonly(true)>Edit</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                            @endif
                            <!--end::Card-->
                        </div>
                    </form>
                    <!--end::Col-->
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
                                    data-bs-target="#kt_modal_new_card">Charge Wallet</a>
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
                                <td class="min-w-250px">Status</td>
                                <td class="min-w-150px">Amount</td>
                                <td class="min-w-150px">Invoice</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->
                            @foreach ($charges as $charge)
                                <tr>
                                    <td>{{ \Carbon\Carbon::createFromTimestamp($charge->created)->format('M d, Y') }}</td>
                                    <td>
                                        <a style="color: #57d156;" href="#">{{ $charge->status }}</a>
                                    </td>
                                    <td>{{ $charge->amount }}</td>

                                    <td class="text-right">
                                        <a href="{{ $charge->receipt_url }}"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach

                            <!--end::Table row-->

                            <!--end::Table row-->
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->

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
                    <h2>Charge Your Wallet</h2>
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
                    <!-- Display a payment form -->
                    <form id="payment-form">
                        <div id="link-authentication-element">
                            <!--Stripe.js injects the Link Authentication Element-->
                        </div>
                        <div id="payment-element">
                            <!--Stripe.js injects the Payment Element-->
                        </div>
                        <label style="margin-top: 20px;" for="amount">Amount to Pay:</label>
                        <input type="number" id="amount-input" name="amount" min="1"
                            placeholder="Enter Amount in MAD" required />

                        <button id="submit">
                            <div class="spinner hidden" id="spinner"></div>
                            <span id="button-text">Pay now</span>
                        </button>
                        <div id="payment-message" class="hidden"></div>
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
    <script>
        const stripe = Stripe(
            "pk_test_51NUcDNJsO9qL82HNFcSzKt7PWHqOmWu4wBzq0N2Sj1wtrF0uC9bmfU5tNPnfPCDq9krtbsS8qPwjr4LVYyO0hqM200xVwvxAve"
        );
        let elements;

        document.querySelector("#payment-form").addEventListener("submit", handleSubmit);

        async function initialize() {
            elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount("#payment-element");
        }

        async function handleSubmit(e) {
            e.preventDefault();
            setLoading(true);

            const amount = document.querySelector("#amount-input").value * 1; // Convert to cents

            const response = await fetch("/walletcreate", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify({
                    amount
                }),
            });

            const paymentIntentData = await response.json();
            window.clientSecret = paymentIntentData.clientSecret;

            const result = await stripe.createPaymentMethod({
                type: 'card',
                card: elements.getElement('card'),
            });

            if (result.error) {
                showMessage(result.error.message);
                return;
            }

            const paymentMethod = result.paymentMethod;
            const confirmResult = await stripe.confirmCardPayment(window.clientSecret, {
                payment_method: paymentMethod.id,
            });

            if (confirmResult.error) {
                showMessage(confirmResult.error.message);
            } else {
                if (confirmResult.paymentIntent.status === "succeeded") {

                    fetch('/save-card-details', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        body: JSON.stringify({
                            payment_intent: confirmResult.paymentIntent.id, // Add this line
                            stripe_id: confirmResult.paymentIntent.customer,
                            card_last_four: paymentMethod.card.last4,
                            card_brand: paymentMethod.card.brand,
                            card_expiration_month: paymentMethod.card.exp_month,
                            card_expiration_year: paymentMethod.card.exp_year,
                        }),
                    }).then(() => {
                        window.location.href = '/checkout';
                    });
                }
            }

            setLoading(false);
        }

        function showMessage(messageText) {
            const messageContainer = document.querySelector("#payment-message");
            messageContainer.classList.remove("hidden");
            messageContainer.textContent = messageText;
            setTimeout(function() {
                messageContainer.classList.add("hidden");
                messageContainer.textContent = "";
            }, 4000);
        }

        function setLoading(isLoading) {
            if (isLoading) {
                document.querySelector("#submit").disabled = true;
                document.querySelector("#spinner").classList.remove("hidden");
                document.querySelector("#button-text").classList.add("hidden");
            } else {
                document.querySelector("#submit").disabled = false;
                document.querySelector("#spinner").classList.add("hidden");
                document.querySelector("#button-text").classList.remove("hidden");
            }
        }

        $(document).ready(function() {
            initialize();
        });
    </script>
    <style>
        /* Variables */
        * {
            box-sizing: border-box;
        }


        form {
            width: 30vw;
            min-width: 500px;
            align-self: center;
            box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
                0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
            border-radius: 7px;
            padding: 40px;
        }

        .hidden {
            display: none;
        }

        #amount-input {
            font-family: Arial, sans-serif;
            color: #5469d4;
            border-radius: 5px;
            border: 1px solid #5469d4;
            padding: 11px 16px;
            font-size: 15px;
            font-weight: 600;
            width: 100%;
            margin-bottom: 27px;
            margin-top: 10px;
        }

        #amount-input:focus {
            border: 1px solid #2238b9;
            outline: none;
        }

        #payment-message {
            color: rgb(105, 115, 134);
            font-size: 16px;
            line-height: 20px;
            padding-top: 12px;
            text-align: center;
        }

        #payment-element {
            margin-bottom: 24px;
        }

        /* Buttons and links */
        button {
            background: #5469d4;
            font-family: Arial, sans-serif;
            color: #ffffff;
            border-radius: 4px;
            border: 0;
            padding: 12px 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: block;
            transition: all 0.2s ease;
            box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
            width: 100%;
        }

        button:hover {
            filter: contrast(115%);
        }

        button:disabled {
            opacity: 0.5;
            cursor: default;
        }

        /* spinner/processing state, errors */
        .spinner,
        .spinner:before,
        .spinner:after {
            border-radius: 50%;
        }

        .spinner {
            color: #ffffff;
            font-size: 22px;
            text-indent: -99999px;
            margin: 0px auto;
            position: relative;
            width: 20px;
            height: 20px;
            box-shadow: inset 0 0 0 2px;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
        }

        .spinner:before,
        .spinner:after {
            position: absolute;
            content: "";
        }

        .spinner:before {
            width: 10.4px;
            height: 20.4px;
            background: #5469d4;
            border-radius: 20.4px 0 0 20.4px;
            top: -0.2px;
            left: -0.2px;
            -webkit-transform-origin: 10.4px 10.2px;
            transform-origin: 10.4px 10.2px;
            -webkit-animation: loading 2s infinite ease 1.5s;
            animation: loading 2s infinite ease 1.5s;
        }

        .spinner:after {
            width: 10.4px;
            height: 10.2px;
            background: #5469d4;
            border-radius: 0 10.2px 10.2px 0;
            top: -0.1px;
            left: 10.2px;
            -webkit-transform-origin: 0px 10.2px;
            transform-origin: 0px 10.2px;
            -webkit-animation: loading 2s infinite ease;
            animation: loading 2s infinite ease;
        }

        @-webkit-keyframes loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @media only screen and (max-width: 600px) {
            form {
                width: 80vw;
                min-width: initial;
            }
        }

        .hh-25px {
            height: 25px !important;
        }
    </style>
@endsection
