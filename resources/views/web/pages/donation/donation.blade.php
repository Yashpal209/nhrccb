@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Donation</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="ed-res-bg">
            <div class="container  py-4">
                <div class="row">
                    <div class="con-title">
                        <h2 class="mb-0"> DONATION FOR <span> NHRCCB</span></h2>
                    </div>
                    <div class="col-md-6 text-center ">
                        <h2><u>With Direct Link</u> </h2>
                        <a href="https://pmny.in/mIAJai6NyowS" class="btn btn-sm btn-info">Donate us</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <h2><u>Scan And Donate </u></h2>
                        <img class="img-fluid" src="{{ asset('public/web/assets/images/nhrccb.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
