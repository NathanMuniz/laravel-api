<?php

use App\Books;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 50; $i++){
            Books::create([
                'name' => 'nome falso',
                'author' => 'authro false',
                'publish_date' => '11/02/2005'
            ]);
        }

    }
}
