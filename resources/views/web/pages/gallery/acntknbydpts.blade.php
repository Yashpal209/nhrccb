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
                <h1>Action Taken By Department</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->


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