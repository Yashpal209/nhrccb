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
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('public/admin/assets/css/materialize.css')}} " rel="stylesheet">
    <link href="{{asset('public/admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{url('public/admin/assets/css/style-mob.css')}}" rel="stylesheet" />

</head>

<body style=" background-color: #e0e4f3;">
 <section >
        <div class="container com-sp pad-bot-0">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4> Login Admin (NHRCCB)</h4>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        
                      
                        <div id="hom_log" class="col s12">
                            <form action="{{ route('login') }}" method="POST"  class="col s12">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="email" name="email" class="validate">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" name="password" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Import jQuery before materialize.js-->
    <script src="{{asset('public/admin/assets/js/main.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/materialize.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/custom.js')}}"></script>
</body>

</html>