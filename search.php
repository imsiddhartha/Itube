<html>
<head>
<link rel="stylesheet" type="text/css" href="style_search.css"/>
</head>
<?php
require'db.php';

if(isset($_POST['search_term'])){
$search_term= mysql_real_escape_string(htmlentities($_POST['search_term']));
if(!empty($search_term)){
//echo $search_term;
$search=mysql_query("select * from videos where `v_name` like \"%$search_term%\" or `description` like \"%$search_term%\"");
//"SELECT * FROM `videos` WHERE v_name like \"%s%\" or description like \"%n%\"";
$result_count=mysql_num_rows($search);
	
$suffix= ($result_count !=1) ? 's' : '';	//1-result 2-others
?>
<span id="result_no">
<?php
echo '<p class="rno">Search for <strong><a>',$search_term,' </a></strong>returned <strong>',$result_count,'</strong> result',$suffix.'</p>';
?>
</span>
<div id="results">

<ol id="odered_list">
<?php	
while($result_rows = mysql_fetch_assoc($search)){
?><li id="list_item"><div id="thumbnail"><a id="thumbnail_link" href="test.php?id=<?=$result_rows['vid']?>"> 
<img alt="Thumbnail" src="img1.jpg" width="185"></a></div><div id="content"><h3 id="title"><a id="link" href="test.php?id=<?=$result_rows['vid']?>" >
<?php
echo '<h4><strong>',$result_rows['v_name'],'</strong></h4>'?></a>
</h3>
<div id="uploadedby"><ul id="upld"><li>by <a href="user">user</a></li>
<li><?php echo $result_rows['upload_date']?></li><li>48 views</li></ul></div>
<a id="link" href="test.php?id=<?=$result_rows['vid']?>" >
<?php
echo '<p class="desc">',$result_rows['description'],'</p>';
}
}
}
?>
</a>
</div>
</li>
</ol>
</div>
</html>