<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"TYPECONTROL",2=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:51.680120969147595;s:10:\"yandex_lon\";d:39.1704411029358;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:39.175758957867046;s:3:\"LAT\";d:51.68278280184305;s:4:\"TEXT\";s:6:\"COSMOS\";}}}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "",
		"MAP_WIDTH" => "1348",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?><br>
<div class="bottom_block">
	<div class="properties clearfix">
		<div class="col-md-6 col-sm-6">
			<div class="title font_upper muted">
				 Адрес
			</div>
			<div itemprop="address" class="value darken">
				 г. Воронеж, Дружинников, 5Н
			</div>
 <br>
			 <?CMax::showContactSchedule('Режим работы', false);?><br>
			 <?$APPLICATION->IncludeComponent(
	"aspro:social.info.max",
	".default",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE_BLOCK" => ""
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?><br>
 <br>
 <br>
 <br>
 <br>
		</div>
		<div class="social-block">
			<div class="wrap">
			</div>
		</div>
		 <?
CMax::showContactPhones('Телефон', false);?><br>
		 <?CMax::showContactEmail('E-mail', false);?><br>
		 <?CMax::showContactAddr('Реквизиты', false);?>
	</div>
</div>
 <br>