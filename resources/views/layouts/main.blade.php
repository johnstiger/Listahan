<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">
    @yield('css')
    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

    <!-- Main Navigation -->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">

                <!-- Logo -->
                <li class="logo-lg waves-effect py-5">
                    <div class="text-center">
                        <a href="#" class="pl-0"><img src="{{asset('assets/img/logo.png')}}" height="100%"></a>
                    </div>
                </li>

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="w-fa fas fa-tachometer-alt"></i>Dashboards<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="{{route('moneyLending')}}" class="waves-effect">Money Lending</a>
                                    </li>
                                    <li>
                                        <a href="{{route('products')}}" class="waves-effect">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{route('moneyManagement')}}" class="waves-effect">Money Management</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Simple link -->
                        <li>
                            <a href="{{route('customers')}}" class="collapsible-header waves-effect" ><i
                  class="w-fa far fa-address-book"></i>Customers</a>
                        </li>
                        <li>
                            <a href="../modals/modals.html" class="collapsible-header waves-effect"><i
                  class="w-fa fas fa-money-bill-alt"></i>Money Lending</a>
                        </li>
                        <li>
                            <a href="../charts/charts.html" class="collapsible-header waves-effect"><i
                  class="w-fa fas fa-briefcase"></i>Products</a>
                        </li>
                        <li>
                            <a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i
                  class="w-fa fas fa-hand-holding-usd"></i>Money Management</a>
                        </li>
                        <li>
                            <a href="../sections/sections.html" class="collapsible-header waves-effect"><i
                  class="w-fa fas fa-calendar-times"></i>Due Date Pay</a>
                        </li>

                    </ul>
                </li>
                <!-- Side navigation links -->

            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!-- Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
            </div>

            <!-- Breadcrumb -->
            <div class="breadcrumb-dn mr-auto">
                <p>@yield('title')</p>
            </div>

            <div class="d-flex change-mode">

            @yield('changeMode')


                <!-- Navbar links -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">

                    <!-- Dropdown -->
                    <li class="nav-item dropdown notifications-nav">
                        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="badge red">3</span> <i class="fas fa-bell"></i>
                            <span class="d-none d-md-inline-block">Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                                <span>New order received</span>
                                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                                <span>New order received</span>
                                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                                <span>Your campaign is about to end</span>
                                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
                class="clearfix d-none d-sm-inline-block">Contact</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">Log Out</a>
                            <a class="dropdown-item" href="{{route('myProfile')}}">My account</a>
                        </div>
                    </li>
                </ul>
        </nav>
        <!-- Navbar -->
        </div>
    </header>
    <!-- Main Navigation -->
    @yield('main')
 <!-- Footer -->
 <footer class="page-footer pt-0 mt-5 mdb-color lighten-4">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> ListahanSystem.com</a>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
<!-- Initializations -->
@yield('scripts')
</body>

</html>
