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
                <h1>Stand with Nation</h1>
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
                    @foreach($standwithnation as $standwithnation)
                    <ul>
                        <li>
                            <div class="card">
                                <div class="card-body">
                                    <img class="materialboxed" data-caption="{{$standwithnation->stand_with_natn_img	}}" src="{{url('/').'/'. $standwithnation->stand_with_natn_img	}}" alt="">
                                </div>
                                <div class="card-footer">
                                    <h5>{{$standwithnation->title}}</h5>
                                </div>
                            </div>

                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

@endsection