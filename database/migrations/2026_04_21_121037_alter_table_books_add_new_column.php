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
        Schema::table('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('series')->nullable();
            $table->string('author');
            $table->float('rating')->default(0);
            $table->text('description')->nullable();
            $table->string('language')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->integer('stock')->default(0);
            $table->integer('pages')->nullable();
            $table->string('publisher')->nullable();
            $table->date('publish_date')->nullable();
            $table->integer('ratings_count')->default(0);
            $table->string('cover_img', 500)->nullable();
            $table->decimal('price', 12, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn([
                'id',
                'title',
                'series',
                'author',
                'rating',
                'description',
                'language',
                'isbn',
                'stock',
                'pages',
                'publisher',
                'publish_date',
                'ratings_count',
                'cover_img',
                'price'
            ]);
        });
    }
};
