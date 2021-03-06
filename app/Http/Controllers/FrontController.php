<?php

namespace App\Http\Controllers;

use App\Historico;
use App\Membro;
use App\Servidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class FrontController extends Controller {

	public function index(Request $request, $webservice = 'N') {
		$aba = $request->input('aba');
		if ($aba > 3 || is_null($aba) || !isset($aba)) {
			$aba = 1;
		}

		$subs = Membro::where('PESS_CEFT_CD', 'MPF10101')->orderBy('pess_nm')->distinct()->get();
		//$subs = DB::table('MEMBROS')->where('PESS_CEFT_CD', 'MPF10101')->groupBy('pess_cd_mat')->having('pess_cd_mat', '>', 0)->get();

		$pgrs = Historico::select('pess_nm', 'pess_cd_mat', 'hret_dt_fim')->where('HRET_LOFU_FCCO_CD', 1)->orderBy('hret_dt_ini', 'desc')->get();

		$cons = Historico::select('pess_nm', 'pess_cd_mat', 'hret_dt_ini', 'hret_dt_fim')->where('HRET_LOFU_FCCO_CD', 9999)->orderBy('hret_dt_fim', 'desc')->get();

		if ($webservice == 'N') {

			return view('home.index_nacional', compact('subs', 'pgrs', 'cons', 'aba'));

		} else {
			return Response::json(array('subs' => $subs, 'pgrs' => $pgrs, 'cons' => $cons), 200, [], JSON_UNESCAPED_UNICODE);
		}

	}

	public function intro(Request $request) {

		//dd($historicos);
		return view('home.index');
	}

	public function detalhe(Request $request, $matricula = null) {

		$membro = Historico::where('pess_cd_mat', $matricula)->first();

		$historicos = Historico::where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		//dd($historicos);
		return view('detalhe', compact('membro', 'historicos'));
	}

	public function convivencia(Request $request) {

		$servidores = Servidor::select('ds_nome', 'sg_unidade_principal')->get();

		return view('convivencia.telao', compact('servidores'));
	}

	public function detalhe_sub(Request $request, $matricula = null, $webservice = 'N') {

		$membro = Membro::where('pess_cd_mat', $matricula)->with('biografia')->first();
		//$historicos = Membro::where('pess_cd_mat', $matricula)->get();
		//$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds')->where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds', 'pess_dt_posse as hret_dt_ini', 'pess_dt_desliga as hret_dt_fim')->where('pess_cd_mat', $matricula)->get()->toArray();

		$historicos = Historico::hydrate($historicos);
		//dd($historicos);

		if ($webservice == 'N') {

			return view('detalhe', compact('membro', 'historicos'));

		} else {
			return Response::json(array('membro' => $membro, 'historicos' => $historicos), 200, [], JSON_UNESCAPED_UNICODE);
		}

	}

	public function detalhe_pgr(Request $request, $matricula = null, $webservice = 'N') {

		$membro = Historico::with('biografia')->where('pess_cd_mat', $matricula)->where('HRET_LOFU_FCCO_CD', 1)->first();
		//dd($membro);

		//$historicos = Membro::where('pess_cd_mat', $matricula)->get();
		//$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds')->where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		$historicos = Historico::where('pess_cd_mat', $matricula)->where('HRET_LOFU_FCCO_CD', 1)->orderBy('hret_dt_ini', 'desc')->get();
		if ($webservice == 'N') {
			return view('detalhe', compact('membro', 'historicos'));
		} else {
			return Response::json(array('membro' => $membro, 'historicos' => $historicos), 200, [], JSON_UNESCAPED_UNICODE);
		}

	}

	public function detalhe_conselho(Request $request, $matricula = null, $webservice = 'N') {

		$membro = Membro::where('pess_cd_mat', $matricula)->with('biografia')->first();
		//$historicos = Membro::where('pess_cd_mat', $matricula)->get();
		//$historicos = DB::table('MEMBROS')->select('pess_cd_mat', 'ceft_ds as fcco_ds')->where('pess_cd_mat', $matricula)->orderBy('hret_dt_ini', 'desc')->get();
		$historicos = Historico::where('pess_cd_mat', $matricula)->where('HRET_LOFU_FCCO_CD', 9999)->orderBy('hret_dt_ini', 'desc')->get();

		if ($webservice == 'N') {

			return view('detalhe', compact('membro', 'historicos'));

		} else {
			return Response::json(array('membro' => $membro, 'historicos' => $historicos), 200, [], JSON_UNESCAPED_UNICODE);
		}

		//dd($historicos);
		//	return view('detalhe', compact('membro', 'historicos'));
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
/*
public function estados(Request $request, $uf = null) {
//	dd($uf);
$pchefes = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 13)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

$pregs = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 39)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

$prs = Membro::select('pess_nm', 'pess_cd_mat')->where('PESS_CEFT_CD', 'MPF10301')->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();
$estado = Helper::pegaEstado($uf, 'N');
//dd($estado);
return view('home.index_estado', compact('pchefes', 'pregs', 'prs', 'estado'));
}
 */
	public function estado(Request $request, $uf = null) {

		$pchefes = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 13)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		$pregs = Historico::select('pess_nm', 'pess_cd_mat')->where('HRET_LOFU_FCCO_CD', 39)->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		$prs = Membro::select('pess_nm', 'pess_cd_mat')->where('PESS_CEFT_CD', 'MPF10301')->where('UORG_UFED_SG', strtoupper($uf))->orderBy('pess_nm')->distinct()->get();

		return compact('pchefes', 'pregs', 'prs');
	}

}
