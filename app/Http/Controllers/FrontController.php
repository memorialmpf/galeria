<?php

namespace App\Http\Controllers;

use App\Membro;
use Illuminate\Http\Request;

class FrontController extends Controller {

	public function index(Request $request) {

		$subs = Membro::where('PESS_CEFT_CD', 'MPF10101')->get();
		return view('home.index_nacional', compact('subs'));
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

	public function estados(Request $request) {
		return view('home.index_estado');
	}

}
