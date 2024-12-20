<?php

use App\Models\BoolRealEstates;
use App\Models\FeaturesBools;
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
        Schema::create('addtions_bools', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(FeaturesBools::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(BoolRealEstates::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtions_bools');
    }
};
