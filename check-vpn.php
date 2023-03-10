<?php
function is_vpn_on() {
	$ip = $_SERVER['REMOTE_ADDR'];
	$api_key = 'your api key from ipapi.com';
	$url = "http://api.ipapi.com/{$ip}?access_key={$api_key}";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	$json = json_decode($result, true);
	if ($json['country_code'] != 'IR') {
		return true; // وی پی ان روشن است
	}
	return false; // وی پی ان خاموش است
}
?>