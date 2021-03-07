@extends('site.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Stats
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- flash message start -->
                @include('site.partials.flash')
                <!-- flash message end -->

                <!-- Statistics card section -->
                <section id="statistics-card">

                    <!-- Line Chart Card -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                    <div>
                                        <h2 class="font-weight-bolder">{{\App\Profile::All()->count()}}</h2>
                                        <p class="card-text">Profiles</p>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-5"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                    <div>
                                        <h2 class="font-weight-bolder">{{\App\User::All()->count()}}</h2>
                                        <p class="card-text">Active Admins</p>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <div class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-6"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                    <div>
                                        <h2 class="font-weight-bolder">{{\App\Request::All()->count()}}</h2>
                                        <p class="card-text">Requests</p>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <div class="avatar-content">
                                            <i data-feather="monitor" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-7"></div>
                            </div>
                        </div>
                    </div>
                    <!--/ Line Chart Card -->
                </section>
                <!--/ Statistics Card section-->


            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection