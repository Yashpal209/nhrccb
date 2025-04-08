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
                    <h1 class="fs-1">National Patron / Advisor</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->
    <section class="">
        <div class="container-fluid">
            <div class="container com-sp ">
                <h2><u>National Patron</u></h2>
                <div class="row">
                    @foreach ($nationalpatrons as $list)
                        <div class="col-md-6">
                            <div>
                                <div class="home-top-cour">
                                    <div class="col-md-3"> <img src="{{ $list->image }}" alt="National Patron"> </div>
                                    <div class="col-md-9 home-top-cour-desc">
                                        <h3>{{ $list->name }}</h3>
                                        <h4>{{ $list->designation }}</h4>
                                        <h3>{{ $list->type }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container com-sp ">
                <h2><u>National Legal Advisor</u></h2>
                <div class="row">
                    @foreach ($nationaladvisor as $list)
                        <div class="col-md-6">
                            <div>
                                <div class="home-top-cour">
                                    <div class="col-md-3"> <img src="{{ $list->image }}" alt="National Legal Advisor">
                                    </div>
                                    <div class="col-md-9 home-top-cour-desc">
                                        <h3>{{ $list->name }}</h3>
                                        <h4>{{ $list->designation }}</h4>
                                        <h3>{{ $list->type }}</h3>
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
