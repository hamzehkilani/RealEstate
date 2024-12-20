<?php

use App\Models\BoolRealEstates;
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
        Schema::create('bools_featurers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BoolRealEstates::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('is_indoor_bool')->default(false);
            $table->boolean('has_bool_fense')->default(false);
            $table->boolean('has_water_games')->default(false);
            $table->boolean('has_heating_system')->default(false);
            $table->boolean('is_empty_bool')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bools_featurers');
    }
};
