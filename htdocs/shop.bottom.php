<?
if (!defined("_DMSHOP_")) exit;

// ������������ ����
if (!$shop['admin_page']) {

// visit start
$ip = trim(strip_tags(mysql_real_escape_string($_SERVER['REMOTE_ADDR'])));
$agent = trim(strip_tags(mysql_real_escape_string($_SERVER['HTTP_USER_AGENT'])));
$referer = trim(strip_tags(mysql_real_escape_string($_SERVER['HTTP_REFERER'])));
$request_uri = trim(strip_tags(mysql_real_escape_string($_SERVER['REQUEST_URI'])));
$browser = shop_visit_browser($agent);
$os = shop_visit_os($agent);
$host = shop_visit_host($referer);
$keyword = shop_visit_keyword($referer);

// ���� �湮�Ͽ��°�
$dmshop_visit = sql_fetch(" select * from $shop[visit_table] where substring(vi_datetime,1,10) = '".$shop['time_ymd']."' and vi_ip = '".$ip."' order by id asc ");

// �ִٸ�
if ($dmshop_visit['id']) {

    $vi_first = "0";

} else {
// ���ٸ�

    $vi_first = "1";

}

$sql_common = "";
$sql_common .= " set vi_ip = '".$ip."' ";
$sql_common .= ", vi_first = '".$vi_first."' ";
$sql_common .= ", vi_browser = '".$browser."' ";
$sql_common .= ", vi_os = '".$os."' ";
$sql_common .= ", vi_agent = '".$agent."' ";
$sql_common .= ", vi_referer = '".$referer."' ";
$sql_common .= ", vi_host = '".$host."' ";
$sql_common .= ", vi_keyword = '".$keyword."' ";
$sql_common .= ", vi_url = '".$request_uri."' ";
$sql_common .= ", vi_datetime = '".$shop['time_ymdhis']."' ";

// insert
sql_query(" insert into $shop[visit_table] $sql_common ");

$visit_id = mysql_insert_id();

// ����
$ss_name = "visit_".$ip;

// ������ ���ٸ�
if (!shop_get_session($ss_name)) {

    shop_set_session($ss_name, true);

    // �ִٸ�
    if ($dmshop_visit['id']) {

        $return_id = $dmshop_visit['id'];

    } else {
    // ���ٸ�

        $return_id = $visit_id;

    }

    // �湮Ƚ�� ���
    sql_query(" update $shop[visit_table] set vi_return = vi_return + 1 where id = '".$return_id."' ");

}
?>
<script type="text/javascript">$(document).ready(function() { var version = $.browser.version; var resolution = screen.width+"x"+screen.height; $.post("<?=$shop['path']?>/visit_update.php", {"visit_id" : "<?=$visit_id?>", "version" : version, "resolution" : resolution}); });</script>
<?
}

// visit end

// ���� ������ ��� ���� ����
shop_coupon_auto_make("2", "", "");

// ���� ������ ��� ������ ����
shop_cash_auto();
?>
</body>
</html>