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
        Schema::create('access_menus', function (Blueprint $table) {
            $table->unsignedBigInteger('roleId');
            $table->unsignedBigInteger('menuId');
            $table->timestamps();

            $table->foreign('roleId')
                ->references('id')
                ->on('user_roles')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('menuId')
                ->references('id')
                ->on('menus')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_menus');
    }
};
