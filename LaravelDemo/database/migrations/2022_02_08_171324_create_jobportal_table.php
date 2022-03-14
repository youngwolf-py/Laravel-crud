<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobportalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobportal', function (Blueprint $table) {
            $table->id();
            $table->string('job',255)->nullable();
            $table->string('experience',100)->nullable();
            $table->string('skills',255)->nullable();
            $table->string('lastdate',255)->nullable();
            $table->string('submission',255)->nullable();
            $table->string('salary',100)->nullable();
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
        Schema::dropIfExists('jobportal');
    }
}
