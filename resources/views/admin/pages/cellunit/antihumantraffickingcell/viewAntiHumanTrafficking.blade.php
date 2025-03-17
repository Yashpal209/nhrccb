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
                            <h4>List of Anti Human Trafficking Cell</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('addAntHmnTrf')}}">
                                <div class="btn">
                                    Add Anti Human Trafficking Cell
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
                                    <th>Sl. No.</th>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($antihuman as $list)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$list->id}}</td>
                                <td><span class="letter-img"><img src="{{url('/').'/'. $list->image}}" alt=""></span>
                                </td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->designation}}</td>
                                <td><a href="{{route('delete.AntHmnTrf', $list->id)}}" class="ad-st-view">Delete</a></td>
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