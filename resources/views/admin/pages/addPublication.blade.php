@extends('admin.layouts.app')

@section('main-content')

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
                    <!-- <h4>Add New Publication</h4> -->
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h4>Add New Publication</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{route('viewPublication')}}"><div class="btn">
                                View New Publication
                            </div></a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <form action="{{route('addPublicationPost')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="publication_title" class="validate" required>
                                <label class="">Publication Title</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="date" name="publication_date" value="" class="validate" required>

                            </div>
                        </div>

                        <div class="row">
                            <div class="file-field input-field col s12">
                            <input type="text" name="publication_file" class="validate" required>
                            <label class="">Enter Publication URL</label>
                                <!-- <div class="btn admin-upload-btn">
                                    <span>File</span>
                                    <input type="file" name="publication_file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Official Notice PDF File">
                                </div> -->
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
<!--== User Details ==-->

@endsection