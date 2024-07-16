<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        // $books = Books::all();
        $players = [
            'one' => 'title'
        ];
        return response()->json($players);
    }

    public function store(Request $request)
    {
        // $book = new Books;
        // $book->name = $request->name;
        // $book->author = $request->author;
        // $book->publis_date = $request->publish_date;
        // $book->save();
        return response()->json([
            'message' => 'Book Added.'
        ], 201);

    }
}
