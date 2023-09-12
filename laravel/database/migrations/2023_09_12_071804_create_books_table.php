<?php

use App\Models\book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });
        book::create([
            'author' => 'Szendi Gábor',
            'title' => 'Veszélyes kenyér',
            'pieces' => 2,

        ]);
        book::create([
            'author' => 'Kis Norbert',
            'title' => 'Az ember utolsó története',
           

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
