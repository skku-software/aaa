<?
if (!defined('_DMSHOP_')) exit;

$display_list = 1;
$display = shop_design_box_list($display_id, $display_type, $display_list);

echo "<table width='".$dmshop_design_box_type['box_width']."' border='0' cellspacing='0' cellpadding='0' style='table-layout:fixed;'><tr><td>";
echo shop_item_skin("display_{$display_id}_{$display_type}_1", $display['skin'], $display['category'], $display['icon'], "", "", $display['count_width'], $display['count_height'], $display['thumb_width'], $display['thumb_height'], "", $display['rolling_limit'], $display['rolling_time'], $display['sort']); /* ���̾�ID, ��Ų��, �з�ID, ����ID, ��ǰID, ��ǰ�ڵ�, ���ΰ���, ���ΰ���, ����ϰ���ũ��, ����ϼ���ũ��, �������, �Ѹ�Ƚ��, �Ѹ��ð�, ���Ĺ�� */
echo "</td></tr></table>";
?>