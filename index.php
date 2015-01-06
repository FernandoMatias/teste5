<?php

// inicia sessao
session_start();

// se nao tiver valor, coloca valor 1
if (!$_SESSION['projetovipal']['areaform'] >= 1) {
    $_SESSION['projetovipal']['areaform'] = 1;
}

$erros = '';

// valida o formulario enviado (na primeira vez não entra) e indica qual a próxima área
switch ($_POST['validacao_formulario']) {
    case 1:
	if (validaForm1()) {
	    $_SESSION['projetovipal']['areaform'] = 2;
	} else {
//	    print  "há campos não preenchidos 1";
	    $erros = 'Há campos não preenchidos.';
	}
	break;

    case 2:
	if (validaForm2()) {
	    $_SESSION['projetovipal']['areaform'] = 3;
	} else {
	    $erros = 'Há campos não preenchidos.';
	}
	break;

    case 3:
	if (validaForm3()) {
	    $_SESSION['projetovipal']['areaform'] = 'banda_eco';
	} else {
	    $erros = 'Há campos não preenchidos.';
	}
	break;

    default:
	switch ($_GET['acao']) {
	    case 'calc':
		$_SESSION['projetovipal']['areaform'] = 1;
		break;

	    case 'conheca':
		$_SESSION['projetovipal']['areaform'] = 'conheca';
		break;
	    
	    case 'institucional':
		$_SESSION['projetovipal']['areaform'] = 'institucional';
		break;
	}
}

// indica a funcao da area desejada
switch ($_SESSION['projetovipal']['areaform']) {
    case 1:
	area1($erros);
	break;

    case 2:
	area2($erros);
	break;

    case 3:
	area3($erros);
	break;


    case 'banda_eco':
	bandaEco();
	break;

    case 'conheca':
	conheca();
	break;
    
    case 'institucional':
	institucional();
	break;

    default:
	var_dump($_SESSION['projetovipal']['areaform']);
	exit;
	exit('Erro de área.');
	break;
}

function validaForm1() {
    $rtn = true;

    $post = $_POST['form'];

    foreach ($post as $var) {
	if ($var <= 0) {
	    $rtn = false;
	}
    }

    return $rtn;
}

function validaForm2() {
    $rtn = true;

    $post = $_POST['form'];

    foreach ($post as $var) {
	if ($var <= 0) {
	    $rtn = false;
	}
    }

    return $rtn;
}

function validaForm3() {
    $rtn = true;

    $post = $_POST['form'];

    foreach ($post as $var) {
	if ($var <= 0) {
	    $rtn = false;
	}
    }
    return $rtn;
}

function area1($erros = '') {
    include_once 'area1.php';
}

function area2($erros = '') {
    if ($_POST['form']) {
	$post = $_POST['form'];

	$post['quantos_km_pormes'] = formataValor($post['quantos_km_pormes']);

	$_SESSION['projetovipal']['postform'] = $post;

    }
    include_once 'area2.php';
}

function area3($erros = '') {
    include_once 'area3.php';
}

function bandaEco() {
    include_once 'desempenho_bandaeco.php';
}

function conheca() {
    include_once 'conheca_bandaEco.php';
}

function institucional() {
    include_once 'institucional.php';
}

function formataValor($valore) {
    $valore = str_replace('.', '', $valore);
    $valore = str_replace(',', '.', $valore);
    return $valore;
}

function formataValorSaida($valore) {
    $valore = number_format($valore, 2, ',', '.');
    return $valore;
}

?> 