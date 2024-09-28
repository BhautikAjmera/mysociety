@extends('layouts.main')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Sales</h5>
                    <small class="text-muted">Last Year</small>
                </div>

                <div id="salesLastYear"></div>
                <div class="card-body pt-0">
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                        <h4 class="mb-0">175k</h4>
                        <small class="text-danger">-16.2%</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Sessions</h5>
                    <small class="text-muted">Last Month</small>
                </div>
            
                <div class="card-body">
                    <div id="sessionsLastMonth"></div>
                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0">45.1k</h4>
                        <small class="text-success">+12.6%</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="badge p-2 bg-label-danger mb-2 rounded">
                        <i class="ti ti-currency-dollar ti-md"></i>
                    </div>
            
                    <h5 class="card-title mb-1 pt-2">Total Profit</h5>
                    <small class="text-muted">Last week</small>
                    <p class="mb-2 mt-1">1.28k</p>
                    
                    <div class="pt-1">
                        <span class="badge bg-label-secondary">-12.2%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="badge p-2 bg-label-info mb-2 rounded">
                        <i class="ti ti-chart-bar ti-md"></i>
                    </div>
                    
                    <h5 class="card-title mb-1 pt-2">Total Sales</h5>
                    <small class="text-muted">Last week</small>
                    <p class="mb-2 mt-1">$4,673</p>
                    
                    <div class="pt-1">
                        <span class="badge bg-label-secondary">+25.2%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-8 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="card-title mb-auto">
                                <h5 class="mb-1 text-nowrap">Revenue Growth</h5>
                                <small>Weekly Report</small>
                            </div>

                            <div class="chart-statistics">
                                <h3 class="card-title mb-1">$4,673</h3>
                                <span class="badge bg-label-success">+15.2%</span>
                            </div>
                        </div>
                        <div id="revenueGrowth"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Earning Reports</h5>
                        <small class="text-muted">Yearly Earnings Overview</small>
                    </div>
            
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id" aria-controls="navs-orders-id" aria-selected="true">
                                <div class="badge bg-label-secondary rounded p-2">
                                    <i class="ti ti-shopping-cart ti-sm"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2">Orders</h6>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id" aria-controls="navs-sales-id" aria-selected="false">
                                <div class="badge bg-label-secondary rounded p-2">
                                    <i class="ti ti-chart-bar ti-sm"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2">Sales</h6>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id" aria-controls="navs-profit-id" aria-selected="false">
                                <div class="badge bg-label-secondary rounded p-2">
                                    <i class="ti ti-currency-dollar ti-sm"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2">Profit</h6>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false">
                                <div class="badge bg-label-secondary rounded p-2">
                                    <i class="ti ti-chart-pie-2 ti-sm"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2">Income</h6>
                            </a>
                        </li>
                
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link btn d-flex align-items-center justify-content-center disabled" role="tab" data-bs-toggle="tab" aria-selected="false" >
                                <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-plus ti-sm"></i></div>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content p-0 ms-0 ms-sm-2">
                        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                            <div id="earningReportsTabsOrders"></div>
                        </div>
                        
                        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                            <div id="earningReportsTabsSales"></div>
                        </div>
                        
                        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                            <div id="earningReportsTabsProfit"></div>
                        </div>
                        
                        <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                            <div id="earningReportsTabsIncome"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Active Project</h5>
                        <small class="text-muted">Average 72% Completed</small>
                    </div>
            
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="activeProjects" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-30 align-items-center me-3">
                                <img src="{{asset('admin/assets/img/icons/brands/laravel-logo.png')}}" alt="laravel-logo" class="me-3" width="35" />
                                
                                <div>
                                    <h6 class="mb-0">Laravel</h6>
                                    <small class="text-muted">eCommerce</small>
                                </div>
                            </div>

                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0"aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">54%</span>
                            </div>
                        </li>
                        
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-30 align-items-center me-3">
                                <img src="{{asset('admin/assets/img/icons/brands/figma-logo.png')}}" alt="figma-logo" class="me-3" width="35" />
                            
                                <div>
                                    <h6 class="mb-0">Figma</h6>
                                    <small class="text-muted">App UI Kit</small>
                                </div>
                            </div>
                        
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height: 8px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="text-muted">86%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title m-0 me-2">Last Transaction</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
            
                <div class="table-responsive">
                    <table class="table table-borderless border-top">
                        <thead class="border-bottom">
                            <tr>
                                <th>CARD</th>
                                <th>DATE</th>
                                <th>STATUS</th>
                                <th>TREND</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="{{asset('admin/assets/img/icons/payments/visa-img.png')}}" alt="Visa" height="30" />
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-semibold">*4230</p>
                                            <small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-semibold">Sent</p>
                                        <small class="text-muted text-nowrap">17 Mar 2022</small>
                                    </div>
                                </td>
                                
                                <td><span class="badge bg-label-success">Verified</span></td>
                                
                                <td>
                                    <p class="mb-0 fw-semibold">+$1,678</p>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="{{asset('admin//assets/img/icons/payments/master-card-img.png')}}" alt="Visa" height="30" />
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-semibold">*5578</p>
                                            <small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-semibold">Sent</p>
                                        <small class="text-muted text-nowrap">12 Feb 2022</small>
                                    </div>
                                </td>

                                <td><span class="badge bg-label-danger">Rejected</span></td>
                                
                                <td>
                                    <p class="mb-0 fw-semibold">-$839</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


