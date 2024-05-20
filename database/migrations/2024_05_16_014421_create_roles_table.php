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
        Schema::create('roles', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->timestamps();
            $table->softDeletes();
            // $table->foreignUuid('created_at')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignUuid('updated_at')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_deleted')->default(false);

            $table->string('title');
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
