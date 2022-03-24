<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>{{$users->name}} {{$users->first_name}}</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="{{asset("assets1/images/favicon.png")}}">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset("assets1/plugins/bootstrap/bootstrap.min.css")}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset("assets1/plugins/fontawesome/css/all.min.css")}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset("assets1/plugins/animate-css/animate.css")}}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{asset("assets1/plugins/slick/slick.css")}}">
    <link rel="stylesheet" href="{{asset("assets1/plugins/slick/slick-theme.css")}}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset("assets1/plugins/colorbox/colorbox.css")}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset("assets1/css/style.css")}}">

</head>
<body>
<div class="body-inner">


    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
        <div class="bg-white">
            <div class="container">
                <div class="logo-area">
                    <div class="row align-items-center">
                        <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                            <a class="d-block" href="index.html">
                                <img loading="lazy" src="{{asset("assets1/images/HSA.gif")}}" alt="Hamid Sougouma Ali">
                            </a>
                        </div><!-- logo end -->

                        <div class="col-lg-9 header-right">
                            <ul class="top-info-box">
                                <li>
                                    <div class="info-box">
                                        <div class="info-box-content">
                                            <p class="info-box-title">Call Us</p>
                                            <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">+{{$users->phone_number}}</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-box">
                                        <div class="info-box-content">
                                            <p class="info-box-title">Email Us</p>
                                            <p class="info-box-subtitle"><a href="mailto:".{{$users->email}}."">{{$users->email}}</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul><!-- Ul end -->
                        </div><!-- header right end -->
                    </div><!-- logo area end -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </div>

        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark p-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbar-collapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav mr-auto" id="nav navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('visitor.allArticle')}}">Articles</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('visitor.homePages')}}">About me</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('visitor.contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->

                <div class="search-block" style="display: none;">
                    <label for="search-field" class="w-100 mb-0">
                        <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
                    </label>
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->
            </div>
            <!--/ Container end -->

        </div>
        <!--/ Navigation end -->
    </header>
    <!--/ Header end -->



    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ts-intro">
                        @yield('main')
                    </div><!-- Intro box end -->
                </div><!-- Col end -->
            </div><!-- Row end -->

        </div><!-- Container end -->
    </section><!-- Feature are end -->


</div>

</body>

<script type="text/javascript">
    var btnContainer = document.getElementById("nav navbar-nav mr-auto");
    var btns = btnContainer.getElementsByClassName("nav-item");
    for(var i = 0; i< btns.length; i++){
        btns[i].addEventListener('click', function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active");
            this.className += " active";
        })
    }
</script>

</html>
