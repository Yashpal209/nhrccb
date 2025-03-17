@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Educational Awareness</h1>
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
                    @foreach($eduawareness as $eduawareness)
                    <ul>
                        <li>
                            <div class="card">
                                <div class="card-body">
                                    <img class="materialboxed" data-caption="{{$eduawareness->edu_awrns_img	}}" src="{{url('/').'/'. $eduawareness->edu_awrns_img	}}" alt="">
                                </div>
                                <div class="card-footer">
                                    <h5>{{$eduawareness->title}}</h5>
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