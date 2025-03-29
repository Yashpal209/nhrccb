@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Books</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="ed-res-bg">
        <div class="container d-flex justify-content-center align-items-center py-3 ">
            <div class="row w-100 text-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center border bg-light">
                    <img class="img-fluid" style="width:70%" src="{{ asset('public/web/assets/images/book.webp') }}" alt="">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <h2><u>Human Rights</u></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate sunt deleniti ducimus eum voluptas, nesciunt adipisci delectus ad eveniet deserunt eligendi esse culpa perspiciatis enim ullam eaque fuga modi consequuntur?</p>
                    <a href="https://pmny.in/mIAJai6NyowS" class="btn btn-sm btn-info">Read more</a>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center py-3">
            <div class="row w-100 text-center">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <h2><u>Human Rights</u></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate sunt deleniti ducimus eum voluptas, nesciunt adipisci delectus ad eveniet deserunt eligendi esse culpa perspiciatis enim ullam eaque fuga modi consequuntur?</p>
                    <a href="https://pmny.in/mIAJai6NyowS" class="btn btn-sm btn-info">Read more</a>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center border bg-light">
                    <img class="img-fluid" style="width:70%" src="{{ asset('public/web/assets/images/book.webp') }}" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
    
@endsection
