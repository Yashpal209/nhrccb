@extends('web.layouts.app')
@section('main-content')

    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1 class="fs-1">Complaint Status</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ed-res-bg">

        <div class="container-fluid">
            <div class="container com-sp">
                <div class="row justify-content-center">
                    <div class="ho-st-login col-md-4  shadow" style="border:1px solid #102366; border-radius:10px">
                        <div class="col s12">
                            <form action="{{ route('complaintStatus') }}" method="POST" class="col s12">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" name="identifier" class="validate" value="COMP/" required>
                                        {{-- <label>Complaint no</label> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Check Status" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('complain'))
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="alert alert-info">
                                    <h5>Conplain Details:</h5>
                                    <img class="materialboxed"
                                        src="{{ url('/') . '/' . session('complain')->attachment }}"
                                        style="width: 150px; height: 150px; border-radius: 50%; display: block; margin: 0 auto;"
                                        alt="complain Image">
                                    <p><strong>Name: </strong> {{ session('complain')->name }}</p>
                                    <p><strong>Membership No: </strong> {{ session('complain')->complain_no }}</p>
                                    <p><strong>Mobile:</strong> {{ session('complain')->mobile }}</p>
                                    <p><strong>status:</strong>
                                        @if (session('complain')->status == '1')
                                            <span class="label label-warning">Pending</span>
                                        @elseif(session('complain')->status == '2')
                                            <span class="label label-info">Working</span><br>
                                        @elseif(session('complain')->status == '3')
                                            <span class="label label-success">Resolved</span><br>
                                            <b> Resion:</b>  {{ session('complain')->resion }}
                                        @elseif(session('complain')->status == '0')
                                            <span class="label label-danger">Rejected</span><br>
                                           <b> Resion:</b> {{ session('complain')->resion }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
