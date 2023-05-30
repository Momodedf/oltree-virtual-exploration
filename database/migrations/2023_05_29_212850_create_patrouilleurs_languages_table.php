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
        Schema::create('patrouilleurs_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Patrouilleur::class)
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Language::class)
                ->constrained()
                ->onDelete('cascade');
            $table->boolean('spoken');
            $table->boolean('written');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrouilleurs_languages');
    }
};
