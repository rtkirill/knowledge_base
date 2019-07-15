<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Search");
?>

    <article>
        <section class="index_faq">
            <div class="search_list l-constrained l-flow">
                <? $APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"trbonet_faq_search", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "0",
		"COLOR_OLD" => "C8C8C8",
		"COLOR_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => "trbonet_faq_search",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "10",
		"PATH_TO_USER_PROFILE" => "",
		"PERIOD_NEW_TAGS" => "",
		"RESTART" => "Y",
		"SHOW_CHAIN" => "Y",
		"SHOW_RATING" => "Y",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"TAGS_INHERIT" => "Y",
		"TAGS_PAGE_ELEMENTS" => "150",
		"TAGS_PERIOD" => "30",
		"TAGS_SORT" => "NAME",
		"TAGS_URL_SEARCH" => "/search/",
		"USE_LANGUAGE_GUESS" => "N",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"WIDTH" => "100%",
		"arrFILTER" => array(
			0 => "iblock_faq",
		),
		"arrFILTER_iblock_catalog" => array(
			0 => "2",
		),
		"arrFILTER_iblock_faq" => array(
			0 => "105",
		),
		"arrFILTER_iblock_markets" => array(
			0 => "3",
		),
		"arrFILTER_iblock_news" => array(
			0 => "1",
		),
		"arrFILTER_iblock_solutions" => array(
			0 => "7",
		),
		"arrFILTER_main" => "",
		"arrWHERE" => ""
	),
	false
); ?>
            </div>
        </section>
    </article>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>