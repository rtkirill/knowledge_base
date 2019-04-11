<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>

<? CModule::IncludeModule("iblock"); ?>
<? $productNames = CIBlockElement::GetList(
    array('sort' => 'ASC'),
    array('IBLOCK_ID' => 2, 'ACTIVE_DATE' => 'Y', 'ACTIVE' => 'Y'),
    false, false,
    array('ID', 'IBLOCK_ID', 'NAME')
);
$productArr = array();
while ($item = $productNames->GetNextElement()) {
    $item = $item->GetFields();
    $productArr[] = $item['NAME'];
} ?>
<? $email = COption::GetOptionString("main", "email_from") ?>
<? $countries = GetCountryArray() ?>
<?
//Require version field for [1]-[6] product index
if ($_POST["verIsReq"] == "Y") {
    $_SESSION["verIsReq"] = "VERSION";
} elseif ($_POST["verIsReq"] == "N") {
    $_SESSION["verIsReq"] = "";
} elseif ($_POST["eventClick"]) {
    $_SESSION["verIsReq"] = "VERSION";
}
?>
<? $APPLICATION->IncludeComponent(
    "informunity:feedbackajax",
    "trbonet_support",
    array(
        "AJAX_FORM" => 'support_popup',
        "COMPONENT_TEMPLATE" => "trbonet_support_popup",
        "USE_CAPTCHA" => "Y",
        "OK_TEXT" => "Thanks! We have received your message and will respond to it soon",
        "USE_IU_PAT" => "N",
        "USE_IU_IB" => "N",
        "USE_ATTACH" => "N",
        "EMAIL_TO" => array(
            0 => $email,
            1 => "",
        ),
        "FIELD_FOR_THEME" => "iu_none",
        "EM_THEME" => "#SITE#: Форма \"Get Support\"",
        "AFTER_TEXT" => "",
        "USE_EMAIL_USER" => "N",
        "REQUIRED_FIELDS" => array(
            0 => "FIRST_NAME",
            1 => "LAST_NAME",
            2 => "COMPANY",
            3 => "EMAIL",
            4 => "COUNTRY",
            5 => $_SESSION["verIsReq"],
        ),
        "TEXTAREA_FIELDS" => array(
            0 => "MESSAGE",
        ),
        "SELECT_VALUES" => array(
            'COUNTRY' => $countries['reference'],
            'PRODUCT' => $productArr,
        ),
        "FIELD_FOR_NAME" => "FIRST_NAME",
        "FIELD_FOR_EMAIL" => "EMAIL",
        "EVENT_TYPE_ID" => "TRBONET_SUPPORT",
        "EVENT_MESSAGE_ID" => "74"
    ),
    false,
    array("HIDE_ICONS" => "Y")
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php"); ?>