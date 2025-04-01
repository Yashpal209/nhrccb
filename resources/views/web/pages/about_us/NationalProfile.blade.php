@extends('web.layouts.app')
@section('main-content')
    <style>
        .profile-container {
            background-color: #f9faff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-img {
            border: 3px solid #1232a5;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .profile-details h2 {
            color: #1232a5;
            margin-top: 10px;
        }

        .profile-details p {
            font-size: 16px;
            color: #555;
        }
    </style>
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1 class="fs-1">National President Profile </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- PROFILE DETAILS SECTION -->
    <section>
        <div class="pro-cover">
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
                            <h4>President Profile</h4>
                            @if ($profile)
                                <div class="profile-container">
                                    <img src="{{ $profile->image }}" alt="Profile Image" class="profile-img">
                                    <div class="profile-details">
                                        <h2>{{ $profile->name }}</h2>
                                        <h4>{{ $profile->title }}</h4>
                                        <p>{{ $profile->message }}</p>
                                        <p><strong>Created at:</strong> {{ $profile->created_at->format('d M, Y') }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-warning text-center">No Profile Available</div>
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
@endsection
