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
                                <h4>Aproove Application List</h4>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{ route('viewJoinApplication') }}">
                                    <div class="btn">
                                        Change Status Joining Application List
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
                                        <th>Registration No</th>
                                        <th>Level</th>
                                        <th>Designation</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>status</th>
                                        <th colspan="3" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($joinApp as $list)
                                    <tr>
                                        <td>{{ $list->reg_no }}</td>
                                        <td>{{ $list->level }}</td>
                                        <td>{{ $list->designation }}</td>
                                        <td>{{ $list->name }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->mobile }}</td>
                                        <td>{{ $list->updated_at }}</td>
                                        <td>
                                            @if ($list->status == 1)
                                                <span class="label label-warning">Pending</span>
                                            @elseif($list->status == 2)
                                                <span class="label label-success"> Approved</span>
                                            @elseif($list->status == 3)
                                                <span class="label label-danger">Rejected</span>
                                            @else
                                                Unknown
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('generate.certificate', $list->id) }}" target="_blank" class="btn btn-primary "style="margin:5px 0px;padding:10px">View Certificate</a>
                                            <a href="{{ route('generate.letter', $list->id) }}" target="_blank" class="btn btn-primary "style="margin:5px 0px;padding:10px">View letter</a>
                                            <a href="{{ route('generate.idcard', $list->id) }}" target="_blank" class="btn btn-primary "style="margin:5px 0px;padding:10px">View ID Card</a>
                                        </td>
                                        
                                        
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
