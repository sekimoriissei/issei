<html>
<?php
$sekimori = $_POST["sekimori"];
$onamae = $_POST["onamae"];

if ($sekimori == "" && $onamae == "") {
echo "";
    	}else{
$filename = "mission_2-1_sekimori.txt";
$fp = fopen($filename,"a");
$file = file("mission_2-1_sekimori.txt",FILE_SKIP_EMPTY_LINES);
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

?>
</html>