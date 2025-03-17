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
                            <h4>Complain List</h4>
                        </div>
                       
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Mobile</th>
                                    <th>Complain</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach( $complainData as $list)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->email}}</td>
                                <td>{{$list->gender}}</td>
                                <td>{{$list->mobile}}</td>
                                <td>{{$list->complain_type}}</td>
                                                    
                                <td><a href="#" class="label label-success">View</a></td>
                                <td><a href="{{route('delete.deleteCompApplictaion', $list->id)}}" class="ad-st-view">Delete</a></td>
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