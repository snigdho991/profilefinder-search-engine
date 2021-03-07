<!DOCTYPE html>
    <style type="text/css">
        
        .contact-form{
            background: #ddf;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 100%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }


        body>header>nav .ui.menu {
            border-radius: 0;
        }

        body>header>nav .ui.menu:first-child {
            margin-bottom: 0;
            border-bottom-width: 0;
        }

        body>header>nav .ui.menu:last-child {
            margin-top: 0;
            margin-bottom: 1rem;
            border-top-width: 0;
        }

        body>header>nav .ui.menu .menu.fluid,
        body>header>nav .ui.menu .menu.fluid>.item {
            flex: 1 1 auto;
        }

        body>header>nav .ui.menu .item:before {
            display: none;
        }

        body>header>nav .ui.breadcrumb:last-child {
            margin-bottom: 1rem;
        }

        body>main section.banner {
            margin-bottom: 1rem;
        }

        body>main section.banner>.ui.container {
            background-image: url("//placehold.it/1000x250");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 20em;
        }

        body>footer :not(.icon).copyright {
            color: rgba(0, 0, 0, 0.5);
        }

        body>footer :not(.icon).copyright:hover {
            color: black;
        }

        .debug {
            background-color: red;
            border: 1px solid red;
        }

        .ui.menu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 1rem 0;
            font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
            background: #FFF;
            font-weight: 400;
            border-bottom: 1px solid rgba(34, 36, 38, .15) !important;
            border: 0px !important;
            box-shadow: 0 0px 0px 0 rgb(34 36 38 / 15%) !important;
            border-radius: .28571429rem;
            min-height: 0.95em !important;
        }

        .img-responsive {}
        .custom-radio .custom-control-label::before {
            border-radius: 50%;
            background: #fff;
        }

        .tox-notifications-container {
            display: none;
        }
    </style>
    <html lang="en">
    <title>Request Us</title>

    @include('site.pages.seo-part')
      
        <head>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
            <!------ Include the above in your HEAD tag ---------->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        </head>

        <body>
            <header>
                <nav style="box-shadow: 0 1px 2px 0 rgb(34 36 38 / 15%);">
                    <div class="ui menu borderless">
                        <div class="ui container" style="margin-top: 1.2em;">
                            <a href="/"><div class="header item"><img class="img-responsive" src="{{ asset('assets/images/logo.png') }}"  style="width: 5.5em;" />
                            </div></a>
                            <div class="menu fluid">
                                <form method="GET" role="form" action="/results">
                                    <div class="item">
                                        <div class="ui action left icon input fluid"><i class="search icon"></i>

                                            <input type="text" placeholder="Search" name="query" id="query" onkeyup="buttonSearch()">
                                            <button type="submit" id="searchBtn" class="ui button" disabled="">Search Here</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="right menu"><a class="item">Advertisement</a></div> -->
                        </div>
                    </div>
                    <div class="ui menu borderless">
                        
                    </div>
                </nav>
                
            </header>

            <div class="container" style="margin-top: 90px;">
                
                @include('site.partials.flash')
                    
            </div>
            <div class="container contact-form" style="margin-top: 20px;">
                <div class="contact-image">
                    <img src="{{ asset('/assets/images/request-page.png') }}" alt="rocket_request"/>
                </div>
                <form method="post" action="{{ route('request.store') }}" enctype="multipart/form-data">
                    @csrf
                    <h3 style="margin-top: -95px;">Drop Us a Request</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                               <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name *" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email *" />
                            </div>

                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="text" name="date_of_birth" style="background: #fff;" class="form-control dob-selector" placeholder="Date of Birth" />
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone *" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address *" />
                            </div>

                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" name="country" class="form-control" placeholder="Country *" />
                            </div>

                            <div class="form-group">
                                <label>State</label>
                                <input type="text" name="state" class="form-control" placeholder="State *" />
                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="City *" />
                            </div>

                            <div class="form-group">
                                <label>Zipcode</label>
                                <input type="text" name="zipcode" class="form-control" placeholder="Zipcode *" />
                            </div>

                            <div class="form-group">
                                <label>Profile Picture (*)</label>
                                <input type="file" name="photo" class="form-control" placeholder="Photo *" />
                            </div>

                            <div class="form-group">
                                <label for="isfield">Choose Field/Profession (*)</label>
                                <select class="form-control form-control-sm" id="isfield" name="isfield" required>
                                    <option disabled selected>Select an option</option>
                                    <option value="1">Field</option>
                                    <option value="0">Profession</option>
                                </select>
                            </div>

                            <div class="1 box">
                                <div class="form-group">
                                    <label class="form-label" for="field">Field</label>

                                    <input type="text" id="basic-field-column" class="form-control" placeholder="Field" name="field" />
                                    
                                </div>
                            </div>

                            <div class="0 box">
                                <div class="form-group">
                                    <label class="form-label" for="profession">Profession</label>

                                    <input type="text" id="basic-profession-column" class="form-control" placeholder="Profession" name="profession" />
                                    
                                </div>
                            </div>

                            <div class="form-group" id="hideGender">
                                <label class="d-block">Gender</label>
                                <div class="custom-control custom-radio my-50">
                                <input type="radio" id="validationRadio3" name="gender" class="custom-control-input" value="Male" />
                                <label class="custom-control-label" for="validationRadio3">Male</label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="validationRadio4" name="gender" class="custom-control-input" value="Female" />
                                <label class="custom-control-label" for="validationRadio4">Female</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Tag (*)</label>
                                <input type="text" name="tag" class="form-control" placeholder="Tag *" />
                            </div>

                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" name="remark" class="form-control" placeholder="Remark *" />
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Extras</label>
                                <textarea class="form-control tinymce-editor" id="exampleFormControlTextarea2" placeholder="Enter other Description" name="others"></textarea>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group" style="margin-top: 15px;">
                                {{-- <button type="submit" style="outline: none;" class="btnContact">Send Request</button> --}}
                                <button type="submit" style="width: 100%; background: #1678c2; color: #fff;margin-top: 20px;" class="ui right labeled icon button"><i class="right arrow icon"></i> Send Request </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script type="text/javascript">
                $(".dob-selector").flatpickr();
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
                                if(optionValue == 1){
                                    $("#hideGender").hide();
                                } else {
                                    $("#hideGender").show();
                                }
                            } else { 
                                $(".box").hide(); 
                            } 
                        }); 
                    }).change(); 
                }); 
            </script> 

            <script type="text/javascript">
                function buttonSearch() {
                    if (document.getElementById("query").value === "" || !document.getElementById("query").value.trim())
                    { 
                        document.getElementById('searchBtn').disabled = true; 
                    } else { 
                        document.getElementById('searchBtn').disabled = false;
                    }
                }
            </script>

            <script>
                window.console = window.console || function(t) {};
                if (document.location.search.match(/type=embed/gi)) {
                    window.parent.postMessage("resize", "*");
                }
            </script>

        </body>
    </html>

    <footer style="background: #f2f2f2; margin-top: 40px;">
        @include('site.pages.inc.footer')
    </footer>
