<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('join_us_form', function (Blueprint $table) {
            $table->id();
            
            // Text fields for text inputs
            $table->string('districts')->nullable();
            $table->string('blocks')->nullable();
            $table->string('policeStation')->nullable();
            $table->string('name')->nullable();
            $table->string('fathersName')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('whatsappNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('current_work')->nullable();
            $table->string('adhar_no')->nullable();
            $table->string('pan_card_no')->nullable();
            
            // Select fields (for drop-downs)
            $table->string('state')->nullable();
            $table->string('division')->nullable();
            $table->string('wing')->nullable();
            $table->string('level')->nullable();
            $table->string('designation')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('qualification')->nullable();
            $table->string('maritial_status')->nullable(); // Fixed typo in marital
    
            // Date field
            $table->date('dob')->nullable();
    
            // Additional fields for form data
            $table->string('member_of_any_pol_party')->nullable();  // Member of Any Political Party
            $table->string('member_social_org')->nullable();        // Member of Social Organisation
            $table->string('court_cases')->nullable();              // Any Court Cases
            $table->string('recommended_by_id')->nullable();         // Recommended By ID No.
    
            // Image fields for document uploads
            $table->string('passport_image')->nullable();            // Passport Image
            $table->string('adhar_front_img')->nullable();           // Adhar Card Front Image
            $table->string('adhar_back_img')->nullable();            // Adhar Card Back Image
            $table->string('pan_card_img')->nullable();              // PAN Card Image (Optional)
            $table->string('other_doc_img')->nullable();             // Other Document Image
    
            // Timestamps
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
