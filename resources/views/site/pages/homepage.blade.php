<!DOCTYPE html>
<html>
  <head>
      <title>Bias Checker</title>
      
      @include('site.pages.seo-part')

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      
      <style type="text/css">
        .mg-t-100 {
          margin-top: 100px;
        }
        .navbar-brand img {
        padding: 5px;
        max-height: 70px;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -ms-transition: 0.5s;
        transition: 0.5s;
        }
        .logo {
            font-size: 36px;
            font-weight: 500;
            /*color: #0e8ce4*/
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        .header-main-text {
            font-size: 60px;
            font-weight: 900;
            color: #0e8ce4;
            font-style: italic;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%)
        }
        .header-sub-text {
            font-size: 55px;
            font-weight: 800;
            color: #0e8ce4;
            top: 50%;
            font-style: italic;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%)
        }
      </style>
  </head>

  <body>
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact-us">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Navbar -->

    </header>
    <div class="container mg-t-100">
      <form method="GET" role="form" action="/results">
        <div class="row">  
          <div class="col-lg-12 text-center mt-5">
            <h1><span class="header-main-text">Bias</span><span class="header-sub-text">Checker</span></h1>
          </div>
          <div class="col-md-6 offset-md-3 pt-3">
            <div class="input-group mb-3">
              
              
              <input type="text" name="query" class="form-control" id="query" placeholder="Search any profile on BiasChecker" onkeyup="buttonSearch()" aria-label="profile name">
              <div class="input-group-append">
                <button type="submit" class="input-group-text" id="searchBtn" style="cursor: pointer;" disabled=""><i class="fa fa-search"></i></button>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
  </body>

    
</html>