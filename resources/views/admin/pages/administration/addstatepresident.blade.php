@extends('admin.layouts.app')

@section('main-content')

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Session Alerts --}}
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

    <!--== Add State President Form ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6">
                                <h4>Add State President</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('viewStatePresident') }}" class="btn btn-primary">View State President</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-inn">
                        <form action="{{ route('StatePresidentPost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- State --}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <label>Select Your State:</label>
                                    <select name="state" id="state" required >
                                        @foreach($states as $state)
                                        <option value="{{ $state }}" {{ old('state') == $state ? 'selected' : '' }}>
                                            {{ $state }}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="name" class="validate" required value="{{ old('name') }}">
                                    <label>Name</label>
                                </div>
                            </div>

                            {{-- Name & Designation --}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="tel" name="mobile" class="validate" required value="{{ old('mobile') }}">
                                    <label>Mobile No</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="designation" class="validate" required value="{{ old('designation') }}">
                                    <label>Designation</label>
                                </div>
                            </div>

                            {{-- Order No & Image --}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="number" name="order_no" class="validate" required value="{{ old('order_no') }}">
                                    <label>Order No</label>
                                </div>

                                <div class="file-field col s6">
                                    <div class="btn admin-upload-btn">
                                        <span>Upload Image</span>
                                        <input type="file" name="image" accept=".jpg,.jpeg,.png,image/*">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload State President Image">
                                    </div>
                                    <p class="text-danger">(Note: Image dimension must be 350x350)</p>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="row">
                                <div class="input-field col s6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
  
   
</script>

