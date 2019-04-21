<?php
if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/include/define.php"))
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/include/define.php");

AddEventHandler("main", "OnBeforeUserRegister", array("trbonetUserRegister", "OnBeforeUserRegisterHandler"));

class trbonetUserRegister
{
    public function OnBeforeUserRegisterHandler(&$arFields)
    {
        if (!in_array($arFields['LOGIN'], array('admin', 'manager'))) {
            $arFields["LOGIN"] = $arFields["EMAIL"];
        }
    }
}

AddEventHandler("main", "OnBeforeUserUpdate", array("trbonetUserUpdate", "OnBeforeUserUpdateHandler"));

class trbonetUserUpdate
{
    public function OnBeforeUserUpdateHandler(&$arFields)
    {
        if (!in_array($arFields['LOGIN'], array('admin', 'manager'))) {
            //        	$arFields["LOGIN"] = $arFields["EMAIL"];
        }
    }
}

AddEventHandler("main", "OnBeforeEventSend", array("trbonetBeforeEventSend", "OnBeforeEventSendHandler"));

class trbonetBeforeEventSend
{
    public function OnBeforeEventSendHandler(&$arFields, &$arTemplate)
    {
        if (CModule::IncludeModule("iblock")) {
            $res = CIBlockElement::GetList(Array(), Array("IBLOCK_ID" => "22", "ACTIVE" => "Y", "=NAME" => $arFields['INTEREST'], "=PROPERTY_EVENT" => $arTemplate["EVENT_NAME"]), false, false, Array("NAME", "PROPERTY_EVENT", "PROPERTY_EMAIL"));
            if ($ar_fields = $res->Fetch()) {
                if ($ar_fields["PROPERTY_EMAIL_VALUE"])
                    $arTemplate['EMAIL_TO'] = $ar_fields["PROPERTY_EMAIL_VALUE"];
            }
        }
        /*
    if ($arTemplate["EVENT_NAME"] == "TRBONET_CONTACTS")
    {
        if ($arFields['INTEREST'] == 'Product Information')
        {
            $arTemplate['EMAIL_TO'] = 'info@trbonet.com';
        }
        if ($arFields['INTEREST'] == 'Technical Support')
        {
            $arTemplate['EMAIL_TO'] = 'support@trbonet.com';
        }
    }
*/

        $handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/.trbonetBeforeEventSend.txt", "a+");
        fputs($handle, var_export($arFields, true));
        fputs($handle, var_export($arTemplate, true));
    }
}

//use Bitrix\Main\Web\HttpClient;
class GoogleReCaptcha
{
    public static function getPublicKey()
    {
        return "6Le6UUUUAAAAAFTvUPTeX5n_sfW2VDoC0Af_77pZ";
    }

    public static function getSecretKey()
    {
        return "6Le6UUUUAAAAAN_7HFdRKloy3KjNefwv0sRFJVVp";
    }

    public static function checkClientResponse()
    {
        $context = \Bitrix\Main\Application::getInstance()->getContext();
        $request = $context->getRequest();
        $captchaResponse = $request->getPost("g-recaptcha-response");
        if ($captchaResponse) {
            $url = ' https://www.google.com/recaptcha/api/siteverify ';
            $data = array('secret' => static::getSecretKey(), 'response' => $captchaResponse);
            $httpClient = new HttpClient();
            $response = $httpClient->post($url, $data);
            if ($response)
                $response = \Bitrix\Main\Web\Json::decode($response, true);
            if (!$response['success']) {
                return $response['error-codes'];
            }
            return array();
        }
        return array("no captcha response");
    }
}

/*Create PDF from iblock element*/
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "IBlockAfterSave");
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "IBlockAfterSave");
AddEventHandler("iblock", "OnBeforeIBlockElementDelete", "IBlockBeforeDel");
function IBlockAfterSave($arFields)
{
    if (!CModule::IncludeModule("iblock"))
        return;

    if ($arFields["IBLOCK_ID"] == IBLOCK_ID_FAQ) {
        require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/MPDF60/mpdf.php");
        $HTML = "
		<div class=\"post-pdf\">
			<h1>$arFields[NAME]</h1>
			<div class=\"post-pdf-text\">$arFields[DETAIL_TEXT]</div>
		</div>";

        if (mb_detect_encoding($HTML, 'cp1251', true))
            $HTML = iconv('cp1251', 'utf-8', $HTML);

        $PDF_NAME = $arFields['CODE'] . ".pdf";
        $BE_DIR = $_SERVER["DOCUMENT_ROOT"] . "/" . COption::GetOptionString("main", "upload_dir") . "/pdf/";
        $mpdf = new mPDF('c');

        $stylesheet_content = file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/bitrix/templates/trbonet_kb/styles.css');

        $mpdf->WriteHTML($stylesheet_content, 1);
        $mpdf->WriteHTML($HTML, 2);
        ob_clean();
        $mpdf->Output($BE_DIR . $PDF_NAME, "F");
    }

}

function IBlockBeforeDel($ID)
{
    if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/" . COption::GetOptionString("main", "upload_dir") . "/pdf/" . $ID . ".PDF"))
        unlink($_SERVER["DOCUMENT_ROOT"] . "/" . COption::GetOptionString("main", "upload_dir") . "/pdf/" . $ID . ".PDF");
}

/*END Create PDF from iblock element*/

//Search index
AddEventHandler("search", "BeforeIndex", "BeforeIndexHandler");
function BeforeIndexHandler($arFields)
{
    if (!CModule::IncludeModule("iblock")) // подключаем модуль
        return $arFields;

    if ($arFields["MODULE_ID"] == "iblock" && $arFields["PARAM2"] == 105 && intval($arFields["ITEM_ID"]) > 0) {
        //исключаем вывод детального описания
        $arFields["BODY"] = '';
        //добавляем поиск по сво-ву ISSUE и ARTICLE_KEYWORDS
        $arSelect = Array("IBLOCK_ID", "ID", "TAGS", "PROPERTY_ISSUE");
        $arFilter = Array("IBLOCK_ID" => $arFields["PARAM2"], "ID" => $arFields["ITEM_ID"]);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
        if ($ob = $res->GetNext()) {
            //формируем поисковой индекс
//            $arFields["TITLE"] .= " (" . $ob["PROPERTY_ISSUE_VALUE"] . ")";
            $arFields["BODY"] = $ob["PROPERTY_ISSUE_VALUE"] . "(" . $ob["TAGS"] . ")";
        }
    }
    return $arFields;
}