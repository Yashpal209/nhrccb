@extends('web.layouts.app')

@section('page-css')
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
@endsection

@section('main-content')
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn">
                    <h1>Join Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION START-->


    <!-- Begin Page Content -->
    <div class="container-fluid p-0">
        <div class="container">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>

        <section class="c-all h-quote">
            <div class="container-fluid py-3">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="n-form-com admiss-form">
                            <div class="col s12">
                                <div class="card py-3">
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{ route('postJoinUsForm') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row border-bottom mb-3 mb-sm-0 px-4 px-sm-0">
                                                <div class="text-center mb-3">
                                                    <h2 class="my-3 my-sm-0 fs-1 fs-sm-4">NHRCCB JOINING FORM</h2>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Select Your State:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="state"
                                                                id="state"requiredd>
                                                                <option value="">-- Select state --</option>
                                                            </select>
                                                            @error('state')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <!-- Select Division -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Select Division:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="division"
                                                                id="division"required>
                                                                <option value="">-- Select Division --</option>
                                                            </select>
                                                            @error('division')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Districts:</label>
                                                        <div class="col-sm-12">
                                                            <div class="col-sm-12">
                                                                <select class="form-control" name="district" id="district"
                                                                    required>
                                                                    <option value="">-- Select District --</option>
                                                                </select>
                                                                @error('district')
                                                                    <span class="text-danger">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Blocks Field -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Blocks:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" name="blocks"
                                                                id="blocks"class="form-control"
                                                                placeholder="Enter Your Blocks" value="{{ old('blocks') }}"
                                                                oninput="this.value = this.value.toUpperCase()">
                                                            @error('blocks')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Police Station Field -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Police Station:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" name="policeStation" id="policeStation"
                                                                class="form-control"
                                                                placeholder="Enter Your Police Station"value="{{ old('policeStation') }}"
                                                                oninput="this.value = this.value.toUpperCase()">
                                                            @error('policeStation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                                


                                                <!-- Select Level -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Select Level:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="level" id="level"
                                                                onchange="updateDesignations()" requiredd>
                                                                <option value="">-- Select Level --</option>
                                                                <option value="NATIONAL TEAM"
                                                                    {{ old('level') == 'NATIONAL TEAM' ? 'selected' : '' }}>
                                                                    NATIONAL TEAM</option>
                                                                <option value="STATE TEAM"
                                                                    {{ old('level') == 'STATE TEAM' ? 'selected' : '' }}>
                                                                    STATE TEAM</option>
                                                                <option value="DIVISION TEAM"
                                                                    {{ old('level') == 'DIVISION TEAM' ? 'selected' : '' }}>
                                                                    DIVISION TEAM
                                                                </option>
                                                                <option value="DISTRICT TEAM"
                                                                    {{ old('level') == 'DISTRICT TEAM' ? 'selected' : '' }}>
                                                                    DISTRICT TEAM</option>
                                                                <option value="BLOCK TEAM"
                                                                    {{ old('level') == 'BLOCK TEAM' ? 'selected' : '' }}>
                                                                    BLOCK TEAM</option>
                                                                <option value="ACTIVE MEMBER"
                                                                    {{ old('level') == 'ACTIVE MEMBER' ? 'selected' : '' }}>
                                                                    ACTIVE MEMBER </option>
                                                                <option value="VOLUNTEER"
                                                                    {{ old('level') == 'VOLUNTEER' ? 'selected' : '' }}>
                                                                    VOLUNTEER</option>
                                                            </select>
                                                            @error('level')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Select Designation -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Select Designation:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="designation" id="designation"
                                                                requiredd>
                                                                <option value="">-- Select Designation --</option>
                                                                @if (old('designation'))
                                                                    <option value="{{ old('designation') }}" selected>
                                                                        {{ old('designation') }}</option>
                                                                @endif
                                                            </select>
                                                            @error('designation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>




                                                <!-- Name (As Per Aadhaar) -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Name (As Per
                                                            Aadhaar):</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" name="name" id="name"
                                                                class="form-control"
                                                                placeholder="Enter name as per Aadhaar"
                                                                value="{{ old('name') }}"
                                                                oninput="this.value = this.value.toUpperCase()" required>
                                                            @error('name')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Father's / Husband's Name -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Father's / Husband's
                                                            Name:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" name="fathersName" id="fathersName"
                                                                class="form-control" value="{{ old('fathersName') }}"
                                                                placeholder="Enter father's or husband's name"
                                                                oninput="this.value = this.value.toUpperCase()" required>
                                                            @error('fathersName')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Select Gender -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Select Gender:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="gender" id="gender"
                                                                required>
                                                                <option value="">-- Select Gender --</option>

                                                                <option value="male"
                                                                    {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                                                </option>
                                                                <option value="female"
                                                                    {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                                    Female</option>
                                                            </select>
                                                            @error('gender')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Date of Birth -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Date of Birth:</label>
                                                        <div class="col-sm-12">
                                                            <input type="date" name="dob" id="dob"
                                                                value="{{ old('dob') }}" class="form-control"
                                                                required>
                                                            @error('dob')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Blood Group -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Blood Group:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="blood_group"
                                                                id="blood_group" required>
                                                                <option value="">-- Select Blood Group --</option>
                                                                <option value="a-positive"
                                                                    {{ old('blood_group') == 'a-positive' ? 'selected' : '' }}>
                                                                    A+</option>
                                                                <option value="a-negative"
                                                                    {{ old('blood_group') == 'a-negative' ? 'selected' : '' }}>
                                                                    A-</option>
                                                                <option value="b-positive"
                                                                    {{ old('blood_group') == 'b-positive' ? 'selected' : '' }}>
                                                                    B+</option>
                                                                <option value="b-negative"
                                                                    {{ old('blood_group') == 'b-negative' ? 'selected' : '' }}>
                                                                    B-</option>
                                                                <option value="ab-positive"
                                                                    {{ old('blood_group') == 'ab-positive' ? 'selected' : '' }}>
                                                                    AB+</option>
                                                                <option value="ab-negative"
                                                                    {{ old('blood_group') == 'ab-negative' ? 'selected' : '' }}>
                                                                    AB-</option>
                                                                <option value="o-positive"
                                                                    {{ old('blood_group') == 'o-positive' ? 'selected' : '' }}>
                                                                    O+</option>
                                                                <option value="o-negative"
                                                                    {{ old('blood_group') == 'o-negative' ? 'selected' : '' }}>
                                                                    O-</option>
                                                            </select>
                                                            @error('blood_group')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mobile Number -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Mobile Number:</label>
                                                        <div class="col-sm-12">
                                                            <input type="tel" name="mobile" id="mobile"
                                                                class="form-control" placeholder="Enter Mobile Number"
                                                                value="{{ old('mobile') }}" required>
                                                            @error('mobile')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- WhatsApp Number -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">WhatsApp Number:</label>
                                                        <div class="col-sm-12">
                                                            <input type="tel" name="whatsappNumber"
                                                                id="whatsappNumber" class="form-control"
                                                                placeholder="Enter WhatsApp Number"
                                                                value="{{ old('whatsappNumber') }}" required>
                                                            @error('whatsappNumber')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Email:</label>
                                                        <div class="col-sm-12">
                                                            <input type="email" name="email" id="email"
                                                                value="{{ old('email') }}" class="form-control"
                                                                placeholder="Enter Email" required>
                                                            @error('email')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Select
                                                            Qualification:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="qualification"
                                                                id="qualification" required>
                                                                <option value="">-- Select Qualification --</option>
                                                                <option value="literate"
                                                                    {{ old('qualification') == 'literate' ? 'selected' : '' }}>
                                                                    Literate</option>
                                                                <option value="highSchool"
                                                                    {{ old('qualification') == 'highSchool' ? 'selected' : '' }}>
                                                                    High School</option>
                                                                <option value="highersecondary"
                                                                    {{ old('qualification') == 'higherSecondary' ? 'selected' : '' }}>
                                                                    Higher Secondary</option>
                                                                <option value="graduation"
                                                                    {{ old('qualification') == 'graduation' ? 'selected' : '' }}>
                                                                    Graduation</option>
                                                                <option value="postGraduation"
                                                                    {{ old('qualification') == 'postGraduation' ? 'selected' : '' }}>
                                                                    Post Graduation</option>
                                                            </select>
                                                            @error('qualification')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Current Work:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                name="current_work" id="current_work"
                                                                placeholder="Current Work"
                                                                value="{{ old('current_work') }}"
                                                                oninput="this.value = this.value.toUpperCase()" required>
                                                            @error('current_work')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Aadhar Number:</label>
                                                        <div class="col-sm-12">
                                                            <input type="number" class="form-control" name="adhar_no"
                                                                id="adhar_no" placeholder="Aadhar Number"
                                                                value="{{ old('adhar_no') }}" required>
                                                            @error('adhar_no')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">PAN Card Number:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="pan_card_no"
                                                                id="pan_card_no" placeholder="PAN Card Number"
                                                                value="{{ old('pan_card_no') }}"
                                                                oninput="this.value = this.value.toUpperCase()" required>
                                                            @error('pan_card_no')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Marital Status:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="maritial_status"
                                                                id="maritial_status" required>
                                                                <option value="">-- Marital Status --</option>
                                                                <option value="married"
                                                                    {{ old('maritial_status') == 'married' ? 'selected' : '' }}>
                                                                    Married</option>
                                                                <option value="unmarried"
                                                                    {{ old('maritial_status') == 'unmarried' ? 'selected' : '' }}>
                                                                    Unmarried</option>
                                                            </select>
                                                            @error('maritial_status')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Member of Any Political
                                                            Party:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="member_of_any_pol_party"
                                                                id="member_of_any_pol_party" required>
                                                                <option value="">-- Member of Any Political Party --
                                                                </option>
                                                                <option value="Yes"
                                                                    {{ old('member_of_any_pol_party') == 'Yes' ? 'selected' : '' }}>
                                                                    Yes</option>
                                                                <option value="No"
                                                                    {{ old('member_of_any_pol_party') == 'no' ? 'selected' : '' }}>
                                                                    No</option>
                                                            </select>
                                                            @error('member_of_any_pol_party')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Member of Other Human Rights
                                                            Organisation:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="member_social_org"
                                                                id="member_social_org" required>
                                                                <option value="">-- Member of Social Organisation --
                                                                </option>
                                                                <option value="yes"
                                                                    {{ old('member_social_org') == 'yes' ? 'selected' : '' }}>
                                                                    Yes</option>
                                                                <option value="no"
                                                                    {{ old('member_social_org') == 'no' ? 'selected' : '' }}>
                                                                    No</option>
                                                            </select>
                                                            @error('member_social_org')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Any Court Case:</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control" name="court_cases"
                                                                id="court_cases" required>
                                                                <option value="">-- Any Court Cases --</option>
                                                                <option value="yes"
                                                                    {{ old('court_cases') == 'yes' ? 'selected' : '' }}>Yes
                                                                </option>
                                                                <option value="No"
                                                                    {{ old('court_cases') == 'no' ? 'selected' : '' }}>No
                                                                </option>
                                                            </select>
                                                            @error('court_cases')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Recommended By ID No.
                                                            (NHRCCB/0000):</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control"
                                                                name="recommended_by" id="recommended_by"
                                                                placeholder="(NHRCCB/0000)"
                                                                value="{{ old('recommended_by') }}"
                                                                oninput="this.value = this.value.toUpperCase()" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Address -->
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Address: <small>(Add pin code also)</small></label>
                                                        <div class="col-sm-12">
                                                            <textarea type="text" rows="2" name="address" id="address" class="form-control"
                                                                placeholder="Enter Address" value="{{ old('address') }}" oninput="this.value = this.value.toUpperCase()"
                                                                required>{{ old('address') }}</textarea>
                                                            @error('address')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-12">Promo Code:</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="promo_code" id="promo_code" value="{{ old('promo_code') }}" placeholder="Enter Promo Code"  oninput="this.value = this.value.toUpperCase()">
                                                            @error('promo_code')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="row justify-content-center form_image ">
                                                <div class="text-center mb-3">
                                                    <h2 class="my-2">Document Section</h2>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 ">
                                                    <div class="form-group">
                                                        <div class="de-left-tit py-1 px-3 mx-3 mb-2">
                                                            <h5 class="text-light text-center py-0">Upload Image</h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <img class="img-fluid"
                                                                style="border: 1px solid; border-radius: 10px; "
                                                                id="passport_image_view"
                                                                src="{{ asset('uploads/joinus/placeholder.jpg') }}"
                                                                alt="blog image">
                                                            <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                            <input type="file" name="passport_image"
                                                                id="passport_image"
                                                                class="custom-file-input border-0 mt-2"
                                                                accept=".jpg, .png,.webp, .jpeg|image/*">

                                                            @error('passport_image')
                                                                <span class="text-danger" role="alert">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                            <h5 class="text-light text-center py-0">Adhar Card Front Side
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <img class="img-fluid"
                                                                style="border: 1px solid; border-radius: 10px;"
                                                                id="adhar_front_img_view"
                                                                src="{{ asset('uploads/joinus/placeholder.jpg') }}"
                                                                alt="blog image">
                                                            <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                            <input type="file" name="adhar_front_img"
                                                                id="adhar_front_img"
                                                                class="custom-file-input border-0 mt-2"
                                                                accept=".jpg, .png,.webp, .jpeg|image/*">

                                                            @error('adhar_front_img')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                            <h5 class="text-light text-center py-0">Adhar Card Back Side
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <img class="img-fluid"
                                                                style="border: 1px solid; border-radius: 10px;"
                                                                id="adhar_back_img_view"
                                                                src="{{ asset('uploads/joinus/placeholder.jpg') }}"
                                                                alt="blog image">
                                                            <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                            <input type="file" name="adhar_back_img"
                                                                id="adhar_back_img"
                                                                class="custom-file-input border-0 mt-2"
                                                                accept=".jpg, .png,.webp, .jpeg|image/*">

                                                            @error('adhar_back_img')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                            <h5 class="text-light text-center py-0">PAN Card (Optional)
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <img class="img-fluid"
                                                                style="border: 1px solid; border-radius: 10px;"
                                                                id="pan_card_img_view"
                                                                src="{{ asset('uploads/joinus/placeholder.jpg') }}"
                                                                alt="blog image">
                                                            <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                            <input type="file" name="pan_card_img" id="pan_card_img"
                                                                class="custom-file-input border-0 mt-2"
                                                                accept=".jpg, .png,.webp, .jpeg|image/*">

                                                            @error('pan_card_img')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="form-group ">
                                                        <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                            <h5 class="text-light text-center py-0">Other Document </h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <img class="img-fluid"
                                                                style="border: 1px solid; border-radius: 10px;"
                                                                id="other_doc_img_view"
                                                                src="{{ asset('uploads/joinus/placeholder.jpg') }}"
                                                                alt="blog image">
                                                            <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                            <input type="file" name="other_doc_img" id="other_doc_img"
                                                                class="custom-file-input border-0 mt-2"
                                                                accept=".jpg, .png,.webp, .jpeg|image/*">

                                                            @error('other_doc_img')
                                                                <span class="text-danger">
                                                                    {{ $message }}
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="form-group mar-bot-0">
                                                <div class="col-sm-offset-3 col-sm-6">
                                                    <i class="waves-effect waves-light light-btn waves-input-wrapper">
                                                        <input type="submit" value="APPLY NOW"
                                                            class="waves-button-input">
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
    </div>
@endsection


@section('page-js')
    <script>
        function getState() {
            $.ajax({
                url: '{{ route('state.data') }}',
                type: 'GET',
                success: function(data) {
                    data.forEach(function(state) {
                        $("#state").append(
                            '<option value="' + state.name + '">' + state.name + '</option>'
                        );
                    });
                },
                error: function() {
                    console.log('Error fetching data.');

                }
            });
        }

        getState();

        function getDivisions(stateName) {
            $.ajax({
                url: '{{ route('division.data') }}',
                type: 'GET',
                data: {
                    state: stateName
                },
                success: function(data) {
                    $("#division").empty();
                    $("#division").append(
                        '<option value="">--Select Division--</option>');

                    data.forEach(function(division) {
                        $("#division").append(
                            '<option value="' + division.name + '">' + division.name + '</option>'
                        );
                    });
                },
                error: function() {
                    console.log('Error fetching divisions.');
                }
            });
        }

        function getDistrict(divisionName) {
            $.ajax({
                url: '{{ route('district.data') }}',
                type: 'GET',
                data: {
                    division: divisionName
                },
                success: function(data) {
                    $("#district").empty();
                    $("#district").append(
                        '<option value="">--Select District--</option>');

                    data.forEach(function(district) {
                        $("#district").append(
                            '<option value="' + district.name + '">' + district.name + '</option>'
                        );
                    });
                },
                error: function() {
                    console.log('Error fetching districts.');
                }
            });
        }

        $("#state").change(function() {
            let stateName = $("#state").val();
            getDivisions(stateName);
        });
        $("#division").change(function() {
            let divisionName = $("#division").val();
            getDistrict(divisionName);
        });



        // for passport
        function imgUpload() {
            $('#passport_image').click();
        }
        $('#passport_image').change(function(e) {
            var tmppath = URL.createObjectURL(e.target.files[0]);
            $("#passport_image_view").attr('src', URL.createObjectURL(e.target.files[0]));
        });

        // for adhar Front Image
        function imgUpload() {
            $('#adhar_front_img').click();
        }
        $('#adhar_front_img').change(function(e) {
            var tmppath = URL.createObjectURL(e.target.files[0]);
            $("#adhar_front_img_view").attr('src', URL.createObjectURL(e.target.files[0]));
        });

        // for adhar Back Image
        function imgUpload() {
            $('#adhar_back_img').click();
        }
        $('#adhar_back_img').change(function(e) {
            var tmppath = URL.createObjectURL(e.target.files[0]);
            $("#adhar_back_img_view").attr('src', URL.createObjectURL(e.target.files[0]));
        });

        // for Pan Card Image
        function imgUpload() {
            $('#pan_card_img').click();
        }
        $('#pan_card_img').change(function(e) {
            var tmppath = URL.createObjectURL(e.target.files[0]);
            $("#pan_card_img_view").attr('src', URL.createObjectURL(e.target.files[0]));
        });

        // for Other Document
        function imgUpload() {
            $('#other_doc_img').click();
        }
        $('#other_doc_img').change(function(e) {
            var tmppath = URL.createObjectURL(e.target.files[0]);
            $("#other_doc_img_view").attr('src', URL.createObjectURL(e.target.files[0]));
        });
    </script>

    <script>
        const designations = {
            "NATIONAL TEAM": [
                "NATIONAL VICE PRESIDENT", "NATIONAL GENERAL SECRETARY", "NATIONAL SECRETARY",
                "NATIONAL JOINT SECRETARY", "NATIONAL LEGAL ADVISOR", "NATIONAL MEDIA OFFICER",
                "NATIONAL PARTON", "NATIONAL ADVISOR"
            ],
            "STATE TEAM": [
                "STATE PRESIDENT", "STATE VICE PRESIDENT", "STATE GENERAL SECRETARY", "STATE SECRETARY",
                "STATE JOINT SECRETARY", "STATE MEDIA OFFICER", "STATE PARTON", "STATE ADVISOR"
            ],
            "DISTRICT TEAM": [
                "DISTRICT PRESIDENT", "DISTRICT VICE PRESIDENT", "DISTRICT GENERAL SECRETARY", "DISTRICT SECRETARY",
                "DISTRICT JOINT SECRETARY", "DISTRICT LEGAL ADVISOR", "DISTRICT MEDIA OFFICER", "DISTRICT PARTON",
                "DISTRICT ADVISOR"
            ],
            "DIVISION TEAM": [
                "DIVISION PRESIDENT", "DIVISION VICE PRESIDENT", "DIVISION GENERAL SECRETARY", "DIVISION SECRETARY",
                "DIVISION JOINT SECRETARY", "DIVISION LEGAL ADVISOR", "DIVISION MEDIA OFFICER", "DIVISION PARTON",
                "DIVISION ADVISOR"
            ],
            "BLOCK TEAM": [
                "BLOCK PRESIDENT", "BLOCK VICE PRESIDENT", "BLOCK GENERAL SECRETARY", "BLOCK SECRETARY",
                "BLOCK JOINT SECRETARY", "BLOCK LEGAL ADVISOR", "BLOCK MEDIA OFFICER", "BLOCK PARTON",
                "BLOCK ADVISOR"
            ],
            "ACTIVE MEMBER": [
                "ACTIVE MEMBER"
            ],
            "VOLUNTEER": [
                "VOLUNTEER"
            ]
        };


        function updateDesignations() {
            const teamSelect = document.getElementById("level");
            const designationSelect = document.getElementById("designation");

            const selectedTeam = teamSelect.value;
            designationSelect.innerHTML = "<option value=''>-- Select Designation --</option>";

            if (selectedTeam && designations[selectedTeam]) {
                designations[selectedTeam].forEach(designation => {
                    let option = document.createElement("option");
                    option.value = designation;
                    option.textContent = designation;
                    designationSelect.appendChild(option);
                });
            }
        }

        // Call updateDesignations on page load if an old value exists
        window.onload = function() {
            updateDesignations();
        };
    </script>
@endsection
