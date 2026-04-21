<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Support\Collection;

class BookService
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        $books = Book::all();

        return $books;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Book
     */
    public function show($id): Book
    {
        $book = Book::findOrFail($id);

        return $book;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param array $data
     * @return Book
     */
    public function store(array $data): Book
    {
        $book = Book::create($data);

        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param array $data
     * @return Book
     */
    public function update(int $id, array $data): Book
    {
        $book = Book::findOrFail($id);

        $book->update($data);

        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $book = Book::findOrFail($id);

        $book->delete();
    }
}
