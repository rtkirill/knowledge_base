<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? foreach ($arResult["SECTION"] as $arSec): ?>
    <ul class="left_aside">
        <li class="left_aside__sec-title_js">
            <span class="left_aside__sec-title"><?=$arSec["NAME"]?></span>
            <ul class="left_aside_inner">
                <? foreach ($arSec["ELEMENTS"] as $arElem): ?>
                    <li><a href="<?=$arElem["DETAIL_PAGE_URL"]?>"><?=$arElem["NAME"]?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
    </ul>
<? endforeach; ?>