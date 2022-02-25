<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReinsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reinsurances', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 60);
            $table->string('description');
            $table->string('icone')->nullable();
            $table->string('alt', 100)->nullable();
            $table->boolean('statut');
            $table->integer('ordre');
            $table->string('lien', 250)->nullable();
            $table->string('title_lien', 100)->nullable();
            $table->boolean('new_tab')->default(false);
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
        Schema::dropIfExists('reinsurances');
    }
}
