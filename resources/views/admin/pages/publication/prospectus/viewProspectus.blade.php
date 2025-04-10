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
                            <h4> Prospectus List</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{ route('addProspectus') }}">
                                <div class="btn">Add Prospectus</div>
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
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>File</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($prospectus as $index => $item)
                                <tr>
                                    <td>{{ $prospectus->firstItem() + $index }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->prospectus }}</td>                                  
                                    <td>
                                       <a href="{{ url($item->prospectus) }}"><span class="label label-success">View</span></a> 
                                    </td>
                                    <td><a href="{{ route('Prospectus.delete', $item->id) }}" class="ad-st-view">Delete</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No prospectus found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="mt-3 d-flex justify-content-center">
                            {!! $prospectus->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
