@extends('web.layouts.app')

@section('main-content')
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
                <h1 class="hero-title">Winter Internship</h1>
                <p class="hero-subtitle">National Human Rights and Crime Control Bureau</p>
            </div>
        </div>
    </div>

    <div class="ed-res-bg" style="padding: 20px 0px;">
        <div class="container">
            <div class="n-form-com admiss-form">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ __('Oops! Something went wrong. Please check the form and try again.') }}
                        </div>
                    @endif
                    <form action="{{ route('applyinternship') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" id="full_name" class="form-control"
                                value="{{ old('full_name') }}" placeholder="enter your name" required>
                            @error('full_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ old('email') }}" placeholder="enter your email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control"
                                value="{{ old('phone') }}" placeholder="enter your phone number" required>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="education">Highest Qualification</label>
                            <select name="education" id="education" class="form-control" required>
                                <option value="">Select Qualification</option>
                                <option value="Undergraduate" {{ old('education') == 'Undergraduate' ? 'selected' : '' }}>
                                    Undergraduate</option>
                                <option value="Graduate" {{ old('education') == 'Graduate' ? 'selected' : '' }}>Graduate
                                </option>
                                <option value="Postgraduate" {{ old('education') == 'Postgraduate' ? 'selected' : '' }}>
                                    Postgraduate</option>
                            </select>
                            @error('education')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Internship Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="short" {{ old('type') == 'short' ? 'selected' : '' }}>Short Term</option>
                                <option value="winter" {{ old('type') == 'winter' ? 'selected' : '' }}>Winter</option>
                                <option value="summer" {{ old('type') == 'summer' ? 'selected' : '' }}>Summer</option>
                            </select>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="university">University / Institution</label>
                            <input type="text" name="university" id="university" class="form-control"
                                value="{{ old('university') }}" placeholder="enter your University / Institution" required>
                            @error('university')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="reason">Why do you want to join this internship?</label>
                            <textarea name="reason" id="reason" class="form-control" rows="4" placeholder="enter your message" required>{{ old('reason') }}</textarea>
                            @error('reason')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="resume">Upload Resume (PDF/DOC/JPG/PNG)</label>
                            <input type="file" name="resume" id="resume" class="form-control-file"
                                accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required>
                            @error('resume')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit Application</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
