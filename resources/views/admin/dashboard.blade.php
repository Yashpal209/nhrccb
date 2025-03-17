@extends('admin.layouts.app')

@section('main-content')
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>Notification</h5>
                        <h4></h4>
                        <a href="admin/view/official-notification">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>Publication</h5>
                        <h4></h4>
                        <a href="admin/view-monthly-report">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Administration</h5>
                        <h4></h4>
                        <a href="admin/view-national-patron">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Gallery</h5>
                        <h4></h4>
                        <a href="admin/view-photo">View more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
