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

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">Educational Cell</h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION START -->
<section>
    <div class="container-fluid">
        <div class="container com-sp">
            <div class="row justify-content-center">
                @if($educationalcell->count() > 0)
                    @foreach($educationalcell as $item) <!-- Fixed variable naming -->
                        <div class="col-md-5">
                            <div class="home-top-cour">
                                <div class="row justify-content-center">
                                    <!-- IMAGE -->
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <img src="{{$item->image}}" alt="" class="img-fluid">
                                    </div>
                                    <!-- CONTENT -->
                                    <div class="col-md-8 home-top-cour-desc d-flex justify-content-center align-items-center">
                                        <div>
                                            <h3 class="pb-0">{{$item->name}}</h3>
                                            <h5 class="pb-0">{{$item->designation}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- NO DATA MESSAGE -->
                    <div class="col-12 text-center mt-4">
                        <h3>No Data Available</h3>
                    </div>
                @endif
            </div>

            <!-- PAGINATION LINKS -->
            @if($educationalcell->count() > 0)
                <div class="d-flex justify-content-center mt-4">
                    {{ $educationalcell->links() }}
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
