@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Office Directory</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <section>
        <div class="container  py-4">
            <div class="row mt-3 text-center">
                <h3 class=" fw-bold text-center text-danger">NATIONAL TEAM</h3>
                <table>
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>NAME</th>
                            <th>DESIGNATION</th>
                            <th>PHONE</th>
                            <th>EMAIL ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dr. Randhir Kumar </td>
                            <td>National President </td>
                            <td>9102224365</td>
                            <td>nationalpresident@nhrccb.org &nbsp;
                                chairmannationalnhrccb@gmail.com </td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="row mt-3 text-center">
                <h3 class=" fw-bold text-center text-danger">ZONE TEAM</h3>
                <table>
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>NAME</th>
                            <th>DESIGNATION</th>
                            <th>PHONE</th>
                            <th>EMAIL ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Regional Officer ,Assam </td>
                            <td></td>
                            <td>Regionalofficerassam@nhrccb.org</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </section>
@endsection
