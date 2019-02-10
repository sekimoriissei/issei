<?php
$file = file("mission_1-6_sekimori.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($file as $issei){
echo $issei;
}
?>