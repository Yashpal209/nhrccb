@extends('web.layouts.app')
@section('main-content')

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Video Gallery</h1>
            </div>
        </div>
    </div>
</section>

<!--SECTION START-->
<style>
    .video-title {
        width: 100%;
        height: 100px; 
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    iframe {
        width: 100%;
        height: 300px;
        border: none;
    }
</style>

<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                @if($videogallery->count() > 0)
                    @foreach ($videogallery as $video)
                        <div class="col-md-4 mb-4">
                            <div class="bot-gal h-vid ho-event-mob-bot-sp">
                                <div class="video-title">
                                    <h4>{{ $video->title }}</h4>
                                </div>
                                <iframe src="{{ preg_replace('/https:\/\/youtu\.be\/([a-zA-Z0-9_-]+).*/', 'https://www.youtube.com/embed/$1', $video->video) }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination Links -->
                    <div class="col-md-12 text-center mt-4">
                        {{ $videogallery->links() }}
                    </div>
                @else
                    <div class="col-md-12 text-center">
                        <h4>No Videos Available</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
