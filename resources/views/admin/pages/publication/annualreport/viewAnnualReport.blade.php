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
                            <h4>Annual Report List</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('addAnnualReport') }}">
                                <div class="btn">Add New Annual Report</div>
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
                                @forelse($annualreport as $report)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $report->title }}</td>
                                    <td>{{ $report->date }}</td>
                                    <td>{{ $report->report }}</td>                                  
                                    <td>
                                        <a href="{{ url($report->report) }}" target="_blank">
                                            <span class="label label-success">View</span>
                                        </a> 
                                    </td>
                                    <td>
                                        <a href="{{ route('AnnualReport.delete', $report->id) }}" class="ad-st-view">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Annual Reports found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-3">
                            {{ $annualreport->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
