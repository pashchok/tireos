1<?
define("AKB_PARAMS",true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "DELMEX – Интернет магазин аккумуляторов и аксессуаров для автомобилей");
$APPLICATION->SetPageProperty("description", "DELMEX – Интернет магазин аккумуляторов и аксессуаров для автомобилей");
$APPLICATION->SetTitle("Главная");
?>

<div class="slider-wrapper">
<!-- 	<div class="tooltip">
	    <div class="text-box">
		<h1>Ваш аккумулятор всегда здоров!</h1>
		Наши специалисты всегда помогут с выбором правильной батареи именно для вашего автомобиля.
		<div class="tooltip-batton"><a href="/site/static/moreinfo">Узнать подробности</a></div>
	    </div>
	</div> -->
	

	<div class="slider-contact-box">
        
<?=CIBlockElement::GetList(array(), array('ID' => ELEMENT_CALL_US))->GetNextElement()->fields['DETAIL_TEXT']?>

	</div>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "akb.slider",
    Array(
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "site_content",
        "IBLOCK_ID" => "3",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(),
        "PROPERTY_CODE" => array(),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "N",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N"
    )
);?>
    <div class="main-filter-wrapper">
        <?
            $APPLICATION->IncludeComponent(
                "shop:akb.filter",
                "",
                Array(
                    "FILTER_NAME" => "arrFilterAkb",
                    "FILTER_NAME_CHILD" => "arrFilterChild",
                    "FILTER_NAME_MAIN" => "arrFilter",
                    "TEMPLATE_THEME" => "blue",
                    "URL" => "/filter",
                )
        );
        ?>
    </div>
<? //<div class="clear"></div>?>
</div>

<div class="main-right">
            <? /*$APPLICATION->IncludeComponent(
                "kombox:filter",
                "right",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "IBLOCK_TYPE" => "1c_catalog",
                    "IBLOCK_ID" => array(1,6),
                    "FILTER_NAME" => "arrFilter",
                    "SECTION_ID" => "",
                    "SECTION_CODE" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "N",
                    "SAVE_IN_SESSION" => "N",
                    "INCLUDE_JQUERY" => "N",
                    "PAGE_URL" => "",
                    "MESSAGE_ALIGN" => "LEFT",
                    "MESSAGE_TIME" => "0",
                    "IS_SEF" => "N",
                    "CLOSED_PROPERTY_CODE" => array("", ""),
                    "CLOSED_OFFERS_PROPERTY_CODE" => array("", ""),
                    "SORT" => "N",
                    "FIELDS" => array(),
                    "PRICE_CODE" => array(
                        0 => "Основная цена продажи",
                        1 => "Опт"
                    ),
                    "CONVERT_CURRENCY" => "N",
                    "HIDE_NOT_AVAILABLE" => "N",
                    "XML_EXPORT" => "N",
                    "CURRENCY_ID" => "RUB",
                    "SHOW_PARAMS" => array(),
                    "MOVE_IMMEDIATE" => "Y"
                )
            );*/?>     
               	
        <div class="main-baner"></div>
        <div class="main-social">
            <div class="social-title"><div class="icon-delmix"></div>В социальных сетях:</div>
            <div class="social-button"><div class="icon-fb"><a href="#"></a></div><div class="icon-vk"><a href="#"></a></div><div class="icon-tw"><a href="#"></a></div></div>
        </div>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>

<div class="main-left">
    <div class="title">
        <h2>Последние поступления</h2> <sup><a href="/catalog">весь каталог</a></sup><div class="line"></div>
    </div>
    <?$APPLICATION->IncludeComponent(
	"shop:catalog.section", 
	"board_index1", 
	array(
		"IBLOCK_TYPE" => "1c_catalog",
		"IBLOCK_ID" => BLOCK_AKB_ITEMS,
		"SECTION_ID" => "0",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD2" => "timestamp_x",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ELEMENT_SORT_FIELD" => "CATALOG_AVAILABLE",
		"ELEMENT_SORT_ORDER" => "desc",
		"FILTER_NAME" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "Y",
		"PAGE_ELEMENT_COUNT" => "8",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "1",
		"TEMPLATE_THEME" => "",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "под заказ",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "Y",
		"DISPLAY_COMPARE" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "Основная цена продажи",
            1 => "Опт"
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"BASKET_URL" => "/basket",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"PAGER_TEMPLATE" => "akb.visual",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"CURRENCY_ID" => "RUB",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
</div>
<div class="brends-wrapper">
<div class="title">Бренды</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"akb.brends.slider", 
	array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "site_content",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "0",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
</div>
<div class="news-wrapper">
    <div class="title">Новости <sup><a href="/news">Все</a></sup><div class="line"></div></div>
    <?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "akb.default",
    Array(
        "IBLOCK_TYPE" => "site_content",
        "IBLOCK_ID" => "2",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "",
        "SORT_ORDER2" => "",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("", "", ""),
        "PROPERTY_CODE" => array("", ""),
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "255",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N"
    )
);?>
</div>

<div class="benefits">
    <div class="title">Наши преимущества</div><div class="line"></div>
    <div class="benefits-wrapper">
        <?=CIBlockElement::GetList(array(), array('ID' => ELEMENT_BENEFITS))->GetNextElement()->fields['DETAIL_TEXT']?>
    </div>

    <div class="benefits-mission">
        <?=CIBlockElement::GetList(array(), array('ID' => ELEMENT_DELMEX_MISSION))->GetNextElement()->fields['DETAIL_TEXT']?>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
	"wlcomponents:buyinoneclick", 
	".default", 
	array(
		"IBLOCK_TYPE" => "1c_catalog",
		"IBLOCK_ID" => "1",
		"IMAGE_TYPE" => "PREVIEW_PICTURE",
		"WORK_TYPE" => "ONE_PRODUCT",
		"USER_MODE" => "Y",
		"SALE_PERSON_TYPE" => "1",
		"ORDER_LETTER" => "Y",
		"NAME_FIELD" => "1",
		"EMAIL_FIELD" => "0",
		"PHONE_FIELD" => "2",
		"SALE_PAYSYSTEM" => "0",
		"SALE_DELIVERY" => "0",
		"DEFAULT_CURRENCY" => "RUB",
		"PRICE_TYPE" => "1",
		"SKU" => "N",
		"SKU_PROPERTIES" => array(
		),
		"JQUERY_ON" => "N",
		"BOOTSTRAP_ON" => "Y"
	),
	false
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>