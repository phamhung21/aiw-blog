<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag_name');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        // Schema::create('news_tag', function(Blueprint $table)
        // {
        //     $table->unsignedBigInteger('news_id');
        //     $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
 
        //     $table->unsignedBigInteger('tag_id');
        //     $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
 
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
