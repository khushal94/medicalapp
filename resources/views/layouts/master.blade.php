<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Digit93Team">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('public/img/favicon.png') }}">
    <title>UdaipurMed - @yield('title') </title>
    <!-- Custom styles for this template-->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    @yield('header')
</head>

<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-start" href="{{ route('home') }}">
                    <div class="sidebar-brand-icon ">
                        <img class="img-profile" src="https://udaipurmed.in/images/logo.png">
                    </div>
                    <!-- <div class="sidebar-brand-text mx-3">UdaipurMed</div> -->
                </a>
                {{-- <hr class="sidebar-divider my-0"> --}}
                <!-- Divider -->
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>{{ __('sentence.Dashboard') }}</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Patients') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePatient"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Patients') }}</span>
                    </a>
                    <div id="collapsePatient" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('patient.create') }}">{{ __('sentence.New Patient') }}</a>
                            <a class="collapse-item"
                                href="{{ route('patient.all') }}">{{ __('sentence.All Patients') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Doctor') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDoctor"
                        aria-expanded="true" aria-controls="collapseDoctor">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Doctor') }}</span>
                    </a>
                    <div id="collapseDoctor" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('doctor.create') }}">{{ __('sentence.New Doctor') }}</a>
                            <a class="collapse-item"
                                href="{{ route('doctor.all') }}">{{ __('sentence.All Doctors') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Nurse') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNurse"
                        aria-expanded="true" aria-controls="collapseNurse">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Nurse') }}</span>
                    </a>
                    <div id="collapseNurse" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('nurse.create') }}">{{ __('sentence.New Nurse') }}</a>
                            <a class="collapse-item" href="{{ route('nurse.all') }}">{{ __('sentence.All Nurses') }}</a>
                            <a class="nav-link collapse-item extradropdown collapsed" href="#" data-toggle="collapse"
                                data-target="#collapseNurseBookings" aria-expanded="true"
                                aria-controls="collapseNurseBookings">{{ __('sentence.Booking') }}</a>
                            <!-- Nav Item - Pages Collapse Menu -->
                            <div id="collapseNurseBookings" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#collapseNurse">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item"
                                        href="{{ route('nursebooking.create') }}">{{ __('sentence.New Nurse Booking') }}</a>
                                    <a class="collapse-item"
                                        href="{{ route('nursebooking.all') }}">{{ __('sentence.All Nurse Bookings') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Speciality') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSpeciality"
                        aria-expanded="true" aria-controls="collapseSpeciality">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Speciality') }}</span>
                    </a>
                    <div id="collapseSpeciality" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('speciality.create') }}">{{ __('sentence.New Speciality') }}</a>
                            <a class="collapse-item"
                                href="{{ route('speciality.all') }}">{{ __('sentence.All Speciality') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Rating') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRating"
                        aria-expanded="true" aria-controls="collapseRating">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Rating') }}</span>
                    </a>
                    <div id="collapseRating" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('rating.all') }}">{{ __('sentence.All Ratings') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Package') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePackage"
                        aria-expanded="true" aria-controls="collapsePackage">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Package') }}</span>
                    </a>
                    <div id="collapsePackage" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('package.create') }}">{{ __('sentence.New Package') }}</a>
                            <a class="collapse-item"
                                href="{{ route('package.all') }}">{{ __('sentence.All Packages') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Order') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder"
                        aria-expanded="true" aria-controls="collapseOrder">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Order') }}</span>
                    </a>
                    <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('order.create') }}">{{ __('sentence.New Order') }}</a>
                            <a class="collapse-item" href="{{ route('order.all') }}">{{ __('sentence.All Orders') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Appointment') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAppointment"
                        aria-expanded="true" aria-controls="collapseAppointment">
                        <i class="fas fa-fw fa-calendar-plus"></i>
                        <span>{{ __('sentence.Appointment') }}</span>
                    </a>
                    <div id="collapseAppointment" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('appointment.create') }}">{{ __('sentence.New Appointment') }}</a>
                            <a class="collapse-item"
                                href="{{ route('appointment.all') }}">{{ __('sentence.All Appointments') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Coupon') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCoupon"
                        aria-expanded="true" aria-controls="collapseCoupon">
                        <i class="fas fa-fw fa-calendar-plus"></i>
                        <span>{{ __('sentence.Coupon') }}</span>
                    </a>
                    <div id="collapseCoupon" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('coupon.create') }}">{{ __('sentence.New Coupon') }}</a>
                            <a class="collapse-item"
                                href="{{ route('coupon.all') }}">{{ __('sentence.All Coupons') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Prescriptions') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-prescription"></i>
                        <span>{{ __('sentence.Prescriptions') }}</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('prescription.create') }}">{{ __('sentence.New Prescription') }}</a>
                            <a class="collapse-item"
                                href="{{ route('prescription.all') }}">{{ __('sentence.All Prescriptions') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-syringe"></i>
                        <span>{{ __('sentence.Drugs') }}</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('drug.create') }}">{{ __('sentence.Add Drug') }}</a>
                            <a class="collapse-item" href="{{ route('drug.all') }}">{{ __('sentence.All Drugs') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTests"
                        aria-expanded="true" aria-controls="collapseTests">
                        <i class="fas fa-fw fa-heartbeat"></i>
                        <span>{{ __('sentence.Tests') }}</span>
                    </a>
                    <div id="collapseTests" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('test.create') }}">{{ __('sentence.Add Test') }}</a>
                            <a class="collapse-item" href="{{ route('test.all') }}">{{ __('sentence.All Tests') }}</a>
                            <a class="nav-link collapse-item extradropdown collapsed" href="#" data-toggle="collapse"
                                data-target="#collapseLabBookings" aria-expanded="true"
                                aria-controls="collapseLabBookings">{{ __('sentence.Lab Booking') }}</a>
                            <!-- Nav Item - Pages Collapse Menu -->
                            <div id="collapseLabBookings" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#collapseTests">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item"
                                        href="{{ route('labbooking.all') }}">{{ __('sentence.All Lab Bookings') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- <hr class="sidebar-divider">
          
                <div class="sidebar-heading">
                    {{ __('sentence.Payments') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Payments') }}</span>
                    </a>
                    <div id="collapsePayment" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('payment.all') }}">{{ __('sentence.All Payments') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Ambulance Bookings') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAmbulance"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-users"></i>
                        <span>{{ __('sentence.Ambulance Bookings') }}</span>
                    </a>
                    <div id="collapseAmbulance" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('ambulance.all') }}">{{ __('sentence.All Ambulance Bookings') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Billing') }}
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-dollar-sign"></i>
                        <span>{{ __('sentence.Billing') }}</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('billing.create') }}">{{ __('sentence.Create Invoice') }}</a>
                            <a class="collapse-item"
                                href="{{ route('billing.all') }}">{{ __('sentence.Billing List') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    {{ __('sentence.Settings') }}
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseSettings"
                        aria-expanded="true" aria-controls="collapseSettings">
                        <i class="fas fa-fw fa-cogs"></i>
                        <span>{{ __('sentence.Settings') }}</span>
                    </a>
                    <div id="collapseSettings" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('settings.edit') }}">{{ __('sentence.Settings') }}</a>
                            <a class="collapse-item"
                                href="{{ route('prescription_settings.edit') }}">{{ __('sentence.Prescription Settings') }}</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span
                                        class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                    <img class="img-profile" src="{{ asset('public/img/favicon.png') }}">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('settings.edit') }}">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('sentence.Settings') }}
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('sentence.Logout') }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <div class="main-body">
                        <div class="container-fluid">
                            @yield('content')
                            <!-- Page Heading -->
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white shadow">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Created by <a> I-Node</a> Team 2021 <i class="fa fa-heart"
                                    style="color: red;"></i></span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('sentence.Ready to Leave') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">{{ __('sentence.Ready to Leave Msg') }}</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button"
                        data-dismiss="modal">{{ __('sentence.Cancel') }}</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">{{ __('sentence.Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('public/js/app.js') }}"></script>
    @yield('footer')
</body>

</html>