<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$uri = 'https://verblygiipoyas.leadvertex.ru/api/webmaster/addOrder.html?webmasterID=30&token=%26%2Aygh%25R%24HRTG67fr%24GY%25%256f';
    
    $order = [
        'fio' => $_REQUEST['name'],
        'phone' => $_REQUEST['phone'],
        'country' => 'RU', 
		'ip' => (!empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null),
        'sub1' => 're_send', 
    ];
	
	$headers = [
	"Host" => $uri,
    "User-Agent" => (!empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null),
    "Accept" => (!empty($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null),
    "Accept-Language" => (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : null),
    "Keep-Alive" => '15',
    "Connection" => "keep-alive",
    "Referer" => (!empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null),
];

$curl = curl_init();

curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_URL, $uri);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $order);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$return= curl_exec($curl); 
curl_close($curl); 
}
    header('Location:http://kupi-vip3.site/php/success.html');  // ссылка на страницу успешного заказа  
    exit;
?>