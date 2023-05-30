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
        Schema::create('patrouilleurs_harnois', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Patrouilleur::class)
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Harnois::class)
                ->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrouilleurs_harnois');
    }
};
