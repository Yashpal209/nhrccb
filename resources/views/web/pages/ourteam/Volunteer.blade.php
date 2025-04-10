@extends('web.layouts.app')
@section('main-content')

<style>
    .home-top-cour {
        background-color: #e0e4f3;
    }

    .home-top-cour img {
        border: 2px solid #1232a5;
        border-radius: 60%;
    }
</style>

<section class="ed-res-bg">
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">Volunteers</h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION START -->
<section>
   
    <div class="container-fluid">
        <div class="container com-sp">
           
            <div class="row  justify-content-center">
                <div class="col-md-4">
                    <div class="cor-side-com">
                        <div class="ho-ev-latest ho-ev-latest-bg-3">
                            <div class="ho-lat-ev">
                                <h4 class="text-center">Volunteer</h4>
                            </div>
                        </div>
                        <div class="ho-st-login">
                            <div class="col s12">
                                <form action="{{ route('verify') }}" method="POST" class="col s12">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" name="identifier" class="validate" required>
                                            <label>(NHRCCB/0000) or (Mobile No.)</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="level" value="VOLUNTEER" class="validate"  required>
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
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        
        <!-- PAGINATION -->
        @if(session('user'))
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="alert alert-info">
                    <h5>User Details:</h5>
                    <img class="materialboxed" src="{{ url('/') . '/' . session('user')->passport_image }}" style="width: 150px; height: 150px; border-radius: 50%; display: block; margin: 0 auto;" alt="User Image">
                    <p><strong>Name:</strong> {{ session('user')->name }}</p>
                    <p><strong>Membership No:</strong> {{ session('user')->reg_no }}</p>
                    <p><strong>Mobile:</strong> {{ session('user')->mobile }}</p>
                    <p><strong>Designation:</strong> {{ session('user')->designation }}</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
