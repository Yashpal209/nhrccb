@extends('admin.layouts.app')

@section('main-content')

@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h4>List of Office Staff</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('addOfficestaff')}}">
                                <div class="btn">
                                    Add Office Staff
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($officestaff as $list)
                            <tr>
                            <td>{{$list->id}}</td>
                                <td><span class=""><img width="50" src="{{url('/').'/'. $list->staff_image}}" alt=""></span>
                                </td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->designation}}</td>
                                <td><a href="{{route('delete.officestaff', $list->id)}}" class="ad-st-view">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection