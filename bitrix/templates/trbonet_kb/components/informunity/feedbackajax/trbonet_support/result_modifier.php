<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
//Переместить элемент EMAIL в конец
$elEmail = $arParams["NEW_EXT_FIELDS"]["EMAIL"];
unset($arParams["NEW_EXT_FIELDS"]["EMAIL"]);
$arParams["NEW_EXT_FIELDS"]["EMAIL"] = $elEmail;
