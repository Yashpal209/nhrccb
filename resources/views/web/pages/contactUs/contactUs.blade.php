@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="container  py-4">
            <div class="row mt-2">
                <div class="col-md-6">
                    <h3 class=" fw-bold text-center text-danger">HEAD OFFICE</h3>
                    <h4> NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU</h4>
                    <h5>NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU
                        Plot.No- 218, Second Floor, Malik Plaza ,Block –A ,Pocket -2 ,Sector ,17 ,Dwarka ,New Delhi -110078
                    </h5>
                    <h6> +91 9310694151, +91 9102224365 </h6>
                    <h6>nhrccb@gmail.com, headoffice@nhrccb.org </h6>
                </div>
                <div class="col-md-6">
                    <h3 class=" fw-bold text-center text-danger">NATIONAL ADMINISTRATION OFFICE</h3>
                    <h4>NATIONAL HUMAN RIGHTS AND CRIME CONTROL BUREAU</h4>
                    <h5> Quarter No. Ls/48, First Floor, Harmu Housing Colony Near Kartik Chowk, Ranchi, Jharkhand -834002
                    </h5>
                    <h6>+91 9102224365, </h6>
                    <h6>nhrccb@gmail.com, nationaloffice.nhrccb@gmail.com </h6>
                </div>
            </div>
            <div class="row mt-2">
                <h3 class=" fw-bold text-center text-danger">NATIONAL PRESIDENT’S CAMP OFFICE:</h3>
                <h5 class="text-center">nationalpresident@nhrccb.org </h5>
            </div>
            <div class="row mt-3">
                <h3 class=" fw-bold text-center text-danger">STATE OFFICE / STATE PRESIDENT’S OFFICE:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>STATE NAME</th>
                            <th>PRESIDENT NAME</th>
                            <th>ADDRESS</th>
                            <th>MOBILE NO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($statepresident->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">No data found</td>
                            </tr>
                        @else
                            @foreach ($statepresident as $list)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $list->state }}</td>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->mobile }}</td>
                                    <td>{{ $list->designation }}</td>
                                </tr>
                            @endforeach
                        @endif
                </table>
            </div>
        </div>
    </section>
@endsection
