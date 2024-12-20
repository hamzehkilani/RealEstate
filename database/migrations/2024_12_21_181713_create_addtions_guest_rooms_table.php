<?php

use App\Models\FeaturesGuestRooms;
use App\Models\GeustRoomsRealEstates;
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
        Schema::create('addtions_guest_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FeaturesGuestRooms::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(GeustRoomsRealEstates::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtions_guest_rooms');
    }
};
