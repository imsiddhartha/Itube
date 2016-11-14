<!doctype html>

<html>
<head>
	
	<title>Itube</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="general_videopage.css"/>
	 <!-- player skin -->
   <link rel="stylesheet" type="text/css" href="player.css"/>

   <!-- site specific styling -->
   <style type="text/css">
   .flowplayer { width: 90%;
   }
   </style>
<link rel="stylesheet" type="text/css" href="side_Search.css"/>
	
   <!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
   <script type="text/javascript" src="jquery.min.js"></script>

   <!-- include flowplayer -->
   <script type="text/javascript" src="flowplayer.min.js"></script>
</head>
<body>

<?php require 'searchengine.php';?>
<?php
	require'db1.php';
	$a=$_REQUEST['id'];
	mysql_query("update `videos` set hits=hits+1 where vid=$a");
	$vnm=mysql_query("select * from `videos` where vid=$a");
	$row = mysql_fetch_array($vnm);
	$uname=$row["uid"];
	$t=$row["tags"]; 

	$unm=mysql_query("select * from `user` where uid=$uname");
	$abc = mysql_fetch_array($unm); 
	$rw=$abc["f_name"].' '.$abc["l_name"];

	$vno=mysql_query("select count(vid) from videos group by uid having uid=$uname");
	$v = mysql_fetch_array($vno);
	$vlist=mysql_query("select * from videos where tags like \"%$t%\"");
	$vl=mysql_fetch_array($vlist);
	$siduserid=$vl['uid'];

	$side_user=mysql_query("select * from user where uid=$siduserid");
	$sidusernm=mysql_fetch_array($side_user);
	//SELECT * FROM `comments` JOIN `user` WHERE comments.video_id=1 AND user.uid=comments.user_id
//	SELECT * FROM `comments` JOIN `user` WHERE comments.vid=1 AND user.uid=comments.uid
	$com=mysql_query("SELECT * FROM `comments` JOIN `user` WHERE comments.video_id=1 AND user.uid=comments.user_id order by timestamp desc");
	//$cm=mysql_fetch_array($com);
	
	
	//$ucnm=$cm["uid"];
	//$p=mysql_query("select * from `user` where uid=$ucnm");
	//$sid=mysql_fetch_array($p);

	?>
		<aside id="side_news">
		<div id="reslts">
		<ul id="unodered_list">

		<?php
		while($result_rows = mysql_fetch_assoc($vlist)){?>
		<li id="listitem"><div id="thumb"><a id="thumb_link" href="test.php?id=<?=$result_rows['vid']?>"> 
		<img alt="Thumbnail" src="img1.jpg" width="100" height="68"></a></div><div id="con"><h6 id="tit"><a id="link" href="test.php?id=<?=$result_rows['vid']?>" >
		<?php
		echo '<h4><strong>',$result_rows['v_name'],'</strong></h4>'
		?></a>
		</h6>
		<div id="upldby"><ul id="upd"><li>by <a href="user"><?php echo $sidusernm["f_name"].' '.$sidusernm["l_name"];?></a></li>
		<li><?php echo $result_rows['upload_date']; 
		?>
		</li><li><?php echo $result_rows['hits'].' views';
		 ?> </li></ul></div>
		</div>
		</li>
		<?php }?>
		</ul>
		</div>
</aside>		




		<section id="main_section" >
<div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.7234">
<video>
         <source type="video/mp4" src="<?php echo'videos\\'.$row["v_name"].'.mp4'?>">
      </video>
   </div>
   
<div id="panel">
<h1 id="title"><b><?=$row["v_name"]?><b></h1>
<div id="user_header">
<a href="user"><img  id="userimg" alt="imagge" src="img1.jpg" width="48"></a>
<a href="user"><h2  id="un"><?php echo $rw?></h2></a><a href="user"><span class="seperator"><?php echo $v["count(vid)"].' videos'?>  </span></a><br/>
<span id="sub_con"><span class="button_sub">
<input type="button" name="sub_button" aria-live="polite" role="button" value="Subscribe" id="s_button">
<!--<span class="yt-uix-button-icon-wrapper">
<img class="yt-uix-button-icon yt-uix-button-icon-subscribe" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt="" title="">--></span>
<br/><br/><br/>
<div id="likes">
<input type="button" value="like"/>&nbsp;<input type="button" value="dislike"/></div>
&nbsp;&nbsp;<span class="likeee"><?php echo $row["likes"].' likes' ?>

<div id="views">      <span class="view_count ">
    <?php echo $row["hits"].' views'?>
  </span>
  </div>
</div>

<br/>		<br/>		<br/>		<br/>		
<hr/>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="standard" data-action="like" data-show-faces="true" data-send="false"></div>
<div id="comments_box">
<script language="php">//echo "hi";
 </script><!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="300"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><br>
	<a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  Share on Facebook
</a><br><!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share"></div>

<!-- Place this tag after the last share tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  <?php 
  session_start();
  //session_destroy();
  $_SESSION['olo']=$a;
  //echo $_SESSION['olo'];
  //echo $_SESSION['user'];
  if(!isset($_SESSION['user'])){$_SESSION['views']=$a;?>
	<a href="basic.html">comeon lets comment !</a>
  <?php }
  else{
	if(isset($_session['views']))
	unset($_session['views']);
  ?>
  <form action="comment.php"><textarea name="textarea" id="txt_box"></textarea>
  <input type="submit" id="b_comment" value="Post" maxlength="450"/></form><?php } ?>
</div>
</section>


 		<div id="creslts">
		<div id="cunodered_list">
	<h4>
  
	</h4>		
	<strong>All Comments</strong> 
	<h4 align ="center">comments</h4>	
	<ul id="allcomments">
 <?php
		while($rr = mysql_fetch_array($com)){	?>
		<li id="clistitem">
		<div id="cthumb">
		<a id="cthumb_link" href="profile.php?id=<?php echo $rr['user_id'];?>"> 
		<img alt= "Thumbnail" src="img1.jpg" width="100" height="68"/>
		</a></div>
		<div id="ccon">
		<h4 id="ctit">
		<a id="clink" href="profile.php?id=<?=$rr['user_id']?>">
		<?php echo '<h4><strong>',$rr["f_name"].' '.$rr["l_name"],'</strong></h4>';?>
		</a></h4>
		<p align="center"><?php echo $rr["comment"];?></p>
		
		<li>
		<?php echo $rr['timestamp']; 
		?>
		</li><li><?php echo $rr['likes'].' likes';?> </div></li>
		
		</h6>
		<?php }?>
		</div>
		</ul>
		</div>
		</div>
 
 
<br/>		
<br/>		<br/>		<br/>		
<?php require 'footer.html'?>
</body>
</html>

