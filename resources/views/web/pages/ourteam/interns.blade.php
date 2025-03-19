@extends('web.layouts.app')
@section('main-content')

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">Interns</h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION START -->
<section>
    <div class="container-fluid">
        <div class="container com-sp">
            <div class="row">
                @if($interns->count() > 0)
                    @foreach($interns as $intern)
                        <div class="col-md-6">
                            <div>
                                <!-- INTERN PROFILE -->
                                <div class="home-top-cour">
                                    <!-- INTERN IMAGE -->
                                    <div class="col-md-3">
                                        <img src="{{ $intern->image }}" alt="" class="img-fluid">
                                    </div>
                                    <!-- INTERN DETAILS -->
                                    <div class="col-md-9 home-top-cour-desc">
                                        <h3 class="pb-0">{{ $intern->name }}</h3>
                                        <p class="pb-0">{{ $intern->designation }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <h3>No Intern Found</h3>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- PAGINATION -->
        <div class="d-flex justify-content-center">
            {{ $interns->links() }}
        </div>
    </div>
</section>

@endsection
