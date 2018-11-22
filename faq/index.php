<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("TRBOnet Knowledge Base");
?>
    <article>
        <!--left main section-->
        <aside>
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

        <section class="index_faq">
            <h1 class="oversized"><? $APPLICATION->ShowTitle(false); ?></h1>
            <? $APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "kb",
                Array(
                    "PAGE" => "#SITE_DIR#search/index.php",
                    "USE_SUGGEST" => "N"
                )
            ); ?>
            <div class="desc_faq">
                <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 64 65.5" class="ng-element"
                     style="opacity: 1; mix-blend-mode: normal; overflow: visible; width: 84px; height: 85px;">
                    <style type="text/css">
                        .st0_1537378854447 {
                            fill: #FFCA8A;
                        }

                        .st1_1537378854447 {
                            fill: #9C9EA0;
                        }

                        .st2_1537378854447 {
                            fill: #227BBF;
                        }
                    </style>
                    <circle r="13.3" cy="23" cx="35.4" class="st0_1537378854447"
                            vector-effect="non-scaling-stroke"></circle>
                    <path d="M25.6,36.1l0.1,0.1l0.8,1.3c-1.4,0.8-1.9,2.6-1.1,4.1c0.1,0.2,0.2,0.4,0.4,0.5c-1.1,1.2-1,3.1,0.2,4.2
	c0.6,0.5,1.3,0.8,2,0.8h8c1.6,0,3-1.3,3-3c0-0.7-0.3-1.5-0.8-2c1.1-1.2,1-3.1-0.2-4.2c-0.2-0.1-0.3-0.3-0.5-0.4l0.8-1.3l0.1-0.1
	c5.3-2.1,8.7-7.3,8.6-12.9C47,15.3,40.3,9,32,9s-15,6.3-15,14.1C16.9,28.8,20.3,33.9,25.6,36.1z M36,45h-8c-0.6,0-1-0.4-1-1
	s0.4-1,1-1h8c0.6,0,1,0.4,1,1S36.6,45,36,45z M36,41h-8c-0.6,0-1-0.4-1-1s0.4-1,1-1h8c0.6,0,1,0.4,1,1S36.6,41,36,41z M32,11
	c7.2,0,13,5.4,13,12.1c0.1,4.9-2.9,9.3-7.4,11.1c0,0-0.1,0-0.1,0l-0.4,0.2c-0.2,0.1-0.3,0.2-0.4,0.4L35.4,37H35v-7.6l4.7-4.7
	l-1.4-1.4l-5,5C33.1,28.5,33,28.7,33,29v8h-2v-8c0-0.3-0.1-0.5-0.3-0.7l-5-5l-1.4,1.4l4.7,4.7V37h-0.4l-1.3-2.1
	c-0.1-0.2-0.2-0.3-0.4-0.4l-0.4-0.2c0,0-0.1,0-0.1,0c-4.5-1.8-7.5-6.2-7.4-11.1C19,16.4,24.8,11,32,11z"
                          class="st1_1537378854447" vector-effect="non-scaling-stroke"></path>
                    <rect height="6.7" width="2" class="st1_1537378854447"
                          transform="matrix(0.4472 -0.8944 0.8944 0.4472 -2.5469 18.8789)" y="8.1" x="13"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="2" width="6.7" class="st1_1537378854447"
                          transform="matrix(0.9486 -0.3164 0.3164 0.9486 -1.0793 16.3521)" y="10.5" x="46.5"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="2" width="6" class="st1_1537378854447" y="22" x="7"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="2" width="6" class="st1_1537378854447" y="22" x="51"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="2" width="6.7" class="st1_1537378854447"
                          transform="matrix(0.8944 -0.4472 0.4472 0.8944 -14.8451 10.1144)" y="35.5" x="10.6"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="6.7" width="2" class="st1_1537378854447"
                          transform="matrix(0.4472 -0.8944 0.8944 0.4472 -5.007 64.8983)" y="33.1" x="49"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="5" width="2" class="st1_1537378854447" y="2" x="31"
                          vector-effect="non-scaling-stroke"></rect>
                    <path d="M28,56H3v2h58v-2H36c0.1-3.3,10.3-7,25-7v-2c-13,0-26.9,3.2-27,9h-4c-0.1-5.8-14-9-27-9v2
	C17.6,49,27.9,52.7,28,56z" class="st2_1537378854447" vector-effect="non-scaling-stroke"></path>
                    <rect height="19" width="2" class="st2_1537378854447"
                          transform="matrix(5.256255e-02 -0.9986 0.9986 5.256255e-02 -41.5834 63.1711)" y="44"
                          x="11.5"
                          vector-effect="non-scaling-stroke"></rect>
                    <rect height="2" width="19" class="st2_1537378854447"
                          transform="matrix(0.9986 -5.273683e-02 5.273683e-02 0.9986 -2.7497 2.7904)" y="52.5"
                          x="42"
                          vector-effect="non-scaling-stroke"></rect>
                </svg>
                <p>
                    Welcome to the TRBOnet Knowledge Base.<br><br>
                    Here you can find the answers to frequently asked questions, information about workarounds,
                    known
                    issues
                    and
                    their solutions.<br><br>
                    Use the search bar above or choose a product category from the dropdown menu on the left.
                </p>
            </div>

            <div class="feedbackForm_faq">
                <p class="couldnt_find_answer">Couldn’t find the answer?</p>
                <p class="contact_us">Contact us</p>
                <?
                if (CModule::IncludeModule("iblock")) {

                    $productNames = CIBlockElement::GetList(
                        array('sort' => 'ASC'),
                        array('IBLOCK_ID' => 2, 'ACTIVE_DATE' => 'Y', 'ACTIVE' => 'Y'),
                        false, false,
                        array('ID', 'IBLOCK_ID', 'NAME')
                    );
                    $productArr = array();
                    while ($item = $productNames->GetNextElement()) {
                        $item = $item->GetFields();
                        $productArr[] = $item['NAME'];
                    } ?>
                    <? $email = COption::GetOptionString("main", "email_from") ?>
                    <? $countries = GetCountryArray() ?>

                    <? $APPLICATION->IncludeComponent(
                        "informunity:feedbackajax",
                        "trbonet_support",
                        Array(
                            "AFTER_TEXT" => "",
                            "AJAX_FORM" => "support_popup",
                            "COMPONENT_TEMPLATE" => "trbonet_support",
                            "EMAIL_TO" => array(0 => $email, 1 => "",),
                            "EM_THEME" => "#SITE#: Форма \"Support\"",
                            "EVENT_MESSAGE_ID" => "74",
                            "EVENT_TYPE_ID" => "TRBONET_SUPPORT",
                            "FIELD_FOR_EMAIL" => "EMAIL",
                            "FIELD_FOR_NAME" => "FIRST_NAME",
                            "FIELD_FOR_THEME" => "iu_none",
                            "OK_TEXT" => "Thank you. We have received your message and will respond shortly",
                            "REQUIRED_FIELDS" => array(0 => "FIRST_NAME", 1 => "LAST_NAME", 2 => "COMPANY", 3 => "EMAIL", 4 => "COUNTRY", 5 => "",),
                            "SELECT_VALUES" => array('COUNTRY' => $countries['reference'], 'PRODUCT' => $productArr,),
                            "TEXTAREA_FIELDS" => array(0 => "MESSAGE",),
                            "USE_ATTACH" => "N",
                            "USE_CAPTCHA" => "Y",
                            "USE_EMAIL_USER" => "N",
                            "USE_IU_IB" => "N",
                            "USE_IU_PAT" => "N"
                        ),
                        false,
                        Array(
                            'HIDE_ICONS' => 'N'
                        )
                    );

                }
                ?>
            </div>
        </section>

        <aside>
            <div class="aside__wrapper">
                <ul class="right_aside">
                    <li>
                        <span class="title">Top 10</span>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "right_section",
                            array(
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "AJAX_MODE" => "N",
                                "IBLOCK_TYPE" => "faq",
                                "IBLOCK_ID" => "105",
                                "NEWS_COUNT" => "10",
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
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => "",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "Y",
                                "SHOW_404" => "Y",
                                "MESSAGE_404" => "",
                                "PAGER_BASE_LINK" => "",
                                "PAGER_PARAMS_NAME" => "arrPager",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "COMPONENT_TEMPLATE" => "right_section",
                                "STRICT_SECTION_CHECK" => "N",
                                "FILE_404" => ""
                            ),
                            false
                        ); ?>
                    </li>

                    <li>
                        <span class="title">Last Edits</span>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "right_section",
                            array(
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "AJAX_MODE" => "N",
                                "IBLOCK_TYPE" => "faq",
                                "IBLOCK_ID" => "105",
                                "NEWS_COUNT" => "6",
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
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => "",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "Y",
                                "SHOW_404" => "Y",
                                "MESSAGE_404" => "",
                                "PAGER_BASE_LINK" => "",
                                "PAGER_PARAMS_NAME" => "arrPager",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "COMPONENT_TEMPLATE" => "right_section",
                                "STRICT_SECTION_CHECK" => "N",
                                "FILE_404" => ""
                            ),
                            false
                        ); ?>
                    </li>
                </ul>
            </div>
        </aside>
    </article>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>