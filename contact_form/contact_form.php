<?php

require 'function.php';

$fields = array('name' => '姓名', 'email' => 'Email地址', 'subject' => '主旨', 'message' => '訊息內容'); // array variable name => Text to appear in the email. If you added or deleted a field in the contact form, edit this array.
$okMessage = '表單已成功提交。將盡快回覆您，感謝！';
$errorMessage = '提交表單時出錯。請稍後再試';

// let's do the sending

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
    //your site secret key
    $secret = '6Ld03eMgAAAAAKubsoIIvi8b5UtResAyApOY8Q3C';
    //get verify response data

    $c = curl_init('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $verifyResponse = curl_exec($c);

    $responseData = json_decode($verifyResponse);
    if($responseData->success):

        try
        {
            $emailText = '';

            foreach ($_POST as $key => $value) {

                if (isset($fields[$key])) {
                    $emailText .= nl2br("$fields[$key]: $value\n");
                }
            }

            sendEmail($_POST['email'],$emailText);
            // sleep(5);
            $responseArray = array('type' => 'success', 'message' => $okMessage);
        }
        catch (\Exception $e)
        {
            $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        }

        $encoded = json_encode($responseArray);

        header('Content-Type: application/json');

        echo $encoded;


    else:
        $errorMessage = '機器人驗證失敗，請重試。';
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
    endif;
else:
    $errorMessage = '請點擊 reCAPTCHA 機器人驗證';
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    $encoded = json_encode($responseArray);

            header('Content-Type: application/json');

            echo $encoded;
endif;

