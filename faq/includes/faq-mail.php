<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$mess = $_POST["faq_name"];
$link = $_POST["faq_link"];
$email = $_POST['faq_email'];
$arEventFields = array(
    "MESSAGE" => $mess,
    "LINK" => $link,
    "EMAIL" => $email
);

if(CEvent::Send("SEND_KB_TO_USER", "s1", $arEventFields))
    $result = 1;
else
    $result = 0;

echo json_encode($result);