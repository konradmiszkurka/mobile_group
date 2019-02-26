<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_id');
            $table->date('api_created_at');
            $table->date('api_updated_at');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->text('admin_name')->nullable();
            $table->integer('show_in_list')->nullable();
            $table->integer('templates_ads_id')->nullable();
            $table->integer('templates_forms_id')->nullable();
            $table->integer('form_id')->nullable();
            $table->integer('projects_id')->nullable();
            $table->string('code');
            $table->integer('expiring_notification');
            $table->string('created_by')->nullable();
            $table->text('categories');
            $table->text('positions');
            $table->text('cities');
            $table->text('exports');
            $table->text('content');
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
        Schema::dropIfExists('api_ads');
    }
}
