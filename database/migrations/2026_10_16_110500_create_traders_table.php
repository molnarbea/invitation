<?php

use App\Models\Trader;
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
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('country');
            $table->timestamps();
        });

        Trader::create([
            'name' => 'Trader 1',
            'description' => 'Description for Trader 1',
            'country' => 'Country 1',
        ]);

        Trader::create([
            'name' => 'Trader 2',
            'description' => 'Description for Trader 2',
            'country' => 'Country 2',
        ]);

        Trader::create([
            'name' => 'Trader 3',
            'description' => 'Description for Trader 3',
            'country' => 'Country 3',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders');
    }
};
