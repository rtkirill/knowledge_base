<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
<?
    $elemCode = substr($APPLICATION->GetCurDir(),5,-1);
    $arElem = CIBlockElement::GetList(array(), array("CODE" => $elemCode));
    if($elem = $arElem->GetNext())
        $articleName = $elem["NAME"];
?>
    <div class="faq_subtitle">Give us your feedback</div>
	<div class="answer">
            <span class="answer_text">Was this article helpful?</span>
            <span class="answer_radio">
                <input type="radio" name="faq_mark" id="faq_good" value="Да" checked>
                <label for="faq_good">Yes</label>
                <input type="radio" name="faq_mark" id="faq_bad" value="Нет">
                <label for="faq_bad">No</label>
            </span>
        </div>
        <div class="improved-text">
        	<label for="faq_improved_text">Please tell us how this article could be improved.</label>
            <textarea type="text" name="MESSAGE" id="faq_improved_text" value="<?=$arResult["MESSAGE"]?>"></textarea>
        </div>
        <?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<div class="g-recaptcha" data-sitekey="<?=GoogleReCaptcha::getPublicKey()?>"></div>
		<?endif;?>
        <div class="faq-button-center">
        	<input type="submit" name="submit"  class="tn_button" value="Send Feedback">
        </div>
        <input type="hidden" name="faq_article_link" value="<?=$APPLICATION->GetCurDir()?>">
        <input type="hidden" name="faq_article_name" value="<?=$articleName?>">
        <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        <script src='https://www.google.com/recaptcha/api.js'></script>

</form>
</div>