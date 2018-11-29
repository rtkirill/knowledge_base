<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
$arFilter = array(
    "IBLOCK_ID" => IBLOCK_ID_FAQ,
);
$rsSect = CIBlockSection::GetList(array(), $arFilter);
while ($arSect = $rsSect->GetNext()) {
    $arResult["SECTION"][] = $arSect;
}
foreach ($arResult["SECTION"] as &$sec) {
    foreach ($arResult["ITEMS"] as $elem) {
        if ($elem["IBLOCK_SECTION_ID"] == $sec["ID"]) {
            $sec["ELEMENTS"][] = $elem;
        }
    }
}
?>