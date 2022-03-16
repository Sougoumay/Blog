<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$users->nom}} {{$users->first_name}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.base.css")}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset("assets/vendors/jvectormap/jquery-jvectormap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/owl-carousel-2/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/owl-carousel-2/owl.theme.default.min.css")}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}" />
    <!-- include libraries(jQuery, bootstrap)
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     include summernote css/js
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    <!-- SummerNote CSS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{asset('/uploads/profile').'/'.$users->profile}}" alt="HAmid">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ $users->name}}{{ $users->first_name}}</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('homePage')}}">
                    <span class="menu-title">HomePage</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <span class="menu-title">
                        Articles
                      </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route("create_article")}}">Create Articles</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route("allArticle")}}">View Articles</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route("allComment")}}">View Comments</a></li>

                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">User Data</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('getAddAcademicBackgroundForm')}}"> Add Schhol Career </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('getAddLanguageForm')}}"> Add New Language </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('getAddHobbyForm')}}"> Add New Hobby </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('getAddSoftwareForm')}}"> Add New Software </a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset("assets/images/logo-mini.svg")}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">
                        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                            <input type="text" class="form-control" placeholder="Search products">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">


                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="{{asset('/uploads/profile').'/'.$users->profile}}" alt="Hamid">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ $users->name}} {{ $users->first_name }}</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <div class="preview-item-content">
                                <p class="p-3 mb-0 text-center">
                                    <a class="nav-link" href="{{route('admin.settings')}}">Settings</a>
                                </p>
                            </div>
                            <div class="preview-item-content">
                                <form class="forms-sample text-center"  method="post" action="{{route('logout')}}">
                                    @csrf
                                    @if($errors->any())
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li class="alert-danger">{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <button type="submit" class="btn btn-link text-white">Log out</button>
                                </form>

                            </div>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        @yield('main')
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset("assets/vendors/js/vendor.bundle.base.js")}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset("assets/vendors/chart.js/Chart.min.js")}}"></script>
<script src="{{asset("assets/vendors/progressbar.js/progressbar.min.js")}}"></script>
<script src="{{asset("assets/vendors/jvectormap/jquery-jvectormap.min.js")}}"></script>
<script src="{{asset("assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
<script src="{{asset("assets/vendors/owl-carousel-2/owl.carousel.min.js")}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset("assets/js/off-canvas.js")}}"></script>
<script src="{{asset("assets/js/hoverable-collapse.js")}}"></script>
<script src="{{asset("assets/js/misc.js")}}"></script>
<script src="{{asset("assets/js/settings.js")}}"></script>
<script src="{{asset("assets/js/todolist.js")}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset("assets/js/dashboard.js")}}"></script>
<!-- End custom js for this page -->

<!--<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script> -->
<!-- SummerNote JS LINK-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $("#my_summernote").summernote();
        $('.dropdown-toggle').dropdown();
    });
</script>
</body>
</html>
