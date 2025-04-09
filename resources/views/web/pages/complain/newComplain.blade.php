@extends('web.layouts.app')
@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>New Complain</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->

    <!-- Begin Page Content -->

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display Error Message -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <section class="c-all h-quote">
        <div class="container-fluid py-3">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <h4 class="text-danger"><b>Note:</b> <small>Please fill the form carefully. Once submitted, you
                                    will not be able to edit the details.</small></h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('ComplainStatus') }}">
                                <div class="btn btn-danger">
                                    Check Application Status
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="n-form-com admiss-form">
                        <div class="col s12">
                            <div class="card py-3">
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{ route('postNewComplainForm') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-center border-bottom mb-3 mb-sm-0 px-4 px-sm-0">
                                            <div class="text-center mb-3">
                                                <h2 class="my-4 my-sm-0 fs-1 fs-sm-4"> Complain Details</h2>
                                            </div>


                                            <!-- Name (As Per Aadhaar) -->
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Name (As Per Aadhaar):</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" placeholder="Enter name as per Aadhaar"
                                                            require>
                                                        @error('name')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Email -->
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Email:</label>
                                                    <div class="col-sm-12">
                                                        <input type="email" name="email" id="email"
                                                            class="form-control" placeholder="Enter Email" require>
                                                        @error('email')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Select Gender -->
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Select Gender:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="gender" id="gender" require>
                                                            <option value="">-- Select Gender --</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        @error('gender')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Mobile Number -->
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Mobile Number:</label>
                                                    <div class="col-sm-12">
                                                        <input type="number" name="mobile" id="mobile"
                                                            class="form-control" placeholder="Enter Mobile Number" require>
                                                        @error('mobile')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Type of Complain:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="complain_type" id="complain_type"
                                                            require>
                                                            <option value="">-- Type of Complain --</option>
                                                            <option value="child-right">Child Right</option>
                                                            <option value="cyber-crime">Cyber Crime</option>
                                                            <option value="free-legal-right">Free Legal Right</option>
                                                            <option value="fundamental-rights">Fundamental Rights</option>
                                                            <option value="labor-rights">Labor Rights</option>
                                                            <option value="pensioners-rights">Pensioners Rights</option>
                                                            <option value="right-to-information">Right to Information
                                                            </option>
                                                            <option value="right-to-privacy">Right to Privacy</option>
                                                            <option value="schedule-cast-rights">Schedule Cast Rights
                                                            </option>
                                                            <option value="schedule-tribe-rights">Schedule Tribe Rights
                                                            </option>
                                                            <option value="transgender-rights">Transgender Rights</option>
                                                            <option value="womens-rights">Womens Rights</option>
                                                            <option value="human-rights">Human Rights</option>
                                                            <option value="other-rights">Other Rights</option>

                                                        </select>
                                                        @error('complain_type')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Address:</label>
                                                    <div class="col-sm-12">
                                                        <textarea type="text" rows="3" name="address" id="address" class="form-control" placeholder="Enter Address"
                                                            require></textarea>
                                                        @error('address')
                                                            <span class="text-danger">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Write Your Complain</label>
                                                    <textarea class="form-control" name="complain_details" id="exampleFormControlTextarea1"
                                                        placeholder="Write Your Complain" rows="6"></textarea>
                                                    @error('complain_details')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center form_image ">
                                            <div class="col-md-7 col-sm-12 col-xs-12 my-2">
                                                <div class="file-field input-field">
                                                    <div class="btn admin-upload-btn">
                                                        <span>Upload</span>
                                                        <input type="file" name="attachment" multiple="">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text"
                                                            placeholder="Upload Attachment (if any)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="form-group mar-bot-0">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <i class="waves-effect waves-light light-btn waves-input-wrapper">
                                                    <input type="submit" value="Submit" class="waves-button-input">
                                                </i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
