<?ph
// Note: Replace 'api-eu' with 'api-us', if you are connecting to US cloud!
$url = 'https://api-eu.clusterpoint.com/v4/1081/todo';
$userPassword = 'username:password';
$ch = curl_init();
$query = 'SELECT * FROM todo';
curl_setopt($ch, CURLOPT_URL, $url . '/_query');
curl_setopt($ch, CURLOPT_USERPWD, $userPassword);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
$response = json_decode(curl_exec($ch));
$errorMsg = curl_error($ch);
if ($errorMsg) {
	var_dump($errorMsg);
}
curl_close($ch);

echo json_encode($response->results);

?>
