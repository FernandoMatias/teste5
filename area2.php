<!DOCTYPE html>
<html>
    <head>
        <title>Real Pneus</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/tabela.css" rel="stylesheet" type="text/css" />
        <link href="css/botoes.css" rel="stylesheet" type="text/css" />
        <link href="css/ocultar_mostrar.css" rel="stylesheet" type="text/css" />
	<link href='imagens/miniatura.php.fw.png' rel='icon' type='image/x-icon'/>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jquery.priceformat.js"></script>
	<script type="text/javascript" src="jquery/form.js"></script>
	<script type="text/javascript" src="jquery/alertas.js"></script>
	<script type="text/javascript" src="jquery/ocultar_mostrar.js"></script>
	<script type="text/javascript" src="jquery/teclado.js"></script>
    </head>
    <body>
	<div id="container">
	    <div id="cabecalho">
		<div id="informacoes"></div>
		<div id="logoeco"></div>
	    </div>
	    <div id="corpo">
		<center>
		    <br>
		    <form method="post" action="index.php">
			<input type="hidden" name="validacao_formulario" value="2" />
			<input type="hidden" name="form[quantos_km_pormes]" value="<?php print formataValor($_POST['form']['quantos_km_pormes']); ?>" />
			<table>
			    <tr>
				<th colspan="2"><h2>Banda Eco</h2></th>     
			    </tr>
			    <tr>
				<td>Qual a media de consumo de seu caminhão?&nbsp;&nbsp;</td>
				<td><input type="text" name="form[qual_mediadeconsumo]" size="10" id="input_text" class="jsPrice" value="250" onfocus="this.value = '';"></td>
				<td><input type="button" id="bt_teclado" class="botaoQueEscondeOuMostra" /></td> 
			    </tr>
			    <tr class="hidden" id="teclado">
				<td></td>
				<td>
			    <center>
				<table id="tabela_area2">
				    <tr> 
					<td><input type="button" id="a1" value="1" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
					<td><input type="button" id="a2" value="2" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);"></td>
					<td><input type="button" id="a3" value="3" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
				    </tr>
				    <tr>
					<td><input type="button" id="a4" value="4" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
					<td><input type="button" id="a5" value="5" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
					<td><input type="button" id="a6" value="6" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td> 
				    </tr>
				    <tr>
					<td><input type="button" id="a7" value="7" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
					<td><input type="button" id="a8" value="8" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
					<td><input type="button" id="a9" value="9" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td> 
				    </tr>
				    <tr>
					<td><input type="button" id="a0" value="0" style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>
					<td><input type="button" id="ponto" value="." style="font-size:25px; width:50px; height:50px;" onClick="preenche(this.value);" ></td>

					    <!--<td><input type="reset" id="c" value="C" style="font-size:15px;"></td>--> 
				    </tr>
				</table>
			    </center>
			    </td>
			    </tr>
			    <tr>
				<td colspan="3"><center><input type="submit" name="enviar" value="Próximo" id="botao_resultado"></center></td>
			    </tr>

			</table>
		    </form>   
		    <div class="hidden" id="erros"><?php print $erros; ?></div>
		    <br>
		    <input type="button" value="Voltar" id="botao_voltar" onclick="location.href = 'sair.php'">
		</center>
	    </div>
	</div>
    </body>
</html>
