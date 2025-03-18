@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Workshop</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="ed-res-bg">
            <div class="container com-sp pad-bot-70 ed-res-bg">
                <div class="row">
                    <div class="cor about-sp h-gal ed-pho-gal">
                        @if ($workshop->count() > 0)
                            @foreach ($workshop as $item)  {{-- Changed variable name --}}
                                <ul>
                                    <li>
                                        <div class="card mx-1">
                                            <div class="card-body">
                                                <img class="materialboxed" data-caption="{{ $item->workshop_img }}"
                                                    src="{{ url('/') . '/' . $item->workshop_img }}" alt="">
                                            </div>
                                            <div class="card-footer text-center">
                                                <h5>{{ $item->title }}</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                            
                            <!-- Pagination Links -->
                            <div class="d-flex justify-content-center mt-4">
                                {{ $workshop->links() }}
                            </div>
                        @else
                            <div class="text-center">
                                <h3>No Data Available</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

@endsection
