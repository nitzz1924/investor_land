{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.UserPanelLayouts.user')
@section('title','User Dashboard')
@section('user-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="d-flex align-items-center mb-7">
                                <div class="rounded-circle overflow-hidden me-6">
                                    <img src="{{asset('assets/images/defaultuser.png')}}" alt="modernize-img" width="40" height="40">
                                </div>
                                <h5 class="fw-semibold mb-0 fs-5">Welcome back {{Auth::guard('customer')->user()->name}}</h5>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="border-end pe-4 border-muted border-opacity-10">
                                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">$2,340<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                    </h3>
                                    <p class="mb-0 text-dark">Today’s Sales</p>
                                </div>
                                <div class="ps-4">
                                    <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">35%<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                    </h3>
                                    <p class="mb-0 text-dark">Overall Performance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="p-2 bg-primary-subtle rounded-2 d-inline-block mb-3">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-cart.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                            </div>
                            <div id="sales-two" class="mb-3 mx-n4"></div>
                            <h4 class="mb-1 fw-semibold d-flex align-content-center">$16.5k<i class="ti ti-arrow-up-right fs-5 text-success"></i>
                            </h4>
                            <p class="mb-0">Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="p-2 bg-info-subtle rounded-2 d-inline-block mb-3">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-bar.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                            </div>
                            <div id="growth" class="mb-3"></div>
                            <h4 class="mb-1 fw-semibold d-flex align-content-center">24%<i class="ti ti-arrow-up-right fs-5 text-success"></i>
                            </h4>
                            <p class="mb-0">Growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="card-title fs-7">120</h4>
                            <p class="card-subtitle text-info">News Feed</p>
                        </div>
                        <div class="ms-auto">
                            <span class="text-info display-6">
                                <i class="ti ti-file-text"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-primary">
                <div class="card-body">
                    <div class="d-flex  align-items-center">
                        <div>
                            <h4 class="card-title fs-7">150</h4>
                            <p class="card-subtitle text-primary">Invoices</p>
                        </div>
                        <div class="ms-auto">
                            <span class="text-primary display-6">
                                <i class="ti ti-clipboard"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-success">
                <div class="card-body">
                    <div class="d-flex  align-items-center">
                        <div>
                            <h4 class="card-title fs-7">450</h4>
                            <p class="card-subtitle text-success">Revenue</p>
                        </div>
                        <div class="ms-auto">
                            <span class="text-success display-6">
                                <i class="ti ti-credit-card"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-danger">
                <div class="card-body">
                    <div class="d-flex  align-items-center">
                        <div>
                            <h4 class="card-title fs-7">100</h4>
                            <p class="card-subtitle text-danger">Sales</p>
                        </div>
                        <div class="ms-auto">
                            <span class="text-danger display-6">
                                <i class="ti ti-chart-pie"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                        <div class="mb-3 mb-sm-0">
                            <h4 class="card-title fw-semibold">Product Performances</h4>
                            <p class="card-subtitle">What Impacts Product Performance?</p>
                        </div>
                        <div>
                            <select class="form-select fw-semibold">
                                <option value="1">March 2024</option>
                                <option value="2">April 2024</option>
                                <option value="3">May 2024</option>
                                <option value="4">June 2024</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">Assigned</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Budget</th>
                                    <th scope="col">Chart</th>
                                </tr>
                            </thead>
                            <tbody class="border-top">
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Minecraf App</h6>
                                                <p class="fs-2 mb-0 text-muted">Jason Roy</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">73.2%</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-success-subtle text-success">Low</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$3.5k</p>
                                    </td>
                                    <td>
                                        <div id="table-chart"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Web App Project</h6>
                                                <p class="fs-2 mb-0 text-muted">Mathew Flintoff</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">56.8%</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-warning-subtle text-warning">Medium</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$3.5k</p>
                                    </td>
                                    <td>
                                        <div id="table-chart-1"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Modernize Dashboard</h6>
                                                <p class="fs-2 mb-0 text-muted">Anil Kumar</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3 text-dark">25%</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-info-subtle text-info">Very high</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$3.5k</p>
                                    </td>
                                    <td>
                                        <div id="table-chart-2"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0 border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-4.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Dashboard Co</h6>
                                                <p class="fs-2 mb-0 text-muted">George Cruize</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fs-3 text-dark">96.3%</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <span class="badge fw-semibold py-1 w-85 bg-danger-subtle text-danger">High</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fs-3 text-dark mb-0">$3.5k</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div id="table-chart-3"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
