<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('join_us_form', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('division');
            $table->string('districts');
            $table->string('blocks');
            $table->string('policeStation');
            $table->string('wing');
            $table->string('level');
            $table->string('designation');
            $table->string('name');
            $table->string('fathersName');
            $table->string('gender');
            $table->date('dob');
            $table->string('blood_group');
            $table->text('address');
            $table->string('mobile', 10);
            $table->string('whatsappNumber', 10);
            $table->string('email')->unique();
            $table->string('qualification');
            $table->string('current_work');
            $table->string('adhar_no', 12)->unique();
            $table->string('pan_card_no', 10)->nullable();
            $table->string('marital_status');
            $table->string('member_of_any_pol_party');
            $table->string('member_social_org');
            $table->text('court_cases')->nullable();
            $table->string('recommended_by');
            $table->string('passport_image')->nullable();
            $table->string('adhar_front_img')->nullable();
            $table->string('adhar_back_img')->nullable();
            $table->string('pan_card_img')->nullable();
            $table->string('other_doc_img')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('join_us');
    }
};
