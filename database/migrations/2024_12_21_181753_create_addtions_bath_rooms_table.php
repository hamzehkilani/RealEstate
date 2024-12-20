<?php

use App\Models\BathRoomsRealEstates;
use App\Models\FeaturesBathRooms;
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
        Schema::create('addtions_bath_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BathRoomsRealEstates::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(FeaturesBathRooms::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtions_bath_rooms');
    }
};
