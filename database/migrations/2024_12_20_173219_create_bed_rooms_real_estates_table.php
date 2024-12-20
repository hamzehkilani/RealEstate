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
        Schema::create('bed_rooms_real_estates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RealEstate::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bed_rooms_real_estates');
    }
};
