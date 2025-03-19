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
        color: orange;
        font-weight: bold;
    }
    .status-processing {
        color: blue;
        font-weight: bold;
    }
    .status-resolved {
        color: green;
        font-weight: bold;
    }
    .status-unknown {
        color: gray;
        font-weight: bold;
    }
    .table td, .table th {
        vertical-align: middle;
        text-align: center;
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
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Complaint Type</th>
                                        <th>Attachment</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($complain as $list)
                                        <tr>
                                            <td>{{ $list->complain_type }}</td>
                                            <td>
                                                @if (!empty($list->attachment))
                                                    <a href="{{ $list->attachment }}" class="badge bg-success text-white" target="_blank">View</a>
                                                @else
                                                    <span class="badge bg-warning text-dark">No Attachment</span>
                                                @endif
                                            </td>
                                            <td>
                                                @switch($list->status)
                                                    @case(1)
                                                        <span class="badge bg-primary">Submitted</span>
                                                    @break
                                                    
                                                    @case(2)
                                                        <span class="badge bg-warning text-dark">Processing</span>
                                                    @break
                                                    
                                                    @case(3)
                                                        <span class="badge bg-success">Solved</span>
                                                    @break
                                                    
                                                    @default
                                                        <span class="badge bg-secondary">Unknown</span>
                                                @endswitch
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
