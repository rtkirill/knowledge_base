<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>

    <title><? $APPLICATION->ShowTitle() ?></title>

    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/default.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/components.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/layouts.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/plugins.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/template_styles.css");

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/printThis/printThis.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/highlight.pack.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/util.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
    ?>

</head>

<body>

<? $APPLICATION->ShowPanel() ?>

<div class="main">
    <header>
        <a class="mobile_menu_button">
            <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element"
                 style="opacity: 1; mix-blend-mode: normal; fill: rgb(255, 255, 255); width: 32px; height: 32px;">
                <g>
                    <path xmlns:default="http://www.w3.org/2000/svg" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"
                          style="fill: rgb(255, 255, 255);"></path>
                </g>
            </svg>
        </a>
		<a href="/kb/" class="logo">
            <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 1181.4 256" class="ng-element"
                 style="opacity: 1; mix-blend-mode: normal; overflow: visible; width: 148px; height: 32px;">
                <style type="text/css">
                    .Arched_x0020_Green {
                        fill: url(#SVGID_1__1536919947847);
                        stroke: #FFFFFF;
                        stroke-width: 0.25;
                        stroke-miterlimit: 1;
                    }

                    .st0_1536919947847 {
                        fill: #006FB9;
                    }
                </style>
                <linearGradient y2="979.6742" x2="-129.6586" y1="980.3813" x1="-130.3657" gradientUnits="userSpaceOnUse"
                                id="SVGID_1__1536919947847" vector-effect="non-scaling-stroke"
                                style="fill: rgb(255, 255, 255);">
                    <stop style="stop-color: rgb(32, 172, 75); fill: rgb(255, 255, 255);" offset="0"
                          vector-effect="non-scaling-stroke"></stop>
                    <stop style="stop-color: rgb(25, 54, 26); fill: rgb(255, 255, 255);" offset="0.9831"
                          vector-effect="non-scaling-stroke"></stop>
                </linearGradient>
                <g>
                    <g>
                        <g>
                            <path d="M72.8,59.3H25L36.5,4.8h158.9l-11.5,54.5h-47.7L95.9,251.1H32.5L72.8,59.3z"
                                  class="st0_1536919947847" vector-effect="non-scaling-stroke"
                                  style="fill: rgb(255, 255, 255);"></path>
                            <path d="M209.7,4.8h99.2c48.4,0,61,27.6,53,65.5c-6.9,32.8-24,54.2-53.9,58.6l-0.2,0.7c30.1,2.8,35.2,22.4,28.3,55.2
				l-4.4,21c-2.7,12.8-6.2,29.3-4.1,34.2c1.1,2.8,1.9,5.5,5.6,7.6l-0.7,3.4H265c-3.4-13.1,1.5-36.6,3.7-46.9l3.5-16.5
				c5.9-28,1.9-35.2-13.4-35.2H242l-20.7,98.7h-63.4L209.7,4.8z M251.2,109h12.6c18.1,0,29.1-11.7,32.8-29.3
				c4.2-20-1.8-28.6-20.9-28.6h-12.3L251.2,109z" class="st0_1536919947847"
                                  vector-effect="non-scaling-stroke" style="fill: rgb(255, 255, 255);"></path>
                            <path d="M407.4,4.8h95.8c45.3,0,61.3,24.5,53.6,61.4c-5.5,26.2-21.7,49.7-49.8,55.2l-0.2,0.7
				c31.4,3.1,38.5,30.7,33.2,56.2c-9,42.8-35.7,72.8-88.6,72.8h-95.8L407.4,4.8z M428.8,204.9h17.7c11.6,0,24.7-10.3,28.9-30.4
				c4-19-4.7-29.7-16.3-29.7h-17.7L428.8,204.9z M450.5,101.4h15.3c12.9,0,22.6-11.7,25.3-24.8c2.9-13.8-1.8-25.5-14.8-25.5h-15.3
				L450.5,101.4z" class="st0_1536919947847" vector-effect="non-scaling-stroke"
                                  style="fill: rgb(255, 255, 255);"></path>
                            <path d="M681.8,0c64.8,0,79.4,35.9,60,128c-19.3,92.1-49,128-113.8,128c-64.8,0-79.4-35.9-60-128
				C587.3,35.9,617,0,681.8,0z M637.1,212.5c19.4,0,25.2-17.9,39.2-84.5c14-66.6,15.7-84.5-3.7-84.5c-19.4,0-25.3,17.9-39.2,84.5
				C619.4,194.6,617.7,212.5,637.1,212.5z" class="st0_1536919947847" vector-effect="non-scaling-stroke"
                                  style="fill: rgb(255, 255, 255);"></path>
                            <path d="M881,251.1h-40.3l19.8-94.1c2.4-11.4,5.8-30.6-19.8-30.6c-17.8,0-34.3,12.2-39.2,35.8l-18.7,88.9h-40.3
				l32.6-155h38.6l-4.8,22.7h0.6c7.5-9.3,22.6-26.8,51.7-26.8c29.9,0,49.5,17.8,42.4,51.9L881,251.1z"
                                  class="st0_1536919947847" vector-effect="non-scaling-stroke"
                                  style="fill: rgb(255, 255, 255);"></path>
                            <path d="M1059.6,205.7c-18.5,37.3-51.6,49.5-77.8,49.5c-43.2,0-71.9-21-58.5-84.8c3.9-18.7,22.8-78.4,89.9-78.4
				c30.2,0,68.9,14.6,54,85.4l-1.5,7.3H960.6c-1.3,11.6-4.5,37.9,28,37.9c11.2,0,24-5.8,29.5-16.9H1059.6z M1029.8,158.2
				c3-25.1-11.3-32.6-24.2-32.6c-19,0-31.6,12.2-38.2,32.6H1029.8z" class="st0_1536919947847"
                                  vector-effect="non-scaling-stroke" style="fill: rgb(255, 255, 255);"></path>
                            <path d="M1156.3,96.1h25l-6.1,29.1h-25l-17.7,84.2c-1.9,9-2.3,12.5,14.1,12.5c2.6,0,5.5-0.3,8.5-0.6l-6.5,30.9
				c-6.4,0.3-12.8,0.6-19.1,0.6h-5.2c-34.8,0-38.4-13.4-34.1-33.5l19.8-94.1h-20.7l6.1-29.1h20.7l8.8-42h40.3L1156.3,96.1z"
                                  class="st0_1536919947847" vector-effect="non-scaling-stroke"
                                  style="fill: rgb(255, 255, 255);"></path>
                        </g>
                    </g>
                </g>
            </svg>

            <div class="kb_title"><p>Knowledge Base</p></div>
        </a>
    </header>

    <div class="mobile_menu">
        <div class="aside__wrapper">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "left_main_section",
                array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "faq",
                    "IBLOCK_ID" => "105",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "COMPONENT_TEMPLATE" => "left_main_section",
                    "STRICT_SECTION_CHECK" => "N",
                    "FILE_404" => ""
                ),
                false
            ); ?>
        </div>
        <div class="tech_doc">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_TEMPLATE" => "standard.php",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/includes/tech_doc.php"
                ),
                false
            ); ?>
        </div>
    </div>