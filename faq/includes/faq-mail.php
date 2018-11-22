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
CEvent::Send("SEND_KB_TO_USER", "s1", $arEventFields);