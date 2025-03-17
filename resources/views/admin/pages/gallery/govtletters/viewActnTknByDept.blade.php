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
                            <h4>View Action Taken by Department</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('addGovtLetter')}}"><div class="btn">
                                Add Action Taken by Department
                            </div></a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <!-- <th>File</th> -->
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($govtletter as $list)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$list->title}}</td>
                                    <td>{{$list->date}}</td>
                                    <!-- <td>{{$list->actionfile}}</td> -->
                        
                                    <td>
                                       <a href="{{ url('/'.$list->actionfile) }}"><span class="label label-success">View</span></a> 
                                    </td>
                                    <td><a href="{{ route('actionfile.delete', $list->id) }}" class="ad-st-view">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection