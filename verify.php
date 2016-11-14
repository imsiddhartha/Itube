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
 $name=(isset($_GET['txtname']) ? $_GET['txtname'] : null);
 $pass=(isset($_GET['txtpass']) ? $_GET['txtpass'] : null);
 echo $name.'<br>';
 echo $pass.'<br>';
 $sql="SELECT * FROM user where user_name='".$name."'";
 $result=mysql_query($sql);
 //echo $result.'<br>';
 $arr=mysql_fetch_array($result);
 $temp=$arr["uid"];
 if($arr["password"]!=$pass)
  {echo "<script>alert('Wrong user name or password');window.history.back(-1);</script>";
    
  }
 else
   {
   session_start();
   
   
   $_SESSION['user']=$temp;
   
   if(isset($_SESSION['views']))
   {
		$kon=$_SESSION['views'];
		echo 'hi'.$kon;
		$pikachu='Location: test.php?id='.$kon;
		header($pikachu);
		exit;
   }
   else{
   header("Location: http://customisedHome.php");
 //Make sure that code below does not get executed when we redirect. 
exit;
   redirect('customized_homepage.PHP');
   }
   }
 //mysqli_close($con);
?>