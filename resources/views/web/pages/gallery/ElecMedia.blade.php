@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Press Release</h1>
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
                    @if($elecmedia->count() > 0)
                        <ul>
                            @foreach($elecmedia as $media)
                            <li>
                                <div class="card">
                                    <div class="card-body">
                                        <img class="materialboxed" data-caption="{{ $media->elec_med_img }}" src="{{ url('/') . '/' . $media->elec_med_img }}" alt="">
                                    </div>
                                    <div class="card-footer text-center">
                                        <h5>{{ $media->title }}</h5>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        <!-- Pagination Links -->
                        <div class="pagination text-center">
                            {{ $elecmedia->links() }}
                        </div>
                    @else
                        <div class="text-center">
                            <h4>No Data Available</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

@endsection