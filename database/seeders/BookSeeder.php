<?php

namespace Database\Seeders;

use File;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/books.json');
        $books = json_decode($json);

        foreach($books as $book)
        {
            Book::create([
                'id_book' => $book->id_book,
                'nm_book' => $book->nm_book,
                'id_category' => $book->id_category,
                'picture_book' => $book->picture_book,
                'description' => $book->description,
                'author_book' => $book->author_book,
                'publish_from' => $book->publish_from,
                'id_statusbuku' => $book->id_statusbuku,
                'url_book' => $book->url_book,
                'quantity' => $book->quantity,
                'created_at' => $book->created_at,
                'updated_at' => $book->updated_at,
            ]);
        }
    }
}
