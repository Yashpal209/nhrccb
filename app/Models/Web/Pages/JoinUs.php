<?php

namespace App\Models\Web\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    use HasFactory;

    protected $table = "join_us_form";

    protected $fillable = [
        '_token', 'state', 'division', 'district', 'blocks', 'policeStation',
        'level', 'designation', 'name', 'fathersName', 'gender', 'dob', 
        'blood_group', 'mobile', 'whatsappNumber', 'email', 'qualification', 
        'current_work', 'adhar_no', 'pan_card_no', 'maritial_status', 
        'member_of_any_pol_party', 'member_social_org', 'court_cases', 
        'recommended_by', 'address', 'passport_image', 'adhar_front_img', 
        'adhar_back_img', 'pan_card_img', 'other_doc_img', 'status',
        'txnid','payment'

    ];
}
