<?php

use App\Models\Departments;
use App\Models\User;
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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('start_work_date')->nullable();
            $table->integer('residence_number')->unique();
            $table->integer('phone_number')->unique();
            $table->foreignIdFor(Departments::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('barth_day')->nullable();
            $table->softDeletes();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
