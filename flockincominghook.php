<?php
function flock_group_post($string) {
  $url = 'https://api.flock.co/hooks/sendMessage/a7b81287-deab-473e-9f8e-29f915b41290';
  $options = array(
        'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => "{\"text\": \"".$string."\"}",
    )
  );

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
}
