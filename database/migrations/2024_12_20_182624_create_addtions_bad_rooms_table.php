<?php

use App\Models\BedRoomsRealEstates;
use App\Models\FeaturesBadRooms;
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
        Schema::create('addtions_bad_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BedRoomsRealEstates::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(FeaturesBadRooms::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtions_bad_rooms');
    }
};
