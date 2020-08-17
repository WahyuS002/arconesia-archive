@extends('layouts.board')

@section('css')
<link href="{{ asset('zinzer/assets/css/main.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Tingkatkan Verifikasi</h4>
                </div>                
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
</div> 
<!-- end page title -->

<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 text-center">
                <a href="{{ route('kyc.about') }}">
                    <div class="card m-b-30 p-2">
                        <!-- <i class="dripicons-cross mr-1 text-right" style="font-size: 2em; color: red"></i> -->
                        <i class="dripicons-checkmark mr-1 text-right"
                            style="font-size: 2em; color: green"></i>
                        <div class="card-body">
                            <i class="dripicons-mail mr-1" style="font-size: 3em;"></i>
                            <h3 class="mt-0 header-title"> INFORMASI PRIBADI </h3>
                            <!-- <p class="text-muted m-b-30">belum</p> -->
                            <p class="text-muted m-b-30">selesai</p>
                        </div>
                    </div>
                </a>
            </div><!-- end col -->
            <div class="col-xl-4 text-center">
                <a href="{{ route('kyc.bank') }}">
                    <div class="card m-b-30 p-2">
                        <!-- <i class="dripicons-cross mr-1 text-right" style="font-size: 2em; color: red"></i> -->
                        <i class="dripicons-checkmark mr-1 text-right"
                            style="font-size: 2em; color: green"></i>
                        <div class="card-body">
                            <i class="dripicons-device-tablet mr-1" style="font-size: 3em;"></i>
                            <h3 class="mt-0 header-title"> PENDAFTARAN AKUN BANK </h3>
                            <!-- <p class="text-muted m-b-30">belum</p> -->
                            <p class="text-muted m-b-30">selesai</p>
                        </div>
                    </div>
                </a>
            </div> <!-- end col -->
            <div class="col-xl-4 text-center">
                <a href="{{ route('kyc.identity') }}">
                    <div class="card m-b-30 p-2">
                        <i class="dripicons-cross mr-1 text-right"
                            style="font-size: 2em; color: red"></i>
                        <!-- <i class="dripicons-checkmark mr-1 text-right"
                        style="font-size: 2em; color: green"></i> -->
                        <div class="card-body">
                            <i class="dripicons-lock mr-1" style="font-size: 3em;"></i>
                            <h3 class="mt-0 header-title"> VERIFIKASI IDENTITAS </h3>
                            <p class="text-muted m-b-30">unlock Deposit Crypto</p>
                            <!-- <p class="text-muted m-b-30">selesai</p>  -->
                        </div>
                    </div>
                </a>
            </div> <!-- end col -->
        </div>
    </div>
</div>
  
    
@endsection