<?
if (!defined('_DMSHOP_')) exit;

$display_list = 4;
$display = shop_design_box_list($display_id, $display_type, $display_list);

echo "<table width='".$dmshop_design_box_type['box_width']."' border='0' cellspacing='0' cellpadding='0' style='table-layout:fixed;'><tr><td>";
echo shop_article_skin("display_{$display_id}_{$display_type}_4", $display['skin'], $display['board'], "1", $display['count_height'], "", "", "", "", "", $display['sort'], $display['use1'], $display['use2'], $display['use3'], $display['use4']); /* ���̾�ID, ��Ų��, �Խ���ID, ���ΰ���, ���ΰ���, ����ϰ���ũ��, ����ϼ���ũ��, �������, �Ѹ�Ƚ��, �Ѹ��ð�, ���Ĺ��, ����ǥ��, �ۼ���ǥ��, �ۼ���ǥ��, ��ۼ�ǥ�� */
echo "</td></tr></table>";
?>