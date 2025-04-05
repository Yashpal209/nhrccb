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

<!--== Add whoswho Section ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h4>Add New Who's Who </h4>
                        </div>
                        <div class="col-md-6 text-right">
                           <a href="{{ route('viewWhosWho') }}">
                               <div class="btn">View whoswho</div>
                           </a> 
                        </div>
                    </div>
                </div>
                <div class="tab-inn">
                    <form action="{{ route('postWhosWho') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s6">
                               <select name="type" id="" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="patron/advisior">National Patron/Advisior</option>
                                <option value="executive">National Executive</option>
                                <option value="statepresident">State President</option>
                                <option value="officials">Officials</option>
                               </select>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" name="name" class="validate" required >
                                <label class="">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" name="post" class="validate" >
                                <label class="">Post</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" name="position" class="validate" >
                                <label class="">Psition</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="file-field input-field col s6">
                                <div class="btn admin-upload-btn">
                                    <span>Upload Image</span>
                                    <input type="file" name="image" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload whoswho Image">
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper">
                                    <input type="submit" class="waves-button-input" value="Add whoswho">
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
