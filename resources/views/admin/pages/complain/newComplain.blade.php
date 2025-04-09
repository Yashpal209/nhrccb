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
                                <h4>New Complaint Details</h4>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{ route('ComplainApplictaionStatus') }}">
                                    <div class="btn">
                                        Change Application Status
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive">
                            @if ($complainData->count() > 0)
                                <table class="table table-hover table-bordered">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Complaint Type</th>
                                            <th>Complaint Details</th>
                                            <th>Complaint Status</th>
                                            <th>Attachment</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($complainData as $index => $list)
                                            <tr>
                                                <td>{{ $complainData->firstItem() + $index }}</td>
                                                <td>{{ $list->name }}</td>
                                                <td>{{ $list->gender }}</td>
                                                <td>{{ $list->mobile }}</td>
                                                <td>{{ $list->email }}</td>
                                                <td>{{ $list->complain_type }}</td>
                                                <td>{{ $list->complain_details }}</td>
                                                <td>
                                                    @if ($list->status == '1')
                                                        <span class="label label-warning">Pending</span>
                                                    @elseif($list->status == '2')
                                                        <span class="label label-info">Working</span>
                                                        Resion:{{ $list->resion }}
                                                    @elseif($list->status == '3')
                                                        <span class="label label-success">Resolved</span>
                                                        Resion:{{ $list->resion }}
                                                    @elseif($list->status == '0')
                                                        <span class="label label-danger">Rejected</span>
                                                        Resion:{{ $list->resion }}
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if (!empty($list->attachment))
                                                        <a href="{{ url('/') . '/' . $list->attachment }}"
                                                            class="label label-success text-white" target="_blank">View</a>
                                                    @else
                                                        <span class="label label-danger">No Attachment</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('delete.deleteCompApplictaion', $list->id) }}"
                                                        class="label label-danger text-white">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- PAGINATION LINKS -->
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $complainData->links() }}
                                </div>
                            @else
                                <!-- NO DATA MESSAGE -->
                                <div class="text-center mt-4">
                                    <h3>No Complaints Found</h3>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
