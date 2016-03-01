<html>
<head>
<link rel="stylesheet" href="css/my-media-data.css">
</head>
<body>
</body>
</html>
<?php
error_reporting(0);
@session_start();
//require 'connnect.inc.php';
//echo $name=$_SESSION['friend_name'];
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
if(isset($_SESSION['friend_name']) && !empty($_SESSION['friend_name'])){
$mysql_db=$_SESSION['friend_name'];
echo '<h2><center>'.$mysql_db.' MEDIA</center></h2>';

if(@(mysql_connect($mysql_host,$mysql_user,$mysql_password))&&(@(mysql_select_db($mysql_db)))){

$query="SELECT `data`,`data_link` FROM `user_data` WHERE `view`='1' ORDER By `id` DESC";

$query_run=mysql_query($query);
while($result_array=mysql_fetch_array($query_run,MYSQL_ASSOC)){
   $channel = array(
      'resultbox' => $result_array['data_link'],
      'description' =>$result_array['data']);
   
   echo "<channel>\n";
   
   foreach ($channel as $element => $content) {
      echo " <$element>";
      echo htmlentities($content);
      echo "</$element>\n";
	  
   }
 $url="uploads/".$result_array['data_link'];
echo '<audio controls>';
echo "<source src='$url' type='audio/mpeg'>";
echo '</audio>';
  echo "</channel>";
   
 }
 echo '<br><br>';
 echo  '<center><b><a href="logout.php">LOGOUT</a></b></center>'; 

}
	else {
	 echo '<center>WOOO! ANONYMOUS!<br>NO USER FOUND WITH THAT NAME!!</center>';
	 echo '<br><br>';
	 echo '<center><b><a href="friend-s-media.php">Please select valid user name</a></b></center>';
    }
}else{
	echo '<br>';
	echo 'OOPS!Please select a username to view their uploads.';
	echo '<br><br><center><b><a href="friend-s-media.php">USERS</a></b></center>';
    
	}
}
else{
	echo '<br>';
	echo '<center>BEING ANONYMOUS IS NOT GOOD.PLEASE LOGIN!!</center>.<br><br>';
	echo '<b><center><a href="index.php">LOGIN</center></b>';
}
?>

