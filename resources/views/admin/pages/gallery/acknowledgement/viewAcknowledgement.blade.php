@extends('admin.layouts.app')
<style>
    .letter-img img{
        height:50px
    }
</style>

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
                            <h4>List of Acknowledgement</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('addAcknowledgement')}}">
                                <div class="btn">
                                    Add Acknowledgement
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
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th> Posted Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($acknowledgement as $list)
                            <tr>
                                <td>{{$no++}}</td>
                                <td><span class="letter-img"><img class="materialboxed" src="{{url('/').'/'. $list->acknowledgement_img}}" alt=""></span>
                                </td>
                                </td>
                                <td>{{$list->title}}</td>
                                <td>{{$list->date}}</td>
                                <td><a href="{{route('delete.Acknowledgement',$list->id)}}" class="ad-st-view">Delete</a></td>
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