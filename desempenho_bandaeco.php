<?php
$post = $_POST['form'];

$qtd_km_mes = $post['quantos_km_pormes'];
$media_consumo = $post['qual_mediadeconsumo'];
$preco_combustivel = $post['preco_combustivel'];




if (!strpos($preco_combustivel, ".") && (strpos($preco_combustivel, ","))) {
    $preco_combustivel = substr_replace($preco_combustivel, '.', strpos($preco_combustivel, ","), 1);
}

if (!strpos($media_consumo, ".") && (strpos($media_consumo, ","))) {
    $media_consumo = substr_replace($media_consumo, '.', strpos($media_consumo, ","), 1);
}

$qtd_litro_mes = $qtd_km_mes / $media_consumo;
$gasto_mes = $qtd_litro_mes * $preco_combustivel;

$reducao1 = (($media_consumo / 100) * 1) + $media_consumo;
$reducao2 = (($media_consumo / 100) * 2) + $media_consumo;
$reducao3 = (($media_consumo / 100) * 3) + $media_consumo;
$reducao4 = (($media_consumo / 100) * 4) + $media_consumo;
$reducao5 = (($media_consumo / 100) * 5) + $media_consumo;
$reducao6 = (($media_consumo / 100) * 6) + $media_consumo;
$reducao7 = (($media_consumo / 100) * 7) + $media_consumo;
$reducao8 = (($media_consumo / 100) * 8) + $media_consumo;
$reducao9 = (($media_consumo / 100) * 9) + $media_consumo;
$reducao10 = (($media_consumo / 100) * 10) + $media_consumo;
$reducao11 = (($media_consumo / 100) * 11) + $media_consumo;
$reducao12 = (($media_consumo / 100) * 12) + $media_consumo;

$reducao_1 = number_format($reducao1, 2, '.', '');
$reducao_2 = number_format($reducao2, 2, '.', '');
$reducao_3 = number_format($reducao3, 2, '.', '');
$reducao_4 = number_format($reducao4, 2, '.', '');
$reducao_5 = number_format($reducao5, 2, '.', '');
$reducao_6 = number_format($reducao6, 2, '.', '');
$reducao_7 = number_format($reducao7, 2, '.', '');
$reducao_8 = number_format($reducao8, 2, '.', '');
$reducao_9 = number_format($reducao9, 2, '.', '');
$reducao_10 = number_format($reducao10, 2, '.', '');
$reducao_11 = number_format($reducao11, 2, '.', '');
$reducao_12 = number_format($reducao12, 2, '.', '');

	
$qtd_litro_mes1 = $qtd_km_mes / $reducao_1;
$qtd_litro_mes2 = $qtd_km_mes / $reducao_2;
$qtd_litro_mes3 = $qtd_km_mes / $reducao_3;
$qtd_litro_mes4 = $qtd_km_mes / $reducao_4;
$qtd_litro_mes5 = $qtd_km_mes / $reducao_5;
$qtd_litro_mes6 = $qtd_km_mes / $reducao_6;
$qtd_litro_mes7 = $qtd_km_mes / $reducao_7;
$qtd_litro_mes8 = $qtd_km_mes / $reducao_8;
$qtd_litro_mes9 = $qtd_km_mes / $reducao_9;
$qtd_litro_mes10 = $qtd_km_mes / $reducao_10;
$qtd_litro_mes11 = $qtd_km_mes / $reducao_11;
$qtd_litro_mes12 = $qtd_km_mes / $reducao_12;

$valor_dinheiro1 = $qtd_litro_mes1 * $preco_combustivel;
$valor_dinheiro2 = $qtd_litro_mes2 * $preco_combustivel;
$valor_dinheiro3 = $qtd_litro_mes3 * $preco_combustivel;
$valor_dinheiro4 = $qtd_litro_mes4 * $preco_combustivel;
$valor_dinheiro5 = $qtd_litro_mes5 * $preco_combustivel;
$valor_dinheiro6 = $qtd_litro_mes6 * $preco_combustivel;
$valor_dinheiro7 = $qtd_litro_mes7 * $preco_combustivel;
$valor_dinheiro8 = $qtd_litro_mes8 * $preco_combustivel;
$valor_dinheiro9 = $qtd_litro_mes9 * $preco_combustivel;
$valor_dinheiro10 = $qtd_litro_mes10 * $preco_combustivel;
$valor_dinheiro11 = $qtd_litro_mes11 * $preco_combustivel;
$valor_dinheiro12 = $qtd_litro_mes12 * $preco_combustivel;

$diferenca_dinheiro1 = $gasto_mes - $valor_dinheiro1;
$diferenca_dinheiro2 = $gasto_mes - $valor_dinheiro2;
$diferenca_dinheiro3 = $gasto_mes - $valor_dinheiro3;
$diferenca_dinheiro4 = $gasto_mes - $valor_dinheiro4;
$diferenca_dinheiro5 = $gasto_mes - $valor_dinheiro5;
$diferenca_dinheiro6 = $gasto_mes - $valor_dinheiro6;
$diferenca_dinheiro7 = $gasto_mes - $valor_dinheiro7;
$diferenca_dinheiro8 = $gasto_mes - $valor_dinheiro8;
$diferenca_dinheiro9 = $gasto_mes - $valor_dinheiro9;
$diferenca_dinheiro10 = $gasto_mes - $valor_dinheiro10;
$diferenca_dinheiro11 = $gasto_mes - $valor_dinheiro11;
$diferenca_dinheiro12 = $gasto_mes - $valor_dinheiro12;

?>
<html>
    <head>
	<title>Real Pneus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/index.css" rel="stylesheet" type="text/css" />
	<link href="css/tabela_desempenhobandaeco.css" rel="stylesheet" type="text/css" />
	<link href="css/botoes.css" rel="stylesheet" type="text/css" />
	<link href="css/ocultar_mostrar.css" rel="stylesheet" type="text/css" />
	<link href='imagens/miniatura.php.fw.png' rel='icon' type='image/x-icon'/>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jquery.priceformat.js"></script>
	<script type="text/javascript" src="jquery/form.js"></script>
	<script type="text/javascript" src="jquery/ocultar_mostrar.js"></script>
    </head>
    <body>
	<div id="container">
	    <div id="cabecalho"> 
		<div id="informacoes"></div>
		<div id="logoeco"> </div>
	    </div>
	    <div>
		<br><br>
		<center>
		    <div id="titulo">Desempenho com a Banda Eco.</div>
		    <br> 
		    <table cellpadding="0" cellspacing="1" id="sombra">
			<tr id="tr_cabecalho">
			    <td>Economia da banda Eco</td>
			    <td>Media do caminhão</td>
			    <td id="td_dinheiro_cabecalho">Economia por mês</td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 1%." id="bt_um" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_1, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$  <?php echo number_format($diferenca_dinheiro1, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="um">
			    <td colspan="3">
				<table>
				    <tr  id="th_titulo">
					<th ></th><th id="th_titulo">Sem Banda Eco</th><th id="th_titulo">Com Banda Eco</th>
				    </tr>
				    <tr id="td_corpo2" >
					<td >Quantidade Km rodado em um mês:</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr  id="td_corpo2" >
					<td >Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho"><?php echo number_format($reducao_1, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2" >
					<td >Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2" >
					<td >Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes1, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2" >
					<td >Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$  <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$  <?php echo number_format($valor_dinheiro1, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr >
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2" >
					<td> Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes1), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2" >
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho" >R$   <?php echo number_format($diferenca_dinheiro1, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2" >
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro1 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>	
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 2%." id="bt_dois" class="botaoQueEscondeOuMostra" /></Center></td>
			<td id="td_corpo"><?php echo number_format($reducao_2, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$  <?php echo number_format($diferenca_dinheiro2, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="dois">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th ></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td  id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td  id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td  id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td  id="tamanho"><?php echo number_format($reducao_2, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td  id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', '') ?> </td>
					<td  id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', '') ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td  id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td  id="tamanho"><?php echo number_format($qtd_litro_mes2, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td  id="tamanho">R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td  id="tamanho">R$   <?php echo number_format($valor_dinheiro2, 2, ',', '.'); ?></td>
				    </tr>
				</table>

				<table >
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você  economiza em combustível:</td>
					<td  id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes2), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td  id="tamanho">R$   <?php echo number_format($diferenca_dinheiro2, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td  id="td_dinheiro" >R$   <?php echo number_format(($diferenca_dinheiro2 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 3%." id="bt_tres" class="botaoQueEscondeOuMostra" /></center></td>
		    <td id="td_corpo"><?php echo number_format($reducao_3, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$  <?php echo number_format($diferenca_dinheiro3, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="tres">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td  id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho"><?php echo number_format($reducao_3, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes3, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td> Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$  <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$  <?php echo number_format($valor_dinheiro3, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td  id="td_maior">Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho" ><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes3), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Com a banda Eco você economiza:</td>
					<td id="tamanho" >R$   <?php echo number_format($diferenca_dinheiro3, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td  id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro3 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>	
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 4%." id="bt_quatro" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_4, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro4, 2, ',', '.'); ?></td>
			</tr> 
			<tr class="hidden" id="quatro">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th  id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Quantidade Km rodado em um mês:</td>
					<td  id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Media que seu caminhão faz:</td>
					<td id="tamanho" ><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho" ><?php echo number_format($reducao_4, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Preço do combustível:</td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes4, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Quantidade de dinhero que você gasta:</td>
					<td id="tamanho" >R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($valor_dinheiro4, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho" ><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes4), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Com a banda Eco você economiza:</td>
					<td id="tamanho" >R$   <?php echo number_format($diferenca_dinheiro4, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro" >R$   <?php echo number_format(($diferenca_dinheiro4 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 5%." id="bt_cinco" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_5, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro5, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="cinco">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th  id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Media que seu caminhão faz:</td>
					<td id="tamanho" ><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho" ><?php echo number_format($reducao_5, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes5, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$   <?php echo number_format($valor_dinheiro5, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table >
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td >Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes5), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td >Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro5, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro5 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 6%." id="bt_seis" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_6, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro6, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="seis">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho"><?php echo number_format($reducao_6, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes6, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$   <?php echo number_format($valor_dinheiro6, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table >
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes6), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro6, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro6 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 7%." id="bt_sete" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_7, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro7, 2, ',', '.'); ?></td>
			</tr>
			<tr class="hidden" id="sete">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th  id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho" ><?php echo number_format($reducao_7, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td >Preço do combustível:</td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td >Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes7, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_maior">Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($valor_dinheiro7, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho" ><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes7), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho" >R$   <?php echo number_format($diferenca_dinheiro7, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro7 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 8%." id="bt_oito" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_8, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro8, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="oito">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho"><?php echo number_format($reducao_8, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes8, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$<?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$   <?php echo number_format($valor_dinheiro8, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table >
				    <tr>
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes8), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro8, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro8 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>

			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 9%." id="bt_nove" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_9, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro9, 2, ',', '.'); ?></td>
			</tr>
			<tr class="hidden" id="nove" >
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho" ><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho" ><?php echo number_format($reducao_9, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho" ><?php echo number_format($qtd_litro_mes9, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho" >R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho" >R$   <?php echo number_format($valor_dinheiro9, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table >
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes9), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro9, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro9 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 10%." id="bt_dez" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_10, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro10, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="dez">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho"><?php echo number_format($reducao_10, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes10, 2, ',', '.'); ?>    L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$   <?php echo number_format($valor_dinheiro10, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes10), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro10, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro10 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 11%." id="bt_onze" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_11, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro11, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="onze">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho"><?php echo number_format($reducao_11, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes11, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho">R$   <?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho">R$   <?php echo number_format($valor_dinheiro11, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes11), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro11, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro11 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
			<tr>
			    <td id="td_corpo"><center><input type="button" value="Economia de 12%." id="bt_doze" class="botaoQueEscondeOuMostra" /></center></td>
			<td id="td_corpo"><?php echo number_format($reducao_12, 2, ',', ''); ?> Km/l</td>
			<td id="td_dinheiro_corpo">R$   <?php echo number_format($diferenca_dinheiro12, 2, ',', '.'); ?> </td>
			</tr>
			<tr class="hidden" id="doze">
			    <td colspan="3">
				<table>
				    <tr id="th_titulo">
					<th id="tamanho"></th><th id="th_titulo">Sem Banda Eco</th></th><th id="th_titulo">Com Banda Eco</th>			   
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade Km rodado em um mês:</td>
					<td id="tamanho" ><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
					<td id="tamanho"><?php echo number_format($qtd_km_mes, 0, ',', '.'); ?>   Km</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Media que seu caminhão faz:</td>
					<td id="tamanho"><?php echo number_format($media_consumo, 2, ',', ''); ?>   Km/l</td>
					<td id="tamanho" ><?php echo number_format($reducao_12, 2, ',', ''); ?>   Km/l</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Preço do combustível:</td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
					<td id="tamanho">R$   <?php echo number_format($preco_combustivel, 2, ',', ''); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de litros que seu caminhão gasta:</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes, 2, ',', '.'); ?>   L</td>
					<td id="tamanho"><?php echo number_format($qtd_litro_mes12, 2, ',', '.'); ?>   L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Quantidade de dinhero que você gasta:</td>
					<td id="tamanho" >R$<?php echo number_format($gasto_mes, 2, ',', '.'); ?></td>
					<td id="tamanho" >R$<?php echo number_format($valor_dinheiro12, 2, ',', '.'); ?></td>
				    </tr>
				</table>
				<table>
				    <tr id="td_corpo2">
					<th colspan="2" id="th_titulo">Economia</th>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza em combustível:</td>
					<td id="tamanho"><?php echo number_format(($qtd_litro_mes - $qtd_litro_mes12), 2, ',', '.'); ?>  L</td>
				    </tr>
				    <tr id="td_corpo2">
					<td>Com a banda Eco você economiza:</td>
					<td id="tamanho">R$   <?php echo number_format($diferenca_dinheiro12, 2, ',', '.'); ?></td>
				    </tr>
				    <tr id="td_corpo2">
					<td id="td_dinheiro">Em um ano você economiza:</td>
					<td id="td_dinheiro">R$   <?php echo number_format(($diferenca_dinheiro12 * 12), 2, ',', '.'); ?></td>
				    </tr>
				</table>
			    </td>
			</tr>
		    </table> &nbsp;
		    <input type="button" value="Voltar" id="botao_voltar" onclick="location.href = 'sair.php'">
		</center>

	    </div>
	    <br><br>
	</div>
    </body>
</html>