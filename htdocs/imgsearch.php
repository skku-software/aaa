<form method="post" name="formItem" enctype="multipart/form-data" autocomplete="off" action="imgsearch.php">
<input type="file" name="file_default" class="file" size="35" onchange='this.form.submit();'>
</form>

<?
$tmp_name = $_FILES['file_default']['tmp_name'];
$name = $_FILES['file_default']['name'];

if (is_uploaded_file($tmp_name)) {
	$tag=`c:/1.bat $dest_file`;
	$tag=trim($tag);
	$url="http://localhost/search.php?q=$tag&x=0&y=0";
	echo "<script>location.href='$url';</script>";
}
?>