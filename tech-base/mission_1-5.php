<html>
<?php
$contents =file_get_contents("mission_1-5.html");
echo $contents;
$sekimori= $_POST["sekimori"];
if(!empty($_POST["sekimori"])) {
if($sekimori==完成){
echo "おめでとうございます！";
}else{
echo  date("Y年m月d日 h時i分")."に".$_POST["sekimori"]."を受け付けました";
}
$filename ="mission_1-5_sekimori.txt";
$sekimori =$_POST["sekimori"];
$fp=fopen($filename, "w");
fwrite($fp,"$sekimori");
fclose($fp);
}
?>
</html>