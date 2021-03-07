<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>DataTables - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/bordered-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-invoice-list.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/app-user.css') }}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu-modern dark-layout  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout" data-framework="laravel" data-asset-path="{{ asset('/')}}">

    <!-- BEGIN: Header-->
    @include('site.partials.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('site.partials.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
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
                                    <li class="breadcrumb-item"><a href="{{ route('profiles.list') }}">Profiles</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ $profile->name }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: Alert-->
            @include('site.partials.flash')
            <!-- END: Alert-->
            

            <div class="content-body">
                <section class="app-user-view">
                    <!-- User Card & Plan Starts -->
                    <div class="row">
                        <!-- User Card starts-->
                        <div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="card user-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                            <div class="user-avatar-section">
                                                <div class="d-flex justify-content-start">
                                                    <img class="img-fluid rounded" src="{{ asset('/'.$profile->photo) }}" height="104" width="104" alt="{{ $profile->name }}" />
                                                    <div class="d-flex flex-column ml-1">
                                                        <div class="user-info mb-1">
                                                            <h4 class="mb-0">{{ $profile->name }}</h4>
                                                            <span class="card-text">{{ $profile->email }}</span>
                                                        </div>
                                                        <div class="d-flex flex-wrap">
                                                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary">Edit</a>
                                                            <a href="{{ route('profiles.delete', $profile->id) }}" class="btn btn-outline-danger ml-1">Delete</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="d-flex align-items-center user-total-numbers">
                                                <div class="d-flex align-items-center mr-2">
                                                    <div class="color-box bg-light-primary">
                                                        <i data-feather="dollar-sign" class="text-primary"></i>
                                                    </div>
                                                    <div class="ml-1">
                                                        <h5 class="mb-0">23.3k</h5>
                                                        <small>Monthly Sales</small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="color-box bg-light-success">
                                                        <i data-feather="trending-up" class="text-success"></i>
                                                    </div>
                                                    <div class="ml-1">
                                                        <h5 class="mb-0">$99.87K</h5>
                                                        <small>Annual Profit</small>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                            <div class="user-info-wrapper">
                                                {{-- <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="user" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Age</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $profile->age }} Years</p> 
                                                </div>
                                                --}}
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="user" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Date of Birth</span>
                                                    </div>
                                                    <p class="card-text mb-0">
                                                        @if($profile->date_of_birth==null)
                                                            {{ 'N/A' }}
                                                        @else
                                                            {{ $profile->date_of_birth }}
                                                        @endif
                                                    </p>
                                                </div>
                                                
                                                {{-- <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="star" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Color</span>
                                                    </div>
                                                    <p class="card-text mb-0">
                                                        @if ($profile->color === 'Not Biased')
                                                            <span class="badge badge-pill badge-light-success mr-1">Not Biased</span>
                                                        @elseif($profile->color === 'Biased')
                                                            <span class="badge badge-pill badge-light-danger mr-1">Biased</span>
                                                        @else
                                                            <span class="badge badge-pill badge-light-warning mr-1">Neutral</span>
                                                        @endif
                                                    </p>
                                                </div> --}}
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="map-pin" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Address</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $profile->address }} <br> {{ $profile->state }} <br> {{ $profile->city }}, {{ $profile->zipcode }} </p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Country</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $profile->country }} </p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="tool" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">
                                                            @if ($profile->isfield == '1')
                                                                Field
                                                            @else
                                                                Profession
                                                            @endif
                                                        </span>
                                                    </div>
                                                    <p class="card-text mb-0">
                                                        @if ($profile->isfield == '1')
                                                            {{ $profile->field }}
                                                        @else
                                                            {{ $profile->profession }}
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="phone" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $profile->phone }}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="help-circle" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Remark</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $profile->remark }}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="tag" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Tag</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $profile->tag }}</p>
                                                </div>
                                                @if ($profile->custom1title != null)
                                                    <div class="d-flex flex-wrap my-50">
                                                        <div class="user-info-title">
                                                            <i data-feather="check" class="mr-1"></i>
                                                            <span class="card-text user-info-title font-weight-bold mb-0">
                                                                    {{ $profile->custom1title }}   
                                                            </span>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            {{ $profile->custom1value }}
                                                        </p>
                                                    </div>
                                                @endif
                                                @if ($profile->custom2title != null)
                                                    <div class="d-flex flex-wrap my-50">
                                                        <div class="user-info-title">
                                                            <i data-feather="check" class="mr-1"></i>
                                                            <span class="card-text user-info-title font-weight-bold mb-0">
                                                                    {{ $profile->custom2title }}   
                                                            </span>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            {{ $profile->custom2value }}
                                                        </p>
                                                    </div>
                                                @endif
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="circle" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Extras</span><br>
                                                    </div>
                                                    <p class="card-text mb-0">{!! $profile->others !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card Ends-->

                        <!-- Plan Card starts-->
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="card plan-card border-primary">
                                <div class="card-header d-flex justify-content-between align-items-center pt-75 border-bottom">
                                    <h4 class="mb-0">Color</h4><i data-feather="star"></i>
                                    {{-- <span class="badge badge-light-secondary" data-toggle="tooltip" data-placement="top" title="Expiry Date">July 22, <span class="nextYear"></span>
                                    </span> --}}
                                </div>
                                <div class="card-body d-flex align-items-center user-total-numbers">
                                    {{-- <div class="badge badge-light-primary">Basic</div> --}}
                                    <div class="d-flex align-items-center">
                                        @if ($profile->color === 'Not Biased')
                                            <div class="color-box bg-light-success">
                                                <i data-feather="trending-up" class="text-success"></i>
                                            </div>
                                            <div class="text-success ml-1">
                                                <h5 class="text-success mb-0">{{ $profile->color }}</h5>
                                                <small>Profile</small>
                                            </div>
                                        @elseif($profile->color === 'Neutral')
                                            <div class="color-box bg-light-warning">
                                                <i data-feather="activity" class="text-warning"></i>
                                            </div>
                                            <div class="text-warning ml-1">
                                                <h5 class="text-warning mb-0">{{ $profile->color }}</h5>
                                                <small>Profile</small>
                                            </div>
                                        @else
                                            <div class="color-box bg-light-danger">
                                                <i data-feather="trending-down" class="text-danger"></i>
                                            </div>
                                            <div class="text-danger ml-1">
                                                <h5 class="text-danger mb-0">{{ $profile->color }}</h5>
                                                <small>Profile</small>
                                            </div>
                                        @endif
                                        
                                    </div>
                                    {{-- <button class="btn btn-primary text-center btn-block">Upgrade Plan</button> --}}
                                </div>
                            </div>
                        </div>
                        <!-- /Plan CardEnds -->
                    </div>
                    <!-- User Card & Plan Ends -->

                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    @include('site.partials.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/scripts/pages/app-user-view.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>