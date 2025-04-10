@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Press Release</h1>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION START-->
    <section>
        <div class="ed-res-bg">
            <div class="container ">
                <div class="row">
                    @if ($elecmedia->count() > 0)
                        @foreach ($elecmedia as $media)
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ url('/') . '/' . $media->elec_med_img }}" width="100%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6  text-center  ">
                                <div class="card" style="height:97%;background: #dfe2e9;">
                                    <div class="card-body  align-content-center">
                                        <h4><u>{{ $media->title }}</u></h4>
                                        <p class="mt-2">{{ $media->contant }}</hp>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        <!-- Pagination Links -->
                        <div class="pagination text-center">
                            {{ $elecmedia->links() }}
                        </div>
                    @else
                        <div class="text-center">
                            <h4>No Data Available</h4>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

@endsection
