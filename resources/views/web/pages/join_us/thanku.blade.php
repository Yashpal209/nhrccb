@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Thank You</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="ed-res-bg">
            <div class="container  py-4">
                <div class="text-center">
                    <img src="{{ asset('public/web/assets/images/thank-you.jpg') }}" alt="">
                </div>
                <div class="row">
                    <div class=" col-md-6 text-center">
                        <a class="btn btn-dark" href="{{ route('JoinUs') }}">Apply New Joining</a>
                    </div>
                    <div class=" col-md-6 text-center">
                        <a class="btn btn-dark" href="{{ route('verification') }}">Check Status</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
