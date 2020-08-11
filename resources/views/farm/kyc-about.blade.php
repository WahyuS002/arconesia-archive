@extends('layouts.board')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Informasi Pribadi</h4>
                </div>                
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
                <div class="tab-pane active p-3" id="home" role="tabpanel">
                    <p class="mb-0">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required placeholder="John Doe"/>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" required placeholder="Bengkulu"/>
                        </div>
                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" class="form-control" name="kota" required placeholder="Bengkulu Kota"/>
                        </div>
                        <div class="form-group">
                            <label>No. HP</label>
                            <input type="text" class="form-control" name="nope" required placeholder="082375558906"/>
                        </div>
                        <div class="form-group">
                            <label>No. NIK</label>
                            <input type="text" class="form-control" name="nik" required placeholder="177213871221"/>
                        </div>
                        <div class="form-group">
                            <label>No. NPWP</label>
                            <input type="text" class="form-control" name="npwp" required placeholder="2332132171"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection