<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits',function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('prix_unitaire');
            $table->integer('total_stock');
            $table->timestamps();
            $table->softDeletes();
        });

        //foreign key to categorie
        $table->bigInteger('id_categorie')->unsigned()->index()->nullable();
        $table->foreign('id_categorie')->references('id')->on('categories');
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
