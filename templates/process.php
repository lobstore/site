<?php
$data = array(
	'name' => 'snipp.ru'
	'text' => 'Отправка сообщения',
);

$ch = curl_init('https://webhook.site/1fe31abe-45fa-43d6-b811-f9299d3de118');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$res = curl_exec($ch);
curl_close($ch);
// print_r($_REQUEST);
/*$json = '{...}';

// Удаление управляющих символов
for ($i = 0; $i <= 31; ++$i) {
	$json = str_replace(chr($i), '', $json);
}

// Удаление символа Delete
$json = str_replace(chr(127), '', $json);

// Удаление BOM
if (0 === strpos(bin2hex($json), 'efbbbf')) {
   $json = substr($json, 3);
}

$res = json_decode($json, true);
print_r($res);*/
?>