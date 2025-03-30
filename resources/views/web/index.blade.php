@extends('web.layouts.app')

@section('main-content')
    <style>
        .ph-gal ul li img {
            width: 100%;
            padding: 2px;
            height: 126px;
        }
    </style>
    <div class="ed-res-bg">
        <!-- SLIDER -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                @foreach ($Banner as $index => $banner)
                                    <li data-target="#myCarousel" data-slide-to="{{ $index }}"
                                        class="{{ $index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                @foreach ($Banner as $index => $banner)
                                    <div class="item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ asset($banner->image) }}" alt="">
                                        <div class="carousel-caption slider-con">
                                            <p>{{ $banner->title }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-chevron-left slider-arr"></i>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <i class="fa fa-chevron-right slider-arr"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- marquee  --}}
        <div class="container-fluid p-2 bg-dark text-white ">
            <div class="row justify-content-center align-items-center w-100">
                <div class="col-md-9 col-12">
                    <marquee id="notificationMarquee" behavior="scroll" direction="left" scrollamount="5" class="d-block">
                        @foreach ($notifications as $notification)
                            <p class="d-inline m-0 mx-3">
                                <i class="fas fa-bell text-danger"></i>
                                <a href="{{ $notification->noticefile }}" class="text-white text-decoration-none">
                                    {{ $notification->title }} ({{ $notification->date }})
                                </a>
                            </p>
                        @endforeach
                    </marquee>
                </div>
                <div class="col-md-3 col-12 text-center ">
                    <button class="btn btn-light btn-sm" onclick="document.getElementById('notificationMarquee').stop()">⏸
                        Stop</button>
                    <button class="btn btn-light btn-sm" onclick="document.getElementById('notificationMarquee').start()">▶
                        Start</button>
                    <button class="btn btn-light btn-sm"
                        onclick="window.location.href='{{ route('official_notification') }}'">
                        View All</button>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <section class="bg-container">
            <div class="container py-3">
                <div class="row justify-content-center g-3">
                    <div class="col-md-6 text-center ">
                        <div class="pg-eve-main mb-0">
                            <div class="row">
                                <div class="con-title">
                                    <h2 class="mb-0"> <span>About NHRCCB</span></h2>
                                </div>
                            </div>
                            <div class="pg-eve-desc pg-blog-desc">
                                <div class="mt-0">
                                    <p align="justify"><b>National Human Rights and Crime Control Bureau (NHRCCB)</b> is
                                        functioning with commitment to the Noble Cause of Human Rights Protection and
                                        Promotion,
                                        Justice, Education, Love, Peace, Harmony to all and Friendship, National &
                                        International
                                        Integration by Exchange of Ideas & Ethos around the Nation. NHRCCB Is working for
                                        the
                                        Protection and Promotion of Human Rights.</p>
                                    <p align="justify"><b>National Human Rights and Crime Control Bureau (NHRCCB)</b> is a
                                        Non
                                        Profit Organization or Voluntary Organization Incorporated under the Legislation
                                        Government of India. Registered in 2017 under Indian Trust Act- 1882 Government Of
                                        India
                                        with Regn. No 483/2017. Registered with NITI AAYOG, Government of India, United
                                        Nation
                                        Department Of Economics and Social Affairs, United Nation, 12A & 80G Under
                                        Department
                                        of Income Tax, Ministry of Finance Government of India and CSR1 Under Ministry Of
                                        Corporate Affairs, Government of India.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Notification Section (Remains Static) -->
                    <div class="col-md-6">
                        <div class="bot-gal">
                            <h4>Latest Update</h4>
                            <div class="card">
                                <div class="card-body">
                                    <marquee behavior="scroll" direction="up" scrollamount="3" height="250">
                                        <div class="ho-event">
                                            <ul>
                                                @foreach ($latestUpdate as $notification)
                                                    <li class="mt-2">
                                                        <div class="ho-ev-date py-2"><span>{{ $notification->date }}</span>
                                                        </div>
                                                        <div class="ho-ev-link">
                                                            <a class="ho-ev-link" href="{{ $notification->file }}">
                                                                <p class="ho-ev-link">{{ $notification->title }}</p>
                                                            </a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </marquee>
                                </div>
                                <div class="card-footer">
                                    <div class="ed-ad-dec">
                                        <a href="{{ route('latestUpdate') }}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Acknowledgement --}}
        <section>
            <div class="container py-3">
                {{-- <div class="row">
                    <div class="con-title">
                        <h2 class="mb-0">Messages <span>Social Media</span></h2>
                    </div>
                </div> --}}
                <div class="row justify-content-center align-items-center g-3 ">
                    <div class="col-md-6 text-center about-section" id="about-section">
                        <div class="pg-eve-main mb-0">
                            <div class="row">
                                <div class="con-title">
                                    <h2 class="mb-0">President <span>Message</span></h2>
                                </div>
                            </div>
                            <div class="pg-eve-desc pg-blog-desc">
                                <div class="mt-0">
                                    <p align="justify">All human beings are born free and equal in dignity and rights. They are endowed with reason and conscience and should act towards one another in a spirit of brotherhood.” These opening words of the Universal Declaration of Human Rights express a concept of man which underpins the framework of human rights embodied in the Universal Declaration and the two international covenants of Human Rights. It is a concept which, it derives most directly from Western political traditions, is in harmony with moral and social teachings to be found in many other traditions and patterns of belief. </p>
                                    <p align="justify">I am delighted to introduce National Human Rights and Crime Control Bureau a leading social organization, working for the protection of Human rights, liberties and social justice for all people at National & International Level and providing legal assistance to the needy and under-privileged of the Indian Union, centers operating for the cause of spreading human rights awareness in order to break the barriers of class, caste, creed, color and religion. National Human Rights and Crime Control Bureau (NHRCCB) promotes art, culture, peace, harmony and brotherhood.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 minBox text-center profile-section" id="profile-section" style="display: none;">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="img img-circle pt-4">
                                    <img width="50"
                                        src="{{ asset('public/web/assets/images/official/randhir.jpg') }}"
                                        alt="">
                                </div>
                                <div class="info py-3">
                                    <h4>DR RANDHIR KUMAR</h4>
                                    <h5>PRESIDENT</h5>
                                    <h5>GENERAL WING</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Section (Remains Static) -->
                    <div class="col-md-6 d-flex justify-content-center p-2  " style=" border-radius:10px">
                        <div class="social-box" style="width: 100%; max-width: 500px; height: 600px;">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0">
                            </script>
                            <div class="fb-page" data-href="https://www.facebook.com/nhrccb" data-tabs="timeline"
                                data-width="500" data-height="600" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section  class="bg-container">
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-start">
                            <div class="card-body p-0 text-center">
                                <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                    <h4>Acknowledgement</h4>
                                    <ul>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-light" href="{{ route('acknowledgement') }}">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-start">
                            <div class="card-body p-0 text-center">
                                <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                    <h4>Govt. Letter</h4>
                                    <ul>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-light" href="{{ route('acknowledgement') }}">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-start">
                            <div class="card-body p-0 text-center">
                                <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                    <h4>Monthly Report</h4>
                                    <ul>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                        <li>
                                            <img class="materialboxed"src="{{ asset('public/web/assets/images/CM Delhi-page0001.jpg') }}"
                                                data-caption="CM DELHI" alt="Title" />

                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-light" href="{{ route('acknowledgement') }}">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS AND EVENTS -->
        <section class="">
            <div class="container py-3">
                <div class="row">
                    <div class="con-title">
                        <h2>News and <span>Events</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                <h4>Photo Gallery</h4>
                                <ul>
                                    @foreach ($viewPhotos as $viewPhoto)
                                        <li>
                                            <img class="materialboxed" data-caption="Education master image captions"
                                                src="{{ asset($viewPhoto->img) }}" alt="">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="ed-ad-dec">
                                    <a class="px-3" href="{{ route('Photos') }}">View All</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bot-gal h-vid ho-event-mob-bot-sp">
                                <h4>Video Gallery</h4>
                                <iframe src="https://www.youtube.com/embed/MPw1S4DIzaQ" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" mute=""
                                    style="width: 100%; max-width: 500px; height: 280px;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                <h4>Print Media</h4>
                                <ul>
                                    <li><img height="122" class="materialboxed"
                                            data-caption="Education master image captions"
                                            src="{{ asset('uploads/gallery/printmedia/6753e6aeb3ec7.webp') }}"
                                            alt="">
                                    </li>
                                    <li><img height="122" class="materialboxed"
                                            data-caption="Education master image captions"
                                            src="{{ asset('uploads/gallery/printmedia/6752f1848562b.webp') }}"
                                            alt="">
                                    </li>
                                    <li><img height="122" class="materialboxed"
                                            data-caption="Education master image captions"
                                            src="{{ asset('uploads/gallery/printmedia/6753e6d1eedb1.webp') }}"
                                            alt="">
                                    </li>
                                    <li><img height="122" class="materialboxed"
                                            data-caption="Education master image captions"
                                            src="{{ asset('uploads/gallery/printmedia/6753e9d250e57.webp') }}"
                                            alt="">
                                    </li>
                                    <li><img height="122" class="materialboxed"
                                            data-caption="Education master image captions"
                                            src="{{ asset('uploads/gallery/printmedia/6753ea839238d.webp') }}"
                                            alt="">
                                    </li>
                                    <li><img height="122" class="materialboxed"
                                            data-caption="Education master image captions"
                                            src="{{ asset('uploads/gallery/printmedia/6753ec649a7e7.webp') }}"
                                            alt="">
                                    </li>
                                </ul>

                            </div>
                            <div class="card-footer">
                                <div class="ed-ad-dec">
                                    <a class="px-3" href="{{ route('PrintMedia') }}">View All</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endsection
@section('page-js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let aboutSection = document.getElementById("about-section");
            let profileSection = document.getElementById("profile-section");

            function equalizeHeight() {
                let maxHeight = Math.max(aboutSection.offsetHeight, profileSection.offsetHeight);
                aboutSection.style.height = maxHeight + "px";
                profileSection.style.height = maxHeight + "px";
            }
            equalizeHeight();
            setInterval(() => {
                if (aboutSection.style.display === "none") {
                    aboutSection.style.display = "block";
                    profileSection.style.display = "none";
                } else {
                    aboutSection.style.display = "none";
                    profileSection.style.display = "block";
                }
                equalizeHeight();
            }, 6000);
        });
    </script>
@endsection
