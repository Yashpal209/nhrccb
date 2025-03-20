@extends('web.layouts.app')
@section('main-content')
<style>
    .home-top-cour {
        background-color: #e0e4f3;
        padding: 15px;
        border-radius: 10px;
    }
    .home-top-cour img {
        border: 2px solid #1232a5;
        border-radius: 10px;
        max-width: 100px;
        max-height: 100px;
    }
    .status-pending {
        color: rgb(221, 173, 14);
        font-weight: bold;
    }
    .status-working {
        color: rgb(23, 140, 148);
        font-weight: bold;
    }
    .status-resolved {
        color: green;
        font-weight: bold;
    }
    .status-rejected {
        color: red;
        font-weight: bold;
    }
</style>

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">Complaint Status</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="container com-sp">
            <div class="row justify-content-center">
                @if($complain->count() > 0)
                    @foreach($complain as $item)
                        <div class="col-md-6 mb-3">
                            <div class="home-top-cour">
                                <div class="row align-items-center">
                                    <!-- IMAGE -->
                                    <div class="col-md-3 text-center">
                                        <img src="{{$item->attachment}}" alt="Complaint Image" class="img-fluid">
                                    </div>
                                    <!-- CONTENT -->
                                    <div class="col-md-9 home-top-cour-desc">
                                        <h4 class="pb-0">{{$item->complain_details}}</h4>
                                        <p class="mb-1"><strong>Type:</strong> {{$item->complain_type}}</p>
                                        <p class="mb-1">
                                            <strong>Status:</strong>
                                            @if($item->status == '1')
                                                <span class="status-pending">Pending</span>
                                            @elseif($item->status == '2')
                                                <span class="status-working">Working</span>
                                            @elseif($item->status == '3')
                                                <span class="status-resolved">Resolved</span>
                                            @elseif($item->status == '0')
                                                <span class="status-rejected">Rejected</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- NO DATA MESSAGE -->
                    <div class="col-12 text-center mt-4">
                        <h3>No Data Available</h3>
                    </div>
                @endif
            </div>

            <!-- PAGINATION LINKS -->
            @if($complain->count() > 0)
                <div class="d-flex justify-content-center mt-4">
                    {{ $complain->links() }}
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
