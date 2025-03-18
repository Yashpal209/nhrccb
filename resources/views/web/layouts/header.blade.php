<!DOCTYPE html>
<html lang="en">



<head>
    <title>National Human Rights and Crime Control Bureau</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="National Human Rights and Crime Control Bureau">
    <meta name="keyword" content="National Human Rights and Crime Control Bureau">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('public/web/assets/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('public/web/assets/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/web/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/web/assets/css/particle.css') }}" rel="stylesheet" />

    <link href="{{ asset('public/web/assets/css/style-mob.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="#"><img src="{{ asset('public/web/assets/images/logo/logo.png') }}"
                                alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <a href="#">
                                <a href="{{ url('/') }}">
                                    <h4>Home</h4>
                                </a>
                            </a>

                            <h4><a>About us</a></h4>
                            <ul>
                                <li><a href="{{ route('who_we_are') }}">Organisation</a></li>
                                <li><a href="{{ route('what_we_do') }}">Mission/Vision</a></li>
                                <li><a href="{{ route('rules_regulations') }}">Act/Rules</a></li>
                                <li><a href="{{ route('govt_recognition') }}">Recognitions</a></li>
                                <li><a href="{{ route('collaboration') }}">Collaboration</a></li>
                                <li><a href="{{ route('PresidentMessage') }}">National President</a></li>
                                <li><a href="{{ route('whos_who') }}">Who's Who</a></li>
                            </ul>
                            <h4>Our Works</h4>
                            <ul>
                                <li><a href="{{ route('HumanRights') }}">Human Rights</a></li>
                                <li><a href="{{ route('WomenRights') }}">Women Rights</a></li>
                                <li><a href="{{ route('ChildRights') }}">Child Rights</a></li>
                                <li><a href="{{ route('ConsumerRights') }}">Consumer Rights</a></li>
                                <li><a href="{{ route('RTI') }}">Rights to Information</a></li>

                            </ul>

                            <h4>Publication</h4>
                            <ul>
                                <li><a href="{{ route('monthly_report') }}">Monthly Report</a></li>
                                <li><a href="{{ route('annual_report') }}">Annual Report</a></li>
                                <li><a href="{{ route('souvenier') }}">Souvenier</a></li>
                                <li><a href="{{ route('propectus') }}">Prospectus</a></li>
                                <li><a href="{{ route('journal') }}">Journal</a></li>
                                <li><a href="{{ route('official_notification') }}">Official/Notification</a></li>
                                <li><a href="{{ route('rule_book') }}">Rulebook</a></li>
                                <li><a href="{{ route('convo_report') }}">Convocation Report</a></li>
                            </ul>
                            <h4>Media</h4>
                            <ul>
                                <li><a href="{{ route('acknowledgement') }}">Acknowledgement</a></li>
                                <li><a href="{{ route('GovtLetter') }}">Govt. Letters</a></li>
                                <li><a href="{{ route('Photos') }}">Event Gallery</a></li>
                                <li><a href="{{ route('PrintMedia') }}">Print Media</a></li>
                                <li><a href="{{ route('WebMedia') }}">Web Media</a></li>
                                <li><a href="{{ route('VideoGallery') }}">Video Gallery</a></li>
                                <li><a href="{{ route('PressRelease') }}">Press Release</a></li>
                            </ul>
                            <h4>Event</h4>
                            <ul>
                                <li><a href="{{ route('international_event') }}">International</a></li>
                                <li><a href="{{ route('national_event') }}">National</a></li>
                                <li><a href="{{ route('state_event') }}">State</a></li>
                                <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                <li><a href="{{ route('award_ceremony') }}">Award Ceremony</a></li>
                                <li><a href="{{ route('special_event') }}">Special Event</a></li>
                                <li><a href="{{ route('awareness_programme') }}">Awareness Programme</a></li>
                            </ul>
                            <h4>Our Cell/Unit</h4>
                            <ul>
                                <li><a href="{{ route('LegalCell') }}">Legal Cell</a></li>
                                <li><a href="{{ route('EducationalCell') }}">Educational Cell</a></li>
                                <li><a href="{{ route('DoctorCell') }}">Doctor Cell</a></li>
                                <li><a href="{{ route('ChildRightsProCell') }}">Child Rights Protection Cell</a></li>
                                <li><a href="{{ route('RtiCell') }}">RTI Cell</a></li>
                                <li><a href="{{ route('MediaCell') }}">Media Cell</a></li>
                                <li><a href="{{ route('TRProCell') }}">Tribal Rights Protection Cell</a></li>
                                <li><a href="{{ route('CrimeControlUnit') }}">Crime Control Cell</a></li>
                                <li><a href="{{ route('AntiCorruptionCell') }}">Anti Corruption Cell</a></li>
                                <li><a href="{{ route('AntiHumanTrfCell') }}">Anti Human Trafficking Cell</a></li>
                            </ul>
                            <h4>Team</h4>
                            <ul>
                                <li><a href="{{ route('NationalTeam') }}">National Team</a></li>
                                <li><a href="{{ route('ZoneTeam') }}">Zone Team</a></li>
                                <li><a href="{{ route('StateTeam') }}">State Team</a></li>
                                <li><a href="{{ route('DivisionTeam') }}">Division Team</a></li>
                                <li><a href="{{ route('DistrictTeam') }}">District Team</a></li>
                                <li><a href="{{ route('BlockTeam') }}">Block Team</a></li>
                                <li><a href="#">Active Member</a></li>
                                <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                <li><a href="{{ route('interns') }}">Interns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#"></a>
                                </li>
                                <li><a href="#">Phone: +91 9102224365 , +91 9893151900</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO AND MENU SECTION -->
        <div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="wed-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('public/web/assets/images/logo/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="wed-logo-2">
                            <a href="index">
                                <img class="img-fluid"
                                    src="{{ asset('public/web/assets/images/logo-ministrytrans.webp') }}"
                                    alt="" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container-fluid">
                <div class="row text-center justify-content-center" style="background-color:#102366">
                    <div class="col-md-12">
                        <div class="main-menu d-flex justify-content-center ">
                            <ul>
                                <li><a href="{{ route('home') }}"><i style="font-size: 22px" class="fa  fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="about-menu">
                                    <a href="#" class="mm-arr">About us <span><small
                                                class="text-light">+</small></span></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('who_we_are') }}">Organisation</a></li>
                                                        <li><a href="{{ route('what_we_do') }}">Mission/Vision</a>
                                                        </li>
                                                        <!-- <li><a href="{{ route('how_we_works') }}">How we Works</a></li> -->
                                                        <li><a href="{{ route('rules_regulations') }}">Act/Rules</a>
                                                        </li>
                                                        <li><a href="{{ route('govt_recognition') }}">Recognitions</a>
                                                        </li>
                                                        <li><a href="{{ route('collaboration') }}">Collaboration</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('PresidentMessage') }}">National
                                                                President</a></li>
                                                        <li><a href="national_patron">National Patron</a></li>
                                                        <li><a href="national_advisor">National Advisor</a></li>
                                                        <li><a href="office_staff">Office Staff</a></li>
                                                        <li><a href="{{ route('whos_who') }}">Who's Who</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="work-menu">
                                    <a href="#" class="mm-arr">Our Works <small
                                            class="text-light">+</small></a>

                                    <div class="mm-pos">
                                        <div class="work-mm m-menu ">
                                            <div class="m-menu-inn">

                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('HumanRights') }}">Human Rights</a></li>
                                                        <li><a href="{{ route('WomenRights') }}">Women Rights</a></li>
                                                        <li><a href="{{ route('ChildRights') }}">Child Rights</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('ConsumerRights') }}">Consumer
                                                                Rights</a></li>
                                                        <li><a href="{{ route('RTI') }}">Rights to Information</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="issue-menu">
                                    <a href="#" class="mm-arr">Publication<small
                                            class="text-light">+</small></a>

                                    <div class="mm-pos">
                                        <div class="issue-mm m-menu">
                                            <div class="m-menu-inn">


                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('monthly_report') }}">Monthly Report</a>
                                                        </li>
                                                        <li><a href="{{ route('annual_report') }}">Annual Report</a>
                                                        </li>
                                                        <li><a href="{{ route('souvenier') }}">Souvenier</a></li>
                                                        <li><a href="{{ route('propectus') }}">Prospectus</a></li>

                                                        <!-- <li><a href="#">Disability Rights</a></li>
                                                        <li><a href="#">Right to Education</a></li> -->
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('journal') }}">Journal</a></li>
                                                        <li><a
                                                                href="{{ route('official_notification') }}">Official/Notification</a>
                                                        </li>
                                                        <li><a href="{{ route('rule_book') }}">Rulebook</a></li>
                                                        <li><a href="{{ route('convo_report') }}">Convocation
                                                                Report</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li class="admi-menu">
                                    <a href="#" class="mm-arr">Administration</a>
                                 
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ route('PresidentMessage') }}">
                                                            <img src="{{ asset('public/web/assets/images/h-about1.jpg') }}" alt="">
                                                            <span>National President</span>
                                                        </a>
                                                    </div>

                                                    <a href="{{ route('PresidentMessage') }}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ route('NationalPatron') }}">
                                                            <img src="{{ asset('public/web/assets/images/h-adm1.jpg') }}" alt="">
                                                            <span>National Patron</span>
                                                        </a>
                                                    </div>
                                                    <p></p>
                                                    <a href="{{ route('NationalPatron') }}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ route('NationalAdvisor') }}">
                                                            <img src="{{ asset('public/web/assets/images/h-cam1.jpg') }}" alt="">
                                                            <span>National Advisor</span>
                                                        </a>
                                                    </div>

                                                    <a href="{{ route('NationalAdvisor') }}" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="{{ route('OfficeStaff') }}">
                                                            <img src="{{ asset('public/web/assets/images/h-res1.jpg') }}" alt="">
                                                            <span>Office Staff</span>
                                                        </a>
                                                    </div>

                                                    <a href="{{ route('OfficeStaff') }}" class="mm-r-m-btn">Read more</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="media-menu">
                                    <a href="#" class="mm-arr">Media <small class="text-light">+</small></a>

                                    <div class="mm-pos">
                                        <div class="media-mm m-menu">
                                            <div class="m-menu-inn">


                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a
                                                                href="{{ route('acknowledgement') }}">Acknowledgement</a>
                                                        </li>
                                                        <li><a href="{{ route('GovtLetter') }}">Govt. Letters</a>
                                                        </li>
                                                        <li><a href="{{ route('OfficerInteraction') }}">Officer
                                                                Intercation</a>
                                                        </li>
                                                        <li><a href="{{ route('ActionTakRepo') }}">Action Take
                                                                Report</a>
                                                        </li>
                                                        <li><a href="{{ route('Photos') }}">Event Gallery</a></li>
                                                        <li><a href="{{ route('PrintMedia') }}">Print Media</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('WebMedia') }}">Web Media</a></li>
                                                        <li><a href="{{ route('VideoGallery') }}">Video Gallery</a>
                                                        </li>
                                                        <li><a href="electronic_media">Press Release</a>
                                                        </li>
                                                        {{-- <li><a href="{{ route('interview') }}">Interview</a></li> --}}

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-menu">
                                    <a href="#" class="mm-arr">Activities <small
                                            class="text-light">+</small></a>

                                    <div class="mm-pos">
                                        <div class="event-mm m-menu">
                                            <div class="m-menu-inn">

                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('Awards') }}">Awards</a></li>
                                                        <li><a href="{{ route('Seminar') }}">Seminar</a></li>
                                                        <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                                        <li><a href="{{ route('standWithNation') }}">Stand with
                                                                Nation</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('RuralAwareness') }}">Rural
                                                                Awareness</a></li>
                                                        <li><a href="{{ route('EducationalAwareness') }}">Educational
                                                                Awareness</a></li>
                                                        <li><a href="{{ route('Covid19') }}">Covid-19</a></li>
                                                        <li><a href="{{ route('SocialWork') }}">Social Work</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="gallery-menu">
                                    <a href="#" class="mm-arr">Awardee <small class="text-light">+</small></a>

                                    <div class="mm-pos">
                                        <div class="gallery-mm m-menu">
                                            <div class="m-menu-inn">

                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('national_level') }}">National
                                                                Level</a></li>
                                                        <li><a href="{{ route('state_level') }}">State Level </a>
                                                        </li>
                                                        <li><a href="{{ route('district_level') }}">District
                                                                Level</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>

                                                        <li><a href="{{ route('community_level') }}">Community
                                                                Level</a></li>
                                                        <li><a href="{{ route('international_level') }}">International
                                                                Level</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ourcellunit-menu">
                                    <a href="#" class="mm-arr">Our Cell/Unit <small
                                            class="text-light">+</small></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="ourcellunit-mm m-menu">
                                            <div class="m-menu-inn">


                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('RtiCell') }}">RTI Cell</a></li>
                                                        <li><a href="{{ route('LegalCell') }}">Legal Cell</a></li>
                                                        <li><a href="{{ route('DoctorCell') }}">Doctor Cell</a></li>
                                                        <li><a href="{{ route('MediaCell') }}">Media Cell</a></li>
                                                        <li><a href="{{ route('EducationalCell') }}">Educational
                                                                Cell</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('CrimeControlUnit') }}">Crime Control
                                                                Cell</a></li>
                                                        <li><a href="{{ route('AntiCorruptionCell') }}">Anti
                                                                Corruption Cell</a></li>
                                                        <li><a href="{{ route('ChildRightsProCell') }}">Child Rights
                                                                Protection Cell</a></li>
                                                        <li><a href="{{ route('TRProCell') }}">Tribal Rights
                                                                Protection Cell</a></li>
                                                        <li><a href="{{ route('AntiHumanTrfCell') }}">Anti Human
                                                                Trafficking Cell</a></li>

                                                    </ul>
                                                </div>
                                                <!-- <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('LegalCell') }}">Legal Cell</a></li>
                                                        <li><a href="{{ route('EducationalCell') }}">Educational Cell</a></li>
                                                        <li><a href="{{ route('DoctorCell') }}">Doctor Cell</a></li>
                                                        <li><a href="{{ route('ChildRightsProCell') }}">Child Rights Protection Cell</a></li>
                                                        <li><a href="{{ route('RtiCell') }}">RTI Cell</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="{{ route('MediaCell') }}">Media Cell</a></li>
                                                        <li><a href="{{ route('TRProCell') }}">Tribal Rights Protection Cell</a></li>
                                                        <li><a href="{{ route('CrimeControlUnit') }}">Crime Control Cell</a></li>
                                                        <li><a href="{{ route('AntiCorruptionCell') }}">Anti Protect Cell</a></li>
                                                        <li><a href="{{ route('AntiHumanTrfCell') }}">Anti Human Trafficking Cell</a></li>

                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ourteam-menu">
                                    <a href="#" class="mm-arr"> Team <small class="text-light">+</small></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="ourteam-mm m-menu">
                                            <div class="m-menu-inn">

                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('ZoneTeam') }}">Zone Team</a></li>
                                                        <li><a href="{{ route('StateTeam') }}">State Team</a></li>
                                                        <li><a href="{{ route('NationalTeam') }}">National Team</a>
                                                        </li>
                                                        <li><a href="{{ route('DivisionTeam') }}">Division Team</a>
                                                        </li>
                                                        <li><a href="{{ route('DistrictTeam') }}">District Team</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('interns') }}">Interns</a></li>
                                                        <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                                        <li><a href="{{ route('BlockTeam') }}">Block Team</a></li>
                                                        <li><a href="#">Active Member</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('JoinUs') }}">Join Us</a>
                                </li>
                                <li><a href="{{ route('verification') }}">Verification</a>
                                </li>
                                <li class="complain-menu">
                                    <a href="about-us" class="mm-arr">Complaint <small
                                            class="text-light">+</small></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="complain-mm m-menu">
                                            <div class="m-menu-inn">

                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('newComplain') }}">New Complain</a>
                                                        </li>
                                                        <li><a href="{{ route('ComplainStatus') }}">Complain
                                                                Status</a></li>
                                                        <li><a href="{{ route('ComplainDashboard') }}">Complain
                                                                Dashboard</a></li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="contact-menu">
                                    <a href="#" class="mm-arr">Contact Us <small
                                            class="text-light">+</small></a>
                                    <div class="mm-pos">
                                        <div class="contact-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('ContactUs') }}">Office Address</a>
                                                        </li>
                                                        <li><a href="#">Officers Directory</a></li>
                                                        <li><a href="#">Help Line</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="tranning-menu">
                                    <a href="#" class="mm-arr">Tranning & Resarch <small
                                            class="text-light">+</small></a>
                                    <div class="mm-pos">
                                        <div class="tranning-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1 ">
                                                    <ul>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle "
                                                                    data-toggle="dropdown">Training</a>
                                                                <div class="dropdown-menu ">
                                                                    <!-- Change to bg-dark for a dark theme -->
                                                                    <a class="dropdown-item "
                                                                        href="#">Internship Guideline</a>
                                                                    <a class="dropdown-item " href="#">Short
                                                                        Term</a>
                                                                    <a class="dropdown-item "
                                                                        href="#">Winter</a>
                                                                    <a class="dropdown-item "
                                                                        href="#">Summer</a>
                                                                    <a class="dropdown-item " href="#">Apply
                                                                        Internship</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle "
                                                                    data-toggle="dropdown">Short Tearm Course </a>
                                                                <div class="dropdown-menu ">
                                                                    <a class="dropdown-item " href="#"> Course
                                                                        Guideline</a>
                                                                    <a class="dropdown-item " href="#">Offerd
                                                                        Course</a>
                                                                    <a class="dropdown-item "
                                                                        href="#">Addmission</a>
                                                                    <a class="dropdown-item " href="#">Our
                                                                        Aluminai</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle "
                                                                    data-toggle="dropdown">Workshop</a>
                                                                <div class="dropdown-menu ">
                                                                    <a class="dropdown-item " href="#"> Workshop
                                                                        Guideline</a>
                                                                    <a class="dropdown-item " href="#">Workshop
                                                                        Cunduct</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Education Institute Visit</a></li>
                                                        <li><a href="#">Resarch Studies/Report</a></li>
                                                        <li><a href="#"></a>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle "
                                                                    data-toggle="dropdown">Compitition</a>
                                                                <div class="dropdown-menu ">
                                                                    <a class="dropdown-item "href="#"> Guideline</a>
                                                                    <a class="dropdown-item "href="#">Essay </a>
                                                                    <a class="dropdown-item "href="#">Debate </a>
                                                                    <a class="dropdown-item "href="#">Speech </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li class="registration-menu">
                                    <a href="about-us" class="mm-arr">Registration</a>
                                  
                                    <div class="mm-pos">
                                        <div class="registration-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="#">
                                                            <img src="{{ asset('public/web/assets/images/menubar/about.webp') }}" alt="">
                                                            <span>Registration</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="#">International Programme</a></li>
                                                        <li><a href="#">National Programme</a></li>
                                                        <li><a href="#">State Programme</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>

                                                        <li><a href="#">District Programme</a></li>
                                                        <li><a href="#">Award</a></li>
                                                        <li><a href="#">Internship</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <!-- <li><a href="{{ route('trainingResearch') }}">Training and Research</a>
                                </li>
                                <li><a href="#">Donation</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--END HEADER SECTION-->
