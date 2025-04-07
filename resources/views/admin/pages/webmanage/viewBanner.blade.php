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
                            <h4>View All Banners</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('banners') }}">
                                <div class="btn">Add Banner</div>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Date</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($banners as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{{ $item->created_at }}</td> 
                                    <td>
                                       <img src="{{ asset($item->image) }}" alt="Banner Image" width="400">
                                    </td>
                                    <td>
                                        <a href="{{ route('banner.delete', $item->id) }}" class="ad-st-view" onclick="return confirm('Are you sure?')">Delete</a>
                                        <a href="{{ route('banner.edit', $item->id) }}" onclick="return confirm('Are you sure?')"><span class="label label-success">Edit</span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="container">
                            <div class="pagination">
                                {{ $banners->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
