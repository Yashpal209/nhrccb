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
        <div class="ed-res-bg py-3">
            <div class="container">
                <div class="row">
                    @if ($elecmedia->count() > 0)
                        @foreach ($elecmedia as $index => $media)
                            <div class="row w-100 text-center py-3">
                                @if($index % 2 == 0)
                                    <!-- Image Left, Text Right -->
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" style="width:70%;border-radius: 10px;" src="{{ url('/') . '/' . $media->elec_med_img }}" alt="">
                                    </div>
                                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                                        <h2><u>{{ $media->title }}</u></h2>
                                        <p>{{ $media->contant }}</p>
                                        @if(!empty($media->link))
                                            <a href="{{ $media->link }}" class="btn btn-sm btn-info">Read more</a>
                                        @endif
                                    </div>
                                @else
                                    <!-- Text Left, Image Right -->
                                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                                        <h2><u>{{ $media->title }}</u></h2>
                                        <p>{{ $media->contant }}</p>
                                        @if(!empty($media->link))
                                            <a href="{{ $media->link }}" class="btn btn-sm btn-info">Read more</a>
                                        @endif
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                        <img class="img-fluid" style="width:70%;border-radius: 10px;" src="{{ url('/') . '/' . $media->elec_med_img }}" alt="">
                                    </div>
                                @endif
                            </div>
                        @endforeach
    
                        <!-- Pagination -->
                        <div class="pagination text-center w-100">
                            {{ $elecmedia->links() }}
                        </div>
                    @else
                        <div class="text-center w-100">
                            <h4>No Data Available</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    <!--SECTION END-->

@endsection
