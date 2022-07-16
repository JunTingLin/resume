<?php
require './vendor/autoload.php';
require_once 'config.php';

use SendGrid\Mail\From;
use SendGrid\Mail\HtmlContent;
use SendGrid\Mail\Mail;
use SendGrid\Mail\PlainTextContent;
use SendGrid\Mail\Subject;
use SendGrid\Mail\To;

function sendEmail($senderEmail,$emailText)
{

    // 使用sendgrid API發送郵件
    $from = new From("support@junting.tech", "JunTing");
    $tos = [
        new To(
            $senderEmail,
            "Example User1",
            [
                '-emailBeginning-' => "表單已成功提交，您於<a href='https://junting.tech/resume/#contact'>網站</a>填寫的資訊如下，將會盡快回覆您，感謝"
            ],
            "俊霆科技-已收到表單"
        ),
        new To(
            "10355098@st.thsh.tp.edu.tw",
            "Example User2",
            [
                '-emailBeginning-' => "您有來自個人網站的新消息"
            ],
            "俊霆科技-來自網站表單消息"
        )
    ];
    $subject = new Subject("Hi -name-!"); // default subject
    $globalSubstitutions = [
        '-emailContent-' => $emailText
    ];
    $plainTextContent = new PlainTextContent(
        "Hello -name-, your github is -github- sent at -time-"
    );
    $htmlContent = new HtmlContent(
        "-emailBeginning- <hr> -emailContent-"
    );
    $email = new Mail(
        $from,
        $tos,
        $subject, // or array of subjects, these take precedence
        $plainTextContent,
        $htmlContent,
        $globalSubstitutions
    );
    $sendgrid = new \SendGrid(SENDGRID_API_KEY);
    $response = $sendgrid->send($email);

}
