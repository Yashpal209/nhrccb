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
                <h1 class="fs-1">National Team</h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION START -->
<section>
    <div class="container-fluid">
        <div class="container com-sp">
            <div class="row">
                @if($nationalteam->count() > 0)
                    @foreach($nationalteam as $list)
                        <div class="col-md-6">
                            <div>
                                <div class="home-top-cour">
                                    <div class="row justify-content-center">
                                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                                            <img src="{{$list->passport_image}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-9 home-top-cour-desc">
                                            <h3>{{$list->name}}</h3>
                                            <h4>{{$list->level}}</h4>
                                            <h4>{{$list->designation}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 text-center">
                        <h3>No Team found</h3>
                    </div>
                @endif
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $nationalteam->links() }}
            </div>
        </div>
    </div>
</section>

@endsection
