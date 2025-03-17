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
                            <h4> Monthly Report List</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('addMonthlyReport')}}"><div class="btn">
                                Add New Monthly Report
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
                                @foreach($monthlyreport as $monthlyreport)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$monthlyreport->title}}</td>
                                    <td>{{$monthlyreport->date}}</td>
                                    <td>{{$monthlyreport->report}}</td>                                  
                                    <td>
                                       <a href="{{url($monthlyreport->report)}}"><span class="label label-success">View</span></a> 
                                    </td>
                                    <td><a href="{{route('MonthlyReport.delete', $monthlyreport->id)}}" class="ad-st-view">Delete</a></td>
                                   
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