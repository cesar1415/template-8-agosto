<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('melody/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.addons.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=" stylesheet" href="{{asset('melody/css/style.css')}}">
    @yield('styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
       @include('layouts.nav2')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close fa fa-times"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            @yield('preference')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('layouts._nav')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Todos los derechos reservados.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a
                                href="https://www.youtube.com/channel/UCMWSlUcDJS00-5pmicciZ_w">Texvn Online</a> </> <i
                                class="far fa-heart text-danger"></i></span>
                    </div>
                </footer>
            </div>

            <!-- main-panel ends -->
        </div>

    </div>
    <script src="{{asset('melody/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{asset('melody/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{asset('melody/js/off-canvas.js') }}"></script>
    <script src="{{asset('melody/js/hoverable-collapse.js') }}"></script>
    <script src="{{asset('melody/js/misc.js') }}"></script>
    <script src={{asset('melody/js/settings.js') }}""></script>
    <script src="{{asset('melody/js/todolist.js') }}"></script>


    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->








    <!-- endinject -->
    <!-- Custom js for this page-->

    <link rel="stylesheet" href="{{asset('melody/js/dashboard.js')}}">
    <!-- End custom js for this page-->
    @yield('scripts')
</body>

</html>
