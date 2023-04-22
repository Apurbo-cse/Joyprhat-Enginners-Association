@extends('admin.layouts.master')
@section('title', 'Create New Exicutive Member')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Exicutive Member</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('admin.member.index')}}">Exicutive Member </a></li>
                    <li class="active">Create Exicutive Member</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Exicutive Member Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin.exicutive.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{old('name')}}" name="name" type="text" id="name" class="form-control"  placeholder="Enter a Name" required>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Edu / Profession</label>
                            <div class="col-md-10">
                                <input name="edu" value="{{old('edu')}}" class="form-control" rows="5" required placeholder="Enter a Edu / Profession" />
                                @error('edu')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-10">
                            <input name="m_designation" value="{{old('m_designation')}}" class="form-control" rows="5" required placeholder="Enter a Designation" />
                                @error('m_designation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-2 control-label">Office Name / Address</label>
                            <div class="col-md-10">
                            <input name="at_location"  value="{{old('at_location')}}" class="form-control" rows="5" placeholder="Enter a Address">
                                @error('at_location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Member</label>
                            <div class="col-md-10">
                            <select class="form-control" name="member_type" id="exampleFormControlSelect1" required>
                                <option selected>exicutive</option>
                            </select>   
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input name="image" type="file" id="image" class="form-control" required>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                            <div class="radio radio-info radio-inline">
                                    <input type="radio" id="active" value="1" name="status" checked>
                                    <label for="active">Active </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                        </div>



                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
