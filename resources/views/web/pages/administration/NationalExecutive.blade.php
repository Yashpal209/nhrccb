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
    <section class="ed-res-bg">
        <div class="container-fluid">
            <div class="container com-sp">
                @php
                    $grouped = $nationalexecutive->groupBy('order_no');
                @endphp
    
                @foreach($grouped as $orderNo => $members)
                    <div class="row  justify-content-center mb-4">
                        @foreach($members as $list)
                            <div class="col-md-3">
                               {{-- <h3>Designation:{{$list->designation}}</h3> --}}
                                <div class="home-top-cour p-3" >
                                    <div class="me-2 d-flex d-flex "style="justify-content:center" >
                                        <img style="width:60%" src="{{ asset($list->image) }}" alt="{{ $list->name }}" >
                                    </div>
                                    <div class="text-center mt-2">
                                        <h4 class="mb-1">{{ $list->name }}</h4>
                                        <h5 class="mb-0">{{ $list->designation }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection
