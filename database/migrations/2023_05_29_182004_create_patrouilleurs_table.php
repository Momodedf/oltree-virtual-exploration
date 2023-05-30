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
        Schema::create('patrouilleurs', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('soldat')->default(0);
            $table->tinyInteger('voyageur')->default(0);
            $table->tinyInteger('erudit')->default(0);
            $table->tinyInteger('peuple');
            $table->tinyInteger('motivation');
            $table->tinyInteger('initiation');
            $table->tinyInteger('dices');
            $table->integer('vie');
            $table->integer('mana');
            $table->tinyInteger('exaltation');
            $table->tinyInteger('persecution');
            $table->integer('deni');
            $table->foreignIdFor(\App\Models\Campagne::class);
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
        Schema::dropIfExists('patrouilleurs');
    }
};
