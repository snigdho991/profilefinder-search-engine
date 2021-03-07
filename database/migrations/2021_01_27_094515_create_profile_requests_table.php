<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('location', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('photo')->nullable();
            $table->string('color')->nullable();
            $table->string('status')->default(0);
            $table->boolean('isfield')->default(0)->nullable();
            $table->text('field')->nullable();
            $table->text('profession')->nullable();
            $table->text('custom1title')->nullable();
            $table->text('custom2title')->nullable();
            $table->text('custom1value')->nullable();
            $table->text('custom2value')->nullable();
            $table->text('tag')->nullable();
            $table->text('remark')->nullable();
            $table->text('metatitle')->nullable();
            $table->text('metadesc')->nullable();
            $table->text('metakey')->nullable();
            $table->longText('others')->nullable();
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
        Schema::dropIfExists('profile_requests');
    }
}
