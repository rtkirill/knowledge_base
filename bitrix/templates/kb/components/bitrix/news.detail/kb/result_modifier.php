<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
//получение SEO тегов элемента и установка их, как keywords
$arSelect = Array("IBLOCK_ID", "ID", "TAGS");
$arFilter = Array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult["ID"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
if ($ob = $res->GetNext()) {
    $arResult["META_TAGS"]["KEYWORDS"] = $ob["TAGS"];
}
?>