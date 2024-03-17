<!DOCTYPE html>
<html>

<head>
    <title> Add Car |HiCar Rentals </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/P.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/clientlogin.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/w3css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/clientpage.css') }}" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container" style="margin-top: 65px;">
        <div class="col-md-7" style="float: none; margin: 0 auto;">
            <div class="form-area">
                <form role="form" action="/addcar" enctype="multipart/form-data" method="POST">
                    @csrf
                    <br style="clear: both">
                    <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Silahkan Memasukan Detail
                        Mobil. </h3>

                    <div class="form-group">
                        <input type="text" class="form-control" id="car_name" name="car_name"
                            placeholder="Nama Mobil " required autofocus="">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="car_nameplate" name="car_nameplate"
                            placeholder="No Polisi" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="ac_price" name="car_priceday"
                            placeholder="Tarif per hari" required>
                    </div>

                    <div class="form-group">
                        {{-- <input type="text" class="form-control" id="non_ac_price" name="id"
                            placeholder="Clien Username" required> --}}
                        <select name="admin_id" class="form-control" aria-label="Default select example">
                            <option selected hidden>Admin Select</option>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}">{{ $admin->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input name="uploadedimage" type="file">
                    </div>
                    <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Submit
                        for Rental</button>
                </form>
            </div>
        </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
            <div class="form-area" style="padding: 0px 100px 100px 100px;">

                <br style="clear: both">
                <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Cars </h3>

                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th width="20%"> Jenis Mobil</th>
                                <th width="20%"> No Polisi </th>
                                <th width="20%"> Tarif (/hari) </th>
                                <th width="20%"> Client</th>
                                <th width="20%"> Action </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($mobil as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->no_polisi }}</td>
                                    <td>{{ $item->tarifhari }}</td>
                                    <td>{{ $item->Tbl_akun->nama }}</td>
                                    <td>
                                        <a href="/editmobil/{{ $item->id }}"><button class="btn btn-info">Edit</button></a>
                                        <a onclick="return confirm('Apa anda yakin?')" href="/deletee/{{ $item->id }}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/theme.js"></script>

</html>
