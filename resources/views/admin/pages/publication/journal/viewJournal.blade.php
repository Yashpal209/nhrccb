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
                            <h4> Journal List</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('addJournal')}}"><div class="btn">
                                Add New Journal
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
                                @foreach($journal as $journal)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$journal->title}}</td>
                                    <td>{{$journal->date}}</td>
                                    <td>{{$journal->journal}}</td>                                  
                                    <td>
                                       <a href="{{url($journal->journal)}}"><span class="label label-success">View</span></a> 
                                    </td>
                                    <td><a href="{{route('Journal.delete', $journal->id)}}" class="ad-st-view">Delete</a></td>
                                   
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