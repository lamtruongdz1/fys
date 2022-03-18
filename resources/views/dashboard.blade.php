@extends('layouts.dashboard.master',['title' => 'Dashboard'])
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
       <h1 class="p-5"></h1>
       <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Misc Widget 1-->
                    <div class="mb-5 row mb-xl-8 g-5 g-xl-8">
                        <div class="col-6">
                            <div class="card card-stretch">
                                <a href="#r" class="p-10 btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100">
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span class="mb-5 svg-icon svg-icon-3x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                            <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                            <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-4 fw-bolder">Fancy Gifts</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-stretch">
                                <a href="#r" class="p-10 btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100">
                                    <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                    <span class="mb-5 svg-icon svg-icon-3x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
                                            <path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="fs-4 fw-bolder">Top Products</span>
                                </a>
                            </div>
                        </div>
                    </div>

                <!--end::Col-->
            </div>
            <div class="col-xl-8 ps-xl-12">
                <!--begin::Engage widget 1-->
                <div class="mb-5 card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-primary mb-xl-8" style="background-position: 100% 50px;background-size: 500px auto;background-image:url('{{asset('backend/assets/media/misc/city.png')}}">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-center">
                        <!--begin::Title-->
                        <h3 class="mb-5 text-white fs-2x fw-bolder line-height-lg">Hệ thống quản lý sân bóng
                        <br />chuyên nghiệp</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 1-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Mixed Widget 5-->
                        {{-- <div class="card card-xl-stretch mb-xl-8"> --}}
                            <!--begin::Beader-->
                            {{-- <div class="py-5 border-0 card-header">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="mb-1 card-label fw-bolder fs-3"></span>
                                    <span class="text-muted fw-bold fs-7">Latest trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="px-3 menu-item">
                                            <div class="px-3 pb-2 menu-content text-muted fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item">
                                            <a href="#" class="px-3 menu-link">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item">
                                            <a href="#" class="px-3 menu-link flex-stack">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item">
                                            <a href="#" class="px-3 menu-link">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="px-3 menu-link">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="my-2 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 menu-content">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 my-1 menu-item">
                                            <a href="#" class="px-3 menu-link">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div> --}}
                            <!--end::Header-->
                            <!--begin::Body-->
                            {{-- <div class="card-body d-flex flex-column">
                                <!--begin::Chart-->
                                <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="primary" style="height: 150px"></div>
                                <!--end::Chart-->
                                <!--begin::Items-->
                                <div class="mt-5">
                                    <!--begin::Item-->
                                    <div class="mb-5 d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="" />
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <a href="#" class="text-gray-800 fs-6 text-hover-primary fw-bolder">Top Authors</a>
                                                <div class="mt-1 fs-7 text-muted fw-bold">Ricky Hunt, Sandra Trepp</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <div class="px-3 py-4 badge badge-light fw-bold">+82$</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-5 d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="" />
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <a href="#" class="text-gray-800 fs-6 text-hover-primary fw-bolder">Top Sales</a>
                                                <div class="mt-1 fs-7 text-muted fw-bold">PitStop Emails</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <div class="px-3 py-4 badge badge-light fw-bold">+82$</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="" />
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="py-1">
                                                <a href="#" class="text-gray-800 fs-6 text-hover-primary fw-bolder">Top Engagement</a>
                                                <div class="mt-1 fs-7 text-muted fw-bold">KT.com</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Label-->
                                        <div class="px-3 py-4 badge badge-light fw-bold">+82$</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div> --}}
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    {{-- <div class="col-xl-6">
                        <!--begin::List Widget 3-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Header-->
                            <div class="border-0 card-header">
                                <h3 class="card-title fw-bolder text-dark">Todo</h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="px-3 menu-item">
                                            <div class="px-3 pb-2 menu-content text-muted fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item">
                                            <a href="#" class="px-3 menu-link">Create Invoice</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item">
                                            <a href="#" class="px-3 menu-link flex-stack">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item">
                                            <a href="#" class="px-3 menu-link">Generate Bill</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 menu-item" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="px-3 menu-link">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="py-4 menu-sub menu-sub-dropdown w-175px">
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">Plans</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <a href="#" class="px-3 menu-link">Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="my-2 separator"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="px-3 menu-item">
                                                    <div class="px-3 menu-content">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="px-3 my-1 menu-item">
                                            <a href="#" class="px-3 menu-link">Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="pt-2 card-body">
                                <!--begin::Item-->
                                <div class="mb-8 d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="mx-5 form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="mb-8 d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="mx-5 form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
                                        <span class="text-muted fw-bold d-block">Due in 3 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="mb-8 d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-warning"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="mx-5 form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp; Estimations</a>
                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-warning fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="mb-8 d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="mx-5 form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App Showcase</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="mb-8 d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-danger"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="mx-5 form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project Meeting</a>
                                        <span class="text-muted fw-bold d-block">Due in 12 Days</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-danger fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Checkbox-->
                                    <div class="mx-5 form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                    <!--end::Checkbox-->
                                    <!--begin::Description-->
                                    <div class="flex-grow-1">
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers Update</a>
                                        <span class="text-muted fw-bold d-block">Due in 1 week</span>
                                    </div>
                                    <!--end::Description-->
                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                </div>
                                <!--end:Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end:List Widget 3-->
                    </div> --}}
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
    </div>
@endsection
