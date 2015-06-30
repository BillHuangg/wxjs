<?php
	header("Access-Control-Allow-Origin: *");

	//appid: wx1c92a5a2b3b608e9
	//appsecret: 1ee6a2fb1283409fabcc7b94d6b9e534


	require_once "jssdk.php";
  	$jssdk = new JSSDK("wx1c92a5a2b3b608e9", "1ee6a2fb1283409fabcc7b94d6b9e534");
  	$signPackage = $jssdk->GetSignPackage();

	$resultArray = array();

	$resultArray["url"] = $signPackage["url"];
	$resultArray["jsapiTicket"] = $signPackage["jsapiTicket"];
	$resultArray["appId"] = $signPackage["appId"];
	$resultArray["timestamp"] = $signPackage["timestamp"];
    $resultArray["nonceStr"] = $signPackage["nonceStr"];
    $resultArray["signature"] = $signPackage["signature"];

    echo json_encode($resultArray);
?>