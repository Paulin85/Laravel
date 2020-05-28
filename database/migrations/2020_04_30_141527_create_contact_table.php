<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Mail');
            $table->string('Numero');
            $table->timestamps();

            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')
                ->references('id')
                ->on('entreprises')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
