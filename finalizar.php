<?php
$url = 'https://ws.pagseguro.uol.com.br/v2/checkout';

$data['email'] = 'contato@digitallymade.com.br';
$data['token'] = '682725DB22F9477FA50071BC63C79883';
$data['currency'] = 'BRL';

// itens do pedido

session_start();
include("conexao.php");

$i = 1;
foreach ($_SESSION['carrinho'] as $cod_produto => $dados){

	$produto = mysql_query("SELECT * FROM produtos WHERE cod_produto = {$cod_produto};");
	$produto = mysql_fetch_array($produto);
	
	$data['itemId'.$i] = $cod_produto;
	$data['itemDescription'.$i] = $produto['nome'];
	$data['itemAmount'.$i] = $produto['preco'];
	$data['itemQuantity'.$i] = $dados['qnt'];
	$data['itemWeight'.$i] = '500';
	
	$i++;

}

// dados do pedido
$data['reference'] = 'REF1234';

// dados do cliente
/*
$data['senderName'] = 'Jose Comprador';
$data['senderAreaCode'] = '11';
$data['senderPhone'] = '56273440';
$data['senderEmail'] = 'comprador@uol.com.br';
$data['shippingType'] = '1';
$data['shippingAddressStreet'] = 'Av. Brig. Faria Lima';
$data['shippingAddressNumber'] = '1384';
$data['shippingAddressComplement'] = '5o andar';
$data['shippingAddressDistrict'] = 'Jardim Paulistano';
$data['shippingAddressPostalCode'] = '01452002';
$data['shippingAddressCity'] = 'Sao Paulo';
$data['shippingAddressState'] = 'SP';
$data['shippingAddressCountry'] = 'BRA';
*/
$data['redirectURL'] = 'http://www.sounoob.com.br/paginaDeAgracedimento';

//print_r($data); die();

$data = http_build_query($data);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$xml= curl_exec($curl);
echo $xml;

if($xml == 'Unauthorized'){
//Insira seu código de prevenção a erros

header('Location: erro.php?tipo=autenticacao');
exit;//Mantenha essa linha
}
curl_close($curl);

$xml= simplexml_load_string($xml);
if(count($xml -> error) > 0){

	echo $xml;
	
exit;
}
header('Location: https://pagseguro.uol.com.br/v2/checkout/payment.html?code=' . $xml -> code);