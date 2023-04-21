@extends('admin.layouts.master')
@section('title', 'president List')
@section('table_css')
    <!-- DataTables -->
    <link href="{{asset('admin/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Vice President</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="{{route('admin.vice-president.create')}}">Create</a></li>
                    <li><a href="{{route('admin.vice_president_as_user')}}">Make as User</a></li>
                    <li class="active">Vice President </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Vice President List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">SL#</th>
                            <th class="text-center" >Name</th>
                            <th class="text-center " >Edu / Profession</th>
                            <th class="text-center" >Designation</th>
                            <th class="text-center" >Location</th>
                            <th class="text-center" style="40%" >Image</th>
                            <th class="text-center" style="40%" >Status</th>
                            <th class="text-center" style="width: 12%">Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $users as $president)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$president->name}}</td>
                                <td>{{$president->edu}}</td>
                                <td>{{$president->m_designation}}</td>
                                <td>{{$president->at_location}}</td>
                                <td class="text-center">
                                    <img src="{{ asset($president->image) }}"  width="20%" alt="">
                                </td>
                                <td>
                                    @if ($president->status == 0)
                                        <a type="button" class="btn btn-danger waves-effect waves-light">Ex Vice President</a>
                                    @else
                                    <a type="button" class="btn btn-success waves-effect waves-light">Vice President</a>
                                    @endif
                                </td>
                                <td class="d-flex">
                                    <a class="btn btn-success d-inline-block" href="{{ route('admin.vice-president.edit',$president->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="btn btn-info d-inline-block" href="{{ route('admin.vice-president.edit',$president->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->

@endsection

@section('table_script')
    <!-- Datatables-->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.scroller.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('admin/pages/datatables.init.js')}}"></script>

@endsection
