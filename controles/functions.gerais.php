<?
/**
 * @author Marcus Sávio Soares Sombra - marcussombra@gmail.com
 * @ultimaModificacao 20.08.2010 - Na hora de redimensionar, foi adicionado png e gif
 * @ultimaModificacao 11.08.2009 - Adicionada funcao twozero() que adiciona um "zero" a numeros e VerificaValor para ser usado junto com FetchArray()
 * @ultimaModificacao 04.08.2009 - Adicionada funcao FetchArray()
 * @ultimaModificacao 28.07.2009 - Adição das funcoes GuardaValoresFormulario e  GravaValoresFormulario
 * @ultimaModificacao 21.07.2009 - Adicionado a extensao em Upload()
 * @ultimaModificacao 11.17.2010 - Adicionar a funcao Data para traduzir as Datas para PT Data()
 * @ultimaModificacao 11.17.2010 - Adicionar a funcao Data Fazer um inser a partir de post GeraInsertValores()
 * @ultimaModificacao 11.17.2010 - Modificada a funcao de redirecinoamento para poder usar hisoty.back()
 * @ultimaModificacao 11.17.2010 - Alterado eregi para preg_match /(STR_ANTIGA)/i
 * @ultimaModificacao 11.17.2010 - Adicionado funcao para converter data de PT para Sql DataParaSql
 */
 
 function DataParaSql($Data) {
		$Data = explode('/', $Data);
		return $Data[2].'-'.$Data[1].'-'.$Data[0];
 }
 
 function GeraInsertValores() {
	if (isset($_POST["Nome"])) {
		$ii = 0;
		foreach($_POST as $i => $v) {
			echo '$Valores['.$ii.'][\'requerido\'] = 0;<br>';
			echo '$Valores['.$ii.'][\'aspas\'] = 1;<br>';
			echo '$Valores['.$ii.'][\'nomecoluna\'] = \''.$i.'\';<br>';
			echo '$Valores['.$ii.'][\'valor\'] = $POST[\''.$i.'\'];<br><br>';
			
			$ii++;
		}
	}
}
 
 function Data($Tipo) {
	 $arr_DiaSemana = array(1 => 'Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
	 
	 $arr_MesDoAno = array(1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
	  $arr_DiaSemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
	 
	 switch($Tipo) {
		 case 'F':
		 	return $arr_MesDoAno[date("n")];
			break;
		case 'l':
			return $arr_DiaSemana[date("N")];
			break;
	 }
 }
 
function DeletaArquivosTODOS($dir)
{
	if(is_dir($dir))
	{
		if($handle = opendir($dir))
		{
			while(($file = readdir($handle)) !== false)
			{
				if($file != '.' && $file != '..')
				{
					
					@unlink($dir.$file);
					
				}
			}
		}
	}
}


function DeletaArquivos($Diretorio, $Str)
{	
	$a = glob($Diretorio.$Str);
	
	if (is_array($a))
	{
	foreach ($a as $v) 
	{
		if (is_file($v)) {
			@unlink($v);
		}
	}
	}
	return true;
}

function FormEditando($v, $Campo, $Igualar = '') {
	if ($Igualar == '')
	{
		if(isset($v[$Campo]))
		{
			return $v[$Campo];	
		} else
		{
			return '';	
		}
	} else 
	{
		if(isset($v[$Campo]))
		{
			if (AntiSql($Igualar) == AntiSql($v[$Campo]))
			{
				return true;
			} else
			{
				return false;	
			}	
		} else
		{
			return false;	
		}			
	}
}

function twozero($n) {
	if (strlen($n) == 1) {
		return '0'.$n;
	} else
	{
		return $n;
	}
}

function FetchArray($Sql)
{

	$myarr = array();

	$Sql = mysql_query($Sql) or die(mysql_error());

	while ($arr = mysql_fetch_array($Sql)) {
		$myarr[] = $arr;
	}

	return $myarr;
}
function GuardaValoresFormulario($NomeForm, $Campo)
{
	if (isset($_SESSION[$NomeForm][$Campo]))
	{
		$Valor = $_SESSION[$NomeForm][$Campo];
		unset($_SESSION[$NomeForm][$Campo]);
		return $Valor;
	} else
	{
		return '';
	}
}

function GravaValoresForm($NomeForm, $Valores) {
	foreach($Valores as $i => $v)
	{
		$_SESSION['Formularios'][$NomeForm][$v['nomecoluna']] = $v['valor'];
	}
}

function PegaValoresForm($NomeForm, $Coluna) {
	$Var = $_SESSION['Formularios'][$NomeForm][$Coluna];
	
	if (!empty($Var))
	{
		return $var;
	} else {
		return '';	
	}
}

function PegaValoresFormRegistro($v, $Form, $Coluna) {
	$Var = $_SESSION['Formularios'][$NomeForm][$Coluna];
	
	if (empty($Var))
	{
		$Var = $v[0][$Coluna];
	}
	
	$Var = $v[0][$Coluna];
	
	if (!empty($Var))
	{
		return $var;
	} else {
		return '';	
	}
}

function VerificaValoresForm($NomeForm, $Coluna, $Valor) {
	$Var = $_SESSION['Formularios'][$NomeForm][$Coluna];
	
	if ($Var == $Valor)
	{
		return true;
	} else {
		return false;	
	}
}



function RedirecionaJs($Msg = '', $Pagina, $ComAspas = 1)
{
	if (substr($Pagina, 0, 9) == '?content=')
	{
		$Pagina = 'index.php'.$Pagina;	
	}
	
	$Retorno = '<script language="JavaScript">';

	if ($Msg != '')
	{
		$Retorno .= 'alert(\''.$Msg.'\'); ';
	}

	if ($ComAspas == 1)
	{
		$Retorno .= 'window.location = \''.$Pagina.'\'; ';
	} else
	{
		$Retorno .= $Pagina;
	}

	$Retorno .= '</script>';

	return $Retorno;
}

function Regrade3($XOriginal, $YOriginal, $XFinal)
{
	$YFinal = ($XFinal * $YOriginal) / $XOriginal;

	$Tamanho = array();
	$Tamanho[0] = $YFinal;
	$Tamanho[1] = $XFinal;

	return $Tamanho;
}

function Proporcao($Imagem, $XFinal)
{
	list($XOriginal, $YOriginal) = getimagesize($Imagem);

	$YFinal = ($XFinal * $YOriginal) / $XOriginal;

	$Tamanho = array();
	$Tamanho['X'] = $XFinal;
	$Tamanho['Y'] = $YFinal;

	return $Tamanho;
}

function RedimensionaImagem($OriginalArquivo = 0, $FinalArquivo = 0, $FinalLargura = 0, $FinalAltura = 0, $Thumb = 0, $Sobrescrever = 0) {
	if ($Sobrescrever == 0)
	{
		if (is_file($FinalArquivo) && file_exists($FinalArquivo))
		{
			return 0;
		}
	} else
	{
		if (is_file($FinalArquivo) && file_exists($FinalArquivo))
		{
			unlink($FinalArquivo);
		}
	}

	if (!file_exists($FinalArquivo) && is_file($OriginalArquivo)) {

		list($OriginalLargura, $OriginalAltura, $OriginalTipo, $OriginalAttr) = getimagesize($OriginalArquivo);

		$X = $Y = 0;

		if ($Thumb == 0)
		{
			if ($FinalLargura != 0) {
				if ($FinalLargura < $OriginalLargura)
				{
					$FinalAltura = ceil(($FinalLargura * $OriginalAltura) / $OriginalLargura);
				} else
				{
					$FinalAltura = $OriginalAltura;
					$FinalLargura = $OriginalLargura;
				}
			} elseif ($FinalAltura != 0) {
				if ($FinalAltura < $OriginalAltura)
				{
					$FinalLargura = ceil(($FinalAltura * $OriginalLargura) / $OriginalAltura);
				} else
				{
					$FinalAltura = $OriginalAltura;
					$FinalLargura = $OriginalLargura;
				}
			} else
			{
				return false;
			}

			$TempAltura = $FinalAltura;
			$TempLargura = $FinalLargura;
		} else
		{
			$TempLargura = $FinalLargura;
			$TempAltura = ceil(($FinalLargura * $OriginalAltura) / $OriginalLargura);

			if ($TempAltura < $FinalAltura)
			{
				$TempAltura = $FinalAltura;
				$TempLargura = ceil(($FinalAltura * $OriginalLargura) / $OriginalAltura);

				$X = round(($TempLargura-$FinalLargura)/2);
			} else
			{
				$Y = round(($TempAltura-$FinalAltura)/2);
			}
		}



		$image_p = imagecreatetruecolor($FinalLargura, $FinalAltura);

		switch($OriginalTipo) {
			case 1:  $image = imagecreatefromgif($OriginalArquivo); break;
			case 2: 
				#try{
					$image = imagecreatefromjpeg($OriginalArquivo);
				#}
				#	catch( Exception $e ){
				#		echo 'asd'; exit;
				#}

				 
				break;
			case 3:  $image = imagecreatefrompng($OriginalArquivo); break;
			default: echo "arquivo não compativel"; return;
		}

		imagecopyresampled($image_p, $image, 0, 0, $X, $Y, $TempLargura, $TempAltura, $OriginalLargura, $OriginalAltura);
		imagejpeg($image_p, $FinalArquivo, 100);
		imagedestroy($image_p);
	}
}
function AntiSql($string) #funcao AntiSqlInjection
{
	$string = get_magic_quotes_gpc() ? stripslashes($string) : $string;
	$string = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($string) : mysql_escape_string($string);

	return trim($string);
}

function Upload($dir, $campo, $mime)
{
	#$mime="image/jpeg";
	$Continue = 0;

	$Ext = explode('.', $campo['name']);
	$Ext = $Ext[(count($Ext) - 1)];	

	$Verif = 0;
	while ($Verif == 0) {
		sleep(1);
		$NomeFinal = md5(rand(1, 9999).time()).'.'.strtolower($Ext);
		
		if (!file_exists($dir.$NomeFinal))	{ $Verif = 1; }
	}
	
	if (is_array($mime))
	{
		foreach ($mime as $v)
		{
			if (preg_match('/('.$v.')/i', $campo['type']))
			{
				$Continue = 1;
			}
		}
	} else
	{

		if (preg_match('/('.$mime.')/i', $campo['type']))
		{

			$Continue = 1;
		}
	}

	if ($Continue == 1)
	{
		if (move_uploaded_file($campo['tmp_name'], $dir . $NomeFinal))
		{
			return $NomeFinal;
		} else
		{
			return '1';
		}
	} else
	{
		return '0';
	}
}


/**
 * Faz a paginacao de registros
 *
 * 
 */
function Paginacao($NomeTabela, $Where, $RegistrosPorPagina, $PaginaAtual, $PaginaAAdd)
{
	$QueryTotalDeRegistros = 'SELECT COUNT(*) FROM '.$NomeTabela;
	if (!empty($Where))
	{
		$QueryTotalDeRegistros .= ' WHERE '.$Where;
	}
	
	list($TotalDeRegistros) = mysql_fetch_array(mysql_query($QueryTotalDeRegistros));

	$TotalDePaginas  = ceil($TotalDeRegistros / $RegistrosPorPagina);
	
	$Tem1 = false;
	$TemUltima = false;
	
	$P = $PaginaAtual - 2;
	$U = $PaginaAtual + 2;
	
	$Retorno = '';
	
	if ($TotalDePaginas > 1)
	{
		for ($i = $P; $i < $PaginaAtual; $i++) {
				if ($i > 0) {
					$Retorno .= '<a href="'.$PaginaAAdd.$i.'">'.$i.'</a>&nbsp;&nbsp;';
				}
				
				if ($i == 1) {
					$Tem1 = true;	
				}
		}
		
		$Retorno .= '<a href="'.$PaginaAAdd.$PaginaAtual.'">['.$PaginaAtual.']</a>&nbsp;&nbsp;';
		
		for ($i=($PaginaAtual + 1); $i <= $U; $i++) {
				if ($i <= $TotalDePaginas) {
					$Retorno .= '<a href="'.$PaginaAAdd.$i.'">'.$i.'</a>&nbsp;&nbsp;';	
				}		
				
				if ($i == $TotalDePaginas) {
					$TemUltima = true;	
				}
		}
	
		if (($Tem1 == false) && $PaginaAtual != 1) {
			$Retorno = '<a href="'.$PaginaAAdd.'1"><< </a>&nbsp;&nbsp;'.$Retorno;	
		}
		if (($TemUltima == false) && ($PaginaAtual != $TotalDePaginas) && ($TotalDePaginas > 0)) {
			$Retorno = $Retorno.'<a href="'.$PaginaAAdd.$TotalDePaginas.'"> >></a>&nbsp;&nbsp;';		
		}
	}
	
	$Limit = ($PaginaAtual * $RegistrosPorPagina) - $RegistrosPorPagina;
	$Limit = 'LIMIT '.$Limit.', '.$RegistrosPorPagina;

	$R = array();
	$R['Limit'] = $Limit;
	$R['Paginacao'] = $Retorno;
	$R['Registros'] = $TotalDeRegistros;
	$R['Pagina'] = $TotalDePaginas;

	return $R;
}
/**
 * FIM
 */

function CortaString($t, $n)
{
	$tt = str_replace(array('<br>', '<br />', '<br/>'), array('', '', ''), $t);
	
	if (strlen(trim($tt)) > $n)
	{
		return substr(trim($tt), 0, ($n - 1)).'...';
	} else
	{
		return trim($tt);
	}
}
?>