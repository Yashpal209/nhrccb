@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Souvenier</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->

<section>
    <div class="ed-res-bg">
        @if ($souveniers->count() > 0)
        <div class="container">
                @foreach ($souveniers as $index => $report)
                    <div class="row w-100 text-center py-3">
                        @if($index % 2 == 0)
                            <!-- PDF/Icon Left, Text Right -->
                            <div class="col-md-6 d-flex justify-content-center align-items-center ">
                                <embed src="{{ $report->souvenier }}" type="application/pdf" width="100%" height="500px" style="border-radius: 10px">

                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                                <h5>{{ \Carbon\Carbon::parse($report->date)->format('F Y') }}</h5>
                                <p>{{ $report->title }}</p>
                                <a href="{{ $report->souvenier }}" class="btn btn-sm btn-danger" target="_blank">See Full Size</a>
                            </div>
                        @else
                            <!-- Text Left, PDF/Icon Right -->
                            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                                <h5>{{ \Carbon\Carbon::parse($report->date)->format('F Y') }}</h5>
                                <p>{{ $report->title }}</p>
                                <a href="{{ $report->souvenier }}" class="btn btn-sm btn-danger" target="_blank">See Full Size</a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center ">
                                <embed src="{{ $report->souvenier }}" type="application/pdf" width="100%" height="500px" style="border-radius: 10px">
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $souveniers->links() }}
                </div>
            @else
                <div class="text-center w-100">
                    <h3>No Data On Monthly Report</h3>
                </div>
            @endif
        
    </div>
</section>

@endsection