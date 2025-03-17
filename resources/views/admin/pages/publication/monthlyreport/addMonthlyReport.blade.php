@extends('admin.layouts.app')

@section('main-content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h4>Add Monthly Report</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('viewMonthlyReport')}}"><div class="btn">
                                View Monthly Report
                            </div></a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <form action="{{route('postMonthlyReport')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="title" class="validate" required>
                                <label class="">Title</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="date" name="date" class="validate" required>
                               
                            </div>

                        </div>

                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <!-- Add the name="noticefile" to the input type="file" -->
                                    <input type="file" name="report">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Monthly Report" accept="image/png, image/jpeg, image/jpg, image/webp">
                                </div>
                                <!-- <p class="text-danger">(Note : Image Dimension must be 150*150)</p> -->
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection