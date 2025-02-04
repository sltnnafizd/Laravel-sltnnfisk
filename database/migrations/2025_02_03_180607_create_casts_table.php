<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('casts', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->integer('umur')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('casts');
    }
};
