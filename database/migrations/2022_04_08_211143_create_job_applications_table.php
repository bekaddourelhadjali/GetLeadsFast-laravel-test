<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",30);
            $table->string("last_name",30);
            $table->string("email",50)->unique();
            $table->string("phone",20)->nullable();
            $table->date("date_birth");
            $table->enum("job",["Manager", "Programmer", "HR", "Support"])->default("Support");
            $table->boolean("prev_experience")->default(false);
            $table->enum("status",["In process", "Approved", "Denied"])->default("In process");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
