@extends('adminlte::page_manager')
@section('title', 'Home')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-orange" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard Aplikasi</a></li>
        </ol>
    </nav>
    <h4 style="font-weight: bold; color:white;">Dashboard Aplikasi Manager</h4>
@endsection

@section('content')
    <div class="container">
        <div class="col text-justify card-group">
            <div class="card">
                <img src="{{ asset('wec-23/images/logo/kemensos.png') }}" class="card-img-top" alt="Shopee Icon" style="max-width:50%; height:auto; margin-left:auto; margin-right:auto; margin-top:25px;">
                <div class="card-body">
                    <h3 class="col card-title font-weight-bold text-orange text-center mt-3 mb-3" style="font-size: 25px;">Data Sudah Bansos</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="col card-footer text-center">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        {{-- <a href="{{ url('/data_pm') }}" class="btn btn-danger">Left</a> --}}
                        <a href="{{ url('/penerima_data_pm') }}" class="btn btn-warning">Middle</a>
                        {{-- <a href="{{ url('/data_pm') }}" class="btn btn-success">Right</a> --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('wec-23/images/logo/kemensos.png') }}" class="card-img-top" alt="Shopee Icon" style="max-width:50%; height:auto; margin-left:auto; margin-right:auto; margin-top:25px;">
                <div class="card-body">
                    <h3 class="col card-title font-weight-bold text-orange text-center mt-3 mb-3" style="font-size: 25px;">Data Belum Bansos</h3>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="col card-footer text-center">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        {{-- <a href="{{ url('/data_pm') }}" class="btn btn-danger">Left</a> --}}
                        <a href="{{ url('/pemberi_data_pm') }}" class="btn btn-warning">Middle</a>
                        {{-- <a href="{{ url('/data_pm') }}" class="btn btn-success">Right</a> --}}
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('wec-23/images/logo/pngaaa.com-1257229.png') }}" class="card-img-top" alt="Shopee Icon" style="max-width:50%; height:auto; margin-left:auto; margin-right:auto; margin-top:25px;">
                <div class="card-body">
                    <h3 class="col card-title font-weight-bold text-orange text-center mt-3 mb-3" style="font-size: 25px;">Data User</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="col card-footer text-center">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        {{-- <a href="{{ url('/data_pm') }}" class="btn btn-danger">Left</a> --}}
                        <a href="{{ url('/user') }}" class="btn btn-warning">Middle</a>
                        {{-- <a href="{{ url('/data_pm') }}" class="btn btn-success">Right</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
