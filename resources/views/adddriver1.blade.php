<html>

<head>
    <title> Add Driver | HiCar Rentals </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png.png') }}">
</head>
<link rel="stylesheet" href="{{ asset('assets/css/clientlogin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/manager_registered_success.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<body>

    <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

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
                    <li>
                        <a href="/employee">Admin</a>
                    </li>
                    <li>
                        <a href="/customer">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron" style="text-align: center;">
            <h2> Berhasil ! </h2>
            <h1>Anda Berhasil Menambahkan Daftar Driver.</h1>
            <p>Cek Daftar <a href="/adddriver">Disini</a></p>
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
</footer>>

</html>
