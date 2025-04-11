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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('body');  //コメントの本文
            $table->timestamps();
            $table
                ->foreignId('post_id')  //foreignId() は、外部キーを設定する
                ->constrained()         //constrained() は、外部キーを設定する
                ->cascadeOnDelete();    //cascadeOnDelete() は、外部キーを設定する
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
