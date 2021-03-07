<html lang="en">
    <head>
        <title>Search Result</title>

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

            .loader-wrapper {
                position: fixed;
                top: 0;
                width: 100%;
                height: 100%;
                background: #000;
                color: #ccc;
                font-size: 20px;
                z-index: 1000;
            }

            .loader {
              width: 200px;
              height: 200px;
              line-height: 200px;
              margin: 240px auto;
              position: relative;
              box-sizing: border-box;
              text-align: center;
              z-index: 0;
              text-transform: uppercase;
            }

            .loader:before,
            .loader:after {
              opacity: 0;
              box-sizing: border-box;
              content: "\0020";
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              border-radius: 100px;
              border: 5px solid #fff;
              box-shadow: 0 0 50px #fff, inset 0 0 50px #fff;
            }

            .loader:after {
              z-index: 1;
              -webkit-animation: gogoloader 2s infinite 1s;
            }

            .loader:before {
              z-index: 2;
              -webkit-animation: gogoloader 2s infinite;
            }

            @-webkit-keyframes gogoloader {
              0% {
                -webkit-transform: scale(0);
                opacity: 0;
              }
              50% {
                opacity: 1;
              }
              100% {
                -webkit-transform: scale(1);
                opacity: 0;
              }
            }

            .img-responsive {}
        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />

    </head>

    <body translate="no">
        <header>
            <nav style="box-shadow: 0 1px 2px 0 rgb(34 36 38 / 15%);">
                <div class="ui menu borderless">
                    <div class="ui container" style="margin-top: 1.2em;">
                        <a href="/"><div class="header item"><img class="img-responsive" src="{{ asset('assets/images/logo.png') }}" style="width: 5.5em;" />
                        </div></a>
                        <div class="menu fluid">
                            <form method="GET" role="form" action="/results">
                                <div class="item">
                                    <div class="ui action left icon input fluid"><i class="search icon"></i>

                                        <input type="text" placeholder="Search" name="query" id="query" onkeyup="buttonSearch()" value="{{ $que }}">
                                        <button type="submit" id="searchBtn" class="ui button">Search Again</button>

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
            
            <div class="loader-wrapper">
                <div class="loader">Searching...</div>
            </div>
            
            <nav>
                <div class="ui container">
                    <!-- <div class="ui breadcrumb"><a class="section">Home</a><span class="divider">/</span><a class="section">Item 1</a><span class="divider">/</span><a class="section">Item 2</a><span class="divider">/</span> -->
                    <div class="section" style="margin-bottom:40px;"><span style="font-size:21px;">Search result for
                            "</span><b style="font-size:21px;">{{ $que }}</b><span style="font-size:21px;">"</span> (Total <b>{{ \App\Profile::where('name', 'like', '%' . $que . '%')->count() }}</b> result)</div>

                </div>
                </div>
            </nav>
        </header>
        <main style="min-height: 48%;">
            <section class="search-results">
                <div class="ui stackable two column grid container">
                    <div class="three wide column">
                        
                    </div>
                    <div class="ten wide column">
                        <div class="ui divided items">
                            @if($profiles->count() > 0)
                                @foreach($profiles as $profile)
                                    <div class="item">
                                        <div class="image"><img src="{{ asset('/'.$profile->photo) }}"
                                                style="border-radius: 50%;height: 175px; width: 175px;"></div>
                                        <div class="content" style="margin-top: 15px;">
                                            <div class="ui left floated label"
                                                style="background: #222; color: #fff; margin-top: 10px;">{{ $profile->tag }}</div>
                                            <br><br>
                                            <a class="header" href="{{ route('profile.frontend.show',['id'=>$profile->id,'slug'=>Illuminate\Support\Str::slug($profile->name)]) }}" style="margin-top: 15px; font-size: 22px;">{{ $profile->name }}</a>
                                            <p style="font-size: 14px; margin-top: 10px;">
                                                @if($profile->isfield == 1)
                                                    <span style="color: rgba(0,0,0,.6);">Field: {{ $profile->field }}</span>
                                                @else
                                                    <span style="color: rgba(0,0,0,.6);"> Profession: {{ $profile->profession }}</span>
                                                @endif
                                            </p>

                                            <div class="meta" style="margin-top: 10px;"><span> From
                                                </span><b>{{ $profile->address }}, {{ $profile->city }}, {{ $profile->country }}</b>
                                            </div>

                                            <div class="extra" style="margin-top: -42px;">
                                                <a style="color:#fff"
                                                        href="{{ route('profile.frontend.show',['id'=>$profile->id,'slug'=>Illuminate\Support\Str::slug($profile->name)]) }}"><div class="ui right floated primary button"><span>View Report</span><i class="right chevron icon"></i>
                                                </div>
                                                </a>
                                                <!-- <div class="ui right floated"><img src="Green.gif" style="margin-top: -100px;" /></div> -->
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="ui cards">
      
                                    <div class="card" style="width: 600px; text-align: center;">
                                        <div class="content">
                                          <span class="left floated mini ui image" style="margin-right: 0px;">
                                          <i class="large search icon" style="margin-left: 150px; font-size: 21px;"></i></span>
                                          <div class="header" style="font-size: 24px;">
                                            No Matching Result !
                                          </div>
                                          <div class="meta">
                                            Make sure you typed the user's <span style=""> firstname or lastname correctly.</span>
                                          </div>

                                          <div style="margin-top: 5px; margin-bottom: 4px;">
                                            <b style="font-size: 17px;">OR</b>
                                          </div>

                                          <div class="description">
                                            You can request for a new report or profile. It will be published after admin's approval.
                                          </div>
                                        </div>
                                        <div class="extra content">
                                          <div class="ui two buttons">
                                            <a class="ui secondary button" href="/send-request">Create a report</a>
                                            
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                
                            @endif


                            {{-- <div class="item">
                                <div class="image"><img src="https://via.placeholder.com/200x200?text=Avatar"
                                        style="border-radius: 50%;"></div>
                                <div class="content">
                                    <div class="ui left floated label" style="background: #222; color: #fff;">Tags</div>
                                    <br><br>
                                    <a class="header">Test Search</a>
                                    <p>test@gmail.com</p>

                                    <div class="meta"><span>From </span><b>Mymensingh, Bangladesh</b></div>
                                    <div class="meta"><span>Profession: </span><b>Web Developer</b></div>

                                    <div class="extra">
                                        <div class="ui left floated primary button"><span>View Report</span><i
                                                class="right chevron icon"></i></div>
                                        <div class="ui right floated"><img src="Orange.gif" style="margin-top: -100px;" />
                                        </div>

                                    </div>
                                </div>
                            </div> --}}
                            <span style="text-align: center">
                                {{ $profiles->appends(request()->query())->links('vendor.pagination.semantic-ui') }}
                            </span>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer style="background: #f2f2f2; margin-top: 40px;">
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
            function reportBtn()
            {
                alert('Coming Soon!')
            }
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
        
        <script type="text/javascript">
            (function($){
              'use strict';
                $(window).on('load', function () {
                    
                        $(".loader-wrapper").fadeOut("slow");
                    
                });
            })(jQuery)
        </script>
    </body>

</html>