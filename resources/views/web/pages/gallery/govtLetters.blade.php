@extends('web.layouts.app')
@section('main-content')
<style>
    .card-footer{
        height: 60px;
    }
</style>
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Goverment Letters</h1>
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
                <div class="cor about-sp h-gal ed-pho-gal">
                    @foreach($govtletters as $govtletter)
                    <ul>
                        <li>
                            <div class="card m-1">
                                <div class="card-body">
                                    <img class="materialboxed" data-caption="{{$govtletter->gvt_ltr_img}}" src="{{url('/').'/'. $govtletter->gvt_ltr_img}}" alt="">
                                </div>
                                <div class="card-footer">
                                    <h5>{{$govtletter->title}}</h5>
                                </div>
                            </div>

                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Action Taken By Department</h1>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container com-sp">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="cor about-sp">
                <div class="ed-about-tit">
                    <div class="ho-event pg-eve-main">
                        <ul>
                        @foreach($acntknbydpts as $acntknbydpt)
                        
                            <li class="py-2">
                                <div class="ho-ev-date pg-eve-date py-3">
                                    <span>{{$acntknbydpt->date}}</span>
                                </div>
                                <div class="ho-ev-link pg-eve-desc">
                                   
                                        <p>{{$acntknbydpt->title}}</p>
                                  
                                </div>
                                <div class="pg-eve-reg mt-1">
                                    <a href="{{$acntknbydpt->actionfile}}" target="_blank">Download</a>
                                </div>
                            </li>
                          
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            </div>
            
        </div>
    </div>
</section>

@endsection