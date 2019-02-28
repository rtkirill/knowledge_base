<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if (strlen($arResult["OK_MESSAGE"]) > 0) {
        ?>
        <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
    }
    ?>

    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
        <?= bitrix_sessid_post() ?>
        <?
        $elemCode = substr($APPLICATION->GetCurDir(), 5, -1);
        $arElem = CIBlockElement::GetList(array(), array("CODE" => $elemCode));
        if ($elem = $arElem->GetNext())
            $articleName = $elem["NAME"];
        ?>
        <div class="faq_rew_block">
            <span class="faq_rew_title">Helpful?</span>
            <span class="answer_radio">
                <input type="radio" name="faq_mark" id="faq_good" value="Да">
                <label for="faq_good">Yes</label>
                <input type="radio" name="faq_mark" id="faq_bad" value="Нет">
                <label for="faq_bad">No</label>
            </span>
        </div>
        <div class="faq_rew_field faq_rew_field__good">
            <div class="improved-text">
                <label for="faq_improved_text">We're glad this article helped.</label>
                <textarea type="text" name="MESSAGE" id="faq_improved_text" placeholder="Anything else you'd like us to know? (Optional)"
                          value="<?= $arResult["MESSAGE"] ?>"></textarea>
                <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                    <div class="g-recaptcha" data-size="normal" data-sitekey="<?= GoogleReCaptcha::getPublicKey() ?>"></div>
                <? endif; ?>
                <div class="faq-button-center">
                    <p>Please don't include any personal information in your comment.</p>
                    <input type="submit" name="submit" class="tn_button" value="Submit">
                </div>
                <input type="hidden" name="faq_article_link" value="<?= $APPLICATION->GetCurDir() ?>">
                <input type="hidden" name="faq_article_name" value="<?= $articleName ?>">
                <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                <script src='https://www.google.com/recaptcha/api.js'></script>
            </div>

        </div>
        <div class="faq_rew_field faq_rew_field__bad">
            <div class="improved-text">
                <label for="faq_improved_text">Thanks for letting us know.</label>
                <textarea type="text" name="MESSAGE" id="faq_improved_text" placeholder="How can we make this article more helpful? (Optional)"
                          value="<?= $arResult["MESSAGE"] ?>"></textarea>
                <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                    <div class="g-recaptcha" data-size="normal" data-sitekey="<?= GoogleReCaptcha::getPublicKey() ?>"></div>
                <? endif; ?>
                <div class="faq-button-center">
                    <p>Please don't include any personal information in your comment.</p>
                    <input type="submit" name="submit" class="tn_button" value="Submit">
                </div>
                <input type="hidden" name="faq_article_link" value="<?= $APPLICATION->GetCurDir() ?>">
                <input type="hidden" name="faq_article_name" value="<?= $articleName ?>">
                <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                <script src='https://www.google.com/recaptcha/api.js'></script>
            </div>

        </div>
    </form>
</div>