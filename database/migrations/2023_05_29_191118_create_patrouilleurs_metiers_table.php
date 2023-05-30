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
        Schema::create('patrouilleurs_metiers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Patrouilleur::class)
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Metier::class)
                ->constrained()
                ->onDelete('cascade');
            $table->tinyInteger('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrouilleurs_metiers');
    }
};
