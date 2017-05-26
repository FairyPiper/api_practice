<?php

$url = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=f39803cbee279c92&middle_area=Y030&special=LU0004&free_drink=1&count=20&format=json';
$hotpepper_array = json_decode(@file_get_contents($url));

var_dump($hotpepper_array);
