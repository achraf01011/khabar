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
        
        Schema::create('users', static function (Blueprint $table) {
            $table->id();
            $table->integer('id_admin');
            $table->string('title')->unique();
            $table->text('text')->nullable();
            $table->text('image');
            $table->foreignId('id_admin')
                ->references('id')
                ->on('admin');

        }
        );

       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
