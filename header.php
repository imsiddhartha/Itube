NOT IN USE
<!doctype html>
<html>
<head>
<style type="text/css" >
*{
	margin:0px;
	border:0px;
}
#top_header{
	background:#f1f1f1;
	border-bottom: 1px solid #e8e8e8;
	color:red;
	padding :10px;
	margin-top:0;
}
#top_header #txt_search{
float:center;
-webkit-box-flex:1;
margin: 0;
margin-left:5%;
border: 0;
outline: none;
font-size: 16px;
font-family: arial,sans-serif;
padding-top: 6px;
padding-bottom: 8px;
min-width: 40%;
width: auto!important;
-webkit-box-sizing: border-box;
box-sizing: border-box;
direction: ltr;
unicode-bidi: embed;
background-color: white;
border: 2px inset;
cursor: auto;
letter-spacing: normal;
word-spacing: normal;
text-transform: none;
text-indent: 0px;
text-shadow: none;
display: inline-block;
text-align: start;
height:29px;
}
#top_header #b_search {
-webkit-box-flex:1;
border-color: #1b7fcc;
background: #1b7fcc;
color: #fff;
margin-top: 1%;
margin-left: 0;
height: 29px;
}
#top_header #b_upload {
-webkit-box-flex:0;
border-color: #1b7fcc;
background: #1b7fcc;
color: #fff;
margin-top: 1%;
margin-left: 7%;
height: 29px;
}
#top_header #b_signin {
border-color: #1b7fcc;
background: #1b7fcc;
color: #fff;
float:right;
margin-top: 1%;
margin-left: 25px;
height: 29px;
-webkit-box-flex:1;
}
</style>
<script type="text/javascript">
$('#txt_search').keyup(function(){
var search_term =$(this).val();
$.post('search.php', { search_term:search_term },function(data){
//display results 1 path of ssearch.php,2 search_term 
//variable created in php file and another search_term is js variable
$('#search_results').html(data);
} );
});
</script>
</head>
<body>
		
				<header id="top_header">
			<h1 > &nbsp;iTuBe  &nbsp;&nbsp;&nbsp;
			  <input id="txt_search" type="text" name ="txt_search"  />
			  <input id="b_search" type="button" name ="b_search" value="Search"  /> 
			  <input id="b_upload" type="button" name ="b_upload" value="Upload" />
			  <input id="b_signin" type="submit" name ="b_signin" value="Sign-in" />
			</h1>                 		
			  </header>	
		<hr/>

		<div id="search_results"></div>

		<script type="text/javascript" src="jquery.js"></script>	
<!--<script type="text/javascript" src="search.js"></script>	
-->
</body>
</html>		