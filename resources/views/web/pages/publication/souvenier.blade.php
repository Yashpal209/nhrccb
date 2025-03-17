@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Souvenier</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->

<section>
    <div class="container py-4">
        @if($souveniers->count() > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="cor about-sp">
                        <div class="ed-about-tit">
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    @foreach($souveniers as $data)
                                        <li class="py-2">
                                            <div class="ho-ev-date pg-eve-date py-3">
                                                <span>{{ $data->date }}</span>
                                            </div>
                                            <div class="ho-ev-link pg-eve-desc">
                                                <p>{{ $data->title }}</p>
                                            </div>
                                            <div class="pg-eve-reg mt-1">
                                                <a href="{{ $data->souvenier }}" target="_blank">Download</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- Pagination Links -->
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $souveniers->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center">
                <h3>NO Data ON Souvenier </h3>
            </div>
        @endif
    </div>
</section>

@endsection