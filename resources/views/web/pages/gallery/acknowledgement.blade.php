@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Acknowledgement</h1>
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
                    @if($Acknowledgement->count() > 0)
                        <ul>
                            @foreach($Acknowledgement as $govtletter)
                                <li>
                                    <div class="card m-1">
                                        <div class="card-body">
                                            <img class="materialboxed" data-caption="{{ $govtletter->title }}" src="{{ url('/') . '/' . $govtletter->acknowledgement_img }}" alt="">
                                        </div>
                                        <div class="card-footer truncate">
                                            <h5>{{ $govtletter->title }}</h5>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $Acknowledgement->links() }}
                        </div>
                    @else
                        <div class="text-center w-100 py-5">
                            <h4>No data available for Acknowledgements.</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>



@endsection