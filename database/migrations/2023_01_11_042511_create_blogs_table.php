<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('userId');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->string('featuredImage')->nullable();
            $table->string('keyword')->nullable();
            $table->text('metaDesc')->nullable();
            $table->string('metaTitle')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('userId')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            // $table->foreign('categoryId')
            //     ->references('id')
            //     ->on('category_blogs')
            //     ->onUpdate('cascade')
            //     ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
