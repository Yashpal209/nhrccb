@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Publication</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->

<!--SECTION START-->
<section>
    <div class="container com-sp">
        <div class="row ">
            <div class="col-md-10">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="ho-event pg-eve-main">
                            @if($publications->isNotEmpty())
                            <ul>
                                @foreach($publications as $publication)

                                <li class="py-2">
                                    <div class="ho-ev-date pg-eve-date py-3">
                                        <span>{{$publication->publication_date}}</span>
                                    </div>
                                    <div class="ho-ev-link pg-eve-desc">

                                        <p>{{$publication->publication_title}}</p>

                                    </div>
                                    <div class="pg-eve-reg mt-1">
                                        <a href="{{$publication->publication_file}}" target="_blank">Download</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @else
                            <h3>No Publication available</h3>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--SECTION END-->

@endsection