@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Latest Update</h1>
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
                                @foreach($latestUpdates as $notification)
                                    <li class="py-2">
                                        <div class="ho-ev-date pg-eve-date py-3">
                                            <span>{{ $notification->date }}</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <p>{{ $notification->title }}</p>
                                        </div>
                                        <div class="pg-eve-reg mt-1">
                                            <a href="{{ $notification->file }}" target="_blank">Download</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Pagination Links -->
                            <div class="d-flex justify-content-center mt-4">
                                {{ $latestUpdates->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
