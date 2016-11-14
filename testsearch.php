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
$search=mysql_query("select `id`,`name`,`desc`,`img` from `sample`where `name` like \"%$search_term%\" or `desc` like \"%$search_term%\"");

$result_count=mysql_num_rows($search);

$suffix= ($result_count !=1) ? 's' : '';	//1-result 2-others
?>
<div id="wrapper">
<div id="results">
<div id="result_no">
<?php
echo '<p class="rno">Search for <strong><a>',$search_term,' </a></strong>returned <strong>',$result_count,'</strong> result',$suffix.'</p>';
?>
</div>
<ol id="odered_list">
<?php
while($result_rows = mysql_fetch_assoc($search)){
?><li id="list_item"><div id="thumbnail"><a id="thumbnail_link" href="test.php?id=<?=$result_rows['id']?>"> 
<img alt="Thumbnail" src="<?$result_rows['img']?>" width="185"></a></div><div id="content"><h3 id="title"><a id="link" href="test.php?id=<?=$result_rows['id']?>" >
<?php
echo '<h4><strong>',$result_rows['name'],'</strong></h4>';?></a></h3>
<?php
echo '<p class="desc">',$result_rows['desc'],'</p>';
}
}
}
?>
</div>
</li>
</ol>
</div>
</div>
</html>