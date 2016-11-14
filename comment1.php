<?php
require ('db.php');
$comment=$_REQUEST['com'];
$submit=$_REQUEST ['sub'];


if ($submit) { $insert=mysql_query ("INSERT INTO comment (comment) VALUES    ('$comment')" ) ;

} 


?>


<html>
<head><title>Comment Box | HelperTuts</title></head>
<body>
<form action="comment-box.php" method="POST">

<label>Comment:  </label><br />
<textarea name="comment" id="com" cols="25" rows="7"></textarea><br /><br /><br />
<input type="submit" id="sub" name="submit" value="Comment" /><br />

</form>
<hr width="1100px" size="5px" />