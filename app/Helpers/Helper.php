<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Helper
 *
 * @author EMERSON
 */
namespace App\Helpers;
use App\Grupo;
use App\Script;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Storage;
use ZipArchive;

class Helper {
	public static function geraCsv(Collection $tabela, $colunas) {
		$headers = array(
			"Content-type" => "text/csv",
			"Content-Disposition" => "attachment; filename=file.csv",
			"Pragma" => "no-cache",
			"Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
			"Expires" => "0",
		);
		$columns = $colunas;
		$callback = function () use ($tabela, $columns) {
			$file = fopen('php://output', 'w');
			fputcsv($file, $columns);
			foreach ($tabela as $linha) {
				fputcsv($file, $linha->toArray());
			}
			fclose($file);
		};
		return response()->stream($callback, 200, $headers);
	}
	public static function obfuscate_email($email) {
		$mail_parts = explode("@", $email);
		$parte1 = $mail_parts[0];
		$parte2 = $mail_parts[1];
		$length = strlen($parte1);
		$show = floor($length / 2);
		$hide = $length - $show;
		$replace = str_repeat("*", $hide);
		return substr_replace($parte1, $replace, $show, $hide) . "@" . substr_replace($parte2, "**", 0, 2);}
/**
 * Highlighting matching string
 * @param   string  $text           subject
 * @param   string  $words          search string
 * @return  string  highlighted text
 */
	public static function highlight($text, $words) {
		if (!empty($words)) {
			$highlighted = preg_filter('/' . preg_quote($words) . '/i', '<span class="highlight">$0</span>', $text);
			if (!empty($highlighted)) {
				$text = $highlighted;
			}
		}
		return $text;
	}

