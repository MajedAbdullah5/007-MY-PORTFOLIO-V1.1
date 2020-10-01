<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('projects',function (Blueprint $blueprint){
           $blueprint->bigIncrements('id');
           $blueprint->string('project_name');
           $blueprint->string('project_des');
           $blueprint->string('project_link');
           $blueprint->string('project_image');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
