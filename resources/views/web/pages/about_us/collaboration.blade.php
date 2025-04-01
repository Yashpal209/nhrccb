@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Collaboration</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section class="ed-res-bg">
        <div class="container py-4">
            <div class="row justify-content-center text-center">
                <div class="con-title">
                    <h2 class="mb-0">Previous <span>Collaboration</span></h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <img src="{{ asset('public/web/assets/images/logo/Picture1.jpg') }}" alt="" style="border-radius: 70%;" class="img-fluid">
                    <h4 class="fw-bold">Department of Tribal Studies</h4>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('public/web/assets/images/logo/Picture2.png') }}" alt="" style="border-radius: 50%;" class="img-fluid">
                    <h4 class="fw-bold">State Commissions for Protection of Child Rights, Jharkhand</h4>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-4">
                <div class="con-title">
                    <h2 class="mb-0">Present <span>Collaboration</span></h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <img src="{{ asset('public/web/assets/images/logo/Picture4.png') }}" alt="" style="border-radius: 50%;" class="img-fluid">
                    <h4 class="fw-bold">Naman International Foundation for Education and Social Research</h4>
                </div>
            </div>
        </div>
    </section>
    
@endsection
