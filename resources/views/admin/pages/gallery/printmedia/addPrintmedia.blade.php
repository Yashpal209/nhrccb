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
                            <h4>Add Print Media</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('viewPrintMedia')}}">
                                <div class="btn">
                                    View Print Media
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <form action="{{route('postPrintMedia')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="file-field input-field col s4">
                                <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <input type="file" name="print_media_img">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Print Media Image" accept="image/png, image/jpeg, image/jpg, image/webp">
                                </div>
                            </div>
                            <div class="input-field col s4">
                                <input type="date" name="date" class="validate" required>
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