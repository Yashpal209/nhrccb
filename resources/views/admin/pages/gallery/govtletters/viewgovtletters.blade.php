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
                            <h4>List of Govt. Letter</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('addGovtLetter')}}">
                                <div class="btn">
                                    Add Govt. Letter
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
                                    <th>Posted Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($govtletter as $list)
                            <tr>
                                <td>{{$no++}}</td>
                                <td><span class="letter-img"><img src="{{url('/').'/'. $list->gvt_ltr_img}}" alt=""></span></td>
                                <td>{{$list->title}}</td>
                                <td>{{$list->created_at}}</td>
                                <td><a href="{{route('delete.GovtLetter',$list->id)}}" class="ad-st-view">Delete</a></td>
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