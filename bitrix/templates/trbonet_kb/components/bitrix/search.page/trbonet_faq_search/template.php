<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
//echo '<pre>';
//print_r($arResult);
//echo '</pre>';
?>

<div class="search-page">
    <? if (!empty($arResult['REQUEST']['QUERY'])): ?>
        <div class="search_list__query oversized">Search results for “<span class="search_result__match"><?= $arResult['REQUEST']['QUERY'] ?></span>”</div>
    <? else: ?>
        <div class="search_list__query oversized">Search results</div>
    <? endif ?>
    <form action="" method="get" class="tn_form tn_form--search">
        <input type="hidden" name="tags" value="<?echo $arResult["REQUEST"]["TAGS"]?>" />
        <input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" placeholder="Search" id="search1">
        <label for="search1" class="js-clear"></label>
        <input type="submit" value="Search" name="" class="tn_button tn_button--thik">
        <input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
    </form>
    <br>
    <?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
    <?elseif($arResult["ERROR_CODE"]!=0):?>
	<p><?=GetMessage("SEARCH_ERROR")?></p>
	<?ShowError($arResult["ERROR_TEXT"]);?>
	<p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
	<p><?=GetMessage("SEARCH_SINTAX")?><br /><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
	<table class="">
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td>
                <td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
                <td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td>
                <td valign="top">and, &amp;, +</td>
                <td><?=GetMessage("SEARCH_AND_ALT")?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td>
                <td valign="top">or, |</td>
                <td><?=GetMessage("SEARCH_OR_ALT")?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td>
                <td valign="top">not, ~</td>
                <td><?=GetMessage("SEARCH_NOT_ALT")?></td>
            </tr>
            <tr>
                <td align="center" valign="top">( )</td>
                <td valign="top">&nbsp;</td>
                <td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
            </tr>
	</table>
    <?elseif(count($arResult["SEARCH"])>0):?>
        <div class="search_list__items">
            <?foreach($arResult["SEARCH"] as $arKey => $arItem):?>
                <a href="<?echo $arItem["URL"]?>" class="search_result">
                    <div class="search_result__pos"><?= ($arKey + 1) ?>.</div>
                    <div class="search_result__content">
                        <div class="search_result__title"><?echo $arItem["TITLE_FORMATED"]?></div>
                        <div class="search_result__excerpt"><?echo $arItem["BODY_FORMATED"]?></div>
                    </div>
		</a>
            <?endforeach;?>
        </div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
        <? /* <div class="tn_pagination">
		<a href="#" class="nav">Previous</a>
		<span class="selected">1</span>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
		<a href="#">6</a>
		<a href="#">7</a>
		<a href="#">8</a>
		<a href="#">9</a>
		<a href="#" class="nav">Next</a>
	</div> */ ?>
    <?else:?>
	<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
    <?endif;?>
</div>