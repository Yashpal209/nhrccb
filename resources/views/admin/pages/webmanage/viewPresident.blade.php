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
                            <h4>View All President</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('president') }}">
                                <div class="btn">Add President</div>
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
                                    <th>Type</th>
                                    <th>Text</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($presidents as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->text }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('president.delete', $item->id) }}" class="ad-st-view" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="container">
                            {{ $presidents->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
