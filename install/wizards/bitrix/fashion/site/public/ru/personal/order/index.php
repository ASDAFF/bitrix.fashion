<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������");
?><?$APPLICATION->IncludeComponent("bitrix:sale.personal.order", "for-test", Array(
	"PROP_1" => array(	// �� ���������� �������� ��� ���� ����������� "���������� ����" (s1)
		0 => "#SALE_PROP_FIZLOC_ID#",
	),
	"PROP_2" => array(	// �� ���������� �������� ��� ���� ����������� "����������� ����" (s1)
		0 => "#SALE_PROP_URLOC_ID#",
	),
	"SEF_MODE" => "Y",	// �������� ��������� ���
	"SEF_FOLDER" => "#SITE_DIR#personal/order/",	// ������� ��� (������������ ����� �����)
	"ORDERS_PER_PAGE" => "10",	// ���������� ������� �� ����� ��������
	"PATH_TO_PAYMENT" => "#SITE_DIR#personal/order/payment/",	// �������� ����������� ��������� �������
	"PATH_TO_BASKET" => "#SITE_DIR#personal/cart/",	// �������� � ��������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"SAVE_IN_SESSION" => "N",	// ��������� ��������� ������� � ������ ������������
	"NAV_TEMPLATE" => "arrows",	// ��� ������� ��� ������������ ���������
	"SEF_URL_TEMPLATES" => array(
		"list" => "index.php",
		"detail" => "detail/#ID#/",
		"cancel" => "cancel/#ID#/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>