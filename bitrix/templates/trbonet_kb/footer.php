<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

</div>

<footer>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "AREA_FILE_RECURSIVE" => "Y",
            "EDIT_TEMPLATE" => "standard.php",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => "/includes/support_btn.php"
        ),
        false
    ); ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "AREA_FILE_RECURSIVE" => "Y",
            "EDIT_TEMPLATE" => "standard.php",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => "/includes/privacy_policy.php"
        ),
        false
    ); ?>
</footer>

</body>
</html>