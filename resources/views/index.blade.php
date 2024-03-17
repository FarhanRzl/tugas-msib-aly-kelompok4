<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiCar Rentals</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/" style="margin-left: 100px; font-weight: 700; letter-spacing:2px"> 
                    HiCar Rentals </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" style="margin-right: 100px">
                    <li style="font-weight: 700; letter-spacing:2px">
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
                                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" style="font-weight: 700; letter-spacing:2px"
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
                                <a href="/prereturncar" style="font-weight: 700; letter-spacing:2px">Pengembalian</a>
                            </li>
                            <li>
                                <a href="/logout" style="font-weight: 700; letter-spacing:2px"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="/employee" style="font-weight: 700; letter-spacing:2px">Admin</a>
                        </li>
                        <li>
                            <a href="/customer" style="font-weight: 700; letter-spacing:2px">Customer</a>
                        </li>

                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="grid-item" >
                        <h2 class="judul" style="">Semua tentang HiCar!</h2> <br>
                        <p class="text">HiCar adalah sebuah Perusahaan Rental / Sewa Mobil yang berkantor di Kota Surabaya, Jawa Timur. 
                            Kami melayani rental mobil ke berbagai tujuan sesuai keinginan Anda, dengan harga murah dan bersaing 
                            serta kualitas pelayanan terbaik. Kami menggunakan armada mobil keluaran baru dan kondisi yang terawat 
                            untuk memberikan kenyamanan pada perjalanan Anda.
                            <br> <br>
                            HiCar menyuguhkan berbagai jenis kendaraan untuk keperluan rental / sewa mobil di Surabaya 
                            yang siap mengantar perjalanan tugas atau liburan keluarga ke berbagai tujuan baik dalam kota Sidoarjo 
                            dan juga luar kota seperti Malang, Blitar, Banyuwangi, Surabaya, Magetan, Madiun, Tulungagung, 
                            Trenggalek, Bali, Lombok, Yogyakarta, dll.
                            <br> <br></p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink" style="color: aliceblue;">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" class="container-content">
        <h3 class="cont-title" style="margin-left: 30px">DAFTAR MOBIL</h3>
        <br>
        <section class="menu-content">
            @foreach ($mobil as $item)
                
            <a href="/booking/{{ $item->id }}">
                <div class="sub-menu">
                    <img class="card-img-top" src="{{ asset('storage/'. $item->foto_mobil) }}" alt="Card image cap">
                    <h5><b> {{ $item->nama }} </b></h5>
                    <h6> Tarif /hari : {{ $item->tarifhari }} </h6>
                </div>
            </a>
            @endforeach

        </section>

    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
        <section class="section blog" id="blog" >
            <div class="container" >
                <h2 class="h2 section-title" style="text-align: center; margin-top:100px">TESTIMONI CUSTOMER</h2>
                <ul class="blog-list has-scrollbar" style="margin-top: 50px;">
                    <li>
                        <div class="blog-card">
                            <figure class="card-banner">
                                <a href="#">
                                    <img src="{{ asset('../../assets/img/Choky-Sitohang.jpeg') }}" alt="Opening of new offices of the company" loading="lazy"
                                    class="w-100">
                                </a>
                                <a href="#" class="btn card-badge">Antar Jemput</a>
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    <a href="#">Sopir sangat ramah, lihai dalam menyetir dan menguasai medan!</a>
                                </h3>

                                <div class="card-meta">
                                    <div class="comments">
                                        <p>- Cokky Sitohang</p>
                                    </div>

                                    <div class="publish-date">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="2022-01-14">20 Januari 2023</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="blog-card">
                            <figure class="card-banner">
                                <a href="#">
                                    <img src="{{ asset('../../assets/img/Iwan-Fals.jpeg') }}" alt="Opening of new offices of the company" loading="lazy"
                                    class="w-100">
                                </a>
                                <a href="#" class="btn card-badge">Sewa Sopir</a>
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    <a href="#">Supir yang dimilki oleh HiCar sangat bagus dalam menyetir!</a>
                                </h3>
                                <div class="card-meta">
                                    <div class="comments">
                                        <p>- Iwan Fals</p>
                                    </div>
                                    <div class="publish-date">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="2022-01-14">01 Mei 2023</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="blog-card">
                            <figure class="card-banner">
                                <a href="#">
                                    <img src="{{ asset('../../assets/img/Ivan-Gunawan.jpeg') }}" alt="Opening of new offices of the company" loading="lazy"
                                    class="w-100">
                                </a>
                                <a href="#" class="btn card-badge">Tour Guide</a>
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">
                                    <a href="#">Pelayanannya enak banget, sampai tertidur di dalam mobil!</a>
                                </h3>
                                <div class="card-meta">
                                    <div class="comments">
                                        <p>- Ivan Gunawan</p>
                                    </div>
                                    <div class="publish-date">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="2022-01-14">30 April 2023</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

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
                <div class="footer-bottom" style="margin-top: 50px;"</div>
            </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
