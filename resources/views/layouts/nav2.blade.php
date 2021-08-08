<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="{{asset('melody/images/logo.svg')}}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('melody/images/logo-mini.svg')}}"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acercade">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>
            </ul>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            @yield('create')
            <li class="nav-item nav-profile dropdown">

                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{asset('melody/images/faces/face16.jpg')}}" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                    aria-labelledby="profileDropdown">
                     <a class="dropdown-item">
                        <i class="fas fa-cog text-primary"></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"
                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt text-primary"></i>
                        Cerrar Sesion
                    </a>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @yield('options')
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="fas fa-bars"></span>
        </button>
    </div>
</nav>
