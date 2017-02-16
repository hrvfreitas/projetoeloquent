<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
  {
      //
          public function index()
      {

        $livros = Livros::all();

        return view('livro.index', compact('livros'));

      }
      public function show(Livro $Livro)
      {
        return view('livro.show' , compact('livro'));
      }
  }
    //
}
