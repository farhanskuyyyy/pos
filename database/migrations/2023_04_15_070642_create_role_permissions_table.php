<?php

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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained("roles");
            $table->foreignId('menu_id')->constrained("menu_management");
            $table->boolean('status')->default(true);
            $table->boolean('create')->default(true);
            $table->boolean('read')->default(true);
            $table->boolean('update')->default(false);
            $table->boolean('delete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
