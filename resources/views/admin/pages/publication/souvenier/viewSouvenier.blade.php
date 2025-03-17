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
                            <h4> Souvenier List</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('addSouvenier')}}"><div class="btn">
                                Add Souvenier
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
                                @foreach($souvenier as $souvenier)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$souvenier->title}}</td>
                                    <td>{{$souvenier->date}}</td>
                                    <td>{{($souvenier->souvenier)}}</td>                                  
                                    <td>
                                       <a href="{{url($souvenier->souvenier)}}"><span class="label label-success">View</span></a> 
                                    </td>
                                    <td><a href="{{route('Souvenier.delete', $souvenier->id)}}" class="ad-st-view">Delete</a></td>
                                   
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