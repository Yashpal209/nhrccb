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
                            <h4>List of State President</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('addStatePresident')}}">
                                <div class="btn">
                                    Add State President
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
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>State</th>
                                    <th>Name</th>
                                    <th>Phone No</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if($statepresidents->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">No data found</td>
                            </tr>
                            @else
                            @foreach($statepresidents as $list)
                            <tr>
                                <td>{{$no++}}</td>
                                <td><span class="list-img"><img src="{{url('/').'/'. $list->image}}" alt=""></span></td>
                                <td>{{$list->state}}</td>
                                <td>{{$list->name}}</td>
                                <td>{{$list->mobile}}</td>
                                <td>{{$list->designation}}</td>
                                <td><a href="{{route('delete.StatePresident', $list->id)}}" class="ad-st-view">Delete</a></td>
                            </tr>
                            @endforeach
                            @endif
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection