<?php

  echo "検索したい文言を入力してください\n";
  $search_word = trim(fgets(STDIN));

  $url = "https://app.rakuten.co.jp/services/api/IchibaItem/Search/20140222?applicationId=1065176623807253149&keyword=$search_word";
  $rakuten_json = json_decode(@file_get_contents($url), true);

  var_dump($rakuten_json);