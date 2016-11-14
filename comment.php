<?php
// Create connection
$hostname="localhost";
$username="root";
$password="root";
$con=mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected = mysql_select_db("ivideos",$con) 
  or die("Could not select ivideos");
  
 $comment=$_GET["textarea"];
 session_start();
 $user_id=$_SESSION['user'];  // session se aayega
 $v_id=$_SESSION['olo']; //yeh bhi session se aayega
 
 //inko rehne do filhal
 $likes=0;   
 $dislikes=0;
 $date = new DateTime();
 $date->getTimestamp();
 //$date
 //echo 
 $sql="INSERT into 'comments' values(".$user_id.",".$v_id.",'".$comment."',".$likes.",".$dislikes.",'".$date->format('Y-m-d H:i:s')."');";
 echo $sql;
 $retval=mysql_query($sql);
 $kon=$_SESSION['views'];
		echo 'hi'.$kon;
		$pikachu='Location: test.php?id='.$kon;
		header($pikachu);
		exit;
 mysql_close($con);
?>