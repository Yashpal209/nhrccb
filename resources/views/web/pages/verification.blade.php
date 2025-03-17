@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Verification</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Display Success Message -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Display Error Message -->
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif


  <section >
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    
                  
                    <div class="col-md-4">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-3">
                                <div class="ho-lat-ev">
                                    <h4 class="text-center">Active Membership</h4>
                                  
                                </div>
                            </div>
                            <div class="ho-st-login">
                                <div class="col s12">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" class="validate">
                                                <label>(NHRCCB/0000) or (Mobile No.)</label>
                                            </div>
                                        </div>
                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Verify" class="waves-effect waves-light light-btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-md-4">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-3">
                                <div class="ho-lat-ev">
                                    <h4 class="text-center">Designation</h4>
                                  
                                </div>
                            </div>
                            <div class="ho-st-login">
                                <div class="col s12">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" class="validate">
                                                <label>(NHRCCB/0000) or (Mobile No.)</label>
                                            </div>
                                        </div>
                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Verify" class="waves-effect waves-light light-btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-md-4">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-3">
                                <div class="ho-lat-ev">
                                    <h4 class="text-center">Volunteer</h4>
                                  
                                </div>
                            </div>
                            <div class="ho-st-login">
                                <div class="col s12">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" class="validate">
                                                <label>(NHRCCB/0000) or (Mobile No.)</label>
                                            </div>
                                        </div>
                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Verify" class="waves-effect waves-light light-btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    @endsection