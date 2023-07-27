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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('cpf', 11)->unique()->nullable();
            $table->string('name', 50);
            $table->char('phone', 11);
            $table->date('birth')->nullable();
            $table->char('gender', 1)->nullable();
            $table->text('notes')->nullable();

            //auth data
            $table->string('email', 80)->unique();
            $table->string('password', 254)->nullable();

            //permission
            $table->string('name', 50);

            $table->string('status')->default('active');
            $table->string('permission')->default('app.user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
