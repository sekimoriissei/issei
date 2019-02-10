<?php
  $filename='mission_2-1_sekimori.txt';
  $file=file("$filename",FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

  $date=date("Y/m/d　H:i");

  $post_password=$_POST["post_password"];
  $password="warwickotp";//投稿パスワードを warwickotp と定義


if(empty($_POST["hidden_number"])){
if(!empty($_POST["name"])){
if(!empty($_POST["comment"])&& $post_password == $password){	//投稿パスワードが一致しないと作動しない	
  $fpa=fopen($filename,'a');
  $number=count($file)-1;
  $data=explode("<>",$file[$number]);
  $number_b=$data[0]+1;
  fwrite($fpa,$number_b."<>".$_POST["name"]."<>".$_POST["comment"]."<>".$date."\n");
  fclose($fpa);
}
}
}


  $delete_password = $_POST['delete_password'];
  $password1="lol";//削除パスワードを　lol と定義

if(!empty($_POST["delete"])&& $delete_password == $password1){//削除パスワードが一致しないと削除しない
//削除番号を打たれたら
  $fpw=fopen($filename,'w');//ファイルを　ｗ　で開いて空にする
foreach($file as $issei){	
  $data=explode("<>",$issei);
if(!empty($data[0])){
if($data[0]!=$_POST["delete"]){
  $a=implode("<>",$data);
  fwrite($fpw,$a."\n");
}
}
}
  fclose($fpw);
}


$edit_password = $_POST["edit_password"];
$password2="hetare";//編集パスワードを　hetare と定義

if(!empty($_POST["edit"])&& $edit_password == $password2){//編集パスワードが一致しないと編集できない
//編集番号を打たれたら、
foreach($file as $issei){	
$data=explode("<>",$issei);
if($data[0]==$_POST["edit"]){
$edit_name=$data[1];//edit_ は　編集したい　名前　コメント　を打つ
$edit_comment=$data[2];
$edit_banngou=$data[0];
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form action="mission_2-5.php" method="POST">

<input type="text" name="name" placeholder="名前" value="<?php echo $edit_name; ?>"><br/>

<input type="text" name="comment" placeholder="コメント" value="<?php echo $edit_comment; ?>" >
<input type="password" name="post_password" placeholder="投稿パスワード">
<input type="submit" value="送信"><br/>

<input type="text" name="delete" placeholder="削除番号">
<input type="password" name="delete_password" placeholder="削除パスワード">
<input type="submit" value="削除"><br/>

<input type="text" name="edit" placeholder="編集番号">
<input type="password" name="edit_password" placeholder="編集パスワード">
<input type="hidden" name="hidden_number" value="<?php echo $edit_banngou ?>">
<input type="submit" value="編集">
</form>

<?php
$filename='mission_2-1_sekimori.txt';

if(!empty($_POST["hidden_number"])){
$file=file('mission_2-1_sekimori.txt',FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
$fpw=fopen($filename,'w');
foreach($file as $issei){
$number=explode("<>",$issei);
if($number[0]!=$_POST["hidden_number"]){
$data=implode("<>",$number);	
fwrite($fpw,$data."\n");
}else{
$date=date('Y/m/d　H:i');
fwrite($fpw,$number[0]."<>".$_POST["name"]."<>".$_POST["comment"]."<>".$date."\n");
}
}
fclose($fpw);
}



$file=file('mission_2-1_sekimori.txt');
foreach($file as $issei){
$data=explode("<>",$issei);
foreach($data as $issei){
echo $issei." ";
}
echo"<br/>";
}
?>
</body>
</html>