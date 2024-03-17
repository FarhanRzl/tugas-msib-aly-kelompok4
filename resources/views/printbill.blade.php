<!DOCTYPE html>
<html>

<head>
    <title> Booking Confirmed |HiCar Rentals </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/clientlogin.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/w3css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/clientpage.css') }}" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/bookingconfirm.css') }}" />
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/">
                HiCar Rentals </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    @if (session()->exists('role'))
                        @if (session()->get('role') == 'admin')
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Selamat Datang
                                    {{ auth()->user()->nama }} </a>
                            </li>
                            <li>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false"><span
                                                class="glyphicon glyphicon-user"></span> Control Panel <span
                                                class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="/addcar">Tambah Mobil</a></li>
                                            <li> <a href="/adddriver">Tambah Driver</a></li>
                                            <li> <a href="/clientview">Laporan</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        @else
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Selamat Datang
                                    {{ auth()->user()->nama }} </a>
                            </li>
                            <li>
                                <ul class="nav navbar-nav">
                                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false"> Garasi <span
                                                class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li> <a href="/prereturncar">Pengembalian</a></li>
                                            <li> <a href="/mybookings">Riwayat</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="/employee">Admin</a>
                        </li>
                        <li>
                            <a href="/customer">Customer</a>
                        </li>
                        <li>
                            <a href="/faq">Hubungi Kami</a>
                        </li>

                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Car
                Returned</h1>
        </div>
    </div>
    <br>

    <h2 class="text-center"> Thank you for visiting Car Rentals! We wish you have a safe ride. </h2>

    <h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"></span> </h3>


    <div class="container">
        <h5 class="text-center">Please read the following information about your order.</h5>
        <div class="box">
            <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                <h3 style="color: orange;">Your booking has been received and placed into out order processing system.
                </h3>
                <br>
                <h4>Please make a note of your <strong>order number</strong> now and keep in the event you need to
                    communicate with us about your order.</h4>
                <br>
                <h3 style="color: orange;">Invoice</h3>
                <br>
            </div>
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
                <h4> <strong>Vehicle Name: </h4>
                <br>
                <h4> <strong>Vehicle Number:</strong> </h4>
                <br>
                <h4> <strong>Fare:&nbsp;</strong> Rs. </h4>
                <br>
                <h4> <strong>Booking Date: </strong> </h4>
                <br>
                <h4> <strong>Start Date: </strong> </h4>
                <br>
                <h4> <strong>Rent End Date: </strong> </h4>
                <br>
                <h4> <strong>Car Return Date: </strong> </h4>
                <br>
                <h4> <strong>Number of days:</strong> day(s)</h4>
                <h4> <strong>Distance Travelled:</strong> km(s)</h4>
                <br>

                <h4> <strong>Total Fine:</strong> <label class="text-danger"> Rs./- </label> for extra days.</h4>
                <br>
                <h4> <strong>Total Amount: </strong> Rs. /- </h4>
                <br>
            </div>
        </div>
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6>Warning! <strong>Do not reload this page</strong> or the above display will be lost. If you want a
                hardcopy of this page, please print it now.</h6>
        </div>
    </div>

</body>
<footer class="footer">
    <div class="container">

            <div class="footer-top">  
                <div class="footer-brand">
                <a href="/index" class="logoText" style="letter-spacing: 3px;">
                    <h1>HiCar</h1>
                </a>
        
                <p class="footer-text">
                    Sebuah solusi Transportasi dalam perjalan Anda, memenuhi berbagai
                    kebutuhan penyewaan Mobil, pelayanan berkualitas dengan harga terjangkau!
                </p>
                </div>
    
                </ul>    
                <ul class="footer-list">
                    <li>
                    <p class="footer-list-title">Layanan</p>
                    </li>
                    <li>
                    <a href="#" class="footer-link">Sewa Mobil</a>
                    </li>
                    <li>
                    <a href="#" class="footer-link">Sewa Sopir</a>
                    </li>
                    <li>
                    <a href="#" class="footer-link">Antar Jemput</a>
                    </li>
                    <li>
                    <a href="#" class="footer-link">Tour Guide</a>
                    </li>
                </ul>
    
                <ul class="footer-kantor">
                    <li>
                    <p class="footer-list-title">Kantor Pusat</p>
                    </li>  
                    <li>
                    <p class="footer-text">Mulyorejo, Kec. Mulyorejo</p>
                    </li>
                    <li>
                    <p class="footer-text">Surabaya, Jawa Timur 60115</p>
                    </li>
                    <li>
                    <p class="footer-text">(031) 7417777 , (031) 72111084</p>
                    </li>
                    <li>
                    <a href="https://wa.me/085155118413" class="footer-link">085155118413</a>
                    </li>
                </ul>
    
                <ul class="footer-map" style=" margin-right: 50px">
                    <li>
                    <p class="footer-list-title">Kunjungi Kami</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.788344979992!2d112.78347416474139!3d-7.26491172202844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f988394da1e3%3A0x6dab5a12fcecbefa!2sFakultas%20Sains%20dan%20Teknologi%20Universitas%20Airlangga!5e0!3m2!1sid!2sid!4v1686242746408!5m2!1sid!2sid" width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>            
            </div>

        <div class="footer-bottom" style="margin-top: 50px">

        <ul class="social-list">

            <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            </li>

            <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            </li>

            <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            </li>

            <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a>
            </li>

            <li>
            <a href="#" class="social-link">
                <ion-icon name="logo-skype"></ion-icon>
            </a>
            </li>

            <li>
            <a href="#" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
            </a>
            </li>

        </ul>

        <p class="copyright">
            &copy; 2023 <a href="#">Pwebprak</a>. All Rights Reserved
        </p>
        
        </div>
        </div>
</footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/theme.js"></script>
</html>
