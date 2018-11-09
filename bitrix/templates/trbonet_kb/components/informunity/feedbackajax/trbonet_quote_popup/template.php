<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?><div id="request_quote" class="tn_popup mfp-hide">
	<? if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && $_REQUEST['AJAX_FORM'] == 'quote_popup') $APPLICATION->RestartBuffer(); ?>
	<? $auto_focus = 0;
	$FL_req = 0; ?>
	<form method="POST" class="tn_form l-form" enctype="multipart/form-data">
		<?= bitrix_sessid_post() ?>
		<? $cp = 0; ?>
		<div class="tn_form__title l-center">
			<h2>Request a Quote</h2>
		</div>
		<div class="tn_form__message l-center">
			<?/*<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking The point of using Lorem Ipsum is that it has a more-or <a href="#">F.A.Q. link</a></p>*/?>
		</div>
		<? if (strlen($arResult["OK_MESSAGE"]) > 0): $auto_focus = 1; ?>
			<div class="tn_form__message l-center"><p><?=$arResult["OK_MESSAGE"]?></p></div>
		<? else: ?>
			<? if (!empty($arResult["ERROR_MESSAGE"])) {
				$errors = array();
				foreach ($arResult["ERROR_MESSAGE"] as $v) {
					if (preg_match("/(&laquo;(.*)&raquo;)/i", $v, $m)) {
						$errors[] = $m[2];
					} else {
						$errors['captcha'] = 'Captcha is not correct!';
					}
				}
				echo '<div class="tn_form__error l-center">Please fill out the form correctly</div>';
				if (!empty($errors['captcha'])) echo '<div class="tn_form__error l-center">'.$errors['captcha'].'</div>';
				$auto_focus = 1;
			} ?>
			<div class="l-form__left">
				<? $index = 0 ?>
				<? foreach ($arParams["NEW_EXT_FIELDS"] as $i => $field): ?>
					<? $field['error'] = ($errors && is_array($errors) && in_array($field[0], $errors)) ? ' error' : '' ?>
					<? if ($i == 'COUNTRY'): ?>
						<div class="tn_form__item tn_form__select">
							<label for="dealer_<?= $i ?>"><?= $field[0] ?><? if ($field[1]) : if ($FL_req == 0) $FL_req = 1; ?><span class="tn_form__required"><?= GetMessage("MFT_REQ") ?></span><? endif ?></label>
							<select name="custom[<?= $i ?>]" id="dealer_<?= $i ?>" class="<?= $field['error'] ?>">
								<option value="" disabled<? if (empty($arResult["custom_$i"])) echo ' selected' ?>>-- choose one --</option>
								<? foreach ($arParams['SELECT_VALUES'][$i] as $value): ?>
									<option value="<?= $value ?>"<?if ($value == $arResult["custom_$i"]): ?> selected<? endif ?>><?= $value ?></option>
								<? endforeach ?>
							</select>
						</div>
					<? elseif ($i == 'MESSAGE'): ?>
						<div class="tn_form__item tn_form__textarea--3">
							<label for="dealer_<?= $i ?>"><?= $field[0] ?><?if ($field[1]) : if ($FL_req == 0) $FL_req = 1; ?><span class="tn_form__required"><?=GetMessage("MFT_REQ")?></span><?endif?></label>
							<textarea name="custom[<?= $i ?>]" id="dealer_<?= $i ?>" class="<?= $field['error'] ?>"><?= $arResult["custom_$i"] ?></textarea>
						</div>
					<? else: ?>
						<div class="tn_form__item">
							<label for="dealer_<?= $i ?>"><?= $field[0] ?><? if ($field[1]) : if ($FL_req == 0) $FL_req = 1; ?><span class="tn_form__required"><?=GetMessage("MFT_REQ")?></span><? endif ?></label>
							<input class="<?= $field['error'] ?>" type="text" name="custom[<?= $i ?>]" value="<?= $arResult["custom_$i"] ?>" id="dealer_<?= $i ?>" <? if ($cp == 0 && $arResult["custom_$i"] == '' && $auto_focus): $cp = 1; ?>autofocus <? endif ?>>
						</div>
					<? endif?>
					<? if ($index == 3): ?>
						</div>
						<div class="l-form__right">
					<? endif ?>
					<? $index++ ?>
				<? endforeach ?>
				<? unset($index) ?>
			</div>

			<? if ($arParams["USE_CAPTCHA"] == "Y"): if ($FL_req == 0) $FL_req = 1; ?>
				<div class="l-form__left">
					<div class="tn_form__item tn_form__captcha">
						<div class="tn_form__item">
							<div class="g-recaptcha" data-sitekey="<?=GoogleReCaptcha::getPublicKey()?>"></div>
						</div>
					</div>
				</div>
			<? endif; ?>

			<div class="l-form__right">
				<div class="tn_form__item tn_form__submit l-right">
					<input type="submit" value="Send Request" name="submit" class="tn_button">
				</div>
			</div>
		<? endif ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	</form>
	<? if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && $_REQUEST['AJAX_FORM'] == 'quote_popup') {
			CEvent::CheckEvents();
			die();
	} ?>
</div>
<script>
	$(function() {
		var quoteForm_popup = new af_quote_popup({
			root: '#request_quote',
			form: '#request_quote form',
			ajaxLoader: '#ajax-loader img'
		});
		quoteForm_popup.init();
	});
</script>