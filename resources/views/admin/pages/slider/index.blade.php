
@extends('admin.layouts.master')

@push('title')
   JEA
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Audition</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Audition List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                    <a class="btn btn-success btn-sm" style="float: right;"
                        onclick="Show('New Audition')"><i
                            class=" fa fa-plus"></i>&nbsp;New Audition</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>category</th>
                                <th>Assign Person</th>
                                <th>Photo</th>
                                <th style="width: 150px">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @foreach ($auditions as $audition) --}}
                                <tr>
                                    <td>gfd}</td>
                                    <td>
                                      sdfsd
                                    </td>
                                    <td>{</td>
                                    <td>

                                    </td>
                                    <td style="width: 150px">
                                        <a class="btn btn-sm btn-info"
                                           ><i
                                                class="fa fa-edit text-white"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="delete_function(this)"
                                            value=""><i
                                                class="fa fa-trash"></i> </button>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection
