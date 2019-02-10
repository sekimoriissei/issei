<html>
<?php
$sekimori = $_POST["sekimori"];
$onamae = $_POST["onamae"];
$delete = $_POST["delete"];

$contents = file_get_contents("mission_2-3.html");
echo $contents;


$filename = "mission_2-1_sekimori.txt";
$file = file("mission_2-1_sekimori.txt",FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);


if (!empty($_POST["sekimori"])){
if (!empty($_POST["onamae"])){
  $fp = fopen($filename,"a");
  $number = count($file)-1;
  $text = explode("<>",$file[$number]);
  $number_b=$text[0]+1;
  fwrite($fp,$number_b);
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


if(!empty($_POST["delete"])){
$file_b = file("mission_2-1_sekimori.txt",FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
  $fw = fopen($filename,"w");
foreach($file_b as $issei){
  $kugirinasi = explode("<>",$issei);

if(!empty($kugirinasi[0])){
if($kugirinasi[0]!= $delete){
  $detekuru = implode("<>",$kugirinasi);
  fwrite($fw,$detekuru."\n");
}
}
}
fclose($fw);
}

$file = file($filename);//ファイルを配列に格納し、さらに変数に格納(1行ごと)
foreach($file as $issei){
  $hyouji = explode("<>",$issei);//<>で分割する
foreach($hyouji as $issei){
echo $issei."</br>";
}
}
?>
<html>