<?php
require 'function.php';
$okMessage = '表單已成功提交。將盡快回覆您，感謝！';
$emailText = '';


// sendEmail($emailText);
$responseArray = array('type' => 'success', 'message' => $okMessage);

$encoded = json_encode($responseArray);

header('Content-Type: application/json');

echo $encoded;