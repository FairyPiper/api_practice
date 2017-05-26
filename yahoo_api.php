<?php

echo "検索したい文言を入力してください!\n";
$search_word = trim(fgets(STDIN));

$url = "http://auctions.yahooapis.jp/AuctionWebService/V2/search?appid=dj0zaiZpPUJUUzRRd1NleEdKcSZzPWNvbnN1bWVyc2VjcmV0Jng9MTQ-&query=" . urlencode( $search_word );

$yahoo_xml = simplexml_load_string(@file_get_contents($url));
$json  = json_encode($yahoo_xml);
$array = json_decode($json, true);

if (isset($array['Result']['Item'])) {
    foreach($array["Result"]["Item"] as $items) {
        echo $items["Title"].PHP_EOL;
    }
} else {
    echo '検索結果が見つかりませんでした';
}