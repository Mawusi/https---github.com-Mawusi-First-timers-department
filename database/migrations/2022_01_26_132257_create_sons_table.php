<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('church')->nullable();
            $table->string('occupation')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('city')->nullable();
            $table->string('educational_information')->nullable();
            $table->string('picture')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('foundation_school')->nullable();
            $table->rememberToken();
            
            	
            // $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
            // $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');


            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sons');
    }
}
