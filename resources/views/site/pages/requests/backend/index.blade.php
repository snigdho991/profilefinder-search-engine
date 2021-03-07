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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
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
                                    <li class="breadcrumb-item active">Profile Requests
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
                <!-- Responsive Datatable -->
                <section id="responsive-datatable basic-modals">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Requests List</h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($profiles as $profile)
                                                <tr>
                                                    <td class="basic-modal">
                                                        <a data-toggle="modal" data-target="#default{{ $profile->id }}"><i data-feather="eye"></i></a>
                                                        <!-- Modal -->
                                                        <div class="modal fade text-left" id="default{{ $profile->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">Details of Request | {{ $profile->name }}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="table dtr-details" width="100%">
                                                                            <tr data-dt-row="0" data-dt-column="1">
                                                                                <td>Name:</td> <td>{{ $profile->name }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="2">
                                                                                <td>Email:</td> <td>{{ $profile->email }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="3">
                                                                                <td>Age:</td> <td>{{ $profile->age }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="4">
                                                                                @if($profile->field!=null)
                                                                                    <td>Field:</td> <td>{{ $profile->field }}</td>
                                                                                @else
                                                                                    <td>Profession:</td> <td>{{ $profile->profession }}</td>
                                                                                @endif
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="5">
                                                                                <td>Gender:</td> <td>{{ $profile->gender }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="6">
                                                                                <td>Address:</td> <td>{{ $profile->address }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="7">
                                                                                <td>State:</td> <td>{{ $profile->state }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="8">
                                                                                <td>City:</td> <td>{{ $profile->city }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="9">
                                                                                <td>Post Code:</td> <td>{{ $profile->zipcode }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="10">
                                                                                <td>Country:</td> <td>{{ $profile->country }}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="11">
                                                                                <td>Status:</td>
                                                                                <td>
                                                                                    @if ($profile->status === 'Approved')
                                                                                        <span class="badge badge-pill badge-light-success mr-1">Approved</span>
                                                                                    @elseif($profile->status === 'Rejected')
                                                                                        <span class="badge badge-pill badge-light-danger mr-1">Rejected</span>
                                                                                    @else
                                                                                        <span class="badge badge-pill badge-light-warning mr-1">Pending</span>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="12">
                                                                                <td>Type your report here:</td> <td>{!! $profile->others !!}</td>
                                                                            </tr>
                                                                            <tr data-dt-row="0" data-dt-column="13">
                                                                                <td>Date:</td> <td>{{ date('d-m-Y', strtotime($profile->created_at)) }}</td>
                                                                            </tr>
                                                                            
                                                                        </table>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        @if ($profile->status != 'Approved')
                                                                            <a class="btn btn-primary" href="{{ route('requests.profiles.update', $profile->id) }}">Edit & Approve</a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                 </td>
                                                                 
                                                    <td>{{ $profile->name }} 
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $profile->name }}">
                                                                  <img src="{{ asset('/'.$profile->photo) }}" alt="Avatar" height="26" width="26" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                                                        @if ($profile->status === 'Approved')
                                                            <span class="badge badge-pill badge-light-success mr-1">Approved</span>
                                                        @elseif($profile->status === 'Rejected')
                                                            <span class="badge badge-pill badge-light-danger mr-1">Rejected</span>
                                                        @else
                                                            <span class="badge badge-pill badge-light-warning mr-1">Pending</span>
                                                        @endif
                                                    </a>
                                                    @if ($profile->status != 'Approved')
                                                        <ul class="dropdown-menu settings-menu dropdown-menu-right">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('requests.profiles.update.status', [$profile->id,'Pending']) }}"> Pending</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('requests.profiles.update.status', [$profile->id,'Approved']) }}"> Approved</a>
                                                            </li>
                                                            {{-- <li>
                                                                <a class="dropdown-item" href="{{ route('requests.profiles.update.status', [$profile->id,'pending']) }}"> Pending</a>
                                                            </li> --}}
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('requests.profiles.update.status', [$profile->id,'Rejected']) }}"> Rejected</a>
                                                            </li>
                                                        </ul>
                                                    @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                                <i data-feather="more-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="margin-right: 30px">
                                                                <a class="dropdown-item" data-toggle="modal" data-target="#default{{ $profile->id }}">
                                                                    <i data-feather="eye" class="mr-50"></i>
                                                                    <span>Show</span>
                                                                </a>
                                                                @if ($profile->status != 'Approved')
                                                                <a class="dropdown-item" href="{{ route('requests.profiles.update', $profile->id) }}">
                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                    <span>Edit & Approve</span>
                                                                </a>
                                                                @endif
                                                                <a class="dropdown-item" href="{{ route('requests.profiles.delete', $profile->id) }}">
                                                                    <i data-feather="trash" class="mr-50"></i>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{ $profiles ->links() }}
                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Photo</th>
                                                <th>Color</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Responsive Datatable -->

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
    <script src="{{ asset('assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/scripts/tables/table-datatables-advanced.js') }}"></script>
    <script src="{{ asset('assets/js/scripts/components/components-modals.js') }}"></script>

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