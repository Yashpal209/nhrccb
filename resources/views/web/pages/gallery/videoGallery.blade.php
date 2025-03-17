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

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                
                    @foreach($videogallery as $videogallery)
                    <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <iframe src="{{$videogallery->video}}" allowfullscreen></iframe>
                        
                    </div>
                </div>
                    @endforeach
              
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

@endsection