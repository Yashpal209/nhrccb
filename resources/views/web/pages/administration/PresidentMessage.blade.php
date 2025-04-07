@extends('web.layouts.app')
@section('main-content')
    <!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db ed-res-bg">
            <div class="container ">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img src="{{ asset('public/web/assets/images/presedent.jpg') }}" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>Dr. Randhir Kumar</h4>
                            </li>
                            <li>National President</li>
                            <li class="px-2"><a href="https://facebook.com/rvermaoffice"> <i
                                        class="fab fa-facebook text-primary"></i> Visit Profile</a></li>
                            <li class="px-2"><a href="https://x.com/rvermaoffice"> <i
                                        class="fab fa-twitter text-info"></i> Visit Profile</a></li>
                            <li class="px-2"><a href="https://instagram.com/dr.randhirverma"> <i
                                        class="fab fa-instagram text-danger"></i> Visit Profile</a></li>
                            <li class="px-2"><a href="https://www.linkedin.com/in/dr-randhir-verma-3648667b"> <i
                                        class="fab fa-linkedin text-info"></i> Visit Profile</a></li>
                            <li class="px-2"><a href="mailto:chairmannationalnhrccb@gmail.com"><i
                                        class="fas fa-envelope text-danger"></i> Send Email</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4>President {{ $title }}</h4>
                            @if ($president->isNotEmpty())
                                @foreach ($president as $msg)
                                    <p align="justify">{!! nl2br(e($msg->text)) !!}</p>
                                @endforeach
                            @else
                                <div class="alert alert-warning" role="alert">
                                    No data found.
                                </div>
                            @endif

                        </div>
                        <div class="pro-user-bio">
                            <ul>
                                <li>
                                    <h4 style="text-align:end">(Dr. Randhir Kumar)</h4>
                                </li>
                                <li><strong>Connects </strong>:</li>
                                <div class="d-flex">
                                    <li class="px-2"><a href="https://facebook.com/rvermaoffice"> <i
                                                class="fab fa-facebook text-primary"></i> Visit Profile</a></li>
                                    <li class="px-2"><a href="https://x.com/rvermaoffice"> <i
                                                class="fab fa-twitter text-info"></i> Visit Profile</a></li>
                                    <li class="px-2"><a href="https://instagram.com/dr.randhirverma"> <i
                                                class="fab fa-instagram text-danger"></i> Visit Profile</a></li>
                                    <li class="px-2"><a href="https://www.linkedin.com/in/dr-randhir-verma-3648667b"> <i
                                                class="fab fa-linkedin text-info"></i> Visit Profile</a></li>
                                    <li class="px-2"><a href="mailto:chairmannationalnhrccb@gmail.com"><i
                                                class="fas fa-envelope text-danger"></i> Send Email</a></li>
                                </div>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
