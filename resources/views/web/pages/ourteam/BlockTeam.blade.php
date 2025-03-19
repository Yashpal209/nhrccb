@extends('web.layouts.app')
@section('main-content')

<style>
    .home-top-cour {
        background-color: #e0e4f3;
    }

    .home-top-cour img {
        border: 2px solid #1232a5;
        border-radius: 60%;
    }
</style>

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">Block Team</h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION START -->
<section>
    <div class="container-fluid">
        <div class="container com-sp">
            <div class="row">
                @if($blockteam->count() > 0)
                    @foreach($blockteam as $block)
                        <div class="col-md-6">
                            <div>
                                <!-- BLOCK TEAM CARD -->
                                <div class="home-top-cour">
                                    <!-- BLOCK TEAM IMAGE -->
                                    <div class="col-md-3">
                                        <img src="{{ $block->image }}" alt="" class="img-fluid">
                                    </div>
                                    <!-- BLOCK TEAM DETAILS -->
                                    <div class="col-md-9 home-top-cour-desc">
                                        <h3 class="pb-0">{{ $block->name }}</h3>
                                        <p class="pb-0">{{ $block->designation }}</p>
                                        <p class="pb-0">{{ $block->wing_name }}</p>
                                        <p class="pb-0">{{ $block->block_name }}</p>
                                        <p class="pb-0">{{ $block->state_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <h3>No Team Found</h3>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- PAGINATION -->
        <div class="d-flex justify-content-center">
            {{ $blockteam->links() }}
        </div>
    </div>
</section>

@endsection
