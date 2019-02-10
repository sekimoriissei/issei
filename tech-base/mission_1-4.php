<html>
<?php
$contents =file_get_contents("mission_1-4.html");
echo $contents;
$sekimori =$_POST["sekimori"];
echo "ご入力ありがとうございます。";
echo nl2br("\n");
echo date("Y年m月d日h時i分")."に".$sekimori."を受け付けました。";
?>
</html>
