@extends('web.layouts.app')
@section('main-content')
<style>
    .home-top-cour {
        background-color: #f9faff;
    }

    .home-top-cour img {
        border: 2px solid #1232a5;
        border-radius: 60%;
    }
</style>
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">National Executive</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->
<section>
    <div class="container-fluid">
        <div class="container com-sp ">
            <div class="row">
            @foreach($nationalexecutive as $list)
                <div class="col-md-6">
                    <div>
                        <div class="home-top-cour">
                            <div class="col-md-3"> <img src="{{$list->image}}" alt=""> </div>
                            <div class="col-md-9 home-top-cour-desc">
                                <h3>{{$list->name}}</h3>
                                <h4>{{$list->designation}}</h4>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
@endsection