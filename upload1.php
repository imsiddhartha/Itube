 <?php 
 $target = "videos/"; 
 $target = $target.basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 {
 echo "The file ".basename( $_FILES['uploaded']['name'])." has been uploaded"."<br>";
 
 //----------------------------creating thumbnail of uploaded video---------
 // where ffmpeg is located  
$ffmpeg = 'E:/softwares/ffmpeg-20131022-git-610a8b1-win64-static/bin/ffmpeg';  
//video dir  
$video = $target;  
//where to save the image  
$name_array=array();
$name_array=explode('/',$video);
$name_temp=array();
$length=count($name_array);
$name_temp[0]=$name_array[$length-1];

//---------------------saving the thumbnail
$image = 'C:/wamp/www/'.$name_temp[0].'.jpg';  
//time to take screenshot at  
$interval = 2;  
//screenshot size  
$size = '138x96';  
//ffmpeg command  
$cmd = "$ffmpeg -i $video -deinterlace -an -ss $interval -f mjpeg -t 1 -r 1 -y -s $size $image 2>&1";

exec($cmd);
echo '<img src="'.$name_temp[0].'.jpg'.'">';


//--------------------------------video details into video table begins-------------------------------------
// Create connection
$hostname="localhost";
$username="root";
$password="";
$con=mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
$selected = mysql_select_db("ivideos",$con) 
  or die("Could not select ivideos");
  
  //-----------yaha se session wala kaam lagega aur bohot saari matha fodi lagegi
  
  
 } 
 else {
 echo "Sorry, there was a problem uploading your file.";
 }
 ?>