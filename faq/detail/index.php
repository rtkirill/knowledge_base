<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

    <article>
        <aside>
            <div class="aside__wrapper">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "kb_mini",
                    Array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N"
                    )
                ); ?>

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
        </aside>
        <section class="index_faq index_faq_marginTop">
            <div class="wrapper_mobile">
                <div class="mobile_search">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "kb_mini",
                        Array(
                            "PAGE" => "#SITE_DIR#search/index.php",
                            "USE_SUGGEST" => "N"
                        )
                    ); ?>
                </div>
                <div class="wrapper_mobile_menu">
                    <div class="mobile_menu_detail_button">
                        <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element"
                             style="opacity: 1; mix-blend-mode: normal; fill: rgb(39, 140, 217); width: 26px; height: 26px;">
                            <g>
                                <path xmlns:default="http://www.w3.org/2000/svg"
                                      d="M4 10.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm0-6c-.83 0-1.5.67-1.5 1.5S3.17 7.5 4 7.5 5.5 6.83 5.5 6 4.83 4.5 4 4.5zm0 12.17c-.74 0-1.33.6-1.33 1.33s.6 1.33 1.33 1.33 1.33-.6 1.33-1.33-.59-1.33-1.33-1.33zM7 19h14v-2H7v2zm0-6h14v-2H7v2zm0-8v2h14V5H7z"
                                      style="fill: rgb(39, 140, 217);"></path>
                            </g>
                        </svg>
                        <span>Contents</span>
                    </div>
                    <div class="mobile_menu_detail">
                        <span class="close_menu_btn">
                            <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24"
                                 class="ng-element interactive"
                                 style="opacity: 1; mix-blend-mode: normal; fill: rgb(39, 140, 217); width: 20px; height: 20px;">
                                <g>
                                    <path xmlns:default="http://www.w3.org/2000/svg"
                                          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                                          style="fill: rgb(39, 140, 217);"></path>
                                </g>
                            </svg>
                        </span>

                        <nav id="spy_menu2">
                            <ul class="right_aside_list_js">
                                <!--Get elements-->
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

            <?
            $APPLICATION->SetTitle("FAQ"); ?><? $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "kb",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "NAME",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_CODE" => $_REQUEST["CODE"],
                    "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "IBLOCK_ID" => "105",
                    "IBLOCK_TYPE" => "faq",
                    "IBLOCK_URL" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Страница",
                    "PROPERTY_CODE" => array(
                        0 => "ISSUE",
                        1 => "RELATED_ARTICLES",
                        2 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_CANONICAL_URL" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_SHARE" => "N",
                    "COMPONENT_TEMPLATE" => "kb"
                ),
                false
            ); ?>
            <div class="faq-rew">
                <? $APPLICATION->IncludeComponent(
                    "sitebuild:faq_rew_feedback",
                    "kb",
                    array(
                        "COMPONENT_TEMPLATE" => "kb",
                        "EMAIL_TO" => "e.balyabin@trbonet.com",
                        "EVENT_MESSAGE_ID" => array(
                            0 => "169",
                        ),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array(
                            0 => "NONE",
                        ),
                        "USE_CAPTCHA" => "Y"
                    ),
                    false
                ); ?>
            </div>
        </section>
        <aside class="aside_right_responsive">
            <div class="aside__wrapper">
                <ul class="right_aside">
                    <li>
                        <span class="title">In this article</span>
                        <nav id="spy_menu">
                            <ul class="right_aside_list_js">
                                <!--Get elements-->
                            </ul>
                        </nav>

                    </li>
                </ul>
            </div>
        </aside>
    </article>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>