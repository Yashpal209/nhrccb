@extends('web.layouts.app')
@section('main-content')
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1>Our Awardee</h1>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->

<section>
    <div class="container  py-4">
    <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Our Awardee</h4>
                           
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name of Awardee</th>
                                            <th> Award Name</th>
                                            <th>Award Category</th>
                                            <th>Convention Name</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($viewAwardee as $list)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$list->awardee_name}}</td>
                                            <td>{{$list->award_name}}</td>
                                            <td>{{$list->award_category}}</td>
                                            <td>{{$list->convention_name}}</td>                
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>
</section>

@endsection