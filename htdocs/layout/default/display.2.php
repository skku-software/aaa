<?
if (!defined('_DMSHOP_')) exit;

$display_list = 2;
$display = shop_design_box_list($display_id, $display_type, $display_list);

echo "<table width='".$dmshop_design_box_type['box_width']."' border='0' cellspacing='0' cellpadding='0' style='table-layout:fixed;'><tr><td>";
echo shop_plan_skin("display_{$display_id}_{$display_type}_2", $display['skin'], $display['plan'], "", "", "", "", $display['count_width'], $display['count_height'], $display['thumb_width'], $display['thumb_height'], "", $display['rolling_limit'], $display['rolling_time'], $display['sort']); /* ���̾�ID, ��Ų��, ��ȹ��ID, �з�ID, ����ID, ��ǰID, ��ǰ�ڵ�, ���ΰ���, ���ΰ���, ����ϰ���ũ��, ����ϼ���ũ��, �������, �Ѹ�Ƚ��, �Ѹ��ð�, ���Ĺ�� */
echo "</td></tr></table>";
?>