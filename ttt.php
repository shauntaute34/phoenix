<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	
	
	<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.niftyquoter.com/api/v1/proposals/1441637/contacts?key=kwCkBK-K3KNlPkTtlD12oA&email=tess@install-solar.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"contact\": {
    \"client_id\": 7977705
  }
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));

$response1 = curl_exec($ch1);
curl_close($ch1);

var_dump($response1);
	
	
	$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL, "https://api.niftyquoter.com/api/v1/proposals/1441637/send_email?key=kwCkBK-K3KNlPkTtlD12oA&email=tess@install-solar.com");
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);

curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "PUT");

$response1 = curl_exec($ch1);
curl_close($ch1);

var_dump($response1);
	
	
	?>
	
	
</head>

<body>
</body>
</html>