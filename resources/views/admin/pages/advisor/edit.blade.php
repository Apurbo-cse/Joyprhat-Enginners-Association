@extends('admin.layouts.master')
@section('title', 'Create New advisors')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New advisors</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('admin.advisor.index')}}">advisors List</a></li>
                    <li class="active">Create advisors</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">advisors Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin.advisor.update', $advisors->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{$advisors->name}}" name="name" type="text" id="name" class="form-control" placeholder="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-10">
                                <input name="designation" value="{{$advisors->designation}}" class="form-control" rows="5" placeholder="Content">
                                @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Job</label>
                            <div class="col-md-10">
                                <input name="job" value="{{$advisors->job}}" class="form-control" rows="5" placeholder="Content">
                                @error('job')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Job Location</label>
                            <div class="col-md-10">
                                <input name="job_location" value="{{$advisors->job_location}}" class="form-control" rows="5" placeholder="Content">
                                @error('job_location')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @if($advisors->image != null)
                                    <img src="{{ asset($advisors->image) }}" width="20%">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($advisors->status == '1') checked   @endif type="radio" id="active" value="1" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($advisors->status == '0') checked   @endif type="radio" id="inactive" value="0" name="status">
                                    <label for="inactive"> Inactive </label>
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
