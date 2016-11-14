<?PHP
  if(isset($_GET['txt_email']))
{ $email= $_GET['txt_email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo'<script language="javascript">
	             alert("wrong email address");
                 window.history.back(-1);
	</script>';}
}
  
 if(isset($_GET['txt_user_name']))
 {$user_name=$_GET['txt_user_name'];
 if($user_name==null)echo'<script language="javascript"> alert("user name cannot be blank");
             window.history.back(-1);
 </script>;';}
  
  if(isset($_GET['txt_phone_number'])){ $phone_number=$_GET['txt_phone_number'];if($phone_number==null)echo'<script language="javascript">alert("phone number cannot be blank");
           window.history.back(-1);
 </script>;';
 echo is_int($phone_number);
 //if(!is_int($phone_number))echo'<script language="javascript">alert("wrong input in phone number");
 //          window.history.back(-1);
 //</script>;';
 }
  
  
  if(isset($_GET['txt_fname'])) 
  {$fname=$_GET['txt_fname'];if($fname==null)echo'<script language="javascript">alert("first name cannot be blank");
             window.history.back(-1);
 </script>;';}
 
 
  if(isset($_GET['txt_lname'])){$lname=$_GET['txt_lname']; if($lname==null)echo'<script language="javascript">alert("last name cannot be blank");
             window.history.back(-1);
 </script>;';}
  
  
 if(isset($_GET['txt_npass'])){ $npass=$_GET['txt_npass'];if($npass==null)echo'<script language="javascript">alert("password cannot be blank");
             window.history.back(-1);
 </script>;';}

if(isset($_GET['txt_cpass'])){ $cpass=$_GET['txt_cpass'];if($cpass!=$npass)echo'<script language="javascript">alert("passwords do not match");
             window.history.back(-1);
 </script>;';}




//--------------------------------------------verification done------------------------


// Create connection
$hostname="localhost";
$username="root";
$password="root";
$con=mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected = mysql_select_db("ivideos",$con) 
  or die("Could not select ivideos");
$sql = "SELECT count(*) from user";
$val=mysql_query($sql);
$result=mysql_fetch_array($val);
//echo $result["count(*)"];
 $selected_radio=$_GET["gender"];
 if($selected_radio=="Male")
  $gender="M";
 else
  $gender="F";  
  //echo $gender."<br>";
 
  $day=intval((isset($_GET['cmb_date']) ? $_GET['cmb_date'] : null));
  $month=intval((isset($_GET['cmb_month']) ? $_GET['cmb_month'] : null));
  $year=intval((isset($_GET['cmb_year']) ? $_GET['cmb_year'] : null));
  $dob=(string)$year."-".(string)$month."-".(string)$day; 
  $id=$result["count(*)"]+1;
  //echo $id
  //echo $dob."<br>";
  //echo $lname."<br>";
  //echo $fname."<br>";
  //echo $npass."<br>";
  
  $sql1="insert into user (uid,email,user_name,p_no,f_name,l_name,password,gender,dob) values(".$id.",'".$email."','".$user_name."',".$phone_number.",'".$fname."','".$lname."','".$npass."','".$gender."','".$dob."')";
  $retval=mysql_query($sql1);
  
  
  
  mysql_close($con);
  ?>