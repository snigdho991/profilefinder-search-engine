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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/forms/select/select2.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/forms/form-validation.css') }}">
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
                                    <li class="breadcrumb-item"><a href="{{ route('profiles.list') }}">Profiles</a>
                                    </li>
                                    <li class="breadcrumb-item active">Update Profile
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
                <!-- Basic multiple Column Form section start -->
                <section class="bs-validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Profile Information</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('profiles.update', $profile->id) }}" method="POST" role="form" id="jquery-val-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-addon-name">Name (*)</label>
        
                                                    <input type="text" id="basic-addon-name" class="form-control" placeholder="Name" aria-label="Name" name="name" aria-describedby="basic-addon-name" value="{{ old('name', $profile->name) }}" required />
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Please enter your name.</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="basic-default-email1">Email</label>
                                                    <input type="email" id="basic-default-email1" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe@email.com" name="email" value="{{ old('email', $profile->email) }}" required />
                                                    <div class="valid-feedback">Looks good!</div>
                                                    <div class="invalid-feedback">Please enter a valid email</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone">Mobile</label>
                                                    <input type="text" id="phone" class="form-control" placeholder="Mobile" name="phone" value="{{ old('phone', $profile->phone) }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="address">Address</label>
                                                    <input type="text" id="address" class="form-control" placeholder="Address" name="address" value="{{ old('address', $profile->address) }}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="zipcode">Pincode</label>
                                                    <input type="text" id="zipcode" class="form-control" placeholder="Zip code" name="zipcode" value="{{ old('zipcode', $profile->zipcode) }}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="state">State</label>
                                                    <input type="text" id="state" class="form-control" placeholder="State" name="state" value="{{ old('state', $profile->state) }}"/>
                                                </div>
                                            </div>
                                    
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="city-column">City</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="City" name="city" value="{{ old('city', $profile->city) }}"/>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="select-country1">Country (*)</label>
                                                    <input type="text" id="select-country1" class="form-control" placeholder="Country" name="country" value="{{ old('country', $profile->country) }}"/>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="d-block">Gender</label>
                                                    <div class="custom-control custom-radio my-50">
                                                        <input type="radio" id="validationRadio3" name="gender" class="custom-control-input" value="Male" {{$profile->gender == 'Male'  ? 'checked' : ''}} />
                                                        <label class="custom-control-label" for="validationRadio3">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="validationRadio4" name="gender" class="custom-control-input" value="Female" {{$profile->gender == 'Female'  ? 'checked' : ''}} />
                                                        <label class="custom-control-label" for="validationRadio4">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="customFile1">Current Profile pic</label>
                                                    <div class="custom-file">
                                                        <img src="{{ asset('/'.$profile->photo) }}" height="60px" width="55px"/>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top: 30px">
                                                    <label for="customFile1">Change Profile pic</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile1" name="photo" @if($profile->photo==null) required @endif/>
                                                        <label class="custom-file-label" for="customFile1">Choose profile pic</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="isdob">Choose DOB/DOF</label>
                                                    <select class="form-control form-control-sm" id="isdobField" name="isdob" required>
                                                        <option disabled selected>Select an option</option>
                                                        <option value="3" {{$profile->isdob == '3'  ? 'selected' : ''}}>DOB</option>
                                                        <option value="2" {{$profile->isdob == '2'  ? 'selected' : ''}}>DOF</option>
                                                    </select>
                                                </div>
                                                <div class="dob" id="dobfield">
                                                    <div class="form-group">
                                                        <label class="form-label" for="dob">Date of Birth</label>
            
                                                        <input type="text" id="basic-dob-column" class="form-control" placeholder="DD-MM-YYYY" name="date_of_birth" value="{{ old('date_of_birth', $profile->date_of_birth) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Field.</div>
                                                    </div>
                                                </div>
                                                <div class="dof" id="doffield">
                                                    <div class="form-group">
                                                        <label class="form-label" for="dof">Date of Foundation</label>
            
                                                        <input type="text" id="basic-dof-column" class="form-control" placeholder="DD-MM-YYYY" name="date_of_foundation" value="{{ old('date_of_foundation', $profile->date_of_foundation) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Profession.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="isfield">Choose Field/Profession (*)</label>
                                                    <select class="form-control form-control-sm" id="isfield" name="isfield" required>
                                                        <option disabled selected>Select an option</option>
                                                        <option value="1" {{$profile->isfield == '1'  ? 'selected' : ''}}>Field</option>
                                                        <option value="0" {{$profile->isfield == '0'  ? 'selected' : ''}}>Profession</option>
                                                    </select>
                                                </div>
                                                <div class="1 box">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field">Field</label>
            
                                                        <input type="text" id="basic-field-column" class="form-control" placeholder="Field" name="field" value="{{ old('field', $profile->field) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Field.</div>
                                                    </div>
                                                </div>
                                                <div class="0 box">
                                                    <div class="form-group">
                                                        <label class="form-label" for="profession">Profession</label>
            
                                                        <input type="text" id="basic-profession-column" class="form-control" placeholder="Profession" name="profession" value="{{ old('profession', $profile->profession) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Profession.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="metatitle-column">SEO Meta Title</label>
                                                    <input type="text" id="metatitle-column" class="form-control" placeholder="Enter Meta Title" name="metatitle" value="{{ old('metatitle', $profile->metatitle) }}"/>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="metakeywords-column">SEO Meta Keywords</label>
                                                    <input type="text" id="metakeywords-column" class="form-control" placeholder="Enter Meta keywords(comma seperated)" name="metakey" value="{{ old('metakey', $profile->metakey) }}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="select-metadesc">SEO Meta Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Meta Description" name="metadesc">{{ old('others', $profile->metadesc) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="tag">Tag (*)</label>
                                                    <input type="text" id="tag" class="form-control" placeholder="Enter tag" name="tag" value="{{ old('tag', $profile->tag) }}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="select-extras">Type your report here (*)</label>
                                                    <textarea class="form-control tinymce-editor" id="exampleFormControlTextarea2" placeholder="Enter other Description" name="others">{{ old('others', $profile->others) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="color">Choose Gauge Option (*)</label>
                                                    <select class="form-control form-control-sm" id="color" name="color" required>
                                                        <option disabled selected>Select an option</option>
                                                        <option value="Not Biased" {{$profile->color == 'Not Biased'  ? 'selected' : ''}}>Not Biased  (Green)</option>
                                                        <option value="Neutral" {{$profile->color == 'Neutral'  ? 'selected' : ''}}>Neutral (Yellow)</option>
                                                        <option value="Biased" {{$profile->color == 'Biased'  ? 'selected' : ''}}>Biased (Red)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="remark">Remark</label>
                                                    <input type="text" id="remark" class="form-control" placeholder="Remark" name="remark" value="{{ old('remark', $profile->remark) }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cf1" {{is_null($profile->custom1title) ? '' : 'checked'}}/>
                                                        <label class="custom-control-label" for="cf1">Add Custom Field 1 (*)</label>
                                                    </div>
                                                    
                                                </div>

                                                <div id="cfbox1">
                                                    <div class="form-group">
                                                        <label class="form-label" for="custom1title">Custom Field 1 Title</label>
            
                                                        <input type="text" id="custom1title" class="form-control" placeholder="Title" name="custom1title" value="{{ old('custom1title', $profile->custom1title) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Field Title.</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="custom1value">Custom Field 1 Value</label>
            
                                                        <input type="text" id="custom1value" class="form-control" placeholder="Value" name="custom1value" value="{{ old('custom1value', $profile->custom1value) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Field Value.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cf2" {{is_null($profile->custom2title) ? '' : 'checked'}}/>
                                                        <label class="custom-control-label" for="cf2">Add Custom Field 2 (*)</label>
                                                    </div>
                                                    
                                                </div>
                                                <div id="cfbox2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="custom1title">Custom Field 2 Title</label>
            
                                                        <input type="text" id="custom2title" class="form-control" placeholder="Title" name="custom2title" value="{{ old('custom2title', $profile->custom2title) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Field Title.</div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="custom2value">Custom Field 2 Value</label>
            
                                                        <input type="text" id="custom2value" class="form-control" placeholder="Value" name="custom2value" value="{{ old('custom2value', $profile->custom2value) }}" required />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Please enter Field Value.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

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
    <script src="{{ asset('assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/scripts/forms/form-validation.js') }}"></script>
    <!-- END: Page JS-->

    <style>
        .tox-notifications-container {
            display: none;
        }
    </style>
    <!-- tinymce -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 200,
            skin: 'oxide-dark',
            content_css: 'dark',
            body_class: 'dark-layout',
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: 'writer'
        });
    </script>

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
    

    <!-- For field/profession-->
    <script> 
        // jQuery functions to hide and show the div 
        $(document).ready(function () { 
            $("#isfield").change(function () { 
                $(this).find("option:selected") 
                       .each(function () { 
                    var optionValue = $(this).attr("value"); 
                    if (optionValue) { 
                        $(".box").not("." + optionValue).hide(); 
                        $("." + optionValue).show(); 
                    } else { 
                        $(".box").hide(); 
                    } 
                }); 
            }).change(); 
        }); 
    </script> 
    
    <script>
        $(document).ready(function () { 
            $("#doffield").hide();
            $("#dobfield").hide();
            
            $("#isdobField").change(function () { 
                $(this).find("option:selected") 
                       .each(function () { 
                    var optionValue = $(this).attr("value"); 
                    console.log(optionValue);
                    if (optionValue == 3) {
                        $("#doffield").hide();
                        $("#dobfield").show();
                    } else if(optionValue == 2) { 
                        $("#dobfield").hide();
                        $("#doffield").show();
                    } 
                }); 
            }).change(); 
            
        }); 
    </script>
    
    <!-- For custom field 1-->
    <script> 
        // jQuery functions to hide and show the div 
        var checkbox = $('#cf1'),
        chCustomField1Block = $('#cfbox1');

        if(checkbox.is(':checked')) {
            chCustomField1Block.show();
            chCustomField1Block.find('input').attr('required', true);
            } else {
            chCustomField1Block.hide();
            chCustomField1Block.find('input').attr('required', false);
            }

        checkbox.on('click', function() {
            if($(this).is(':checked')) {
            chCustomField1Block.show();
            chCustomField1Block.find('input').attr('required', true);
            } else {
            chCustomField1Block.hide();
            chCustomField1Block.find('input').attr('required', false);
            }
        });
    </script> 

    <!-- For custom field 2-->
    <script> 
        // jQuery functions to hide and show the div 
        var checkbox = $('#cf2'),
        chCustomField2Block = $('#cfbox2');

        if(checkbox.is(':checked')) {
            chCustomField2Block.show();
            chCustomField2Block.find('input').attr('required', true);
            } else {
            chCustomField2Block.hide();
            chCustomField2Block.find('input').attr('required', false);
            }

        checkbox.on('click', function() {
            if($(this).is(':checked')) {
            chCustomField2Block.show();
            chCustomField2Block.find('input').attr('required', true);
            } else {
            chCustomField2Block.hide();
            chCustomField2Block.find('input').attr('required', false);
            }
        });
    </script> 
</body>
<!-- END: Body-->

</html>