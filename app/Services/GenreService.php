<?php

namespace App\Services;

use App\Models\Genre;
use Illuminate\Support\Collection;

class GenreService
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        $genres = Genre::all();

        return $genres;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Genre
     */
    public function show($id): Genre
    {
        $genre = Genre::findOrFail($id);

        return $genre;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param array $data
     * @return Genre
     */
    public function store(array $data): Genre
    {
        $genre = Genre::create($data);

        return $genre;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param array $data
     * @return Genre
     */
    public function update(int $id, array $data): Genre
    {
        $genre = Genre::findOrFail($id);

        $genre->update($data);

        return $genre;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $genre = Genre::findOrFail($id);

        $genre->delete();
    }
}