	public static function string_para_dinheiro($num) {
		$dotPos = strrpos($num, '.');
		$commaPos = strrpos($num, ',');
		$sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
		((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

		if (!$sep) {
			return floatval(preg_replace("/[^0-9]/", "", $num));
		}

		return floatval(
			preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
			preg_replace("/[^0-9]/", "", substr($num, $sep + 1, strlen($num)))
		);
	}

	public static function geraArquivo($entrada, $arquivo) {
		//  Storage::disk('local')->put("scripts/" . $arquivo, $entrada);
		Storage::disk('local')->put($arquivo, $entrada);
	}
	public static function incrementaArquivo($entrada, $arquivo) {
		Storage::append($arquivo, $entrada);
		$tamanho = Storage::size($arquivo);
		return $tamanho;
	}
	public static function geraLinha($linha_antes, $entrada) {
		// // Fornece: <body text='black'>
		//$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
		//
		//
		//#coringa# é o segredo utilizado para substituição de string por variável
		$linha_final = str_replace("#coringa#", $entrada, $linha_antes);
		return $linha_final;
	}
	public static function geraGrupo($id_grupo) {
		$grupo = Grupo::find($id_grupo);
		// echo '<div class ="col-md-12">';  //0
		echo '<div class="col-md-6">'; //1
		echo '<div id="caixa_to_ibotao" class="panel panel-info box-shadow--2dp">'; //2
		echo '<div id="ibotao">'; //3
		echo '<a href="' . $grupo->link_facebook . ' " target="_blank"> ';
		echo '<div class="panel-body insideibotao">'; //4
		if (empty($grupo->sigla)) {
			echo '  <span class="img-thumbnail glyphicon ' . $grupo->imagem_pequena . ' fa2x"></span>';
		}
		if (empty($grupo->imagem_pequena)) {
			echo '<span class="img-thumbnail black"><strong>' . $grupo->sigla . '</strong></span>';
		}
		echo ' ' . $grupo->titulo;
		echo '</div>'; //4 grupoy
		echo '<div > <p class="small text-primary">  <strong>  ' . number_format($grupo->membros_facebook, 0, ',', '.') . ' concurseiros neste grupo </strong></p></div>';
		echo '</a>';
		echo '</div>'; //3 top_grupo
		echo '</div>'; //2 grupobox
		echo '</div>'; //1 md-6
		//  echo '</div>'; //1 md-12
		//#coringa# é o segredo utilizado para substituição de string por variável
		// $linha_final = str_replace("#coringa#", $entrada, $linha_antes);
		//  return $linha_final;
	}
	/**
	 * Gera um script de acordo com o tipo passado:
	 *
	 * @param  int $id
	 * @param  String $tipo_script
	 * @return Response
	 */
	public static function geraScript($id) {
		set_time_limit(600);
		//tipos de script:
		//"grupoadd" - gera o script para adicionar usuários nos grupos
		//"grupoview" - gera o script para visualizar as últimas postagem nos grupos
		//"grupomember" - gera o script para atualizar a base dos grupos com o número de membros atual
		//
		$script = Script::find($id);
		$tipo_script = $script->tipo_script;
		// $nome_arquivo = $tipo_script . ".txt";
		$nome_arquivo = camel_case($script->titulo . $script->tipo_script . ".txt");
		echo "Gerando script " . $tipo_script . " no arquivo " . $nome_arquivo . "<br>";
		$nome_arquivo = 'scripts/' . $nome_arquivo;
		self::geraArquivo(null, $nome_arquivo);
		self::incrementaArquivo($script->cabecalho, $nome_arquivo);
		//  $grupos = Grupo::all();
		// $campo = "membros_facebook";
		$campo = $script->campo;
		//  $ordem = "desc";
		$ordem = $script->ordem;
		$tamanho = $script->tamanho;
		$filtro = $script->filtro;
		if ($tamanho > 0) {
			$consulta = Grupo::orderBy($campo, $ordem)->take($tamanho);
		} else {
			$consulta = Grupo::orderBy($campo, $ordem);
		}
		if ($filtro == 'popular') {
			$consulta->popular();
		}
		if ($filtro == 'impopular') {
			$consulta->impopular();
		}
		if ($filtro == 'parado') {
			$consulta->parado();
		}
		$grupos = $consulta->get();
		echo $consulta->toSql() . "<br>";
		//mostra tudo
		// $grupos = Grupo::orderBy('membros_facebook', 'desc')->get();
		$linha = 0;
		foreach ($grupos as $grupo) {
			//gera comentário anterior ao bloco
			$linha_comentario = self::geraLinha($script->comentario_antes, $grupo->titulo);
			self::incrementaArquivo($linha_comentario, $nome_arquivo);
			//gera código anterior a linha principal
			self::incrementaArquivo($script->antes, $nome_arquivo);
			//gera a linha principal
			if ($script->tipo_script == 'grupoadd') {
				$linha_variavel = self::geraLinha($script->linha_variavel, trim($grupo->link_facebook) . "requests");
			}
			if ($script->tipo_script == 'grupoview') {
				$linha_variavel = self::geraLinha($script->linha_variavel, trim($grupo->link_facebook));
			}
			if ($script->tipo_script == 'grupodel') {
				$linha_variavel = self::geraLinha($script->linha_variavel, trim($grupo->link_facebook) . "members");
			}
			if ($script->tipo_script == 'grupomember') {
				$linha_variavel = self::geraLinha($script->linha_variavel, trim($grupo->link_facebook) . "requests");
			}
			self::incrementaArquivo($linha_variavel, $nome_arquivo);
			$linha++;
			echo $linha . " Linha adicionada: " . trim($grupo->link_facebook) . "ID = " . $grupo->id . " <br>";
			//gera código posterior a linha principal BLOCO DEPOIS
			if ($script->tipo_script == 'grupoadd') {
				self::incrementaArquivo($script->depois, $nome_arquivo);
			}
			if ($script->tipo_script == 'grupoview') {
				$linha_nova = self::geraLinha($script->depois, trim($grupo->id));
				self::incrementaArquivo($linha_nova, $nome_arquivo);
			}
			if ($script->tipo_script == 'grupodel') {
				$linha_nova = self::geraLinha($script->depois, trim($grupo->id));
				self::incrementaArquivo($linha_nova, $nome_arquivo);
			}
			//gera comentário posterior ao bloco
			$linha_comentario2 = self::geraLinha($script->comentario_depois, $grupo->titulo);
			self::incrementaArquivo($linha_comentario2, $nome_arquivo);
		}
		//gera rodapé do script
		self::incrementaArquivo($script->rodape, $nome_arquivo);
	}
	public static function geraTodosScripts() {
		$scripts = Script::all();
		foreach ($scripts as $script) {
			//gera comentário anterior ao bloco
			echo $script->titulo . '<br>';
			self::geraScript($script->id);
		}
	}
	public static function fullNameToFirstName($fullName, $checkFirstNameLength = true) {
		// Split out name so we can quickly grab the first name part
		$nameParts = explode(' ', $fullName);
		$firstName = $nameParts[0];
		// If the first part of the name is a prefix, then find the name differently
		if (in_array(strtolower($firstName), array('sr.', 'sra.', 'srta', 'srta.', 'dr'))) {
			if ($nameParts[2] != '') {
				// E.g. Mr James Smith -> James
				$firstName = $nameParts[1];
			} else {
				// e.g. Mr Smith (no first name given)
				$firstName = $fullName;
			}
		}
		// make sure the first name is not just "J", e.g. "J Smith" or "Mr J Smith" or even "Mr J. Smith"
		if ($checkFirstNameLength && strlen($firstName) < 3) {
			$firstName = $fullName;
		}
		return $firstName;
	}
	public static function geraZipDeDiretorio($diretorio, $destino) {
		if (extension_loaded('zip')) {
			echo "Biblioteca zip ok... <br>";
		}
		$arquivoZip = storage_path() . "/app/scripts.zip";
		$pasta = storage_path() . "/app/scripts";
		// Create "MyCoolName.zip" file in public directory of project.
		$zip = new ZipArchive();
		if ($zip->open($arquivoZip, ZipArchive::CREATE) === true) {
			//            // Copy all the files from the folder and place them in the archive.
			foreach (glob($pasta . '/*') as $fileName) {
				echo "Adicionando" . $fileName . "<br>";
				$file = basename($fileName);
				$zip->addFile($fileName, $file);
			}
			$zip->close();
			//            return $arquivoZip;
			echo "Zip concluído! <br>";
		} else {
			echo 'Falhou';
		}
	}
	public static function baixaArquivo($arquivo) {
		$caminho = Storage::disk('local')->get($arquivo);
		return (new Response($caminho, 200))->header('Content-Type', 'application/zip');
	}
	public static function geraMes($dataCompleta) {
		$mes = date("m", strtotime($dataCompleta));
		switch ($mes) {
		case 1:
			$mes = "Janeiro";
			break;
		case 2:
			$mes = "Fevereiro";
			break;
		case 3:
			$mes = "Março";
			break;
		case 4:
			$mes = "Abril";
			break;
		case 5:
			$mes = "Maio";
			break;
		case 6:
			$mes = "Junho";
			break;
		case 7:
			$mes = "Julho";
			break;
		case 8:
			$mes = "Agosto";
			break;
		case 9:
			$mes = "Setembro";
			break;
		case 10:
			$mes = "Outubro";
			break;
		case 11:
			$mes = "Novembro";
			break;
		case 12:
			$mes = "Dezembro";
			break;
		}
		return $mes;
	}
	public static function geraDia($dataCompleta) {
		$dia = date("d", strtotime($dataCompleta));
		return $dia;
	}
	public static function geraAno($dataCompleta) {
		$ano = date("Y", strtotime($dataCompleta));
		return $ano;
	}
	public static function geraData($dataCompleta) {
		$completa = date(' d/m/Y ', strtotime($dataCompleta));
		return $completa;
	}
	public static function geraHora($dataCompleta) {
		$completa = date(' H:i:s ', strtotime($dataCompleta));
		return $completa;
	}
	public static function geraDataHora($dataCompleta) {
		$completa = date(' d/m/Y H:i:s', strtotime($dataCompleta));
		return $completa;
	}
	public static function geraSemana($dataCompleta) {
		$semana = date("w", strtotime($dataCompleta));
		switch ($semana) {
		case 0:
			$semana = "Domingo";
			break;
		case 1:
			$semana = "Segunda Feira";
			break;
		case 2:
			$semana = "Terça Feira";
			break;
		case 3:
			$semana = "Quarta Feira";
			break;
		case 4:
			$semana = "Quinta Feira";
			break;
		case 5:
			$semana = "Sexta Feira";
			break;
		case 6:
			$semana = "Sábado";
			break;
		}
		return $semana;
	}
	public static function geraDataHoraExtenso($dataCompleta) {
		$final = self::geraDia($dataCompleta) . " de " . self::geraMes($dataCompleta) . " de " . self::geraAno($dataCompleta) . " às " . self::geraHora($dataCompleta);
		return $final;
	}

	public static function geraDataExtenso($dataCompleta) {
		//$dataCompleta = Carbon::parse($dataCompleta)->format('d/m/Y');
		$dataCompleta = Carbon::createFromFormat('d/m/Y', $dataCompleta);
		//dd($dataCompleta);
		$final = self::geraDia($dataCompleta) . " de " . self::geraMes($dataCompleta) . " de " . self::geraAno($dataCompleta);
		return $final;
	}

	public static function removerFormatacaoNumero($strNumero) {
		$strNumero = trim(str_replace("R$", null, $strNumero));
		$vetVirgula = explode(",", $strNumero);
		if (count($vetVirgula) == 1) {
			$acentos = array(".");
			$resultado = str_replace($acentos, "", $strNumero);
			return $resultado;
		} else if (count($vetVirgula) != 2) {
			return $strNumero;
		}
		$strNumero = $vetVirgula[0];
		$strDecimal = mb_substr($vetVirgula[1], 0, 2);
		$acentos = array(".");
		$resultado = str_replace($acentos, "", $strNumero);
		$resultado = $resultado . "." . $strDecimal;
		return $resultado;
	}
	public static function valorPorExtenso($valor = 0, $bolExibirMoeda = true, $bolPalavraFeminina = false) {
		$valor = self::removerFormatacaoNumero($valor);
		$singular = null;
		$plural = null;
		if ($bolExibirMoeda) {
			$singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
			$plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões", "quatrilhões");
		} else {
			$singular = array("", "", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
			$plural = array("", "", "mil", "milhões", "bilhões", "trilhões", "quatrilhões");
		}
		$c = array("", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
		$d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa");
		$d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove");
		$u = array("", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");
		if ($bolPalavraFeminina) {
			if ($valor == 1) {
				$u = array("", "uma", "duas", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");
			} else {
				$u = array("", "um", "duas", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");
			}
			$c = array("", "cem", "duzentas", "trezentas", "quatrocentas", "quinhentas", "seiscentas", "setecentas", "oitocentas", "novecentas");
		}
		$z = 0;
		$valor = number_format($valor, 2, ".", ".");
		$inteiro = explode(".", $valor);
		for ($i = 0; $i < count($inteiro); $i++) {
			for ($ii = mb_strlen($inteiro[$i]); $ii < 3; $ii++) {
				$inteiro[$i] = "0" . $inteiro[$i];
			}
		}
		// $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
		$rt = null;
		$fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);
		for ($i = 0; $i < count($inteiro); $i++) {
			$valor = $inteiro[$i];
			$rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
			$rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
			$ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";
			$r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd && $ru) ? " e " : "") . $ru;
			$t = count($inteiro) - 1 - $i;
			$r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
			if ($valor == "000") {
				$z++;
			} elseif ($z > 0) {
				$z--;
			}
			if (($t == 1) && ($z > 0) && ($inteiro[0] > 0)) {
				$r .= (($z > 1) ? " de " : "") . $plural[$t];
			}
			if ($r) {
				$rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? (($i < $fim) ? ", " : " e ") : " ") . $r;
			}
		}
		$rt = mb_substr($rt, 1);
		return ($rt ? trim($rt) : "zero");
	}
	public static function limpaString($id) {
		$LetraProibi = array(",", ".", "'", "\"", "&", "|", "!", "#", "$", "¨", "*", "(", ")", "`", "´", "<", ">", ";", "=", "+", "§", "{", "}", "[", "]", "^", "~", "?", "%", "ª", "º");
		$special = array('Á', 'È', 'ô', 'Ç', 'á', 'è', 'Ò', 'ç', 'Â', 'ò', 'â', 'Ñ', 'À', 'ñ', 'à', 'Õ', 'õ', 'Í', 'Ã', 'í', 'ã', 'Ú', 'ú', 'É', 'é', 'Ó', 'Ê', 'ó', 'ê', 'Ô');
		$clearspc = array('a', 'e', 'o', 'c', 'a', 'e', 'o', 'c', 'a', 'o', 'a', 'n', 'a', 'n', 'a', 'o', 'o', 'i', 'a', 'i', 'a', 'u', 'u', 'e', 'e', 'o', 'e', 'o', 'e', 'o');
		$newId = str_replace($special, $clearspc, $id);
		$newId = str_replace($LetraProibi, "", trim($newId));
		return strtolower($newId);
	}
	public static function geraPublicidade() {
		$min = 1;
		$max = 3;
		$id_publicidade = rand($min, $max);
		$publicidade = '';
		switch ($id_publicidade) {
		case 1:
			$publicidade = '<a href="https://www.facebook.com/groups/concurseiros2/" target="_blank"><img  alt="Concurseiros 2.0 - O melhor grupo de estudo do facebook" src="/img/publ/banner-dois.jpg" class="img-responsive center-block" /> </a>';
			break;
		case 2:
			$publicidade = '<a href="https://www.facebook.com/groups/Noticias.cc2/" target="_blank"><img  alt="Notícias de concursos 2.0 - O grupo onde as notícias chegam primeiro" src="/img/publ/banner-noticias.jpg" class="img-responsive center-block" /></a>';
			break;
		case 3:
			$publicidade = '<a href="https://www.facebook.com/groups/AmorDeConcurseiro/" target="_blank"><img  alt="Amor de Concurseiro 2.0 - O grupo onde os concurseiros podem amar e estudar juntos" src="/img/publ/banner-amor.jpg" class="img-responsive center-block" /></a>';
			break;
		}
		return $publicidade;
	}
	public static function geraMenu($id, $menu) {
		//  'gru'
		//    'not'
		//  'pla'
		$tudo_menu = array(
			1 => "ini",
			2 => "gru",
			3 => "not",
			4 => "pla",
			5 => "sim",
		);
		if ($tudo_menu[$id] == $menu) {
			$selecionado = 'S';
		} else {
			$selecionado = 'N';
		}
		$preTexto = '';
		$texto = '';
		$posTexto = '';
		if ($id == 1) {
			$texto = 'Início';
		}
		if ($id == 2) {
			$texto = 'Grupos de estudo';
		}
		if ($id == 3) {
			$texto = 'Notícias';
		}
		if ($id == 4) {
			$texto = 'Planos de Estudo';
		}
		if ($id == 5) {
			$texto = 'Simulados';
		}
		if ($selecionado == 'S') {
			$preTexto = '<span class="selectado">';
			$posTexto = '</span>';
		} else {
			if ($id == 1) {
				$texto = '"/">Início';
			}
			if ($id == 2) {
				$texto = '"/grupos">Grupos de estudo';
			}
			if ($id == 3) {
				$texto = '"/noticias">Notícias';
			}
			if ($id == 4) {
				$texto = '"/planos">Planos de Estudo';
			}
			if ($id == 5) {
				$texto = '"/simulados">Simulados';
			}
			$preTexto = '<a href=';
			$posTexto = '</a>';
		}
		$menu_final = $preTexto . $texto . $posTexto;
		//checkagem de segurança
		return $menu_final;
	}
	public static function clonaSimulado($id_simulado, $id_user) {
		$data = Carbon::now();
		$user = User::findOrFail($id_user);
		$user->simulados()->attach($id_simulado, ['data_atribuicao' => $data]);
		return "O simulado número " . $id_simulado . " foi atribuído a " . $user->name . " com sucesso!";
	}
	public static function questoesRespondidas($id_atribuicao) {
		$respondidas = DB::table('respostas')
			->select(DB::raw('count(*) as respostas_total'))
			->where('id_atribuicao', $id_atribuicao)
		//            ->get();
		//            ->pluck('respostas_total');;
			->value('respostas_total');
		return $respondidas;
	}
	public static function questoesAtribuidas($id_simulado) {
		$atribuidas = DB::table('simulado_questao')
			->select(DB::raw('count(*) as questaos_total'))
			->where('id_simulado', $id_simulado)
		//            ->get();
		//            ->pluck('questaos_total');
			->value('questaos_total');
		return $atribuidas;
	}
	public static function pegaSimulado($id_atribuicao) {
		$simulado = DB::table('user_simulado')
			->select(DB::raw('id_simulado'))
			->where('id', $id_atribuicao)
			->value('id_simulado');
		return $simulado;
	}
	public static function pegaStatus($status) {
		$status_final = array(
			'estudando' => 'Estudando',
			'aprovado_cadastro_reserva' => 'Aprovado (reserva)',
			'aprovado_nas_vagas' => 'Aprovado (nas vagas)',
			'servidor_em_exercicio' => 'Servidor em exercício',
		);
		if (!is_null($status) and !empty($status)) {
			return $status_final[$status];
		} else {
			return null;
		}
	}
	public static function pegaNivel($nivel) {
		$nivel_final = array(
			'fundamental' => 'Nível Fundamental',
			'medio' => 'Nível médio',
			'tecnico' => 'Técnico',
			'graduacao' => 'Graduação',
			'especializacao' => 'Especialização',
			'mba' => 'MBA',
			'mestrado' => 'Mestrado',
			'doutorado' => 'Doutorado',
			'pos_doutorado' => 'Pós-Doutorado',
		);
		if (!is_null($nivel) and !empty($nivel)) {
			return $nivel_final[$nivel];
		} else {
			return null;
		}
	}
	public static function pegaGentilico($sigla) {
		$estadosBrasileiros = array(
			'AC' => 'Acriano',
			'AL' => 'Alagoano',
			'AP' => 'Amapaense',
			'AM' => 'Amazonense',
			'BA' => 'Baiano',
			'CE' => 'Cearense',
			'DF' => 'Brasiliense',
			'ES' => 'Capixaba',
			'GO' => 'Goianos',
			'MA' => 'Maranhense',
			'MT' => 'Mato-grossense',
			'MS' => 'Sul-mato-grossense',
			'MG' => 'Mineiro',
			'PA' => 'Paraense',
			'PB' => 'Paraibano',
			'PR' => 'Paranaense',
			'PE' => 'Pernambucano',
			'PI' => 'Piauiense',
			'RJ' => 'Fluminense',
			'RN' => 'Potiguar',
			'RS' => 'Gaúcho',
			'RO' => 'Rondoniense',
			'RR' => 'Roraimense',
			'SC' => 'Catarinense',
			'SP' => 'Paulista',
			'SE' => 'Sergipano',
			'TO' => 'Tocantinense',
		);
		if (!is_null($sigla) and !empty($sigla)) {
			return $estadosBrasileiros[$sigla];
		} else {
			return null;
		}
	}
	public static function pegaSituacaoSorteio($situacao) {
		$situacoes = array(
			'PREVISTO' => 'Sorteio previsto',
			'ABERTO' => 'Inscrições abertas',
			'AGUARDANDO' => 'Aguardando Resultado',
			'RESULTADO' => 'Resultado publicado',
			'ENCERRADO' => 'Sorteio Encerrado',
		);
		if (!is_null($situacao) and !empty($situacao)) {
			$situacaoFinal = $situacoes[$situacao];
			return $situacaoFinal;
		} else {
			return null;
		}
	}
	public static function pegaClasseSituacaoSorteio($situacao) {
		$situacoes = array(
			'PREVISTO' => 'warning',
			'ABERTO' => 'success',
			'AGUARDANDO' => 'warning',
			'RESULTADO' => 'success',
			'ENCERRADO' => 'danger',
		);
		if (!is_null($situacao) and !empty($situacao)) {
			$classeFinal = $situacoes[$situacao];
			return $classeFinal;
		} else {
			return null;
		}
	}
            public static function pegaEstado($sigla, $com_preposicao) {
		$estadosBrasileiros = array(
			'AC' => 'Acre',
			'AL' => 'Alagoas',
			'AP' => 'Amapá',
			'AM' => 'Amazonas',
			'BA' => 'Bahia',
			'CE' => 'Ceará',
			'DF' => 'Distrito Federal',
			'ES' => 'Espírito Santo',
			'GO' => 'Goiás',
			'MA' => 'Maranhão',
			'MT' => 'Mato Grosso',
			'MS' => 'Mato Grosso do Sul',
			'MG' => 'Minas Gerais',
			'PA' => 'Pará',
			'PB' => 'Paraíba',
			'PR' => 'Paraná',
			'PE' => 'Pernambuco',
			'PI' => 'Piauí',
			'RJ' => 'Rio de Janeiro',
			'RN' => 'Rio Grande do Norte',
			'RS' => 'Rio Grande do Sul',
			'RO' => 'Rondônia',
			'RR' => 'Roraima',
			'SC' => 'Santa Catarina',
			'SP' => 'São Paulo',
			'SE' => 'Sergipe',
			'TO' => 'Tocantins',
			'BR' => 'Não informado',
		);
		if (!is_null($sigla) and !empty($sigla)) {
			$estado = $estadosBrasileiros[$sigla];
			if ($com_preposicao == 'S') {
				$estado = self::pegaPreposicaoEstado($sigla) . " " . $estado;
			}
			return $estado;
		} else {
			return null;
		}
	}
	public static function pegaPreposicaoEstado($sigla) {
		$estadosBrasileiros = array(
			'AC' => 'no',
			'AL' => 'em',
			'AP' => 'no',
			'AM' => 'no',
			'BA' => 'na',
			'CE' => 'no',
			'DF' => 'no',
			'ES' => 'no',
			'GO' => 'em',
			'MA' => 'no',
			'MT' => 'no',
			'MS' => 'no',
			'MG' => 'em',
			'PA' => 'no',
			'PB' => 'na',
			'PR' => 'no',
			'PE' => 'em',
			'PI' => 'no',
			'RJ' => 'no',
			'RN' => 'no',
			'RS' => 'no',
			'RO' => 'em',
			'RR' => 'em',
			'SC' => 'em',
			'SP' => 'em',
			'SE' => 'em',
			'TO' => 'em',
		);
		if (!is_null($sigla) and !empty($sigla)) {
			return $estadosBrasileiros[$sigla];
		} else {
			return null;
		}
	}
	public static function pegaImagem($categoria = null, $nome = null) {
		if ($nome != null and $categoria != null) {
			$imagens = config('assets.imagens') . $categoria . "/" . $nome;
		} else {
			$imagens = "";
		}
		return $imagens;
	}
	public static function progressoPerfilUsuario() {
		$usuario = Auth::user();
		$total = 100;
		$step = ceil($total / 10);
		// $step = 10;
		if (empty(trim($usuario->name))) {
			$total = $total - $step;
		}
		if ($usuario->avatar == "perfil.jpg") {
			$total = $total - $step;
		}
		if (empty(trim($usuario->lastname))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->uf))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->uf_residencia))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->nascimento))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->sexo))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->nick_name))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->inicio_estudo))) {
			$total = $total - $step;
		}
		if (empty(trim($usuario->status))) {
			$total = $total - $step;
		}
		return ceil($total);
	}
	public static function geraConvite($palavra = null) {
		// the wordlist from which the password gets generated
		// (change them as you like)
		if ($palavra == null) {
			//verifica se foi passada uma palavra
			$words = 'APROVADO,EXCLUSIVO,QUEROMINHAVAGA,FUTUROSERVIDOR,DOISPONTOZERO,CONCURSEIROS,BEMVINDOS,TUDOAZUL,ESTUDANDO,GABARITOS,NOMEADOJA,QUEROPASSAR,GABARITANDO,CONCURSANDO,CONCURSOS,FOCONOSESTUDOS,VOUPASSAR,VAMOSESTUDAR,CONCURSOSPUBLICOS,ESTUDAR,SEMDESCANSO,MOTIVACAO,MUDANCADEVIDA,FOCOFORCAEFE';
			// Split by ",":
			$words = explode(',', $words);
			if (count($words) == 0) {die('Wordlist is empty!');}
			$pwd = '';
			$r = mt_rand(0, count($words) - 1);
			$pwd .= $words[$r];
		} else {
			$pwd = strtoupper(str_slug($palavra, ''));
		}
		$num = mt_rand(1000, 9999);
		$pwd .= $num;
		$pwd .= substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZ"), -3);
		$pwd = str_replace('0', '7', $pwd);
		$pass_length = strlen($pwd);
		$random_position = rand(0, $pass_length);
		return $pwd;
	}
	public static function geraCodigoMail() {
		return $random_hash = substr(md5(uniqid(rand(), true)), 16, 16);
	}
}