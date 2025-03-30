<!DOCTYPE html>
<html lang="en">

<head>
    <title>NHRCCB Admin</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="NHRCCB Admin">
    <meta name="keyword" content="NHRCCB Admin">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/logo.png') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">

    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('public/admin/assets/css/materialize.css')}} " rel="stylesheet">
    <link href="{{asset('public/admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{url('public/admin/assets/css/style-mob.css')}}" rel="stylesheet" />

</head>

<body>

    @include('admin.layouts.header')

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2" >
        <div class="row">

            @include('admin.layouts.sidebar')
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2" >
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{url('/admin')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="{{url('/admin')}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                @yield('main-content')

            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="{{asset('public/admin/assets/js/main.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/materialize.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/custom.js')}}"></script>
    @yield('page.js')
</body>

</html>