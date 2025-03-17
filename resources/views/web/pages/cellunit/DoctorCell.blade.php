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
                <h1 class="fs-1">Doctor Cell</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->
<section>
    <div class="container-fluid">

        <div class="container com-sp ">

            <div class="row">
            @foreach($doctorcell as $doctorcell)
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <div class="row justify-content-center">
                                <!--POPULAR COURSES IMAGE-->
                                <div class="col-md-3 d-flex align-items-center justify-content-center">
                                    <img src="{{$doctorcell->image}}" alt="" class="img-fluid">
                                </div>
                                <!--POPULAR COURSES: CONTENT-->
                                <div class="col-md-8 home-top-cour-desc d-flex align-items-center">
                                    <div>
                                        <h3 class="pb-0">{{$doctorcell->name}}</h3>
                                        <h5 class="pb-0">{{$doctorcell->designation}}</h5>
                                    </div>
                                </div>
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