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
        <!--<div class="faq_rew_field faq_rew_field__good">
            <div class="improved-text">
                <label for="faq_improved_text">We're glad this article helped.</label>
                <textarea type="text" name="MESSAGE" id="faq_improved_text" placeholder="Anything else you'd like us to know? (Optional)"
                          value="<? /*= $arResult["MESSAGE"] */ ?>"></textarea>
                <? /* if ($arParams["USE_CAPTCHA"] == "Y"): */ ?>
                    <div class="g-recaptcha" data-size="normal" data-sitekey="<? /*= GoogleReCaptcha::getPublicKey() */ ?>"></div>
                <? /* endif; */ ?>
                <div class="faq-button-center">
                    <p>Please don't include any personal information in your comment.</p>
                    <input type="submit" name="submit" class="tn_button" value="Submit">
                </div>
                <input type="hidden" name="faq_article_link" value="<? /*= $APPLICATION->GetCurDir() */ ?>">
                <input type="hidden" name="faq_article_name" value="<? /*= $articleName */ ?>">
                <input type="hidden" name="PARAMS_HASH" value="<? /*= $arResult["PARAMS_HASH"] */ ?>">
                <script src='https://www.google.com/recaptcha/api.js'></script>
            </div>

        </div>-->

        <div class="faq_rew_field faq_rew_field__good">
            <div class="improved-text faq_rew_field__good-text">
                We're glad this article helped.
            </div>
        </div>

        <div class="faq_rew_field faq_rew_field__bad">
            <div class="improved-text">
                <p class="faq_rew_field__bad-text">Thanks for letting us know. What went wrong?</p>

                <div class="faq_rew_field__group">
                    <input type="radio" id="problem_1" name="faq_problem"
                           value="The steps in the article did not resolve my problem">
                    <label for="problem_1">The steps in the article did not resolve my problem</label>
                </div>
                <div class="faq_rew_field__group">
                    <input type="radio" id="problem_2" name="faq_problem"
                           value="This article did not address what I was searching for">
                    <label for="problem_2">This article did not address what I was searching for</label>
                </div>
                <div class="faq_rew_field__group">
                    <input type="radio" id="problem_3" name="faq_problem"
                           value="The wording used in this article made it confusing">
                    <label for="problem_3">The wording used in this article made it confusing</label>
                </div>
                <div class="faq_rew_field__group">
                    <input type="radio" id="problem_4" name="faq_problem" value="Other">
                    <label for="problem_4">Other</label>
                </div>

                <div class="faq_rew_field__textarea">
                <textarea name="MESSAGE" id="faq_improved_text"
                          placeholder="How can we make this article more helpful? (Optional)"
                          value="<?= $arResult["MESSAGE"] ?>"></textarea>
                    <label for="faq_improved_text">Please don't include any personal information in your
                        comment.</label>
                </div>

                <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                    <div class="g-recaptcha" data-size="normal"
                         data-sitekey="<?= GoogleReCaptcha::getPublicKey() ?>"></div>
                <? endif; ?>
                <div class="faq-button-center">
                    <!--                    <p>Please don't include any personal information in your comment.</p>-->
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