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
        Schema::create('deatils_real_estates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RealEstate::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('area')->nullable();
            $table->boolean('has_bed_rooms')->default(false);
            $table->boolean('has_geust_rooms')->default(false);
            $table->boolean('has_bool')->default(false);
            $table->boolean('has_kitchen')->default(false);
            $table->boolean('has_bath_room')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deatils_real_estates');
    }
};
