<?php

//phpinfo();
//return;

require_once "tools/curl.php";

use tools\curl;
//10808
//$url = "https://graph.facebook.com/v15.0/FROM_PHONE_NUMBER_ID/messages";
$url = "https://graph.facebook.com/facebook/picture?redirect=false";
//$data = '{
//          "messaging_product": "whatsapp",
//          "recipient_type": "individual",
//          "to": "PHONE_NUMBER",
//          "type": "interactive",
//          "interactive": {
//              "type": "address_message",
//              "body": {
//                   "text": "Thanks for your order! Tell us what address you’d like this order delivered to."
//              },
//              "action": {
//                   "name": "address_message",
//                   "parameters": {
//                      "country" :"COUNTRY_ISO_CODE"
//                   }
//              }
//          }
//    }';
$header = array(['Authorization: Bearer ACCESS_TOKEN']);

$curl = new Curl();

//$resp = $curl -> CurlPost($url,$data,$header,false);
//$curl -> CurlGet($url,$header);

//if($resp === false) {
//    echo 'Curl error: ';
//} else {
//    echo 'Response: ' . $resp;
//}


