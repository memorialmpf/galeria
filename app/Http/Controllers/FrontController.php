<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller {

    public function index(Request $request) {
        return view('home.index');
    }

       public function detalhe(Request $request) {
        return view('detalhe');
    }
        public function conselho(Request $request) {
        return view('conselho.lista');
    }
    
          public function pgrs(Request $request) {
        return view('pgrs.lista');
    }
    
            public function subprocuradores(Request $request) {
        return view('subprocuradores.lista');
    }
    
}
