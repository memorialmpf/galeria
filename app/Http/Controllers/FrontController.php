<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Historico;
use App\Membro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller {

	public function index(Request $request) {

		$subs = Membro::where('PESS_CEFT_CD', 'MPF10101')->orderBy('pess_nm')->distinct()->get();
		//$subs = DB::table('MEMBROS')->where('PESS_CEFT_CD', 'MPF10101')->groupBy('pess_cd_mat')->having('pess_cd_mat', '>', 0)->get();

		$pgrs = Historico::select('pess_nm', 'pess_cd_mat', 'hret_dt_fim')->where('HRET_LOFU_FCCO_CD', 1)->orderBy('hret_dt_ini', 'desc')->get();

		$cons = Historico::select('pess_nm', 'pess_cd_mat', 'hret_dt_ini', 'hret_dt_fim')->where('HRET_LOFU_FCCO_CD', 9999)->orderBy('hret_dt_fim', 'desc')->get();

		return view('home.index_nacional', compact('subs', 'pgrs', 'cons'));
	}

	public function detalhe(Request $request, $matricula = null) {

		$membro = Historico::where('pess_cd_mat', $matricula)->first();

		$historicos = Historico::where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		dd($historicos);
		return view('detalhe', compact('membro', 'historicos'));
	}

	public function detalhe_sub(Request $request, $matricula = null) {

		$membro = Membro::where('pess_cd_mat', $matricula)->first();
		//$historicos = Membro::where('pess_cd_mat', $matricula)->get();
		//$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds')->where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds', 'pess_dt_posse as hret_dt_fim ', 'pess_dt_iniexe as hret_dt_ini')->where('pess_cd_mat', $matricula)->get()->toArray();
		//dd($historicos);
		$historicos = Historico::hydrate($historicos);
		return view('detalhe', compact('membro', 'historicos'));
	}

	public function detalhe_pgr(Request $request, $matricula = null) {

		$membro = Membro::where('pess_cd_mat', $matricula)->first();
		//$historicos = Membro::where('pess_cd_mat', $matricula)->get();
		//$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds')->where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		$historicos = Historico::where('pess_cd_mat', $matricula)->where('HRET_LOFU_FCCO_CD', 1)->orderBy('hret_dt_ini', 'desc')->get();return view('detalhe', compact('membro', 'historicos'));
	}

	public function detalhe_conselho(Request $request, $matricula = null) {

		$membro = Membro::where('pess_cd_mat', $matricula)->first();
		//$historicos = Membro::where('pess_cd_mat', $matricula)->get();
		//$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds')->where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		$historicos = Historico::where('pess_cd_mat', $matricula)->where('HRET_LOFU_FCCO_CD', 9999)->orderBy('hret_dt_ini', 'desc')->get();return view('detalhe', compact('membro', 'historicos'));
		//dd($historicos);
		return view('detalhe', compact('membro', 'historicos'));
	}

	public function detalhes(Request $request, $matricula = null) {

		$membro = Membro::where('pess_cd_mat', $matricula)->first();
		$historicos = Historico::where('pess_cd_mat', $matricula)->get();

		return compact('membro', 'historicos');
	}

	public function conselho(Request $request) {
		return view('conselho.lista');
	}

	public function pgrs(Request $request) {
		//    return view('pgrs.lista');

		$pgrs = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 1)->orderBy('pess_nm')->distinct()->get();
		return $pgrs;
	}

	public function subprocuradores(Request $request) {
		//return view('subprocuradores.lista');
		$subs = Membro::where('PESS_CEFT_CD', 'MPF10101')->orderBy('pess_nm')->get();
		return $subs;

	}

	public function estados(Request $request, $uf = null) {
		//	dd($uf);
		$pchefes = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 13)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		$pregs = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 39)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		$prs = Membro::select('pess_nm', 'pess_cd_mat')->where('PESS_CEFT_CD', 'MPF10301')->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();
		$estado = Helper::pegaEstado($uf, 'N');
		//dd($estado);
		return view('home.index_estado', compact('pchefes', 'pregs', 'prs', 'estado'));
	}

	public function estado(Request $request, $uf = null) {

		$pchefes = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 13)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		$pregs = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 39)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		$prs = Membro::select('pess_nm', 'pess_cd_mat')->where('PESS_CEFT_CD', 'MPF10301')->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		return compact('pchefes', 'pregs', 'prs');
	}

}
