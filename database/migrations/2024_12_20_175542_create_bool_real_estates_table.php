<?php

use App\Models\RealEstate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bool_real_estates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RealEstate::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('is_gradual')->default(false);
            $table->integer('start_gradual')->nullable();
            $table->integer('end_gradual')->nullable();
            $table->integer('width')->nullable();
            $table->integer('length')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bool_real_estates');
    }
};
