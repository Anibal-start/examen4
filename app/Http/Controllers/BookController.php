<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function list(){
       $Books = Book::all();
       $vars = ('books'=> $books);
       return view("book,list", $vars);
   }
}
