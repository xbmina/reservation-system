<?php

$con = new mysqli("localhost","root","","test");
$con->set_charset("utf8");
if ($con->connect_errno) { die("データベースの接続に失敗しました。"); }


?>