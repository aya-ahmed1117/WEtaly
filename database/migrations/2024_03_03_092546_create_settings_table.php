<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('key');
            $table->srting('value');
            $table->timestamps();
        });
    }

    /**
     *   $table->id();
      *      $table->string('username');
      *      $table->srting('subject');
      *      $table->datetime('creatied_at');
       *     $table->Carbon::now('updated_at');
       *     $table->
       *     $table->timestamps();
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
