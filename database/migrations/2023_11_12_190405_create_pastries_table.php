<?php

declare(strict_types=1);

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
        Schema::create('pastries', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('image_path');
            $table->text('description');

            $table->integer('price_in_cents')->default(0);

            $table
            ->foreignIdFor(User::class)
            ->nullable()
            ->constrained()
            ->nullOnDelete();

            $table->date('delivered_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pastries');
    }
};
