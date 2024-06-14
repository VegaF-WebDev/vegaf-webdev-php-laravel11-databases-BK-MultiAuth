<?php
//   include_once("./services/dbconfig.php");
//   $db = new dbconfig();
// $db = new bukaKoneksi();
// $db->bacaTabelAll("$namatabel");
// $dtclient = $db->bacaTabelAll("$namatabel");
// // include("./services/user.php")
?>

<?php

?>

<?php
// $dtclient = $db->bacaTabelAll("clients");
// while($row = mysqli_fetch_row($dtclient))
// {
//   echo '".$row[0]."''".$row[1]."';
// }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEC-2023-VF</title>
    <link href="{{ asset('wec-23/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('wec-23/bootstrap/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('wec-23/images/icon/favicon-wearnes.ico') }}" type="image/x-icon">
    <link href="{{ asset('wec-23/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('wec-23/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('wec-23/fontawesome/css/solid.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('wec-23/css/style-main.css') }}">
</head>

<body>
    {{-- <header id="">
			<!-- JUDUL1 -->
			<div class="container-sm" style="margin-top:100px">
				<h1 id="judul1">WEARNES EDUCATION CENTER</h1>
			</div>
			<!-- JUDUL2 -->
			<div class="container-sm" style="margin-top:10px">
				<h2 id="judul2">TEKNIK INFORMATIKA, ANDROID, & GAME DEVELOPER</h2>
			</div>
			<!-- JUDUL3 -->
			<div class="container-sm" style="margin-top:10px">
				<h3 id="judul3">Hello, WEC-2023!</h3>
			</div>
		</header> --}}
    <!-- NAVBAR1 -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#04943c;">
        <div class="container-fluid">
            <ul class="nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}"><i class="fa-solid fa-house"></i> Home </a>
                </li>
            </ul>
            <button class="navbar-toggler bg-dark-subtle" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                    <li class="navbar-nav me-auto">
                        <a class="nav-link text-white" href="{{ url('/home') }}">Data Belanja</a>
                    </li>
                @else
                    <li class="navbar-nav ms-auto">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login <i
                                class="fa-solid fa-arrow-right-to-bracket"></i></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                        @endif
                    @endauth
                </li>
            </div>
        </div>
    </nav>
    <!-- NAVBAR2 -->
    <nav class="navbar navbar-expand-sm fixed-bottom" style="background-color: #04943c;">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="https://www.wearneseducation.com/">
                <img src="{{ asset('wec-23/images/logo/logo-wearnes.png') }}" alt="Wearnes Logo"
                    style="width: 48px;height: 36px;">
            </a>
            <a class="navbar-brand ms-auto text-white">2023-2024 VF-WebDev.</a>
        </div>
    </nav>
    <!-- JUMBOTRON1 -->
    <section id="Jumbotron1">
        {{-- <div class="container bg-transparent text-black-50 rounded-5">
            <div class="row position-absolute top-50 start-50 translate-middle">
                <div class="col-sm-auto bg-transparent text-white text-center mb-auto mt-auto">
                    <img src="{{ asset('wec-23/images/logo/Logo DTKS.png') }}" alt="Wearnes Logo"
                        style="max-width: 25%; height:auto;">
                </div>
                <div class="col-sm-6 bg-transparent p-3">
                    <h1 id="title-shopee">BANSOS KEMENSOS</h1>
                    <p id="intro-shopee" class="mt-5 mb-5">Nama saya Vega Febriliananda, dari Kampus Wearnes Education
                        Center, Kelas/Jurusan IK2, dan ini adalah Database Bansos Kemensos saya buat, Terimakasih.</p>
                </div>
            </div>
        </div> --}}
        <div class="container ">
            <div class="row position-absolute top-50 start-50 translate-middle">
                <div class="col mb-auto mt-auto ms-3 me-3">
                    <img src="{{ asset('wec-23/images/logo/Logo DTKS.png') }}" alt="Wearnes Logo" style="max-width: 100%; height:auto;">
                </div>
                <div class="col text-center mb-3 mt-3 ms-3 me-3">
                    <h3 id="title-shopee" class="mt-3 mb-3">BANSOS KEMENSOS</h3>
                    <p id="intro-shopee" class="mt-3 mb-3">Nama saya Vega Febriliananda, dari Kampus Wearnes Education
                        Center, Kelas/Jurusan IK2, dan ini adalah Database Bansos Kemensos saya buat, Terimakasih.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('wec-23/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
