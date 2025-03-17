@extends('web.layouts.app')
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
<div class="container-fluid">
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="n-form-com admiss-form">
                        <div class="col s12">
                            <div class="card py-3">
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{route('postJoinUsForm')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row border-bottom mb-3 mb-sm-0 px-4 px-sm-0">
                                            <div class="text-center mb-3">
                                                <h2 class="my-3 my-sm-0 fs-1 fs-sm-4">Active Membership Form</h2>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Select Your State:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="state" id="state" require>
                                                            <option value="">-- Select state --</option>
                                                            <option value="Andhra-Pradesh">Andhra Pradesh</option>
                                                            <option value="Arunachal-Pradesh">Arunachal Pradesh</option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal-Pradesh">Himachal Pradesh</option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Madhya-Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Odisha">Odisha</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil-Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttar-Pradesh">Uttar Pradesh</option>
                                                            <option value="Uttarakhand">Uttarakhand</option>
                                                            <option value="West-Bengal">West Bengal</option>
                                                            <option value="Andaman-and-Nicobar-Islands">Andaman and Nicobar Islands</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Dadra-and-Nagar-Haveli-and-Daman-and-Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Jammu-and-Kashmir">Jammu and Kashmir</option>
                                                            <option value="Ladakh">Ladakh</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Puducherry">Puducherry</option>
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
                                                        <select class="form-control" name="division" id="division" require>
                                                            <option value="">-- Select Division --</option>

                                                            <!-- Andhra Pradesh -->
                                                            <option value="Anantapur">Anantapur</option>
                                                            <option value="Chittoor">Chittoor</option>
                                                            <option value="East-Godavari">East Godavari</option>
                                                            <option value="Guntur">Guntur</option>
                                                            <option value="Kadapa">Kadapa</option>
                                                            <option value="Krishna">Krishna</option>
                                                            <option value="Kurnool">Kurnool</option>
                                                            <option value="Nellore">Nellore</option>
                                                            <option value="Prakasam">Prakasam</option>
                                                            <option value="Srikakulam">Srikakulam</option>
                                                            <option value="Visakhapatnam">Visakhapatnam</option>
                                                            <option value="Vizianagaram">Vizianagaram</option>
                                                            <option value="West-Godavari">West Godavari</option>

                                                            <!-- Arunachal Pradesh -->
                                                            <option value="Tawang">Tawang</option>
                                                            <option value="West-Kameng">West Kameng</option>
                                                            <option value="East-Kameng">East Kameng</option>
                                                            <option value="Papum-Pare">Papum Pare</option>
                                                            <option value="Kurung-Kumey">Kurung Kumey</option>
                                                            <option value="Kra-Daadi">Kra Daadi</option>
                                                            <option value="Lower-Subansiri">Lower Subansiri</option>
                                                            <option value="Upper-Subansiri">Upper Subansiri</option>
                                                            <option value="West-Siang">West Siang</option>
                                                            <option value="East-Siang">East Siang</option>
                                                            <option value="Upper-Siang">Upper Siang</option>
                                                            <option value="Lower-Siang">Lower Siang</option>
                                                            <option value="Dibang-Valley">Dibang Valley</option>
                                                            <option value="Lower-Dibang-Valley">Lower Dibang Valley</option>
                                                            <option value="Anjaw">Anjaw</option>
                                                            <option value="Changlang">Changlang</option>
                                                            <option value="Lohit">Lohit</option>
                                                            <option value="Namsai">Namsai</option>
                                                            <option value="Tirap">Tirap</option>
                                                            <option value="Longding">Longding</option>

                                                            <!-- Assam -->
                                                            <option value="Barak-Valley">Barak Valley</option>
                                                            <option value="Central-Assam">Central Assam</option>
                                                            <option value="Lower-Assam">Lower Assam</option>
                                                            <option value="North-Assam">North Assam</option>
                                                            <option value="Upper-Assam">Upper Assam</option>

                                                            <!-- Bihar -->
                                                            <option value="Patna">Patna</option>
                                                            <option value="Tirhut">Tirhut</option>
                                                            <option value="Darbhanga">Darbhanga</option>
                                                            <option value="Kosi">Kosi</option>
                                                            <option value="Purnia">Purnia</option>
                                                            <option value="Magadh">Magadh</option>
                                                            <option value="Munger">Munger</option>
                                                            <option value="Bhagalpur">Bhagalpur</option>

                                                            <!-- Chhattisgarh -->
                                                            <option value="Bastar">Bastar</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Durg">Durg</option>
                                                            <option value="Raipur">Raipur</option>
                                                            <option value="Sarguja">Sarguja</option>

                                                            <!-- Goa -->
                                                            <option value="North-Goa">North Goa</option>
                                                            <option value="South-Goa">South Goa</option>

                                                            <!-- Gujarat -->
                                                            <option value="Ahmedabad">Ahmedabad</option>
                                                            <option value="Surat">Surat</option>
                                                            <option value="Vadodara">Vadodara</option>
                                                            <option value="Rajkot">Rajkot</option>
                                                            <option value="Bhavnagar">Bhavnagar</option>
                                                            <option value="Jamnagar">Jamnagar</option>
                                                            <option value="Junagadh">Junagadh</option>
                                                            <option value="Kutch">Kutch</option>

                                                            <!-- Haryana -->
                                                            <option value="Ambala">Ambala</option>
                                                            <option value="Faridabad">Faridabad</option>
                                                            <option value="Gurgaon">Gurgaon</option>
                                                            <option value="Hisar">Hisar</option>
                                                            <option value="Karnal">Karnal</option>
                                                            <option value="Rohtak">Rohtak</option>

                                                            <!-- Himachal Pradesh -->
                                                            <option value="Kangra">Kangra</option>
                                                            <option value="Mandi">Mandi</option>
                                                            <option value="Shimla">Shimla</option>
                                                            <option value="Kullu">Kullu</option>
                                                            <option value="Chamba">Chamba</option>
                                                            <option value="Una">Una</option>

                                                            <!-- Jammu and Kashmir -->
                                                            <option value="Jammu">Jammu</option>
                                                            <option value="Kashmir">Kashmir</option>
                                                            <option value="Ladakh">Ladakh</option>
                                                            <option value="Leh">Leh</option>

                                                            <!-- Jharkhand -->
                                                            <option value="Ranchi">Ranchi</option>
                                                            <option value="Dhanbad">Dhanbad</option>
                                                            <option value="Jamshedpur">Jamshedpur</option>
                                                            <option value="Bokaro">Bokaro</option>
                                                            <option value="Hazaribagh">Hazaribagh</option>

                                                            <!-- Karnataka -->
                                                            <option value="Bengaluru">Bengaluru</option>
                                                            <option value="Mysuru">Mysuru</option>
                                                            <option value="Mangalore">Mangalore</option>
                                                            <option value="Hubli">Hubli</option>
                                                            <option value="Belgaum">Belgaum</option>
                                                            <option value="Gulbarga">Gulbarga</option>

                                                            <!-- Kerala -->
                                                            <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                                            <option value="Kochi">Kochi</option>
                                                            <option value="Kozhikode">Kozhikode</option>
                                                            <option value="Kannur">Kannur</option>
                                                            <option value="Thrissur">Thrissur</option>
                                                            <!-- Madhya Pradesh -->
                                                            <option value="Bhopal">Bhopal</option>
                                                            <option value="Indore">Indore</option>
                                                            <option value="Jabalpur">Jabalpur</option>
                                                            <option value="Gwalior">Gwalior</option>
                                                            <option value="Ujjain">Ujjain</option>
                                                            <option value="Sagar">Sagar</option>
                                                            <option value="Rewa">Rewa</option>
                                                            <option value="Shahdol">Shahdol</option>
                                                            <option value="Hoshangabad">Hoshangabad</option>
                                                            <option value="Chhindwara">Chhindwara</option>

                                                            <!-- Maharashtra -->
                                                            <option value="Konkan">Konkan</option>
                                                            <option value="Pune">Pune</option>
                                                            <option value="Nashik">Nashik</option>
                                                            <option value="Aurangabad">Aurangabad</option>
                                                            <option value="Amravati">Amravati</option>
                                                            <option value="Nagpur">Nagpur</option>

                                                            <!-- Manipur -->
                                                            <option value="Imphal-East">Imphal East</option>
                                                            <option value="Imphal-West">Imphal West</option>
                                                            <option value="Bishnupur">Bishnupur</option>
                                                            <option value="Thoubal">Thoubal</option>
                                                            <option value="Senapati">Senapati</option>
                                                            <option value="Ukhrul">Ukhrul</option>
                                                            <option value="Churachandpur">Churachandpur</option>
                                                            <option value="Tamenglong">Tamenglong</option>

                                                            <!-- Meghalaya -->
                                                            <option value="Khasi-Hills">Khasi Hills</option>
                                                            <option value="Jaintia-Hills">Jaintia Hills</option>
                                                            <option value="Garo-Hills">Garo Hills</option>

                                                            <!-- Mizoram -->
                                                            <option value="Aizawl">Aizawl</option>
                                                            <option value="Champhai">Champhai</option>
                                                            <option value="Kolasib">Kolasib</option>
                                                            <option value="Lawngtlai">Lawngtlai</option>
                                                            <option value="Lunglei">Lunglei</option>
                                                            <option value="Mamit">Mamit</option>
                                                            <option value="Saiha">Saiha</option>
                                                            <option value="Serchhip">Serchhip</option>

                                                            <!-- Nagaland -->
                                                            <option value="Kohima">Kohima</option>
                                                            <option value="Dimapur">Dimapur</option>
                                                            <option value="Mokokchung">Mokokchung</option>
                                                            <option value="Tuensang">Tuensang</option>
                                                            <option value="Wokha">Wokha</option>
                                                            <option value="Mon">Mon</option>
                                                            <option value="Phek">Phek</option>
                                                            <option value="Zunheboto">Zunheboto</option>
                                                            <option value="Longleng">Longleng</option>
                                                            <option value="Kiphire">Kiphire</option>
                                                            <option value="Peren">Peren</option>

                                                            <!-- Odisha -->
                                                            <option value="Central-Odisha">Central Odisha</option>
                                                            <option value="Northern-Odisha">Northern Odisha</option>
                                                            <option value="Southern-Odisha">Southern Odisha</option>
                                                            <option value="Western-Odisha">Western Odisha</option>

                                                            <!-- Punjab -->
                                                            <option value="Majha">Majha</option>
                                                            <option value="Doaba">Doaba</option>
                                                            <option value="Malwa">Malwa</option>

                                                            <!-- Rajasthan -->
                                                            <option value="Ajmer">Ajmer</option>
                                                            <option value="Bikaner">Bikaner</option>
                                                            <option value="Jaipur">Jaipur</option>
                                                            <option value="Jodhpur">Jodhpur</option>
                                                            <option value="Kota">Kota</option>
                                                            <option value="Udaipur">Udaipur</option>

                                                            <!-- Sikkim -->
                                                            <option value="East-Sikkim">East Sikkim</option>
                                                            <option value="West-Sikkim">West Sikkim</option>
                                                            <option value="North-Sikkim">North Sikkim</option>
                                                            <option value="South-Sikkim">South Sikkim</option>

                                                            <!-- Tamil Nadu -->
                                                            <option value="Chennai">Chennai</option>
                                                            <option value="Coimbatore">Coimbatore</option>
                                                            <option value="Madurai">Madurai</option>
                                                            <option value="Tiruchirappalli">Tiruchirappalli</option>
                                                            <option value="Tirunelveli">Tirunelveli</option>
                                                            <option value="Salem">Salem</option>
                                                            <option value="Erode">Erode</option>
                                                            <option value="Vellore">Vellore</option>

                                                            <!-- Telangana -->
                                                            <option value="Hyderabad">Hyderabad</option>
                                                            <option value="Warangal">Warangal</option>
                                                            <option value="Karimnagar">Karimnagar</option>
                                                            <option value="Nizamabad">Nizamabad</option>
                                                            <option value="Khammam">Khammam</option>
                                                            <option value="Adilabad">Adilabad</option>

                                                            <!-- Tripura -->
                                                            <option value="Dhalai">Dhalai</option>
                                                            <option value="Khowai">Khowai</option>
                                                            <option value="North-Tripura">North Tripura</option>
                                                            <option value="Sepahijala">Sepahijala</option>
                                                            <option value="South-Tripura">South Tripura</option>
                                                            <option value="Unakoti">Unakoti</option>
                                                            <option value="West-Tripura">West Tripura</option>

                                                            <!-- Uttar Pradesh -->
                                                            <option value="Agra">Agra</option>
                                                            <option value="Allahabad">Allahabad</option>
                                                            <option value="Bareilly">Bareilly</option>
                                                            <option value="Chitrakoot">Chitrakoot</option>
                                                            <option value="Gorakhpur">Gorakhpur</option>
                                                            <option value="Jhansi">Jhansi</option>
                                                            <option value="Kanpur">Kanpur</option>
                                                            <option value="Lucknow">Lucknow</option>
                                                            <option value="Meerut">Meerut</option>
                                                            <option value="Varanasi">Varanasi</option>

                                                            <!-- Uttarakhand -->
                                                            <option value="Garhwal">Garhwal</option>
                                                            <option value="Kumaon">Kumaon</option>

                                                            <!-- West Bengal -->
                                                            <option value="Presidency">Presidency</option>
                                                            <option value="Burdwan">Burdwan</option>
                                                            <option value="Medinipur">Medinipur</option>
                                                            <option value="Jalpaiguri">Jalpaiguri</option>

                                                            <!-- Union Territories -->
                                                            <!-- Andaman and Nicobar Islands -->
                                                            <option value="North-and-Middle-Andaman">North and Middle Andaman</option>
                                                            <option value="South-Andaman">South Andaman</option>
                                                            <option value="Nicobar">Nicobar</option>

                                                            <!-- Chandigarh -->
                                                            <option value="Chandigarh">Chandigarh</option>

                                                            <!-- Delhi -->
                                                            <option value="New-Delhi">New Delhi</option>
                                                            <option value="South-Delhi">South Delhi</option>
                                                            <option value="North-Delhi">North Delhi</option>

                                                            <!-- Jammu and Kashmir -->
                                                            <option value="Jammu">Jammu</option>
                                                            <option value="Kashmir">Kashmir</option>
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
                                                        <input type="text" name="districts" id="districts" class="form-control" placeholder="Enter Your Districts" value="{{ old('districts') }}">
                                                        @error('districts')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Blocks Field -->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Blocks:</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="blocks" id="blocks" class="form-control" placeholder="Enter Your Blocks" value="{{ old('blocks') }}">
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
                                                        <input type="text" name="policeStation" id="policeStation" class="form-control" placeholder="Enter Your Police Station" value="{{ old('policeStation') }}">
                                                        @error('policeStation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Select Wing:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="wing" id="wing">
                                                            <option value="">-- Select Wing --</option>
                                                            <option value="active-membership" {{ old('wing') == 'active-membership' ? 'selected' : '' }}>Active Membership</option>
                                                            <!-- Add wings here -->
                                                            <!-- Add wings here -->
                                                        </select>
                                                        @error('wing')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Select Level:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="level" id="level" require>
                                                            <option value="">-- Select Level --</option>
                                                            <option value="active-membership" {{ old('wing') == 'active-membership' ? 'selected' : '' }}>Active Membership</option>
                                                        </select>
                                                        @error('level')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Select Designation -->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Select Designation:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="designation" id="designation" require>
                                                            <option value="">-- Select Designation --</option>
                                                            <option value="active-membership" {{ old('wing') == 'active-membership' ? 'selected' : '' }}>Active Membership</option>
                                                        </select>
                                                        @error('designation')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Name (As Per Aadhaar) -->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Name (As Per Aadhaar):</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name as per Aadhaar" value="{{ old('name') }}" require>
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
                                                    <label class="control-label col-sm-12">Father's / Husband's Name:</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" name="fathersName" id="fathersName" class="form-control" value="{{ old('fathersName')}}"  placeholder="Enter father's or husband's name" require>
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
                                                        <select class="form-control" name="gender" id="gender" require>
                                                            <option value="">-- Select Gender --</option>
                                                           
                                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
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
                                                        <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control" require>
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
                                                        <select class="form-control" name="blood_group" id="blood_group" require>
                                                            <option value="">-- Select Blood Group --</option>
                                                            <option value="a-positive" {{ old('blood_group') == 'a-positive' ? 'selected' : '' }}>A+</option>
                                                            <option value="a-negative" {{ old('blood_group') == 'a-negative' ? 'selected' : '' }}>A-</option>
                                                            <option value="b-positive" {{ old('blood_group') == 'b-positive' ? 'selected' : '' }}>B+</option>
                                                            <option value="b-negative" {{ old('blood_group') == 'b-negative' ? 'selected' : '' }}>B-</option>
                                                            <option value="ab-positive" {{ old('blood_group') == 'ab-positive' ? 'selected' : '' }}>AB+</option>
                                                            <option value="ab-negative" {{ old('blood_group') == 'ab-negative' ? 'selected' : '' }}>AB-</option>
                                                            <option value="o-positive" {{ old('blood_group') == 'o-positive' ? 'selected' : '' }}>O+</option>
                                                            <option value="o-negative" {{ old('blood_group') == 'o-negative' ? 'selected' : '' }}>O-</option>
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
                                                        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number" value="{{ old('mobile') }}" require>
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
                                                        <input type="number" name="whatsappNumber" id="whatsappNumber" class="form-control" placeholder="Enter WhatsApp Number" value="{{ old('whatsappNumber') }}" require>
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
                                                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email" require>
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
                                                    <label class="control-label col-sm-12">Select Qualification:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="qualification" id="qualification" require>
                                                            <option value="">-- Select Qualification --</option>
                                                            <option value="literate" {{ old('qualification') == 'literate' ? 'selected' : '' }}>Literate</option>
                                                            <option value="highSchool" {{ old('qualification') == 'highSchool' ? 'selected' : '' }}>High School</option>
                                                            <option value="highersecondary" {{ old('qualification') == 'higherSecondary' ? 'selected' : '' }}>Higher Secondary</option>
                                                            <option value="graduation" {{ old('qualification') == 'graduation' ? 'selected' : '' }}>Graduation</option>
                                                            <option value="postGraduation" {{ old('qualification') == 'postGraduation' ? 'selected' : '' }}>Post Graduation</option>
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
                                                        <input type="text" class="form-control" name="current_work" id="current_work" placeholder="Current Work" value="{{ old('current_work') }}" require>
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
                                                        <input type="text" class="form-control" name="adhar_no" id="adhar_no" placeholder="Aadhar Number" value="{{ old('adhar_no') }}" require>
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
                                                        <input type="text" class="form-control" name="pan_card_no" id="pan_card_no" placeholder="PAN Card Number" value="{{ old('pan_card_no') }}" require>
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
                                                        <select class="form-control" name="maritial_status" id="maritial_status" require>
                                                            <option value="">-- Marital Status --</option>
                                                            <option value="married" {{ old('maritial_status') == 'married' ? 'selected' : '' }}>Married</option>
                                                            <option value="unmarried" {{ old('maritial_status') == 'unmarried' ? 'selected' : '' }}>Unmarried</option>
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
                                                    <label class="control-label col-sm-12">Member of Any Political Party:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="member_of_any_pol_party" id="member_of_any_pol_party" require>
                                                            <option value="">-- Member of Any Political Party --</option>
                                                            <option value="Yes" {{ old('member_of_any_pol_party') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                            <option value="No" {{ old('member_of_any_pol_party') == 'no' ? 'selected' : '' }}>No</option>
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
                                                    <label class="control-label col-sm-12">Member of Other Human Rights Organisation:</label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control" name="member_social_org" id="member_social_org" require>
                                                            <option value="">-- Member of Social Organisation --</option>
                                                            <option value="yes" {{ old('member_social_org') == 'yes' ? 'selected' : '' }}>Yes</option>
                                                            <option value="no" {{ old('member_social_org') == 'no' ? 'selected' : '' }}>No</option>
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
                                                        <select class="form-control" name="court_cases" id="court_cases" require>
                                                            <option value="">-- Any Court Cases --</option>
                                                            <option value="yes" {{ old('court_cases') == 'yes' ? 'selected' : '' }}>Yes</option>
                                                            <option value="No" {{ old('court_cases') == 'no' ? 'selected' : '' }}>No</option>
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
                                                    <label class="control-label col-sm-12">Recommended By ID No. (NHRCCB/0000):</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" name="recommended_by" id="recommended_by" placeholder="(NHRCCB/0000)" value="{{ old('recommended_by') }}"  require>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Address -->
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-12">Address:</label>
                                                    <div class="col-sm-12">
                                                        <textarea type="text" rows="2" name="address" id="address" class="form-control" placeholder="Enter Address" value="{{ old('address') }}" require>{{ old('address') }}</textarea>
                                                        @error('address')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center form_image ">
                                            <div class="text-center mb-3">
                                                <h2 class="my-2">Document Section</h2>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="de-left-tit py-1 px-3 mx-3 mb-2">
                                                        <h5 class="text-light text-center py-0">Upload Image</h5>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <img class="img-fluid" style="border: 1px solid; border-radius: 10px; " id="passport_image_view" src="{{asset('uploads/joinus/placeholder.jpg')}}" alt="blog image">
                                                        <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                        <input type="file" name="passport_image" id="passport_image" class="custom-file-input border-0 mt-2" accept=".jpg, .png,.webp, .jpeg|image/*">

                                                        @error('passport_image')
                                                        <span class="text-danger" role="alert">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-xs-12">
                                                <div class="form-group ">
                                                    <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                        <h5 class="text-light text-center py-0">Adhar Card Front Side </h5>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <img class="img-fluid" style="border: 1px solid; border-radius: 10px;" id="adhar_front_img_view" src="{{asset('uploads/joinus/placeholder.jpg')}}" alt="blog image">
                                                        <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                        <input type="file" name="adhar_front_img" id="adhar_front_img" class="custom-file-input border-0 mt-2" accept=".jpg, .png,.webp, .jpeg|image/*">

                                                        @error('adhar_front_img')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-xs-12">
                                                <div class="form-group ">
                                                    <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                        <h5 class="text-light text-center py-0">Adhar Card Back Side </h5>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <img class="img-fluid" style="border: 1px solid; border-radius: 10px;" id="adhar_back_img_view" src="{{asset('uploads/joinus/placeholder.jpg')}}" alt="blog image">
                                                        <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                        <input type="file" name="adhar_back_img" id="adhar_back_img" class="custom-file-input border-0 mt-2" accept=".jpg, .png,.webp, .jpeg|image/*">

                                                        @error('adhar_back_img')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-xs-12">
                                                <div class="form-group ">
                                                    <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                        <h5 class="text-light text-center py-0">PAN Card (Optional) </h5>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <img class="img-fluid" style="border: 1px solid; border-radius: 10px;" id="pan_card_img_view" src="{{asset('uploads/joinus/placeholder.jpg')}}" alt="blog image">
                                                        <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                        <input type="file" name="pan_card_img" id="pan_card_img" class="custom-file-input border-0 mt-2" accept=".jpg, .png,.webp, .jpeg|image/*">

                                                        @error('pan_card_img')
                                                        <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 col-xs-12">
                                                <div class="form-group ">
                                                    <div class="de-left-tit py-1 px-3 mx-3 mb-3">
                                                        <h5 class="text-light text-center py-0">Other Document </h5>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <img class="img-fluid" style="border: 1px solid; border-radius: 10px;" id="other_doc_img_view" src="{{asset('uploads/joinus/placeholder.jpg')}}" alt="blog image">
                                                        <p class="mb-0">(Accept only: jpg, jpeg, png)</p>
                                                        <input type="file" name="other_doc_img" id="other_doc_img" class="custom-file-input border-0 mt-2" accept=".jpg, .png,.webp, .jpeg|image/*">

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
                                                    <input type="submit" value="APPLY NOW" class="waves-button-input">
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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
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
    @endsection