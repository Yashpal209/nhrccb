@extends('web.layouts.app')

@section('main-content')
    <style>
        .ph-gal ul li img {
            width: 100%;
            padding: 2px;
            height: 126px;
        }
        .swiper-container {
            width: 80%;
            height: 300px;
        }
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
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
                                    <p align="justify">The<b> National Human Rights and Crime Control Bureau (NHRCCB)</b> is
                                        functioning with a commitment to the noble cause of human rights protection and
                                        promotion, justice, education, love, peace, harmony for all, friendship, and
                                        national and international integration through the exchange of ideas and ethos
                                        around the nation.</p>
                                    <p align="justify">The <b>National Human Rights and Crime Control Bureau (NHRCCB)</b> is
                                        a non-profit organization or voluntary organization incorporated under the
                                        legislation of the Government of India. Registered in 2017 under the Indian Trust
                                        Act—1882, Government of India, with Regn. No. 483/2017. Registered with NITI AAYOG,
                                        Government of India; the United Nation Department of Economics and Social Affairs,
                                        United Nation, 12A & 80G under the Department of Income Tax, Ministry of Finance,
                                        Government of India; and CSR1 under the Ministry of Corporate Affairs, Government of
                                        India.</p>
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

        {{-- message --}}
        <section>
            <div class="container py-3">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 minBox text-center profile-section" id="profile-section" style="display: none;">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="img img-circle pt-4">
                                    <img width="50" src="{{ asset('public/web/assets/images/official/randhir.jpg') }}"
                                        alt="">
                                </div>
                                <div class="info py-3">
                                    <h4>DR. RANDHIR KUMAR</h4>
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
                                        @foreach ($govtLetter as $list)
                                            <li>
                                                <img class="materialboxed" data-caption="{{ $list->title }}"
                                                    src="{{ asset($list->gvt_ltr_img) }}" alt="">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer text-center">
                                    <a class="btn btn-light" href="{{ route('GovtLetter') }}">View All</a>
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
                                            <li class="row" style="padding: 25px 0px">
                                                <div class="col-12   ">
                                                    <span>{{ $list->date }}</span>
                                                </div>
                                                <div class="col-12 ">
                                                    <p class="truncate">{{ $list->title }}</p>
                                                </div>
                                                <div class=" col-12 pg-eve-reg mt-1">
                                                    <a href="{{ $list->report }}" target="_blank">Download</a>
                                                </div>
                                            </li>
                                        @endforeach
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
                                            <img class="materialboxed"
                                                data-caption="{{ $list->title }}"src="{{ asset($viewPhoto->img) }}"
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

        <section>
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('public/web/assets/images/logo/icons/1.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/web/assets/images/logo/icons/2.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/web/assets/images/logo/icons/3.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/web/assets/images/logo/icons/4.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/web/assets/images/logo/icons/5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
