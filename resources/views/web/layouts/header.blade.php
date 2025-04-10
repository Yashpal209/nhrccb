<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        {{ isset($title) ? $title . ' | National Human Rights and Crime Control Bureau' : 'National Human Rights and Crime Control Bureau' }}
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="National Human Rights and Crime Control Bureau">
    <meta name="keyword" content="National Human Rights and Crime Control Bureau">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('public/web/assets/images/logo/logo.png') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <h4>About us</h4>
                            <ul>
                                <li><a href="{{ route('who_we_are') }}">Organisation</a></li>
                                <li><a href="{{ route('what_we_do') }}">Mission/Vision</a></li>
                                <li><a href="{{ route('rules_regulations') }}">Act/Rules</a></li>
                                <li><a href="{{ route('govt_recognition') }}">Recognitions</a></li>
                                <li><a href="{{ route('collaboration') }}">Collaboration</a></li>
                                <li><a href="{{ route('PresidentProfile') }}">National President Profile</a></li>
                                <li><a href="{{ route('PresidentMessage') }}">National President Message</a></li>
                                <li><a href="{{ route('whos_who') }}">Who's Who</a></li>
                                <li><a href="{{ route('NationalPatronAdvisor') }}"> National Patron / Advisor </a></li>
                                <li><a href="{{ route('NationalExecutive') }}">National Executive</a></li>
                                <li><a href="{{ route('StatePresident') }}">State President</a></li>
                                <li><a href="{{ route('Officials') }}">Officials</a></li>
                            </ul>
                            <h4>Our Works</h4>
                            <ul>
                                <li><a href="{{ route('HumanRights') }}">Human Rights</a></li>
                                <li><a href="{{ route('WomenRights') }}">Women Rights</a></li>
                                <li><a href="{{ route('ChildRights') }}">Child Rights</a></li>
                                <li><a href="{{ route('ConsumerRights') }}">Consumer Rights</a></li>
                                <li><a href="{{ route('RTI') }}">Rights to Information</a></li>
                                <li><a href="{{ route('DisabilityRights') }}">Disability Rights</a></li>
                                <li><a href="{{ route('RightToEducation') }}">Right to Education</a></li>
                                <li><a href="{{ route('AdvocateRights') }}">Advocate Rights</a></li>
                                <li><a href="{{ route('LGBTRights') }}">LGBT Rights</a></li>
                                <li><a href="{{ route('DoctorRights') }}">Doctor Rights</a></li>
                                <li><a href="{{ route('TribalRights') }}">Tribal Rights</a></li>
                                <li><a href="{{ route('PressRights') }}">Press Rights</a></li>
                                <li><a href="{{ route('CrimeControlAct') }}">Crime Control Act</a></li>
                            </ul>
                            <h4>Publication</h4>
                            <ul>
                                <li><a href="{{ route('annual_report') }}">Annual Report</a></li>
                                <li><a href="{{ route('monthly_report') }}">Monthly Report</a></li>
                                <li><a href="{{ route('official_notification') }}">Official/Notification</a></li>
                                <li><a href="#">Acts Related Human Rights</a></li>
                                <li><a href="{{ route('convo_report') }}">Convocation Report</a></li>
                                <li><a href="{{ route('propectus') }}">Prospectus</a></li>
                                <li><a href="{{ route('souvenier') }}">Souvenier</a></li>
                                <li><a href="{{ route('journal') }}">Journal</a></li>
                                <li><a href="{{ route('rule_book') }}">Rulebook</a></li>
                                <li><a href="{{ route('book') }}">Books</a></li>
                            </ul>
                            <h4>Media</h4>
                            <ul>
                                <li><a href="{{ route('acknowledgement') }}">Acknowledgement</a></li>
                                <li><a href="{{ route('GovtLetter') }}">Govt. Letters</a></li>
                                <li><a href="{{ route('OfficerInteraction') }}">Officer Intercation</a></li>
                                <li><a href="{{ route('ActionTakRepo') }}">Action Take Report</a></li>
                                <li><a href="#">Action Take Letter</a></li>
                                <li><a href="#">Articles</a></li>
                                <li><a href="{{ route('PrintMedia') }}">Print Media</a></li>
                                <li><a href="{{ route('WebMedia') }}">Web Media</a></li>
                                <li><a href="{{ route('Photos') }}">Event Gallery</a></li>
                                <li><a href="{{ route('VideoGallery') }}">Video Gallery</a></li>
                                <li><a href="{{ route('PressRelease') }}">Press Release</a></li>
                            </ul>
                            <h4>Activities</h4>
                            <ul>
                                <li><a href="{{ route('Awards') }}">Awards</a></li>
                                <li><a href="{{ route('Seminar') }}">Seminar</a></li>
                                <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                <li><a href="{{ route('EducationalAwareness') }}">Social Works</a></li>
                                <li><a href="{{ route('standWithNation') }}">Stand withNation</a></li>
                                <li><a href="{{ route('SocialWork') }}">Social Work</a></li>
                                <li><a href="#">Health Camps</a></li>
                                <li><a href="#">Blood Donation Camps</a></li>
                                <li><a href="#">Special Days Camps</a></li>
                                <li><a href="{{ route('RuralAwareness') }}">RuralAwareness</a></li>
                                <li><a href="{{ route('Covid19') }}">Covid-19</a></li>
                            </ul>
                            <h4>Awardee</h4>
                            <ul>
                                <li><a href="{{ route('nelsonmandelahumanrights') }}">Nelson Mandela Human Rights Award</a></li>
                                <li><a href="{{ route('mghra') }}">Mahatma Gandhi Human Rights Award</a></li>
                                <li><a href="{{ route('braa') }}">Bhim Rao Ambedkar Award</a></li>
                                <li><a href="{{ route('nirpd') }}">NHRCCB India Pride Award</a></li>
                                <li><a href="{{ route('nhra') }}">NHRCCB Human Rights Award</a></li>
                                <li><a href="{{ route('nla') }}">NHRCCB Leadership Award</a></li>
                                <li><a href="{{ route('nsa') }}">NHRCCB Special Award</a></li>
                                <li><a href="{{ route('shra') }}">State Human Rights Award</a></li>
                                <li><a href="{{ route('sla') }}">State Leadership Award</a></li>
                                <li><a href="{{ route('ssa') }}">State Special Award</a></li>
                                <li><a href="{{ route('community_level') }}">Competition Level</a></li>
                                <li><a href="{{ route('district_level') }}">District Level</a></li>
                            </ul>
                            {{-- <h4>Event</h4>
                            <ul>
                                <li><a href="{{ route('international_event') }}">International</a></li>
                                <li><a href="{{ route('national_event') }}">National</a></li>
                                <li><a href="{{ route('state_event') }}">State</a></li>
                                <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                <li><a href="{{ route('award_ceremony') }}">Award Ceremony</a></li>
                                <li><a href="{{ route('special_event') }}">Special Event</a></li>
                                <li><a href="{{ route('awareness_programme') }}">Awareness Programme</a></li>
                            </ul> --}}
                            <h4>Our Cell/Unit</h4>
                            <ul>
                                <li><a href="{{ route('RtiCell') }}">RTI Cell</a></li>
                                <li><a href="{{ route('LegalCell') }}">Legal Cell</a></li>
                                <li><a href="{{ route('DoctorCell') }}">Doctor Cell</a></li>
                                <li><a href="{{ route('MediaCell') }}">Media Cell</a></li>
                                <li><a href="{{ route('EducationalCell') }}">Educational Cell</a></li>
                                <li><a href="{{ route('CrimeControlUnit') }}">Crime Control Cell</a></li>
                                <li><a href="{{ route('AntiCorruptionCell') }}">Anti Corruption Cell</a></li>
                                <li><a href="{{ route('ChildRightsProCell') }}">Child Rights Protection Cell</a></li>
                                <li><a href="{{ route('TRProCell') }}">Tribal Rights Protection Cell</a></li>
                                <li><a href="{{ route('AntiHumanTrfCell') }}">Anti Human Trafficking Cell</a></li>
                            </ul>
                            <h4>Team</h4>
                            <ul>
                                {{-- <li><a href="{{ route('ZoneTeam') }}">Zone Team</a></li> --}}
                                <li><a href="{{ route('BlockTeam') }}">Block Team</a></li>
                                <li><a href="{{ route('DistrictTeam') }}">District Team</a></li>
                                <li><a href="{{ route('DivisionTeam') }}">Division Team</a></li>
                                <li><a href="{{ route('StateTeam') }}">State Team</a></li>
                                <li><a href="{{ route('NationalTeam') }}">National Team</a></li>
                                <li><a href="{{ route('interns') }}">Interns</a></li>
                                <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                <li><a href="{{route('activemember')}}">Active Member</a></li>
                            </ul>
                            <h4>Training & Research</h4>
                            <ul>
                                <li><a href="{{ route('internshipGuideline') }}">Internship Guideline</a></li>
                                <li><a href="{{ route('shortTerm') }}">Short Term Internship</a></li>
                                <li><a href="{{ route('winter') }}">Winter Internship</a></li>
                                <li><a href="{{ route('summer') }}">Summer Internship</a></li>
                                <li><a href="{{ route('apply') }}">Apply for Internship</a></li>
                                <li><a href="#">Course Guideline</a></li>
                                <li><a href="#">Offered Courses </a></li>
                                <li><a href="#"> Course Admission </a></li>
                                <li><a href="#">Alumni </a></li>
                                <li><a href="#">Workshop Guideline </a></li>
                                <li><a href="#">Workshop Conduct </a></li>
                                <li><a href="#">Essay Competition </a></li>
                                <li><a href="#">Debate Competition </a></li>
                                <li><a href="#">Speech Competition </a></li>
                                <li><a href="#">Our Competition Winners </a></li>
                                <li><a href="#">Educational Visit</a></li>
                                <li><a href="#">Research Studies/Reports</a></li>
                            </ul>
                            <h4>Registration</h4>
                            <ul>
                                <li><a href="#">International Programme</a></li>
                                <li><a href="#">National Programme</a></li>
                                <li><a href="#">State Programme</a></li>
                                <li><a href="#">Competition Registration</a></li>
                                <li><a href="#">Kit Registration</a></li>
                            </ul>
                            <h2><a href="{{ route('JoinUs') }}">Join Us</a></h2>
                            <h4>Complaint</h4>
                            <ul>
                                <li><a href="{{ route('newComplain') }}">New Complain</a></li>
                                <li><a href="{{ route('ComplainStatus') }}">Complain Status</a></li>
                                <li><a href="{{ route('ComplainDashboard') }}">Complain Dashboard</a></li>
                            </ul>
                            <h4>Contact us</h4>
                            <ul>
                                <li><a href="{{ route('ContactUs') }}">Office Address</a></li>
                                <li><a href="{{route('officeDirectory')}}">Officers Directory</a></li>
                                <li><a href="{{route('HelpLine')}}">Help Line</a></li>
                                <li><a href="#">Download</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('JoinUs') }}" class="fw-bold text-danger" style="font-size: 20px">Join Us</a></li>
                                <li><a href="{{ route('verification') }}">Verification</a></li>
                                <li><a href="{{ route('donation') }}">Donation</a></li>
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
                                <li><a href="#"></a></li>
                                <li><a href="tel:9102224365">Phone: +91 91022 24365</a></li>
                                <li>
                                    <marquee behavior="scroll" direction="left" scrollamount="5">
                                        <a href="tel:9111730311"style="line-height:0px;border:none">HELPLINE NO : +91
                                            91117 30311</a> |
                                        <a href="tel:9111730311"style="line-height:0px;border:none">CONTACT FOR
                                            MEMBERSHIP</a>
                                    </marquee>
                                </li>
                                <li><a href="#"></a></li>
                                <li><a href="https://nhrccb.org.in/" class="blink">OLD WEBSITE</a></li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="https://www.youtube.com/channel/UCJvCufQ4ARy84rZAQC2N0Kw"><i
                                            class="fab fa-youtube text-danger"></i></a></li>
                                <li><a href="https://t.me/nhrccb"><i class="fab fa-telegram text-white"></i></a></li>
                                <li><a href="https://twitter.com/nhrccb"><i class="fab fa-twitter text-info"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/nhrccb"><i
                                            class="fab fa-facebook text-info"></i></a></li>
                                <li><a href="https://www.instagram.com/nhrccbindia"><i
                                            class="fab fa-instagram text-danger"></i></a></li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                {{-- <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li> --}}
                                
                                <li><a href="admin">Admin Login</a></li>
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
                    <div class="col-md-8 p-0">
                        <div class="wed-logo mob-hide text-start">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('public/web/assets/images/logo/Logofull.png') }}"
                                    alt="" />
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-md-7" style="padding: 0px 15px; align-content: center; text-align: center;">
                        <h3 style="color: red ;margin:5px 0px;">राष्ट्रीय मानवाधिकार एवं अपराध नियंत्रण ब्यूरो</h3>
                        <h3 style="font-size: 18px ;margin:0px;">National Human Rights and Crime Control Bureau</h3>
                        <h5 style="font-size: 11px;font-weight:700">(GOVT.REGD.483/2017,INCORPORATION UNDER THE
                            LEGISLATION OG GOVT.OF INDIA,I.T.A. 1882)</h5>
                        <h5>REGD. UNITED NATION (UNDESA), NITI AAYOG (GOVT. OF INDIA)</h5>
                        <h4 style="font-size: 13px;font-weight:700; color: red;">A Non-Govt. Organisation Working for the Protection and Promotion of Human Rights</h4>
                    </div> --}}
                    {{-- <div class="col-md-7 p-0 mob-hide">
                        <div class="wed-logo-1">
                            <a href="{{ route('home') }}">
                                <img class="img-fluid" src="{{ asset('public/web/assets/images/logo/Logo-replace-white.png') }}" alt="" />
                            </a>
                        </div>
                    </div> --}}

                    <div class="col-md-4" style="align-content: center">
                        <div class="wed-logo-2 d-flex">
                            <center>
                                <a href="{{ route('home') }}" class="d-flex mt-4">
                                    <img class="img-fluid"src="{{ asset('public/web/assets/images/logo/nhrccb.png') }}"
                                        alt="" />
                                </a>
                            </center>
                            <img class="img-fluid"
                                style="width: 30%"src="{{ asset('public/web/assets/images/logo/iso.webp') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
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
                                <li><a href="{{ route('home') }}"><i style="font-size: 15px" class="fa fa-home"
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
                                                        <li><a href="{{ route('rules_regulations') }}">Act/Rules</a>
                                                        </li>
                                                        <li><a
                                                                href="{{ route('govt_recognition') }}">Recognitions</a>
                                                        </li>
                                                        <li><a href="{{ route('collaboration') }}">Collaboration</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle "
                                                                    data-toggle="dropdown">National President</a>
                                                                <div class="dropdown-menu ">
                                                                    <a
                                                                        class="dropdown-item "href="{{ route('PresidentProfile') }}">
                                                                        Profile</a>
                                                                    <a
                                                                        class="dropdown-item "href="{{ route('PresidentMessage') }}">Message</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle "
                                                                    data-toggle="dropdown">Who's Who</a>
                                                                <div class="dropdown-menu ">
                                                                    <a
                                                                        class="dropdown-item "href="{{ route('NationalPatronAdvisor') }}">
                                                                        National Patron / Advisor </a>
                                                                    <a
                                                                        class="dropdown-item "href="{{ route('NationalExecutive') }}">National
                                                                        Executive</a>
                                                                    <a
                                                                        class="dropdown-item "href="{{ route('StatePresident') }}">State
                                                                        President</a>
                                                                    <a
                                                                        class="dropdown-item "href="{{ route('Officials') }}">Officials</a>
                                                                </div>
                                                            </div>
                                                        </li>
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
                                                        <li><a href="{{ route('HumanRights') }}">Human Rights</a>
                                                        </li>
                                                        <li><a href="{{ route('WomenRights') }}">Women Rights</a>
                                                        </li>
                                                        <li><a href="{{ route('ChildRights') }}">Child Rights</a>
                                                        </li>
                                                        <li><a href="{{ route('ConsumerRights') }}">Consumer
                                                                Rights</a></li>
                                                        <li><a href="{{ route('RTI') }}">Rights to Information</a>
                                                        </li>
                                                        <li><a href="{{ route('DisabilityRights') }}">Disability
                                                                Rights</a></li>
                                                        <li><a href="{{ route('RightToEducation') }}">Right to
                                                                Education</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('AdvocateRights') }}">Advocate
                                                                Rights</a></li>
                                                        <li><a href="{{ route('LGBTRights') }}">LGBT Rights</a></li>
                                                        <li><a href="{{ route('DoctorRights') }}">Doctor Rights</a>
                                                        </li>
                                                        <li><a href="{{ route('TribalRights') }}">Tribal Rights</a>
                                                        </li>
                                                        <li><a href="{{ route('PressRights') }}">Press Rights</a>
                                                        </li>
                                                        <li><a href="{{ route('CrimeControlAct') }}">Crime Control
                                                                Act</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="issue-menu">
                                    <a href="#" class="mm-arr">Publication <small
                                            class="text-light">+</small></a>
                                    <div class="mm-pos">
                                        <div class="issue-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="{{ route('annual_report') }}">Annual Report</a>
                                                        </li>
                                                        <li><a href="{{ route('monthly_report') }}">Monthly
                                                                Report</a></li>
                                                        <li><a
                                                                href="{{ route('official_notification') }}">Official/Notification</a>
                                                        </li>
                                                        <li><a href="">Acts Related Human Rights</a></li>
                                                        <li><a href="{{ route('convo_report') }}">Convocation
                                                                Report</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('propectus') }}">Prospectus</a></li>
                                                        <li><a href="{{ route('souvenier') }}">Souvenier</a></li>
                                                        <li><a href="{{ route('journal') }}">Journal</a></li>
                                                        <li><a href="{{ route('rule_book') }}">Rulebook</a></li>
                                                        <li><a href="{{ route('book') }}">Books</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
                                                                Intercation</a></li>
                                                        <li><a href="{{ route('ActionTakRepo') }}">Action Take
                                                                Report</a></li>
                                                        <li><a href="">Action Take Letter</a></li>
                                                        <li><a href="">Articles</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('PrintMedia') }}">Print Media</a></li>
                                                        <li><a href="{{ route('WebMedia') }}">Web Media</a></li>
                                                        <li><a href="{{ route('Photos') }}">Event Gallery</a></li>
                                                        <li><a href="{{ route('VideoGallery') }}">Video Gallery</a>
                                                        </li>
                                                        <li><a href="electronic_media">Press Release</a></li>
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
                                                        <li><a href="{{ route('EducationalAwareness') }}">Social
                                                                Works</a></li>
                                                        <li><a href="{{ route('standWithNation') }}">Stand with
                                                                Nation</a></li>
                                                        <li><a href="{{ route('SocialWork') }}">Social Work</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="#">Health Camps</a></li>
                                                        <li><a href="#">Blood Donation Camps</a></li>
                                                        <li><a href="#">Special Days Camps</a></li>
                                                        <li><a href="{{ route('RuralAwareness') }}">Rural
                                                                Awareness</a></li>
                                                        <li><a href="{{ route('Covid19') }}">Covid-19</a></li>
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
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">International Level</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('nelsonmandelahumanrights') }}">Nelson
                                                                        Mandela Human Rights Award</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">National Level</a>
                                                                <div class="dropdown-menu">
                                                                    <a
                                                                        class="dropdown-item"href="{{ route('mghra') }}">Mahatma
                                                                        Gandhi Human Rights Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('braa') }}">Bhim Rao Ambedkar
                                                                        Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('nirpd') }}">NHRCCB India
                                                                        Pride Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('nhra') }}">Nhrccb
                                                                        Human Rights Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('nla') }}">Nhrccb
                                                                        Leadership Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('nsa') }}">Nhrccb
                                                                        Special Award</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">State Level</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('shra') }}">State
                                                                        Human Rights Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('sla') }}">State
                                                                        Leadership Award</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('ssa') }}">State
                                                                        Special Award</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('community_level') }}">Competition
                                                                Level</a></li>
                                                        <li><a href="{{ route('district_level') }}">District
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
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ourteam-menu">
                                    <a href="#" class="mm-arr"> Teams <small class="text-light">+</small></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="ourteam-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        {{-- <li><a href="{{ route('ZoneTeam') }}">Zone Team</a></li> --}}
                                                        <li><a href="{{ route('BlockTeam') }}">Block Team</a></li>
                                                        <li><a href="{{ route('DistrictTeam') }}">District Team</a></li>
                                                        <li><a href="{{ route('DivisionTeam') }}">Division Team</a></li>
                                                        <li><a href="{{ route('StateTeam') }}">State Team</a></li>
                                                        <li><a href="{{ route('NationalTeam') }}">National Team</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="{{ route('interns') }}">Interns</a></li>
                                                        <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                                        <li><a href="{{ route('activemember') }}">Active Member</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="tranning-menu">
                                    <a href="#" class="mm-arr">Training & Research <small
                                            class="text-light">+</small></a>
                                    <div class="mm-pos">
                                        <div class="tranning-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">Internship</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('internshipGuideline') }}">Internship
                                                                        Guideline</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('shortTerm') }}">Short
                                                                        Term</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('winter') }}">Winter</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('summer') }}">Summer</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('apply') }}">Apply for
                                                                        Internship</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">Short Term Course</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Course
                                                                        Guideline</a>
                                                                    <a class="dropdown-item" href="#">Offered
                                                                        Courses</a>
                                                                    <a class="dropdown-item"
                                                                        href="#">Admission</a>
                                                                    <a class="dropdown-item" href="#">Our
                                                                        Alumni</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">Workshop</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Workshop
                                                                        Guideline</a>
                                                                    <a class="dropdown-item" href="#">Workshop
                                                                        Conduct</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="btn-group dropleft">
                                                                <a type="button" class="dropdown-toggle"
                                                                    data-toggle="dropdown">Competition</a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Guideline</a>
                                                                    <a class="dropdown-item" href="#">Essay</a>
                                                                    <a class="dropdown-item" href="#">Debate</a>
                                                                    <a class="dropdown-item" href="#">Speech</a>
                                                                    <a class="dropdown-item" href="#">Our
                                                                        Winners</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="#">Educational Visit</a></li>
                                                        <li><a href="#">Research Studies/Reports</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="registration-menu">
                                    <a href="#" class="mm-arr">Registration <small
                                            class="text-light">+</small></a></a>
                                    <div class="mm-pos">
                                        <div class="registration-mm m-menu" style="width:250px">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s3" style="width: 100%">
                                                    <ul>
                                                        <li><a href="#">International Programme</a></li>
                                                        <li><a href="#">National Programme</a></li>
                                                        <li><a href="#">State Programme</a></li>
                                                        <li><a href="#">Competition Registration</a></li>
                                                        <li><a href="#">Kit Registration</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('JoinUs') }}">Join Us</a></li>
                                <li class="complain-menu">
                                    <a href="#" class="mm-arr">Complaint <small
                                            class="text-light">+</small></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="complain-mm m-menu" style="width: 200px">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1" style="width:100%">
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
                                        <div class="contact-mm m-menu" style="width:200px">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1" style="width:100%">
                                                    <ul>
                                                        <li><a href="{{ route('ContactUs') }}">Office Address</a>
                                                        </li>
                                                        <li><a href="{{ route('officeDirectory') }}">Officers
                                                                Directory</a></li>
                                                        <li><a href="{{ route('HelpLine') }}">Help Line</a></li>
                                                        <li><a href="#">Download</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li><a href="{{ route('verification') }}">Verification</a>
                                </li>
                                <li><a href="{{ route('donation') }}">Donation</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--END HEADER SECTION-->
