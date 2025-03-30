    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
            <!--== LOGO ==-->
            <div class="col-md-3 col-sm-3 col-xs-6 sb1-1">
                {{-- <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a> --}}
                <a href="#" class="logo "><img src="{{ asset('public/admin/assets/images/logo.png') }}"alt="logo" />
                </a>
            </div>
            <!--== SEARCH ==-->
            {{-- <div class="col-md-6 col-sm-6 mob-hide">
               
            </div> --}}
            <!--== NOTIFICATION ==-->
            {{-- <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                  
                </div>
            </div> --}}
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-9 col-sm-3 col-xs-6 ">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{ asset('public/admin/assets/images/avatar5.png') }}" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul id='top-menu' class='dropdown-content top-menu-sty' style="margin-top: 64px;">
                    <li><a href="{{ route('logOut') }}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in"aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
