@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Covid 19</h1>
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
                    @foreach($covid19 as $covid19)
                    <ul>
                        <li>
                            <div class="card">
                                <div class="card-body">
                                    <img class="materialboxed" data-caption="{{$covid19->covid_img	}}" src="{{url('/').'/'. $covid19->covid_img}}" alt="">
                                </div>
                                <div class="card-footer">
                                    <h5>{{$covid19->title}}</h5>
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