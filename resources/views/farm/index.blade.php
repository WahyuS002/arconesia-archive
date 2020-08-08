@extends('layouts.board')

@section('css')
    <!-- Sweet Alert -->
    <link href="{{ asset('plugins/sweet-alert2/sweetalert2.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Starter</h4>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings mr-1"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
</div> 
<!-- end page title -->

<div class="row">

    @foreach ($farms as $farm)
    {{-- start col --}}
        <div class="col-md-6 col-xl-3">        
            <div class="card m-b-30">
                <div id="chaining-alert{{ $farm->id }}" class="btn btn-primary waves-effect waves-light">
                    <img class="card-img-top img-fluid" src="{{ asset('zinzer/assets/images/small/img-2.jpg') }}" alt="Card image cap">
                </div>
                {{-- <img class="card-img-top img-fluid" src="{{ asset('zinzer/assets/images/small/img-2.jpg') }}" alt="Card image cap"> --}}
                <div class="card-body">
                    <h4 class="card-title font-16 mt-0">{{ $farm->nama_lahan }}</h4>
                    <p class="card-text">{{ $farm->deskripsi }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $farm->luas }}</li>
                    <li class="list-group-item">{{ $farm->komoditas }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    <!-- end col -->  
    @endforeach
    
</div>
@endsection

@section('js')
    <!-- Sweet-Alert  -->
    <script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('zinzer/assets/pages/sweet-alert.init.js') }}"></script>      
@endsection