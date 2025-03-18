@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Social Work</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp h-gal ed-pho-gal">
                    @if($socialwork->count() > 0)
                    @foreach($socialwork as $items)
                    <ul>
                        <li>
                            <div class="card">
                                <div class="card-body">
                                    <img class="materialboxed" data-caption="{{$items->social_wrk_img}}" src="{{url('/').'/'. $items->social_wrk_img	}}" alt="">
                                </div>
                                <div class="card-footer text-center">
                                    <h5>{{$items->title}}</h5>
                                </div>
                            </div>

                        </li>
                    </ul>
                    @endforeach
                    <div class="d-flex justify-content-center mt-4">
                        {{ $socialwork->links() }}
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