<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessReviewMediaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('business_review_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_review_id');
            $table->json('s3_file_path')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
            $table->foreign('business_review_id')->references('id')->on('business_reviews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('business_review_media');
    }

}
