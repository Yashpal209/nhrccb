@extends('web.layouts.app')

@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>National Level Awards</h1>
                <h4 class="text-light">{{$title}}</h4>
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
                    @if ($awards->count() > 0)
                    <div class="pro-con-table">
                        <table class="table table-bordered table-striped bg-light">
                            <thead>
                                <tr>
                                    <th>Sl. No.</th>
                                    <th>Name of Awardee</th>
                                    <th>Award Cause</th>
                                    <th>Award Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($awards as $list)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $list->awardee_name }}</td>
                                        <td>{{ $list->convention_name }}</td>
                                        <td>{{ $list->convention_date }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {!! $awards->links() !!}
                    </div>
                    @else
                    <div class="text-center">
                        <h3>No Data Available</h3>
                    </div>
                    @endif
                </div>
            </div>
        </div>
</section>

@endsection
