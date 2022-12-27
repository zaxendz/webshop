<?php
session_start();


$yagmai= '
[+]━【💻طلبية جديدة】━[+]

[👤 الاسم] = '.$_POST['fullname'].'
[🗺 العنوان] = '.$_POST['bill_add1'].'
[📮 الولاية] = '.$_POST['bill_state'].'
[☎ رقم الهاتف] = '.$_POST['bill_phonee'].'
';

$botToken='5842387689:AAGaGhnJNOqk-yVG2IT4k6gvvbkarWpW4Vs'; // Your bot ID:TOKEN 
$chatId='5768342344';  // Your Telegram ID 
  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$yagmai,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);    
  $_SESSION['yagmai'] = $yagmai;                                                                  #
#===================================================================================================

echo"<script>location.replace('../product/product.php');</script>";


?>
