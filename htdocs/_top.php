<?
if (!defined('_DMSHOP_')) exit;

if ($dmshop_skin['skin_sub_top']) { $dmshop_top_path = $shop['path']."/skin/top/".$dmshop_skin['skin_sub_top']; } else { $dmshop_top_path = $dmshop_layout_path; }
if ($dmshop_skin['skin_sub_menu']) { $dmshop_menu_path = $shop['path']."/skin/menu/".$dmshop_skin['skin_sub_menu']; } else { $dmshop_menu_path = $dmshop_layout_path; }

// ���� (���,��,�Ϸ�)
if ($page_id == 'signup' && $m == '' || $page_id == 'signup_form' && $m == '' || $page_id == 'signup_result' && $m == '') {

    // pass

}

// īƮ, �ֹ�, �˻�
else if ($page_id == 'cart' || $page_id == 'order' || $page_id == 'search') {

    // ���̾ƿ� �޴� ���������� ����
    $layout_auto_set = 2;

} else {
// ��Ÿ

    // ����������
    if ($dmshop_mypage_path || $page_id == 'faq') {

        // ���̾ƿ� �޴� ���� �⺻������ ����
        $layout_auto_set = 0;

        // faq �Խ����� �� ���������� ȣ��
        if ($page_id == 'faq') {

            // ���������� ��Ų��� ����
            $dmshop_mypage_path = $shop['path']."/skin/mypage/".$dmshop_skin['skin_mypage'];

            // ���ʸ޴� ��Ų��θ� ������������ ����
            $dmshop_menu_path = $shop['path']."/skin/mypage/".$dmshop_skin['skin_mypage'];

        } else {
        // ��Ÿ

            $dmshop_menu_path = $dmshop_mypage_path;

        }

    }

}

if ($dmshop_skin['skin_sub_bottom']) { $dmshop_bottom_path = $shop['path']."/skin/bottom/".$dmshop_skin['skin_sub_bottom']; } else { $dmshop_bottom_path = $dmshop_layout_path; }

include_once("$shop[path]/shop.top.php");
include_once("$dmshop_layout_path/layout.top.php");
?>