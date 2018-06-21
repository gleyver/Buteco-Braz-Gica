<?php

$json_file = file_get_contents("http://localhost/butecobraz/views/teste_json.php");
$json_str = json_decode($json_file, true);
$itens = $json_str['pais'];

foreach ( $itens as $e )
    { echo $e['id_agendamento_consulta']."<br>"; }
// $json_file = file_get_contents("teste_json.php");
// $json_str = json_decode($json_file);
// $itens = $json_str['brasil'];
//
// // foreach($json_str->pais as $registro):
// //     echo 'pais: ' . $registro->pais .'<br>';
// // endforeach;
//
// var_dump($itens);
// while (!empty($itens)) {
//   // code...
//   echo $itens;
// }

  ?>
