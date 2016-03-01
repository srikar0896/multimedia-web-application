<html>

<head>
<link rel='stylesheet' href='style.css'>
</head>
<body>
</body>

</html>


<?php
@session_start();
include 'user.inc.php';
include 'connect.inc.php';
if((isset($_POST['name']))&&(isset($_POST['password']))){
	$username=$_POST['name'];
	$password=$_POST['password'];
	if(!empty($username)&&!empty($password)){
		$query="SELECT `username`,`password` FROM `users` WHERE `username`='$username' AND `password`='$password'";
		$query_run=mysql_query($query);
		$number=mysql_num_rows($query_run);
         if($number==0)
		 {
			 echo 'no results found';
		 }
		 elseif($number==1)
		 {
			 $user_id_hash=mysql_result($query_run,0,'username');
			 $user_id=md5($user_id_hash);
			 $_SESSION['user_id']=$user_id;
			 $_SESSION['user_name']=$username;
			 header('Location:index.php');
			 }
	}
	
}

?>
<form action='<?php echo $current_page?>' method='POST'>
Username :<input id=input type="text" name="name" placeholder="Username"><br><br>
Password :<input type="password" name="password" placeholder="Password">
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
