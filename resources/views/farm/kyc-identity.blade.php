@extends('layouts.board')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Informasi Identitas</h4>
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
                            <label>Foto KTP</label>
                            <input type="file" class="form-control" name="foto_ktp" required placeholder="Mandiri"/>
                        </div>                        
                        <div class="form-group">
                            <label>Foto KYC</label>
                            <input type="file" class="form-control" name="foto_kyc" required placeholder="John Doe"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>                       
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection