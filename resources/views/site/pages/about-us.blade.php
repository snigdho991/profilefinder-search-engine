<html lang="en">
    <head>
        <title>About Us</title>

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
            <section class="search-results" style="margin-top: 50px;">
                <div class="ui stackable two column grid container">
                    <div class="two wide column">
                        
                    </div>
                    <div class="twelve wide column">
                        <div class="ui divided items">
                            
                                    <div class="item">
                                       
                                        <div class="content" style="text-align: center;">
                                             <div class="ui label"
                                                style="background: #222; color: #fff; font-size: 17px;">About Us</div>
                                                <p style="margin-top: 15px; font-size: 17px;">Welcome to Biaschecker.org, a platform created to reveal and stop bias in the media.Here, you can easily have access to comprehensive bias reports and ratings to hold specific media outlets accountable for their biases and to know which sources you can and can’t trust – at a glance.</p>
                                        </div>

                                    </div>
                                    
                                    <h3 class="ui horizontal divider header">
                                        <i class="bar chart icon"></i>
                                        Our Values
                                    </h3>

                                    <div class="ui message" style="margin-bottom: 50px;">
                                        <p style="font-size: 16px; line-height: 1.65;">
                                            <b>Integrity:</b> Shocking headlines, cherry-picking statistics, sentences taken out of context. Most media outlets seek attention, not truth, manipulation over information. At Biaschecker.org, we are determined to stop them by holding news outlets accountable for their biases and lack of integrity.<br>
                                            <b>Credibility:</b> You need a source you can rely on, but most media outlets are plagued with biases or a thirst for sensationalism. Biaschecker.org does the hard work for you, dissecting countless news articles and compiling bias reports to help you identify credible sources of information.<br>
                                            <b>Transparency:</b> Biaschecker.org was launched to shine a beacon of truth in a world where the media often misinterprets, misinforms and manipulates – with transparency. At Biaschecker.org, there are nohidden agendas, motives or political affiliations. We answerto no one but the public – you.
                                        </p>
                                    </div>

                                    <h3 class="ui horizontal divider header">
                                        <i class="bar chart icon"></i>
                                        Our Mission
                                    </h3>

                                    <div class="ui message" style="margin-bottom: 50px;">
                                        <p style="font-size: 16px; line-height: 1.65;">
                                            Biaschecker.org is set on a mission to revealand stop bias in the media and journalism. 
                                            To do so, every day, our team thoroughly analyses countless news articles from multiple news outlets. We factcheck, we dissecting narratives, we look for hidden biases. Next, we compile a comprehensive report highlighting their biases and assigning them a bias rating so that you can easily see which media outlets can or cannot be trusted and hold them accountable.

                                        </p>
                                    </div>


                                    <h3 class="ui horizontal divider header">
                                        <i class="bar chart icon"></i>
                                        Our Vision
                                    </h3>

                                    <div class="ui message" style="margin-bottom: 40px;">
                                        <p style="font-size: 16px; line-height: 1.65;">
                                            Biaschecker.org started out with a belief that media and journalism should not be guided by profit, attention or hidden agendas. Instead, they should serve the public by informing in a non-biased manner.
                                            Soon, that belief turned into an idea and Biaschecker.org was launched. Today, our in-depth reports and bias rating helps countless people be aware of hidden biases and avoid sources that can’t be trusted. This, in turn, will hold more and more media outlets accountable and encourage them to abandon their biases and embrace a journalism and reporting style that is neutral, credible and transparent. 

                                        </p>
                                    </div>

                            
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