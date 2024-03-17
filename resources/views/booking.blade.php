<!DOCTYPE html>
<html>

<title>Book Car </title>

<head>
    <title> Booking | HiCar Rentals </title>
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
    <script type="text/javascript" src="assets/ajs/angular.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
</head>

<body>

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
                                <a href="/prereturncar">Pengembalian</a>
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

                    @endif

                </ul>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top: 65px;">
        <div class="col-md-7" style="float: none; margin: 0 auto;">
            <div class="form-area">
                <form role="form" action="/booking" method="POST">
                    @csrf
                    <br style="clear: both">
                    <br>
                    @if (session()->has('gagal'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('gagal') }}
                    </div>
                    @endif
                    <!-- <div class="form-group"> -->
                    <h5> Mobil : {{ $mobil->nama }}</h5>
                    <!-- </div> -->

                    <!-- <div class="form-group"> -->
                    <h5> No Polisi : {{ $mobil->no_polisi }}</h5>
                    <!-- </div>      -->
                    <!-- <div class="form-group"> -->
                    <label>
                        <h5>Tanggal Sewa :</h5>
                    </label>
                    <input type="date" name="rent_start_date" required="">
                    <br>
                    <label>
                        <h5>Tanggal Pengembalian :</h5>
                    </label>
                    <input type="date" name="rent_end_date" required="">
                    <!-- </div>      -->

                        <h5> Tipe Sewa : &nbsp;
                            <input type="text" hidden name="idmobil" value="{{ $mobil->id }}">
                            <input type="radio" name="harga" value="{{ $mobil->tarifhari }}"><b> per Hari</b>

                            <br><br>
                            <!-- <form class="form-group"> -->
                            Pilih Driver : &nbsp;
                            <select name="driverid" ng-model="myVar1" onchange="showDriver(event)">
                                <option selected hidden>Pilih Driver</option>
                                @foreach ($driver as $item)
                                    
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <!-- </form> -->
                            <div class="d-none" id="driverinfo" >
                                <div>
                                    <h5 id="namaDriver">Nama Driver :&nbsp;</h5>
                                    <p id="jenisKelamin">Jenis Kelamin :&nbsp; </p>
                                    <p id="noTelpon">No Telp :&nbsp; </p>
                                </div>
                            </div>
                            <input type="hidden" name="hidden_carid" value="">


                            <input type="submit"name="submit" value="Rent Now" class="btn btn-warning pull-right">
                </form>

            </div>
            <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
                <h6><strong>Note:</strong> You will be charged with extra <span class="text-danger">Rs. 500</span> for
                    each day after the due date ends.</h6>
            </div>
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
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script>
    function showDriver(event){
        const select = $(event.target);
        const driverinfo = $("#driverinfo");
        $.ajax({
            url: "/get-driver",
            method: "get",
            data: {id: select.val()},
            success: function(data){
                console.log(data.driver);
                $("#namaDriver").text("Nama Driver : "+data.driver.nama);
                $("#jenisKelamin").text("Jenis Kelamin : "+data.driver.jenis_kelamin);
                $("#noTelpon").text("No Telepon : "+data.driver.no_telp);
                driverinfo.removeClass("d-none");
            }
        })
    }
</script>
</html>
