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
                            <h4>Change Status Joining Application List</h4>
                        </div>

                        <div class="col-md-6 text-right">
                            <a href="{{ route('Application') }}">
                                <div class="btn">
                                    Approve Application List
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Level</th>
                                    <th>Designation</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Payment status</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach ($joinApp as $index => $list)
                                <tr>
                                    <td>{{ ($joinApp->currentPage() - 1) * $joinApp->perPage() + $index + 1 }}</td>
                                    <td>{{ $list->level }}</td>
                                    <td>{{ $list->designation }}</td>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->mobile }}</td>
                                    <td>{{ $list->email }}</td>
                                    <td>{{ $list->created_at }}</td>
                                    <td>
                                        @if ($list->payment == 'pending')
                                        <span class="label label-warning">Pending</span>
                                    @elseif($list->payment =='success')
                                        <span class="label label-success">Sucess</span>
                                    @elseif($list->payment == 'failed')
                                        <span class="label label-danger">Failed</span>
                                    @else
                                        Unknown
                                    @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('ChangeStatusApplication') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $list->id }}">
                                            <div class="form-group">
                                                <label for="status">Select Status:</label>
                                                <select name="status" required>
                                                    <option value="1" {{ $list->status == 1 ? 'selected' : '' }}>Pending</option>
                                                    <option value="2" {{ $list->status == 2 ? 'selected' : '' }}>Approved</option>
                                                    <option value="3" {{ $list->status == 3 ? 'selected' : '' }}>Rejected</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update Status</button>
                                        </form>
                                    </td>
                                   
                                    <td>
                                        @if (!empty($list->passport_image))
                                            <a href="{{ url('/') . '/' . $list->passport_image }}" class="label label-success text-white" target="_blank">View</a>
                                        @else
                                            <span class="label label-danger">No Attachment</span>
                                        @endif
                                    </td>
                                   
                                    <td>
                                        <a href="{{ route('delete.JoinApplication', $list->id) }}" class="ad-st-view">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {{ $joinApp->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
