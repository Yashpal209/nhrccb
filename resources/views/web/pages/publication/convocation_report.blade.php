@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Convocation Report</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="container py-4">
            @if ($Convocation->count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="cor about-sp">
                            <div class="ed-about-tit">
                                <div class="ho-event pg-eve-main">
                                    <ul>
                                        @foreach ($Convocation as $report)
                                            <li class="py-2">
                                                <div class="ho-ev-date pg-eve-date py-3">
                                                    <span>{{ $report->date }}</span>
                                                </div>
                                                <div class="ho-ev-link pg-eve-desc">
                                                    <p>{{ $report->title }}</p>
                                                </div>
                                                <div class="pg-eve-reg mt-1">
                                                    {{-- <img src="{{ $report->convocation }}" style="width: 100px" alt="repost-image"> --}}
                                                    <a href="{{ $report->convocation }}" target="_blank">Download</a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <!-- Pagination Links -->
                                    <div class="d-flex justify-content-center mt-4">
                                        {{ $Convocation->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center">
                    <h3> NO Data ON Convocation Report</h3>
                </div>
            @endif
        </div>
    </section>

@endsection
