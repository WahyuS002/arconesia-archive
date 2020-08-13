@extends('layouts.board')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Basic Tables</h4>
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
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Basic example</h4>
                <p class="text-muted m-b-30">For basic styling—light padding and
                    only horizontal dividers—add the base class <code>.table</code> to any
                    <code>&lt;table&gt;</code>.
                </p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                                                        
                                    <td>
                                        @if ($user->is_kyc == 'success')
                                            <a href="{{ route('user.check', $user->id) }}"><span class="badge badge-pill badge-success p-1">{{ $user->is_kyc }}</span></a>
                                        @elseif($user->is_kyc == 'waiting')
                                            <a href="{{ route('user.check', $user->id) }}"><span class="badge badge-pill badge-warning p-1">{{ $user->is_kyc }}</span></a>
                                        @elseif($user->is_kyc == 'failed')
                                            <a href="{{ route('user.check', $user->id) }}"><span class="badge badge-pill badge-danger p-1">{{ $user->is_kyc }}</span></a>
                                        @else
                                            <span class="badge badge-pill badge-secondary p-1">none</span>
                                        @endif
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
@endsection