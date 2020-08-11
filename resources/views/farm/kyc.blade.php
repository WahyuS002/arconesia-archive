@extends('layouts.board')

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

<div class="row">
    <div class="col-xl-8">
        <div class="card m-b-30">
            <div class="card-body">               

                <div class="row">
                    <a href="{{ route('kyc.about') }}">
                        <div class="col">Informasi Pribadi</div>
                    </a>
                    <a href="{{ route('kyc.bank') }}">
                        <div class="col">Pendaftaran Akun Bank</div>
                    </a>
                    <a href="{{ route('kyc.identity') }}">
                        <div class="col">Verifikasi Identitas</div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
  
    
@endsection