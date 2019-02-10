<html>
<?php
$contents =file_get_contents("mission_1-6.html");
echo $contents;
$sekimori= $_POST["sekimori"];
$filename ="mission_1-6_sekimori.txt";
$sekimori =$_POST["sekimori"];
$fp=fopen($filename, "a");
fwrite($fp,$sekimori."\n");
fclose($fp);
$file = file("mission_1-6_sekimori.txt", FILE_IGNORE_NEW_LINES |FILE_SKIP_EMPTY_LINES);
foreach($file as $issei){
echo $issei,"</br>";
}
?>
</html>