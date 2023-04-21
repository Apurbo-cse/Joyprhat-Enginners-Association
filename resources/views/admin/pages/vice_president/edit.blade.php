@extends('admin.layouts.master')
@section('title', 'Create New president')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New president</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('admin.president.index')}}">president List</a></li>
                    <li class="active">Create president</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Vice President Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin.vice-president.update', $vice_president->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{$vice_president->name}}" disabled type="text" id="name" class="form-control" placeholder="name">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input value="{{$vice_president->email}}" disabled class="form-control" rows="5" placeholder="Content">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Phone</label>
                            <div class="col-md-10">
                                <input name="job" value="{{$vice_president->phone}}" disabled class="form-control" rows="5" placeholder="Content">
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                    <img src="{{ asset($vice_president->image) }}" width="20%">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Member</label>
                            <div class="col-md-10">
                            <select class="form-control" name="member_type" id="exampleFormControlSelect1">
                                <option selected>Vice President</option>
                            </select>           
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($vice_president->status == '1') checked   @endif type="radio" id="active" value="1" name="status">
                                    <label for="active"> Vice President </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($vice_president->status == '0') checked   @endif type="radio" id="inactive" value="0" name="status">
                                    <label for="inactive"> Ex Vice President </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Make as Vice President</button>
                        </div>



                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
