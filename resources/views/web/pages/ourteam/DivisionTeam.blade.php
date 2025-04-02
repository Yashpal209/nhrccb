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

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #1232a5;
        color: white;
    }

    img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
</style>

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="fs-1">Division Team & Join Us</h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION START -->
<section>
    <div class="container-fluid">
        <div class="container com-sp">
            <div class="row">
                @if($divisionteam->count() > 0 || $joinUs->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Level</th>
                                <th>Designation</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($divisionteam as $member)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset($member->image) }}" alt=""></td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->designation }}</td>
                                    <td>{{ $member->city_name }}</td>
                                    <td>{{ $member->state_name }}</td>
                                    <td>Division Team</td>
                                </tr>
                            @endforeach

                            @foreach($joinUs as $member)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset($member->passport_image) }}" alt=""></td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->level}}</td>
                                    <td>{{ $member->designation }}</td>
                                    <td>{{ $member->district }}</td>
                                    <td>{{ $member->state }}</td>
                                    <td>Join Us</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="col-md-12 text-center">
                        <h3>No Data Found</h3>
                    </div>
                @endif
            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-center mt-4">
                {{ $divisionteam->links() }}
            </div>
        </div>
    </div>
</section>

@endsection
