<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',30)->nullable();
            $table->string('middle_name',30)->nullable();
            $table->string('last_name',30)->nullable();
            $table->string('full_name',50)->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('tel',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('url',50)->nullable();
            $table->string('nid',50)->nullable();
            $table->string('country',100)->nullable();
            $table->string('driving_license',100)->nullable();
            $table->string('passport',100)->nullable();
            $table->string('designation',100)->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('subject',200)->nullable();
            $table->text('description')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('drop_down')->nullable();
            $table->string('check_box')->nullable();
            $table->string('radio')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
}
