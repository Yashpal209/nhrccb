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

    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp admin-form ">
                    <div class="inn-title">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <h4>Add Our Awardee</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('viewOurAwardee') }}" class="btn btn-primary">View Our Awardee</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-inn">
                        <form action="{{ route('postOurAwardee') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="award_category" class="validate" id="award_category" required >
                                        <option selected disabled>---Select Category---</option>
                                        <option value="INTERNATIONAL">INTERNATIONAL</option>
                                        <option value="NATIONAL">NATIONAL</option>
                                        <option value="STATE">STATE</option>
                                        <option value="DISTRICT">DISTRICT</option>
                                        <option value="COMMUNITY">COMMUNITY</option>
                                    </select>
                                </div>
                                <div class="input-field col s6">
                                    <select name="award_sub_category" class="validate" id="award_sub_category" required>
                                        <option selected disabled>---Select Sub Category---</option>
                                        <option value="NELSON MANDELA HUMAN RIGHTS AWARD">NELSON MANDELA HUMAN RIGHTS AWARD</option>
                                        <option value="MAHATAMA GANDHI HUMAN RIGHTS AWARD">MAHATAMA GANDHI HUMAN RIGHTS AWARD</option>
                                        <option value="BHIM RAO AMBEDKAR HUMAN RIGHTS AWARDS">BHIM RAO AMBEDKAR HUMAN RIGHTS AWARDS</option>
                                        <option value="NHRCCB INDIA PRIDE AWARD">NHRCCB INDIA PRIDE AWARD</option>
                                        <option value="NHRCCB HUMAN RIGHTS AWARD">NHRCCB HUMAN RIGHTS AWARD</option>
                                        <option value="NHRCCB LEADERSHIP AWARD">NHRCCB LEADERSHIP AWARD</option>
                                        <option value="NHRCCB SPECIAL AWARD">NHRCCB SPECIAL AWARD</option>
                                        <option value="STATE HUMAN RIGHTS AWARD">STATE HUMAN RIGHTS AWARD</option>
                                        <option value="STATE LEADERSHIP AWARD">STATE LEADERSHIP AWARD</option>
                                        <option value="STATE SPECIAL AWARD">STATE SPECIAL AWARD</option>
                                        <option value="DISTRICT AWARD">DISTRICT AWARD</option>
                                        <option value="COMMUNITY AWARD">COMMUNITY AWARD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="awardee_name" class="validate" required>
                                    <label>NAME OF AWARDEE</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="convention_name" class="validate" required>
                                    <label>AWARD CAUSE</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" name="convention_date" class="validate" required>
                                    <label>AWARD DATE</label>
                                </div>
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-large waves-effect waves-light">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
