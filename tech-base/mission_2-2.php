<html>
<?php
$sekimori = $_POST["sekimori"];
$onamae = $_POST["onamae"];

$contents = file_get_contents("mission_2-2.html");
echo $contents;


if (!empty($_POST["sekimori"])){
if (!empty($_POST["onamae"])){
$filename = "mission_2-2_sekimori.txt";
$fp = fopen($filename,"a");
$file = file("mission_2-2_sekimori.txt");
$number = count($file);
fwrite($fp,$number+1);
fwrite($fp,"<>");
fwrite($fp,$sekimori);
fwrite($fp,"<>");
fwrite($fp,$onamae);
fwrite($fp,"<>");
fwrite($fp,date("Y/m/d h:i"));
fwrite($fp,"\n");
fclose($fp);
}
}

$file = file("mission_2-2_sekimori.txt");
foreach($file as $issei){
$kieru = explode("<>",$issei);

foreach($kieru as $issei){
echo $issei."</br>";
}
}
?>
</html>