<form method="post" name="formItem" enctype="multipart/form-data" autocomplete="off" action="imgsearch.php">
<input type="file" name="file_default" class="file" size="35" onchange='this.form.submit();'>
</form>

<?
$tmp_name = $_FILES['file_default']['tmp_name'];
$name = $_FILES['file_default']['name'];

if (is_uploaded_file($tmp_name)) {
	$tag=`python /usr/local/lib/python2.7/dist-packages/tensorflow/models/image/imagenet/classify_image.py --image_file $tmp_name`;
	$tag=explode("|||||",$tag)[0];
$tag=explode(",",$tag)[0];
	$tag=trim($tag);
	$url="http://localhost/search.php?q=$tag&x=0&y=0";
//echo $tag;	
echo "<script>location.href='$url';</script>";
}
?>
