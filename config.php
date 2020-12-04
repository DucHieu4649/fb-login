<?php
require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '', thông tin của công ty em thử việc nên xóa đi ạ
  'app_secret'     => '',
  'default_graph_version'  => 'v3.2'
]);

?>