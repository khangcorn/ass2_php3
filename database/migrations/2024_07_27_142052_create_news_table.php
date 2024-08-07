<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Categories;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {


            $table->id();
            $table->string('title')->required();
            $table->text('content')->required();
            $table->integer('view')->default(0);
            $table->string('thumbnail')->nullable();
            $table->foreignIdFor(Categories::class)->constrained();
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_kinds');
    }
};
