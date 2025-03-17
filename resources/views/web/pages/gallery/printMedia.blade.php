@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Print Media</h1>
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

                    @if($printmedia->count() > 0)
                        <ul class="d-flex flex-wrap justify-content-start">
                            @foreach($printmedia as $media)
                            <li class="px-2">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="materialboxed" data-caption="{{ $media->print_media_img }}" src="{{ url('/') . '/' . $media->print_media_img }}" alt="">
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        <!-- Pagination Links -->
                        <div class="pagination text-center ">
                            {{ $printmedia->links() }}
                        </div>
                    @else
                        <div class="text-center">
                            <h4>No Print Media Available</h4>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

@endsection
