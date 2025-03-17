@extends('web.layouts.app')

@section('main-content')
    <style>
        .ph-gal ul li img {
            width: 100%;
            padding: 2px;
            height: 126px;
        }
    </style>

    <!-- SLIDER -->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item slider1 active">
                                <img src="{{ asset('public/web/assets/images/slider/IMG_7416.JPG') }}" alt="">
                                <div class="carousel-caption slider-con">
                                    <p>Valedictory function of VIP</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('public/web/assets/images/slider/IMG_4874.JPG') }}" alt="">
                                <div class="carousel-caption slider-con">
                                    <p>Capacity Building Programme on Human Rights for NHRCCB New Delhi</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('public/web/assets/images/slider/IMG_4532.JPG') }}" alt="">
                                <div class="carousel-caption slider-con">
                                    <p>Capacity Building Programme on Human Rights for NHRCCB New Delhi</p>
                                </div>
                            </div>
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

    <section>
        <div class="container py-3">
            <div class="row">

                <div class="col-md-4 border">
                    <div class="row text-center align-items-center d-flex justify-content-center ">
                        <div class="col-md-3 col-6 hhh d-flex justify-content-center">
                            <img src="{{ asset('public/web/assets/images/icon/icons8-status.gif') }}" alt="">
                        </div>
                        <div class="col-md-9 col-6  hhh-1 d-flex justify-content-center align-items-center">
                            <a href="new-complain" class="fw-bold mb-0">Lodge Complaint / Track Status Online</a>
                        </div>
                    </div>

                    <div class="row text-center  align-items-center d-flex justify-content-center ">
                        <div class="col-md-3 col-6 hhh d-flex justify-content-center">
                            <img src="{{ asset('public/web/assets/images/icon/icons8-box.gif') }}" alt="">
                        </div>
                        <div class="col-md-9 col-6  hhh-1 bg-light d-flex justify-content-center align-items-center">
                            <a href="human-rights" class="fw-bold mb-0">Human Rights Defenders Cases</a>
                        </div>
                    </div>

                    <div class="row text-center  align-items-center d-flex justify-content-center ">
                        <div class="col-md-3 col-6 hhh d-flex justify-content-center">
                            <img src="{{ asset('public/web/assets/images/icon/icons8-file.gif') }}" alt="">
                        </div>
                        <div class="col-md-9 hhh-1  col-6 d-flex justify-content-center align-items-center">
                            <a href="complain-dashboard" class="fw-bold mb-0">Suo-Motu Cases</a>
                        </div>
                    </div>

                    <div class="row text-center align-items-center d-flex justify-content-center">
                        <div class="col-md-3 col-6 hhh d-flex justify-content-center">
                            <img src="{{ asset('public/web/assets/images/icon/icons8-schedule.gif') }}" alt="">
                        </div>
                        <div class="col-md-9  hhh-1 bg-light col-6 d-flex justify-content-center align-items-center">
                            <a href="monthly-report" class="fw-bold mb-0">Monthly Statistics</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bot-gal ">
                        <h4>Official News</h4>
                        <div class="card ">
                            <div class="card-body">
                                <marquee behavior="scroll" direction="up" scrollamount="3" height="250">
                                    <div class="ho-event">
                                        <ul>
                                            @foreach ($notifications as $notification)
                                                <li class="mt-2">
                                                    <div class="ho-ev-date py-2"><span>{{ $notification->date }}</span>
                                                    </div>
                                                    <div class="ho-ev-link">
                                                        <a class="ho-ev-link" href="{{ $notification->noticefile }}">
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

                <div class="col-md-4">
                    <div class="bot-gal ">
                        <h4>Latest Update</h4>
                        <div class="card ">
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

    <section class=" bg-container">
        <div class="container  py-3">
            <div class="row justify-content-center  g-3">
                <div class="col-md-5 minBox text-center  ">
                    <dic class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="img img-circle pt-4"><img width="50"
                                    src="{{ asset('public/web/assets/images/official/randhir.JPG') }}" alt="">
                            </div>
                            <div class="info py-3">
                                <h4>DR RANDHIR KUMAR</h4>
                                <h5>PRESIDENT</h5>
                                <h5>GENERAL WING</h5>
                            </div>
                        </div>
                    </dic>
                </div>
                <div class="col-md-7  text-center ">
                    <div class=" pg-eve-main mb-0">
                        <div class="row ">
                            <div class="con-title">
                                <h2 class="mb-0"> <span>About NHRCCB</span></h2>
                            </div>
                        </div>
                        <div class="pg-eve-desc pg-blog-desc">
                            <div class="mt-0">
                                <p align="justify"> <b>National Human Rights and Crime Control Bureau (NHRCCB)</b> is
                                    functioning with commitment to the Noble Cause of Human Rights Protection and Promotion,
                                    Justice, Education, Love, Peace, Harmony to all and Friendship, National & International
                                    Integration by Exchange of Ideas & Ethos around the Nation. NHRCCB Is working for the
                                    Protection and Promotion of Human Rights. </p>
                                <p align="justify"> <b>National Human Rights and Crime Control Bureau (NHRCCB) </b> is a
                                    Non
                                    Profit Organization or Voluntary Organization Incorporated under the Legislation
                                    Government of India. Registered in 2017 under Indian Trust Act- 1882 Government Of India
                                    with Regn. No 483/2017. Registered with NITI AAYOG, Government of India, United Nation
                                    Department Of Economics and Social Affairs, United Nation, 12A & 80G Under Department
                                    of Income Tax, Ministry of Finance Government of India and CSR1 Under Ministry Of
                                    Corporate Affairs, Government of India.</p>
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







    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endsection
