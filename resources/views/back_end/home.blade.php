@extends('back_end.partials.header')

@section("contenu")
        <!-- content section start   -->
        <div class="main-content">
            <!-- main content start -->
            <div>
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <ul class="d-flex align-items-center gap-20">
                        <li class="bc-item">Dashboard</li>
                    </ul>
                </div>

                <div class="row g-xxl-4 g-lg-3 gy-3 mb-4">
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Department</h5>
                                <span class="para-bq d-block">8</span>
                            </div>
                            <div class="card-box-icon bgpc-1">
                                <img src="{{ asset('assets1/img/icon/setting.png')}}" alt="setting">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Doctor</h5>
                                <span class="para-bq d-block">14</span>
                            </div>
                            <div class="card-box-icon bgc-3">
                                <img src="{{ asset('assets1/img/icon/doctor.png')}}" alt="doctor">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Patient</h5>
                                <span class="para-bq d-block">1</span>
                            </div>
                            <div class="card-box-icon bgpc-1">
                                <img src="{{ asset('assets1/img/icon/patient.png')}}" alt="patient">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Patient Appointment</h5>
                                <span class="para-bq d-block">3</span>
                            </div>
                            <div class="card-box-icon bgc-4">
                                <img src="{{ asset('assets1/img/icon/appointment.png')}}" alt="appointment">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Patient Case Studies</h5>
                                <span class="para-bq d-block">0</span>
                            </div>
                            <div class="card-box-icon bgc-4">
                                <img src="{{ asset('assets1/img/icon/paper.png')}}" alt="paper">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Invoice</h5>
                                <span class="para-bq d-block">0</span>
                            </div>
                            <div class="card-box-icon bgpc-1">
                                <img src="{{ asset('assets1/img/icon/invoice.png')}}" alt="invoice">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Prescription</h5>
                                <span class="para-bq d-block">0</span>
                            </div>
                            <div class="card-box-icon bgc-3">
                                <img src="{{ asset('assets1/img/icon/pills.png')}}" alt="pills">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card-box">
                            <div>
                                <h5 class="fw-normal mb-1">Payment</h5>
                                <span class="para-bq d-block">0</span>
                            </div>
                            <div class="card-box-icon bgpc-1">
                                <img src="{{ asset('assets1/img/icon/payment.png')}}" alt="payment">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-xxl-4 g-lg-3 gy-3">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="bgnc-10 br-sm monthly-user">
                            <span class="d-block para-bq text-center">Monthly Registered Users</span>
                            <!-- Monthly Registered Users chart  -->
                            <canvas id="monthlyUserChart"></canvas>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-5 col-md-8 col-sm-10 mx-auto">
                        <div class="p-xl-30 p-3 bgnc-10 br-sm">
                            <div class="d-between gap-1 mb-30">
                                <span class="d-block para-bq">Monthly Earning</span>

                                <ul class="tab-btn" id="pills-tab" role="tablist">
                                    <li role="presentation">
                                        <button class="nav-link para-1b fs-base active" id="weekly-tab"
                                            data-bs-toggle="pill" data-bs-target="#weekly" role="tab"
                                            aria-controls="weekly" aria-selected="true">Weekly</button>
                                    </li>
                                    <li role="presentation">
                                        <button class="nav-link para-1b fs-base" id="monthly-tab" data-bs-toggle="pill"
                                            data-bs-target="#monthly" role="tab" aria-controls="monthly"
                                            aria-selected="false">Monthly</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="weekly" role="tabpanel"
                                    aria-labelledby="weekly-tab">

                                    <div class="d-between mb-30">
                                        <div class="">
                                            <span class="d-block para-1b fs-base mb-10">This Week</span>
                                            <span class="para-bq fs-4xl d-block mb-10">$29.5</span>
                                            <span class="para-1b d-block"> <span class="tsc-1"> -31.08% </span> From
                                                Previous week</span>
                                        </div>
                                        <div class="earning-icon">
                                            <img class="w-100" src="{{ asset('assets1/img/earning.png')}}" alt="earning">
                                        </div>
                                    </div>

                                    <div class="d-between chart-br">
                                        <div class="report-chart">
                                            <!-- 1st 15 days Analytics -->
                                            <canvas class="earning-report" id="ffd"></canvas>
                                            <span class="d-block mt-14 text-center">1st 15 days Analytics</span>
                                        </div>
                                        <div class="report-chart">
                                            <!-- last 15 days Analytics -->
                                            <canvas class="earning-report" id="lfd"></canvas>
                                            <span class="d-block mt-14 text-center">last 15 days Analytics</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                                    <div class="d-between mb-30">
                                        <div class="">
                                            <span class="d-block para-1b fs-base mb-10">This Month</span>
                                            <span class="para-bq fs-4xl d-block mb-10">$229.655</span>
                                            <span class="para-1b d-block"> <span class="tsc-1"> -81.08% </span> From
                                                Previous month</span>
                                        </div>
                                        <div class="earning-icon">
                                            <img class="w-100" src="{{ asset('assets1/img/earning.png')}}" alt="earning">
                                        </div>
                                    </div>

                                    <div class="d-between chart-br">
                                        <div class="report-chart">
                                            <!-- 1st 15 days Analytics -->
                                            <canvas class="earning-report" id="ffda"></canvas>
                                            <span class="d-block mt-14 text-center">1st 15 days Analytics</span>
                                        </div>
                                        <div class="report-chart">
                                            <!-- last 15 days Analytics -->
                                            <canvas class="earning-report" id="lfda"></canvas>
                                            <span class="d-block mt-14 text-center">last 15 days Analytics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->
       @endsection


