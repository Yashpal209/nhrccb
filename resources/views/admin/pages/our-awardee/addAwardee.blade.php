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
                                <h4>Add Our Awardee</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('viewOurAwardee') }}">
                                    <div class="btn">
                                        View Our Awardee
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-inn">
                        <form action="{{ route('postOurAwardee') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="awardee_name" class="validate" required>
                                    <label class="">Name of Awardee</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="award_name" class="validate" required>
                                    <label class=""> Award Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="award_category" class="validate" required>
                                    <label class="">Award Category</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="convention_name" class="validate" required>
                                    <label class=""> Convention Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="award_sub_category" class="validate" required>
                                    <select name="award_sub_category" class="validate" id="">
                                        <option selected disabled >---Select---</option>
                                        <option value="International">International</option>
                                        <option value="National">National</option>
                                        <option value="State">State</option>
                                        <option value="District">District</option>
                                        <option value="Community">Community</option>
                                    </select>
                                    <label class="">Award Sub Category</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input  type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection