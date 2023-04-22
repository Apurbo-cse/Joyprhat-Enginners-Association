@extends('admin.layouts.master')
@section('title', 'Update Exicutive Member')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update Exicutive Member</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{route('admin.exicutive.index')}}">Exicutive Member</a></li>
                    <li class="active">Create Exicutive Member</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Update Exicutive Member Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin.exicutive.update', $exicutive->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input value="{{$exicutive->name}}" disabled type="text" id="name" class="form-control" placeholder="Enter a Name">
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Edu / Professionil</label>
                            <div class="col-md-10">
                                <input name="edu" value="{{$exicutive->edu}}"  class="form-control" rows="5" placeholder="Enter Edu / Profession">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-10">
                                <input name="m_designation" value="{{$exicutive->m_designation}}"  class="form-control" rows="5"  placeholder="Enter a Designation">
                              
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Office Name / Address</label>
                            <div class="col-md-10">
                                <input name="at_location" value="{{$exicutive->at_location}}"  class="form-control" rows="5"  placeholder="Enter a Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @if($exicutive->image != null)
                                    <img src="{{ asset($exicutive->image) }}" width="20%">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Member</label>
                            <div class="col-md-10">
                            <select class="form-control" name="member_type" id="exampleFormControlSelect1">
                                <option selected>Exicutive Member</option>
                            </select>           
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($exicutive->status == '1') checked   @endif type="radio" id="active" value="1" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($exicutive->status == '0') checked   @endif type="radio" id="inactive" value="0" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Make as exicutive</button>
                        </div>

                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
