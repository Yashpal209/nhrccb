<!-- FOOTER -->
<section class="wed-hom-footer pb-1 pt-0">
    <div class="container px-3">

        <div class="row  wed-foot-link-1">
        <div class="col-md-3">
                <h4 class=" fs-3">About Us</h4>
                <p align="justify">The National Human Rights and Crime Control Bureau (NHRCCB) is functioning with a commitment to the noble cause of human rights protection and promotion, justice, education, love, peace, harmony for all, friendship, and national and international integration through the exchange of ideas and ethos around the nation.</p>
                <h4>SOCIAL MEDIA</h4>
                <ul>
                    <li><a href="https://www.youtube.com/channel/UCJvCufQ4ARy84rZAQC2N0Kw"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://t.me/nhrccb"><i class="fab fa-telegram text-white"></i></a></li>
                    <li><a href="https://twitter.com/nhrccb"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/nhrccb"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/nhrccbindia"><i class="fab fa-instagram "></i></a></li>
                    {{-- <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a> --}}
                    </li>
                </ul>
            </div>
            <div class="col-md-2 text-center">
                <div class="text-center">
                <h4 class="fs-3">Quick Links</h4>           
                    <p ><a href="{{route('monthly_report')}}">Monthly Report</a></p>
                    <p><a href="{{route('annual_report')}}">Annual Report</a></p>
                    <p><a href="{{route('souvenier')}}">Souvenir</a></p>
                    <p><a href="{{route('journal')}}">Journal</a></p>
                    <p><a href="join_us">Join Us</a></p>
                    <p><a href="{{route('term')}}">Term & Condition</a></p>
                    <p><a href="{{route('privacyPolicy')}}">Privacy Policy</a></p>
                </div>
               
            </div>
            <div class="col-md-4">
            <h4 class="pb-0 fs-3 mb-3">Contact Us</h4>
                <p><b>Head Office</b></p>
                <p><b>NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU</b><br>
                    Plot.No- 218, Second Floor, Malik Plaza ,Block –A ,Pocket -2 ,Sector ,17 ,Dwarka ,New Delhi -110078 </p>
                <p>Phone: <a href="#!">+91 9310694151, +91 9102224365 </a></p>

                <p><b>National Administration Office</b></p>
                <p><b>NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU</b><br>
                    Quarter No. Ls/48, First Floor, Harmu Housing Colony Near Kartik Chowk, Ranchi, Jharkhand -834002
                    </p>
                <p>Phone: <a href="#!">+91 9102224365</a></p>
            </div>

            <div class="col-md-3">
                <h4 class="fs-3">WORKING HOURS</h4>
                <p>Monday  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10:00 AM - 5:00 PM </p>
                <p>Tuesday  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10:00 AM - 5:00 PM </p>
                <p>Wednesday  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 10:00 AM - 5:00 PM </p>
                <p>Thursday  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10:00 AM - 5:00 PM </p>
                <p>Friday  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 AM - 5:00 PM </p>
                <p>Saturday  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;10:00 AM - 5:00 PM </p>

            </div>
        </div>
    </div>
</section>

<!-- COPY RIGHTS -->
<section class="wed-rights">
    <div class="container">
        <div class="row">
            <div class="copy-right">
                <p>Copyrights © 2024 ALL RIGHTS RESERVED BY NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU</p>
            </div>
        </div>
    </div>
</section>

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fab fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Login</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name" class="validate">
                            <label>User name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fab fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name1" class="validate">
                            <label>User name</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" class="validate">
                            <label>Email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" class="validate">
                            <label>Confirm password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fab fa-google"></i> Google+</a>
                    </li>
                    <li><a href="https://twitter.com/nhrccb"><i class="fab fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- SOCIAL MEDIA SHARE -->
<section>
    <div class="icon-float">
        <ul>
            <li><a href="https://www.youtube.com/channel/UCJvCufQ4ARy84rZAQC2N0Kw" class="yt1"><i class="fab fa-youtube " aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/nhrccb" class="fb1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/nhrccb" class="tw1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            {{-- <li><a href="#" class="li1"><i class="fab fa-linkedin" aria-hidden="true"></i></a> </li> --}}
            {{-- <li><a href="#" class="wa1"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li> --}}
            <li><a href="https://www.instagram.com/nhrccbindia" class="in1"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="mailto:nhrccb@gmail.com" class="sh1"><i class="fa-solid fa-envelope"></i></a></li>
        </ul>
    </div>
</section>

<!--Import jQuery before materialize.js-->

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{asset('public/web/assets/js/main.min.js')}}"></script>
<script src="{{asset('public/web/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/web/assets/js/materialize.min.js')}}"></script>
<script src="{{asset('public/web/assets/js/custom.js')}}"></script>
<script src="{{asset('public/web/assets/js/particle.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@yield('page-js')

</body>
</html>