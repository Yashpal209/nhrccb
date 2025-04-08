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
                                <h4>List of National Patron</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('addNationalPatron') }}">
                                    <div class="btn">
                                        Add National Patron
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
                                        <th>Type</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($nationalpatronlist->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">No data found</td>
                                        </tr>
                                    @else
                                        @foreach ($nationalpatronlist as $list)
                                            <tr>
                                                <td>{{ $list->type }}</td>
                                                <td><span class=""><img height="100" src="{{ url('/') . '/' . $list->image }}" alt=""></span> </td>
                                                <td>{{ $list->name }}</td>
                                                <td>{{ $list->designation }}</td>
                                                <td><a href="{{ route('delete.NationalPatron', $list->id) }}" class="ad-st-view">Delete</a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
