<?php

$bitly_api_key = 'R_012a06f8fb594ce09576acfc5dec70e2';
$bitly_login = 'taolano';   
function bitly($url,$login,$appkey,$format='txt') {
  $connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
  return curl_get_result($connectURL);
}
function curl_get_result($url) {
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
{
$parametre = $_GET['text'];
 if  ( $ret = parse_url($parametre) ) {

      if ( !isset($ret["scheme"]) )
       {
       $parametre = "http://{$parametre}";
       }
}
$carac=substr($parametre,0,4);
if($carac == "http"){
  $bitly_login = 'taolano';
$bitly_apiKey = 'R_012a06f8fb594ce09576acfc5dec70e2';
$url_raccourcie = bitly($parametre,$bitly_login,$bitly_api_key);
echo "Bot raccourcisseur d'url copyright Taolano :joy: \n";
echo "URL Raccourcie :" , $url_raccourcie ;
echo "Le code de la commande <https://github.com/Taolanoz/Slack-URLs-Bot/blob/master/URLsBot.php| est ici !>";
} else {
$url2_raccourcie = bitly($parametre,$bitly_login,$bitly_api_key);
echo "Bot raccourcisseur d'url copyright Taolano :joy: \n";
echo "URL Raccourcie :" , $url_raccourcie  ;
echo "Le code de la commande <https://github.com/Taolanoz/Slack-URLs-Bot/blob/master/URLsBot.php| est ici !>";
if($parametre == ""){
echo "Bot raccourcisseur d'url copyright Taolano (ou pas) :joy: \n";
echo "Entrez le lien pour *raccourcir* a la suite de /url ! \n" ;
if($url_raccourcie == "INVALID_URI"){
echo "Bot raccourcisseur d'url copyright Taolano :joy: \n";
echo "Mauvaise URL" ;
echo "Le code de la commande <https://github.com/Taolanoz/Slack-URLs-Bot/blob/master/URLsBot.php| est ici !>";
}
} 
}
}
