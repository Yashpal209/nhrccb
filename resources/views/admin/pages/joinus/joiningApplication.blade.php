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
                            <h4>New Joining Application List</h4>
                        </div>
                       
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach( $joinApp as $list)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$list->state}}</td>
                                <td>{{$list->districts}}</td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->gender}}</td>
                                <td>{{$list->mobile}}</td>
                                <td>{{$list->email}}</td>                         
                                <td><a href="{{$list->passport_image}}" class="label label-success">View</a></td>
                                <td><a href="{{route('delete.JoinApplictaion', $list->id)}}" class="ad-st-view">Delete</a></td>
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