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
        Schema::create('carnets', function (Blueprint $table) {
            $table->id();
            $table->text('adventure');
            $table->decimal('coordinateX');
            $table->decimal('coordinateY');
            $table->foreignIdFor(\App\Models\Map::class)
                ->constrained();
            $table->boolean('secure')->default(false);
            $table->foreignIdFor(\App\Models\Patrouilleur::class)
                ->nullable();
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
        Schema::dropIfExists('carnets');
    }
};
