<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller{

        public function index() {
            $mensaje = "Hola, mundo desde el controlador 🚀";
            return view('hola', ['mensaje' => $mensaje]);
        }

        public function show($nombre = "invitado"){
            $mensaje = "Hola, $nombre 👋";
            return view('hola', ['mensaje' => $mensaje]);
        }

        public function articlesPage() {
            $id = 1;
            $username = "Alberto";

            $articles = [
                "Primer artículo",
                "Cómo aprender Laravel",
                "Tercer artículo"
            ];

            return view('articles.page', compact('id', 'username', 'articles'));
        }

}
