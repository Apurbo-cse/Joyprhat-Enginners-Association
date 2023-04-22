@extends('admin.layouts.master')
@section('title', 'Create New President')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New President</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('admin.president.index')}}">president</a></li>
                    <li class="active">Create President</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">President Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin.president.update', $president->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{$president->name}}" disabled type="text" id="name" class="form-control" placeholder="Enter a Name">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Edu / Professionil</label>
                            <div class="col-md-10">
                                <input name="edu" value="{{$president->edu}}"  class="form-control" rows="5" placeholder="Enter Edu / Profession">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-10">
                                <input name="m_designation" value="{{$president->m_designation}}"  class="form-control" rows="5"  placeholder="Enter a Designation">
                              
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Office Name / Address</label>
                            <div class="col-md-10">
                                <input name="at_location" value="{{$president->at_location}}"  class="form-control" rows="5"  placeholder="Enter a Address">
                              
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @if($president->image != null)
                                    <img src="{{ asset($president->image) }}" width="20%">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Member</label>
                            <div class="col-md-10">
                            <select class="form-control" name="member_type" id="exampleFormControlSelect1">
                                <option selected>President</option>
                            </select>           
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($president->status == '1') checked   @endif type="radio" id="active" value="1" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($president->status == '0') checked   @endif type="radio" id="inactive" value="0" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Make as President</button>
                        </div>



                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
