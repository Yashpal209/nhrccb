@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Whats New</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="container py-4">
            <div class="notification-section">
                <div class="card shadow-lg border-0">
                    <div class="card-body">
                        <div class="notification-list" style="max-height: 400px; overflow-y: auto;">
                            <ul class="list-group">
                                @foreach ($whatsNew as $notification)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-1 text-primary">{{ $notification->title }}</h6>
                                            <small class="text-muted">{{ $notification->date }}</small>
                                        </div>
                                        <a href="{{ $notification->noticefile }}" class="btn btn-sm btn-outline-primary">View</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
