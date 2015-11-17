<?php
namespace Kodermax\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateReviewsTable extends Migration
{

    public function up()
    {
        Schema::create('kodermax_reviews_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('preview_text')->nullable();
            $table->text('detail_text')->nullable();
            $table->string('author')->nullable();
            $table->dateTime('date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kodermax_reviews_reviews');
    }

}
