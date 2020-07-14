<?php
// headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");
//Recupera os dados enviados pelo formulário
$ReqPOST = filter_input_array(INPUT_POST,FILTER_DEFAULT);


//Variaveis locais
$json['error'] = true;
//$Nome = $ReqPOST['dados'][0]['value'];
//$Email = $ReqPOST['dados'][1]['value'];
 
$destinatario   = 'douglasmatos.encomendas@gmail.com';
$email          = $ReqPOST['dados'][1]['value'];
$remetente      =  'From: '.$email. "\n";
$name           = $ReqPOST['dados'][0]['value'];

$telefone       = $ReqPOST['dados'][2]['value'];
$subject        = $ReqPOST['dados'][3]['value'];
$message       = $ReqPOST['dados'][4]['value'];
$corpo          = "
  
Nome:        ".$name."
Email:       ".$email."
Assunto:     ".$subject."
Telefone:    ".$telefone."
Mensagem:    ".$message."";
$Bool           = mail($destinatario, $subject, $corpo, $remetente);

/*
//Enviando o e-mail
$Para             = 'devdms.contato@gmail.com';
$Titulo_email     = 'Novo contato';
$Mensagem         = 'E-mail enviado';
$headers          = 'From: '.$Email. "\n";
$Bool             = mail($Para, $Titulo_email, $Mensagem, $headers);
*/
//Verificação
if($Bool) {
    $json['error'] = false;
}

echo json_encode($json);