@extends('web.layouts.app')
@section('main-content')
<style>
    .home-top-cour {
        background-color: #f9faff;
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
                <h1 class="fs-1">Office Staff</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->
<section>
    <div class="container-fluid">

        <div class="container com-sp ">

            <div class="row">
            @foreach($officestaff as $officestaff)
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{$officestaff->staff_image}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <h3>{{$officestaff->name}}</h3>
                                <h4>{{$officestaff->designation}}</h4>
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