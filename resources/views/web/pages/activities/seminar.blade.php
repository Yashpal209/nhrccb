@extends('web.layouts.app')
@section('main-content')

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Seminar</h1>
            </div>
        </div>
    </div>
</section>

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp h-gal ed-pho-gal">
                    @if($seminar->count() > 0)
                        @foreach($seminar as $item)
                        <ul>
                            <li>
                                <div class="card mx-1">
                                    <div class="card-body">
                                        <img class="materialboxed" data-caption="{{ $item->seminar_img }}" src="{{ url('/').'/'.$item->seminar_img }}" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                        
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $seminar->links() }}
                        </div>
                    @else
                        <div class="text-center">
                            <h3>No Data Available</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

@endsection