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
                            <h4> Convocation Report List</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('addConvocation')}}"><div class="btn">
                                Add New Convocation Report
                            </div></a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>File</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($convocation as $convocation)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$convocation->title}}</td>
                                    <td>{{$convocation->date}}</td>
                                    <td>{{$convocation->convocation}}</td>                                  
                                    <td>
                                       <a href="{{url($convocation->convocation)}}" target="_blank"><span class="label label-success">View file</span></a> 
                                    </td>
                                    <td><a href="{{route('delete.Convocation', $convocation->id)}}" class="ad-st-view">Delete</a></td>
                                   
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