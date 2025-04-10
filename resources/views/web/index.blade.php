@extends('web.layouts.app')

@section('main-content')
    <style>
        .ph-gal ul li img {
            width: 100%;
            padding: 2px;
            height: 126px;
        }

        .swiper {
            width: 100%;
            padding: 20px 0;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            max-width: 150px;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .swiper-slide img:hover {
            transform: scale(1.1);
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
                <div class="col-md-10 col-12">
                    <marquee id="notificationMarquee" behavior="scroll" direction="left" scrollamount="5" class="d-block" onmouseover="this.stop();" onmouseout="this.start();">
                        @foreach ($ElectronicMedia as $list)
                            <p class="d-inline m-0 mx-3">
                                <i class="fas fa-bell text-danger"></i>
                                <a href="{{ $list->elec_med_img }}" target="_blank" class="text-white text-decoration-none">
                                    {{ $list->title }} ({{ $list->created_at }})
                                </a>
                            </p>
                        @endforeach
                    </marquee>
                </div>
                <div class="col-md-2 col-12 text-center ">
                    {{-- <button class="btn btn-light btn-sm" onclick="document.getElementById('notificationMarquee').stop()">⏸
                        Stop</button> --}}
                    <button class="btn btn-light btn-sm" onclick="document.getElementById('notificationMarquee').start()">▶
                        Start</button>
                    <button class="btn btn-light btn-sm" onclick="window.location.href='{{ route('ElecMedia') }}'">
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
                                    <p align="justify"><b> National Human Rights and Crime Control Bureau (NHRCCB)</b> is functioning with
                                        commitment to the Noble Cause of Human Rights Protection and Promotion, Justice,
                                        Education, Love, Peace, Harmony to all and Friendship, National & International
                                        Integration by Exchange of Ideas & Ethos around the Nation .NHRCCB is working for
                                        the Protection and Promotion of Human Rights and crime prevention across the nation.
                                    </p>
                                    <p align="justify"><b>National Human Rights and Crime Control Bureau (NHRCCB)</b>is a
                                        Non-Govt./Non-Profit Organization Incorporated under the Legislation of the
                                        Government of India. Registered in 2017 under Indian Trust Act- 1882 Government Of
                                        India with Regn. No 483/2017. Registered with NITI AAYOG, Government of India,
                                        United Nation Department Of Economics and Social Affairs, United Nation , 12A & 80G
                                        Under Department of Income Tax , Ministry of Finance Government of India and CSR1
                                        Under Ministry Of Corporate Affairs ,Government of India.</p>
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
                                    <marquee behavior="scroll" direction="up" scrollamount="3" height="250" onmouseover="this.stop();" onmouseout="this.start();">
                                        <div class="ho-event">
                                            <ul>
                                                @foreach ($notifications as $notification)
                                                    <li class="mt-2">
                                                        <div class="ho-ev-date py-2"><span>{{ $notification->date }}</span>
                                                        </div>
                                                        <div class="ho-ev-link">
                                                            <a class="ho-ev-link" target="_blank" href="{{ $notification->noticefile }}">
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
                                        <a href="{{ route('official_notification') }}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- message --}}
        <section>
            <div class="container py-3">
                <div class="row justify-content-center align-items-center g-3 ">
                    <div class="col-md-6 text-center about-section" id="about-section">
                        <div class="pg-eve-main mb-0">
                            <div class="row">
                                <div class="con-title">
                                    <h2 class="mb-0">National  <span>President</span></h2>
                                </div>
                            </div>
                            <div class="pg-eve-desc pg-blog-desc">
                                <div class="mt-0">
                                    <p align="justify">The Preamble of our Constitution emphasizes on justice, liberty,
                                        equality and fraternity. These four words cover the entire range of human rights.
                                        Human rights are standards that recognize and protect the dignity of all human
                                        beings.</p>
                                    <p align="justify">Human rights recognize our freedom to choose, develop and live
                                        without fear or discrimination. The purpose of human rights is to provide freedom to
                                        live a life free from fear, oppression or discrimination. Human rights include the
                                        right to life, the right to a fair trial, freedom from torture, freedom of speech,
                                        freedom of religion, and the rights to health, education and an adequate standard of
                                        living.</p>
                                    <p align="justify">The concept of human rights is very important in our lives,
                                        especially in today's time when human exploitation is increasing day by day. To
                                        understand the basic rights of human beings, it is very important to propagate them,
                                        it is very important to reach the human rights to the person standing at the last
                                        rung of the society. From time to time, many seminars, conferences, workshops and
                                        trainings are very inspiring for the colleagues and people of the society working in
                                        the field of human rights.</p>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('PresidentMessage') }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 minBox text-center profile-section" id="profile-section" style="display: none;">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="img img-circle pt-4">
                                    <img width="50" src="{{ asset('public/web/assets/images/presedent.jpg') }}"
                                        alt="">
                                </div>
                                <div class="info py-3">
                                    <h4>Dr.Randhir Kumar</h4>
                                    <h5>National President</h5>
                                    <h5>NHRCCB</h5>
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

        {{-- Acknowledgement --}}
        <section class="bg-container">
            <div class="container py-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-start">
                            <div class="card-body p-0 text-center">
                                <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                    <h4>Acknowledgement</h4>
                                    <ul>
                                        @foreach ($acknowledgement as $list)
                                            <li>
                                                <img class="materialboxed" data-caption="{{ $list->title }}"
                                                    src="{{ asset($list->acknowledgement_img) }}" alt="">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-primary" href="{{ route('acknowledgement') }}">View All</a>
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
                                        @foreach ($govtLetter as $list)
                                            <li>
                                                <img class="materialboxed" data-caption="{{ $list->title }}"
                                                    src="{{ asset($list->gvt_ltr_img) }}" alt="">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-primary" href="{{ route('GovtLetter') }}">View All</a>
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
                                        @foreach ($monthlyReport as $list)
                                        <li class="border" style="height: 245px; overflow: hidden;">
                                            <iframe src="{{ $list->report }}" width="100%" height="200px"></iframe>
                                            <a href="{{ $list->report }}" class="btn btn-outline-danger" target="_blank">View PDF</a>
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-primary" href="{{ route('acknowledgement') }}">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEWS AND EVENTS -->
        <section>
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
                                    @foreach ($viewPhotos as $list)
                                        <li>
                                            <img class="materialboxed"
                                                data-caption="{{ $list->title }}"src="{{ asset($list->img) }}"
                                                alt="">
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
                                <ul>
                                    @foreach ($VideoGallery as $list)
                                        @php
                                            // Extract the video ID from the YouTube link
                                            $videoId = explode('youtu.be/', $list->video)[1];
                                            $videoId = explode('?', $videoId)[0]; // Remove query parameters if any
                                        @endphp
                                        <li>
                                            <iframe src="https://www.youtube.com/embed/{{ $videoId }}"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                                                style="width: 100%; max-width: 500px; height: 245px;">
                                            </iframe>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="ed-ad-dec">
                                    <a class="px-3" href="{{ route('VideoGallery') }}">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="bot-gal h-gal ph-gal ho-event-mob-bot-sp">
                                <h4>Print Media</h4>
                                <ul>

                                    @foreach ($PrintMedia as $list)
                                        <li>
                                            <img class="materialboxed"
                                                data-caption="Media"src="{{ asset($list->print_media_img) }}"
                                                alt="">
                                        </li>
                                    @endforeach
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

        <section class="bg-container">
            <div class="container">
                <div class="row">
                    <div class="con-title">
                        <h2 class="mb-0">OUR RECOGNITION <span> AND AFFILIATION</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('public/web/assets/images/icons/1.jpg') }}"
                                        alt="Logo 1" /></div>
                                <div class="swiper-slide"><img src="{{ asset('public/web/assets/images/icons/2.jpg') }}"
                                        alt="Logo 2" /></div>
                                <div class="swiper-slide"><img src="{{ asset('public/web/assets/images/icons/3.jpg') }}"
                                        alt="Logo 3" /></div>
                                <div class="swiper-slide"><img src="{{ asset('public/web/assets/images/icons/4.jpg') }}"
                                        alt="Logo 4" /></div>
                                <div class="swiper-slide"><img src="{{ asset('public/web/assets/images/icons/5.jpg') }}"
                                        alt="Logo 5" /></div>
                                <div class="swiper-slide"><img src="{{ asset('public/web/assets/images/icons/6.jpg') }}"
                                        alt="Logo 6" /></div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4, // Adjust based on your layout
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
            }
        });
    </script>
@endsection
