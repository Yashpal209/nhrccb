@extends('web.layouts.app')
@section('main-content')

<style>
    .card-footer {
        height: 60px;
    }
</style>

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Officer Interaction</h1>
            </div>
        </div>
    </div>
</section>

<!-- Officer Interaction Section -->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp h-gal ed-pho-gal">
                    @if($officerinteraction->count() > 0)
                        <ul class="d-flex flex-wrap justify-content-start">
                            @foreach($officerinteraction as $interaction)
                            <li class="mx-2">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="materialboxed" data-caption="{{ $interaction->ofcr_int_img }}" src="{{ url('/') . '/' . $interaction->ofcr_int_img }}" alt="">
                                    </div>
                                    <div class="card-footer text-center">
                                        <h5>{{ $interaction->title }}</h5>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        <!-- Pagination Links -->
                        <div class="pagination text-center">
                            {{ $officerinteraction->links() }}
                        </div>
                    @else
                        <div class="text-center">
                            <h4>No Officer Interactions Available</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
