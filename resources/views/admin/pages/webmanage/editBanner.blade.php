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

<!--== Edit Banner Section ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h4>Edit Banner</h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{ route('viewBanner') }}">
                               <div class="btn">View Banners</div>
                           </a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <form action="{{ route('updateBannerPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $banners->id }}">
                        
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="title" value="{{ $banners->title }}" class="validate" required>
                                <label class="active">Banner Caption</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" name="link" value="{{ $banners->link }}" class="validate">
                                <label class="active">Banner Link</label>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="file-field input-field col s6">
                                <div class="btn admin-upload-btn">
                                    <span>Upload Image</span>
                                    <input type="file" name="image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload New Banner Image">
                                </div> 
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col s12">
                                <p>Current Image:</p>
                                <img src="{{ asset($banners->image) }}" alt="Banner Image" width="400">
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper">
                                    <input type="submit" class="waves-button-input" value="Update Banner">
                                </i>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
