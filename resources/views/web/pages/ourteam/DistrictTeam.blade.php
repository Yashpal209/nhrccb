@extends('web.layouts.app')
@section('main-content')
<style>
    .home-top-cour {
        background-color: #e0e4f3;
    }

    .home-top-cour img {
        border: 2px solid #1232a5;
        border-radius: 60%;
    }
</style>
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">District Team</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->
<section>
    <div class="container-fluid">

        <div class="container com-sp ">

            <div class="row">
            @foreach($districtteam as $districtteam)
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{$districtteam->image}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <h3 class="pb-0">{{$districtteam->name}}</h3>
                                <p class="pb-0">{{$districtteam->designation}}</p>
                                <p class="pb-0">{{$districtteam->wing_name}}</p>
                                <p class="pb-0">{{$districtteam->district_name	}}</p>
                                <p class="pb-0">{{$districtteam->state_name}}</p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
@endsection