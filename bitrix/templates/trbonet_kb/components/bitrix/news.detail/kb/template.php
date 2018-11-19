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
<div class="news-detail">
    <? if ($arResult["NAME"]): ?>
        <div class="tn_form__title">
            <h1><?= $arResult["NAME"] ?></h1>
        </div>
    <? endif; ?>
    <? if (!empty($arResult["DISPLAY_PROPERTIES"]["ISSUE"]["VALUE"])): ?>
        <ul class="faq-issue">
            <? foreach ($arResult["DISPLAY_PROPERTIES"]["ISSUE"]["VALUE"] as $arProp): ?>
                <li><?= $arProp; ?></li>
            <? endforeach; ?>
        </ul>
    <? endif; ?>
    <ul class="faq-print">
        <li>
            <a href="#" id="faq-send-link-to-email">
                <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element"
                     style="opacity: 1; mix-blend-mode: normal; width: 16px; height: 16px; transform: rotate(0deg) translate(-357px, -413px) translate(357px, 413px) rotate(0deg);">
                <g>
                    <defs></defs>
                    <rect x="0.007" y="0.009" display="none" fill="#FFA400" width="24" height="24"></rect>
                    <rect id="_x3C_Slice_x3E__109_" x="0.007" y="0.009" display="none" fill="none" width="24"
                          height="24"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.829,2.818C18.721,0.939,15.961,0,12.55,0C8.864,0,5.851,1.21,3.511,3.631 C1.17,6.052,0,9.038,0,12.59c0,3.484,1.097,6.259,3.29,8.323c2.194,2.064,5.039,3.096,8.535,3.096c2.549,0,4.633-0.356,6.253-1.068 v-2.796c-1.772,0.839-3.724,1.259-5.855,1.259c-2.795,0-4.986-0.781-6.574-2.343c-1.587-1.561-2.38-3.698-2.38-6.412 c0-2.801,0.897-5.175,2.693-7.122c1.795-1.947,4.048-2.92,6.758-2.92c2.53,0,4.501,0.729,5.913,2.188 c1.412,1.459,2.118,3.33,2.118,5.614c0,1.669-0.246,3.021-0.739,4.055c-0.493,1.035-1.118,1.552-1.876,1.552 c-0.72,0-1.081-0.683-1.081-2.05c0-1.278,0.213-3.996,0.64-8.154h-3.198l-0.142,1.45h-0.057c-0.36-1.143-1.246-1.713-2.658-1.713 c-1.563,0-2.899,0.7-4.008,2.101c-1.109,1.4-1.663,3.219-1.663,5.453c0,1.728,0.4,3.079,1.201,4.056 c0.8,0.976,1.854,1.464,3.162,1.464c1.744,0,2.947-0.933,3.61-2.797h0.085c0.047,0.83,0.365,1.504,0.953,2.021 c0.587,0.518,1.35,0.776,2.288,0.776c1.904,0,3.501-0.764,4.79-2.291s1.933-3.556,1.933-6.083 C23.991,7.174,22.937,4.697,20.829,2.818z M13.317,14.566c-0.512,0.986-1.213,1.479-2.104,1.479c-0.578,0-1.049-0.261-1.414-0.783 c-0.365-0.521-0.547-1.251-0.547-2.188c0-1.317,0.268-2.477,0.803-3.477c0.535-1.001,1.229-1.501,2.082-1.501 c0.587,0,1.059,0.225,1.414,0.674c0.355,0.448,0.533,1.063,0.533,1.845C14.085,12.264,13.829,13.581,13.317,14.566z"
                          ></path>
                </g>
            </svg>
            Email
			</a>
        </li>
        <li>
            <a href="#" id="print">
                <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element"
                     style="opacity: 1; mix-blend-mode: normal; width: 18px; height: 18px; transform: rotate(0deg) translate(-446px, -412px) translate(446px, 412px) rotate(0deg);">
                    <g>
                        <path xmlns:default="http://www.w3.org/2000/svg"
                              d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"
                              ></path>
                    </g>
                </svg>
                Print
            </a>
        </li>
        <? if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/upload/pdf/" . $arResult["CODE"] . ".pdf")): ?>
            <li>
                <a href="<?= "/upload/pdf/" . $arResult["CODE"] . ".pdf" ?>" download>
                    <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element"
                         style="opacity: 1; mix-blend-mode: normal; width: 18px; height: 18px; transform: rotate(0deg) translate(-540px, -412px) translate(540px, 412px) rotate(0deg);">
                        <g>
                            <path xmlns:default="http://www.w3.org/2000/svg" id="file-pdf-o"
                                  d="M16,3.38c-0.23-0.22-0.5-0.39-0.79-0.5c-0.29-0.13-0.6-0.2-0.92-0.21H5c-0.55,0-1,0.45-1,1v16.66  c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v-12c-0.01-0.32-0.08-0.63-0.21-0.92c-0.11-0.29-0.28-0.56-0.5-0.79L16,3.38z M15.05,4.32  l3.26,3.26c0.11,0.13,0.19,0.27,0.23,0.43h-3.87V4.09c0.15,0.05,0.3,0.12,0.42,0.23H15.05z M18.66,20H5.34V4h8v4.34  c0,0.55,0.45,1,1,1h4.33V20l0,0H18.66z M13.31,13.83c-0.73-0.67-1.26-1.53-1.52-2.48c0.1-0.66,0.15-1.33,0.15-2V9  c0-0.03,0-0.05,0-0.08c0-0.03,0-0.05,0-0.08c0.08-0.24,0.05-0.5-0.09-0.71C11.76,8.04,11.64,7.99,11.51,8h-0.23  c-0.23,0.01-0.42,0.19-0.44,0.42c-0.1,0.44-0.12,0.89-0.07,1.33c0.05,0.56,0.16,1.12,0.32,1.66c-0.28,0.94-0.64,1.85-1.09,2.72  c-0.37,0.78-0.74,1.47-1.1,2.06l0,0c-0.03-0.08-0.12-0.12-0.19-0.09c-0.02,0.01-0.03,0.02-0.05,0.03c-0.51,0.25-0.97,0.59-1.37,1  c-0.28,0.28-0.48,0.62-0.58,1c-0.04,0.13-0.02,0.26,0.06,0.37l0.03-0.03l0.25,0.12c0.09,0.05,0.19,0.07,0.29,0.07  c0.62,0,1.46-0.91,2.52-2.73c1.32-0.44,2.69-0.73,4.08-0.86c0.43,0.23,0.88,0.41,1.35,0.55c0.39,0.13,0.79,0.2,1.2,0.21  c0.31,0.09,0.64-0.09,0.74-0.4l0,0l0,0l0,0c0.11-0.16,0.11-0.38,0-0.54c-0.5-0.44-1.18-0.63-1.84-0.51c-0.41,0-0.82,0.02-1.22,0.07  c-0.3-0.17-0.59-0.37-0.87-0.58l0,0L13.31,13.83z M7.83,17.33c0.27-0.32,0.58-0.61,0.91-0.87c-0.34,0.65-0.83,1.22-1.43,1.64  C7.45,17.82,7.62,17.56,7.83,17.33z M11.46,8.52L11.46,8.52c0.09,0.1,0.14,0.23,0.14,0.37v0.02c0,0.03,0,0.05,0,0.08  c-0.05,0.28-0.07,0.43-0.07,0.45L11.46,9.9c-0.1-0.45-0.1-0.92,0-1.37l0,0L11.46,8.52z M10.64,14.52c0.34-0.66,0.63-1.34,0.86-2.05  c0.31,0.69,0.76,1.32,1.32,1.83L13,14.46l0.14,0.1c-1.03,0.18-2.03,0.46-3,0.84L10.64,14.52z M16.9,15.22L16.9,15.22h-0.17  c-0.44,0-0.88-0.08-1.29-0.22c0.5-0.07,1.01,0.02,1.46,0.25l0,0L16.9,15.22z"
                                  ></path>
                        </g>
                    </svg>
                    Save as PDF
                </a>
            </li>
        <? endif; ?>
    </ul>
    <? if (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
        <div class="faq_detail_text"><? echo $arResult["DETAIL_TEXT"]; ?></div>
    <? else: ?>
        <div class="faq_detail_text"><? echo $arResult["PREVIEW_TEXT"]; ?></div>
    <? endif ?>
    <div class="related-articles">
        <? if (!empty($arResult["DISPLAY_PROPERTIES"]["RELATED_ARTICLES"]["DISPLAY_VALUE"])): ?>
            <div class="faq_subtitle">Related articles</div>
            <ul class="faq_related_list">
                <? foreach ($arResult["DISPLAY_PROPERTIES"]["RELATED_ARTICLES"]["DISPLAY_VALUE"] as $arProp): ?>
                    <li><?= $arProp; ?></li>
                <? endforeach; ?>
            </ul>
        <? endif; ?>
    </div>
</div>