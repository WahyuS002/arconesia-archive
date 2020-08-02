@extends('layouts.board')

@section('css')
    <!-- Table css -->
    <link href="{{ asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Responsive Table</h4>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif
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
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Example</h4>
                <p class="text-muted m-b-30 font-14">This is an experimental awesome solution for responsive tables with complex data.</p>

                <div class="table-rep-plugin">
                    <div class="table-responsive b-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table  table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th data-priority="1">Comment</th>
                                <th data-priority="3">Date</th>
                                <th data-priority="1">Action</th>                                
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <th>{{ $post->title }}</th>
                                    <td>597.74</td>
                                    <td>{{ $post->tanggal }}</td>                            
                                    <td>
                                        {{-- <button class="btn btn-danger"></button> --}}
                                        <a href="{{ route('post.edit', $post->id ) }}" class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{ route('post.delete', $post->id) }}" method="POST"> 
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>     
                                    </td> 
                                </tr>                            
                                @endforeach                                                           
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->           
@endsection

@section('js')
    <!-- Responsive-table-->
    <script src="{{ asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('zinzer/assets/js/app.js') }}"></script>
    
    <script>
        $(function() {
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary'
            });
        });
    </script>
@endsection