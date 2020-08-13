@extends('layouts.board')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Tabs & Accordions</h4>
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
    <div class="col-xl-6">
        <div class="card m-b-30">
            <div class="card-body">

                <div class="justify-content-between row m-auto">
                    <h4 class="mt-0 header-title">Default Tabs</h4>
                    <a style="color:white;" type="button" id="tombol-verifikasi" class="btn btn-sm btn-primary" onclick="alert(event)" href="{{ route('user.verify', $farmer->user_id) }}">Verifikasi</a>
                </div>
                <p class="text-muted m-b-30 mt-2">Use the tab JavaScript plugin—include
                    it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
                    file—to extend our navigational tabs and pills to create tabbable panes
                    of local content, even via dropdown menus.</p>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                            <span class="d-none d-md-block">Home</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                            <span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                            <span class="d-none d-md-block">Messages</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="home" role="tabpanel">
                        <p class="mb-0">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{ $farmer->nama }}"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $farmer->tanggal_lahir }}">
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" value="{{ $farmer->provinsi }}"/>
                            </div>
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota" value="{{ $farmer->kota }}"/>
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" class="form-control" name="nope" value="{{ $farmer->nope }}"/>
                            </div>
                            <div class="form-group">
                                <label>No. NIK</label>
                                <input type="text" class="form-control" name="nik" value="{{ $farmer->nik }}"/>
                            </div>
                            <div class="form-group">
                                <label>No. NPWP</label>
                                <input type="text" class="form-control" name="npwp" value="{{ $farmer->npwp }}"/>
                            </div>
                        </p>
                    </div>
                    <div class="tab-pane p-3" id="profile" role="tabpanel">
                        <p class="mb-0">
                            <div class="form-group">
                                <label>Bank</label>
                                <input type="text" class="form-control" name="bank" value="{{ $farmer->bank }}"/>
                            </div>                        
                            <div class="form-group">
                                <label>Nama Pemilik Rekening</label>
                                <input type="text" class="form-control" name="nama_rek" value="{{ $farmer->nama_rek }}"/>
                            </div>                        
                            <div class="form-group">
                                <label>Nomor Rekening</label>
                                <input type="number" class="form-control" name="no_rek" value="{{ $farmer->no_rek }}"/>
                            </div>
                        </p>
                    </div>
                    <div class="tab-pane p-3" id="messages" role="tabpanel">
                        <p class="mb-0">
                            <div class="form-group">
                                <label>Foto KTP</label>
                                <input type="file" class="form-control" name="foto_ktp" value="{{ $farmer->foto_ktp }}"/>
                            </div>                        
                            <div class="form-group">
                                <label>Foto KYC</label>
                                <input type="file" class="form-control" name="foto_kyc" value="{{ $farmer->foto_kyc }}"/>
                            </div>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection 

@section('js')
    <!-- Sweet-Alert  -->
    {{-- <script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('zinzer/assets/pages/sweet-alert.init.js') }}"></script> --}}
    <script src="{{ asset('plugins/sweet-alert2/sweetalert2.all.min.js') }}"></script>

    <script>      

        function alert(e){
            e.preventDefault();            

            const href = document.getElementById('tombol-verifikasi').getAttribute('href');

            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, verify it!'
            }).then((result) => {
            if (result.value) {
                Swal.fire(
                'Verify!',
                'This user has been verified.',
                'success',
                document.location.href = href
                )
            }
            })
        }
    </script>
@endsection