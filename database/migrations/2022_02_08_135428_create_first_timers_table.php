<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstTimersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_timers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('alt_phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('relative_phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('baptism_status')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('invitation_medium')->nullable();
            $table->string('name_of_inviter')->nullable();
            $table->string('fellowship_of_inviter')->nullable();
            $table->string('contact_of_inviter')->nullable();
            $table->string('salvation_status')->nullable();
            $table->string('date_of_salvation')->nullable();
            $table->string('prayer_requests')->nullable();
            $table->string('zonal_church')->nullable();
            $table->string('service_type')->nullable();
            $table->string('other_service_type')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_timers');
    }
}
