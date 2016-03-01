<?php
@session_start();
error_reporting(0);
//echo $current_page;
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
echo $mysql_db=$_SESSION['user_name'];
$query='SELECT `friends_list` FROM `friends`';
$query_run=mysql_query($query);
echo '<br>';
echo '<center><h2 style="font-size:30px">Your Friends</h2></center><br>';
$count=1;
while($result=mysql_fetch_assoc($query_run)){
	echo $count.'.';
	$count++;
	//echo '<b>'.$result['friends_list'].'</b>';
	echo $result;
	echo '<br><br>';
}
if(isset($_GET['name']) && !empty($_GET['name'])){
	
	$_SESSION['friend_name']=$_GET['name'];
    header('Location:view_media.php');
}
?>