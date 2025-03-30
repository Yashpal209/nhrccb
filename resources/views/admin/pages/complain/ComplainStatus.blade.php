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

    <!--== Update Complaint Status ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <h4>Update Complaint Status</h4>
                            </div>

                            <div class="col-md-6 text-right">
                                <a href="{{ route('viewComplainApplictaion') }}">
                                    <div class="btn">
                                        View Application Status
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-inn">
                        <form action="{{ route('changeStatus') }}" method="POST">
                            @csrf
                            <div class="container" style="width: 100%">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <label for="complaint_id">Select Complaint</label>
                                        <select name="id" required>
                                            <option disabled selected>--Select--</option>
                                            @foreach ($complainData as $list)
                                                <option value="{{ $list->id }}">{{ $list->name }}-{{ $list->complain_type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <label for="status">Change Status</label>
                                        <select name="status" required>
                                            <option value="1">Pending</option>
                                            <option value="2">Working</option>
                                            <option value="3">Resolved</option>
                                            <option value="0">Rejected</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <label for="resion">Resion</label>
                                        <input type="text" id="resion" class="validate" name="resion" style="font-size: 15px;border:1px solid #0a4c97;border-radius:7px; padding: 0 10px " placeholder="add resions">
                                    </div>
                                    <div class="col-md-12 col-6 "style="margin-top:10px">
                                        <input type="submit" value="Update Status" class=" btn btn-primary" >
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
