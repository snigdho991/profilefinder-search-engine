<html lang="en">
    <head>
        <title>{{ $profile->name }}'s Profile</title>

        @include('site.pages.seo-part')

        <style>
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

            @media only screen and (min-width:500px) and (max-width:680px){
                .content{
                    text-align: center !important;
                    margin-left: 0px !important;
                }

                .extra{
                    margin-top:0px !important;
                }

                .all-p{
                    width: 100% !important;
                }

                .ui.items>.item [class*="left floated"] {
                    float: none !important;
                }

                .ui.items>.item .extra>[class*="right floated"] {
                    float: none !important;
                    margin: 3.125rem 0 0rem 0rem !important;
                }
            }

        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />

    </head>

    <body translate="no">
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
        <main style="min-height: 48%;">
            <section class="search-results" style="margin-top: 16px; background: #fbfbfb;">
                <div class="ui stackable two column grid container">
                    <div class="two wide column">
                        
                    </div>
                    <div class="twelve wide column">
                        <div class="ui divided items" style="margin-top: 30px !important;">
                            
                                    <div class="item">
                                        <div class="image"><img src="{{ asset('/'.$profile->photo) }}"
                                                style="border-radius: 50%;height: 250px;width: 250px;"></div>
                                        <div class="content" style="margin-left: 90px;margin-top: 13px;">
                                                <div class="ui left floated label"
                                                style="background: #222; color: #fff; margin-top: 10px;">{{ $profile->tag }}  </div>
                                            <br><br>
                                        <div class="all-p" style="width: 295px;">
                                            <p class="header" style="margin-top: 15px; font-size: 22px;font-weight: 600 !important;">{{ $profile->name }}</p>

                                            @if($profile->field != null)
                                                <p style="font-size: 14px; margin-top: 3px;">
                                                    
                                                        <span style="color: rgba(0,0,0,.6);"><i class="hand point right outline icon"></i>Field: <b>{{ $profile->field }}</b></span>
                                                    
                                                </p>
                                            @else
                                                <p style="font-size: 14px; margin-top: 3px;">
                                                    
                                                        <span style="color: rgba(0,0,0,.6);"><i class="hand point right outline icon"></i>Profession: <b>{{ $profile->profession }}</b></span>
                                                    
                                                </p>
                                            @endif

                                            <p style="font-size: 14px; margin-top: 3px;">
                                                    
                                                    <span style="color: rgba(0,0,0,.6);"><i class="hand point right outline icon"></i>DOB: <b>{{ $profile->date_of_birth }}</b></span>
                                                
                                            </p>

                                            <p style="font-size: 14px; margin-top: 3px;">
                                                    
                                                    <span style="color: rgba(0,0,0,.6);"><i class="hand point right outline icon"></i>Country: <b>{{ $profile->country }}</b></span>
                                                
                                            </p>

                                            @if($profile->custom1title != null)
                                                <p style="font-size: 14px; margin-top: 3px;">
                                                    
                                                        <span style="color: rgba(0,0,0,.6);"><i class="hand point right outline icon"></i>{{ $profile->custom1title }}: <b>{{ $profile->custom1value }}</b></span>
                                                    
                                                </p>
                                            @endif

                                            @if($profile->custom2title != null)
                                                <p style="font-size: 14px; margin-top: 3px;">
                                                    
                                                        <span style="color: rgba(0,0,0,.6);"><i class="hand point right outline icon"></i>{{ $profile->custom2title }}: <b>{{ $profile->custom2value }} </b></span>
                                                    
                                                </p>
                                            @endif
                                        </div>

                                            <div class="extra" style="margin-top: -145px;">
                                                <div class="ui right floated">
                                                    @if($profile->color == "Not Biased")
                                                        <img src="{{ asset('/assets/bias/Green.gif') }}" alt="" title="{{ $profile->color }}">
                                                    @elseif($profile->color == "Biased")
                                                        <img src="{{ asset('/assets/bias/Red.gif') }}" alt="" title="{{ $profile->color }}">
                                                    @else
                                                        <img src="{{ asset('/assets/bias/Yellow.gif') }}" alt="" title="{{ $profile->color }}">
                                                    @endif
                                                </div>
                                                
                                            </div>

                                        </div>

                                    </div>
                                    <br><br>

                                    <h3 class="ui horizontal divider header">
                                        <i class="bar chart icon"></i>
                                        Reports
                                    </h3>

                                    <div class="ui message" style="margin-bottom: 45px;">
                                        <p>
                                            @if($profile->others != null)
                                                {!! $profile->others !!}
                                            @else
                                                <span style="font-weight:600; text-align:center;">No report found for this user!</span>
                                            @endif
                                        </p>
                                    </div>

                            
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer style="background: #f2f2f2; margin-top: 0px;">
            @include('site.pages.inc.footer')
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
        <script id="rendered-js">
            $(function () {
            'use strict';

            $('.ui.dropdown').dropdown({
                on: 'hover' 
            });


            $('.ui.menu a.item').on('click', function () {
                $(this).
                addClass('active').
                siblings().
                removeClass('active');
                });
            });
            //# sourceURL=pen.js
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