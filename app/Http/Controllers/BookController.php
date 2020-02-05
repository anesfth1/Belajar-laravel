<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index() {
        $book = \App\Book::all();
        return view('book.index', compact('book'));
    }
    public function create($jdl) {
        $book = new Book();
        $book->title = $jdl;
        $book->publisher = "Ujang Petir";
        $book->price = 100000;
        $book->synopsis = "Para Petualang Yang Pergi Kelangit Untuk Mencari Ikan";
        $book->pages = 87;
        $book->status = false;
        $book->date = Carbon::now();
        $book->save();
        return $book;
    }
    public function show() {
        $book = Book::findOrFail($id);
        return view('$book.show', compact('book'));
    }
    public function edit($id,$jdl) {
        $book = Book::find($id);
        $book->title = $jdl;
        $book->publisher = "Ujang Petir";
        $book->price = 100000;
        $book->synopsis = "Para Petualang Yang Pergi Kelangit Untuk Mencari Ikan";
        $book->pages = 87;
        $book->status = false;
        $book->date = Carbon::now();
        $book->save();
        return $book;
    }
    public function delete($id) {
        $book = Book::find($id);
        $book->delete();
        return $book;
    }
    public function tampilkan($id) {
        $book = Book::all();
        return $book;
    }
    public function tampilkan2($id) {
        $book = Book::select('title','publisher','price')->take(3)->get();
        return $book;
    }

}
