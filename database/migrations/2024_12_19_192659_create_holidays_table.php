<?php

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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->text('descptions')->nullable();
            $table->timestamp('state_date')->nullable();

            // Foreign key for 'user_id'
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            // Foreign key for 'manger_id'
            $table->foreignId('manger_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('state', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('type', ['official', 'personal', 'national', 'sick', 'annual', 'casual', 'unpaid'])->default('official');
            $table->softDeletes();

            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holidays');
    }
};
