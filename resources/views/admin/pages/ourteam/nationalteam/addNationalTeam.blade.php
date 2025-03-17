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
                            <h4>Add National Team</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('viewNationalTeam')}}"><div class="btn">
                                View National Team
                            </div></a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <form action="{{route('postNationalTeam')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="name" class="validate" required>
                                <label class="">Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" name="designation" class="validate" required>
                                <label class="">Designation</label>
                            </div>

                        </div>

                        <div class="row">
                        <div class="input-field col s6">
                                <input type="text" name="wing_name" class="validate" required>
                                <label class="">Wing Name</label>
                            </div>
                            <div class="file-field input-field col s6">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <!-- Add the name="noticefile" to the input type="file" -->
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload National Team Image" accept=".jpg, .png, .jpeg|image/*">
                                </div>
                                <p class="text-danger">(Note : Image Dimension must be 350*350)</p>
                                
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