<?php

include('sql.php');
//乱数生成
function intCodeRandom($length = 8)
{
  $intMin = (10 ** $length) / 10;
  $intMax = (10 ** $length) - 1;
  $codeRandom = mt_rand($intMin, $intMax);

  return $codeRandom;
}

$result = "";

// 予約ボタンが押された場合の処理
if (isset($_POST['submit'])) {
     
    //乱数生成
    $reserveId = intCodeRandom(16);

    
    $email = $_POST['email'];
    $nameKanji = $_POST['name1Kanji'] .  $_POST['name2Kanji'];
    $nameKana = $_POST['name1Kana'] .  $_POST['name2Kana'];
    $postcode = $_POST['postcode'];
    $states = $_POST['todouhuken'];
    $address = $_POST['full-address'];
    $phoneNum = $_POST['phone'];
    $checkIn = $_POST['checkIn'];
    $numStay = $_POST['numStay'];
    $numPeople = $_POST['numPeople'];
    $comments = $_POST['comments'];

    //予約情報の挿入
    $userQuery = $con->query("INSERT INTO reserveinfomation 
    (reserveId,email,nameKanji,nameKana,postcode,state,address,phonenumber,date,numStay,numpeople,comments) 
    VALUES ('$reserveId','$email','$nameKanji','$nameKana','$postcode','$states','$address','$phoneNum', '$checkIn','$numStay','$numPeople','$comments')");

    die("予約が完了しました。\nお客様の予約番号は $reserveId です");
    //予約照合ページ、部屋の種類、プランの追加

}

?>