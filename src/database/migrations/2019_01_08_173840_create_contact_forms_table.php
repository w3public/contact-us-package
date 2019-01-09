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
            $table->string('first_name',30);
            $table->string('middle_name',30);
            $table->string('last_name',30);
            $table->string('full_name',50);
            $table->string('mobile',20);
            $table->string('email',50);
            $table->string('nid',50);
            $table->string('driving_license',100);
            $table->string('passport',100);
            $table->string('designation',100);
            $table->string('country',100);
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('subject',200);
            $table->string('query',200);
            $table->text('description');
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
