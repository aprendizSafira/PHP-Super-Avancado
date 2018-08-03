<?php
$json = file_get_contents("https://www.correiodoestado.com.br/climatempo/json/");/*Essa função vai pegar o texto que esta nesse endereço*/
	//Para transforma em JSON
	$json = json_decode($json);//agora a $json é um array

	//Adicionando mais uma cidade
	$obj = new StdClass();//criamos 1 objeto em branco
	/*"codigo":212,"cidade":"Campo Grande","uf":"MS","baixa":20,"alta":30,"ico":4,"frase":"Sol e aumento de nuvens de manh\u00e3. Pancadas de chuva \u00e0 tarde e \u00e0 noite.","data":"03\/08 Sex","dia_mes":"03\/08","dia_semana":"Sex","selecionada":1*/
	$obj->codigo = 123;
	$obj->cidade = "São Paulo";
	$obj->uf = "SP";
	$obj->baixa = "18";
	$obj->alta = "30";
	$obj->ico = 9;
	$obj->frase = "Garoa na parte da tarde";
	$obj->data = "02/08";
	$obj->dia_mes = "02/08";
	$obj->dia_semana = "Quin";
	$obj->selecionada = 1;

	//Adicionando ao JSON
	$json->previsao[] = $obj;

	//Manipulação do JSON
	echo "Quantidade de cidades: ".count($json->previsao)."<br/><br/>";

	foreach($json->previsao as $itens) {
		echo "Cidade: ".$itens->cidade." - Alta: ".$itens->alta." ºC  - Baixa: ".$itens->baixa." ºC - (".$itens->frase.")<br/><br/>";

	}

	//TRANSFORMA EM JSON
	echo "Daqui para baixo foi transformado em JSON!!<br/>";
	echo json_encode($json);

?>
