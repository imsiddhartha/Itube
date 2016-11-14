<?php
session_start();
unset($_SESSION['user']);
//$_SESSION['user']=1;
if(isset($_SESSION['user']))
  {
  header("Location: http://customisedHome.php");
/* Make sure that code below does not get executed when we redirect. */
exit;
  }
  require'db1.php';
	//$a=$_REQUEST['id'];
	//mysql_query("update `videos` set hits=hits+1 where );
	$query="select * from videos join user where user.uid=videos.vid order by 24hr_hits desc;";
	$kvnm=mysql_query($query);
	//echo $vnm;
	$row = mysql_fetch_array($kvnm);
?>
<!DOCTYPE html>
<!-- saved from url=(0023)http://www.itube.com/ -->
<html lang="en" data-cast-api-enabled="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="./itube_files/ga.js"></script><script type="text/javascript" async="" src="./itube_files/ga.js"></script><script src="./itube_files/cb=gapi.loaded_1" async=""></script><script id="js-3478043890" class="www_feed_mod" src="./itube_files/www_feed_mod.js" data-loaded="true"></script><script src="./itube_files/cb=gapi.loaded_0" async=""></script><script id="js-1345760350" src="./itube_files/www-searchbox-vflBauWtG.js" data-loaded="true"></script><script id="js-1717930245" class="www_common_mod" src="./itube_files/www_common_mod.js" data-loaded="true"></script><script id="js-1049996736" class="www-masthead" src="./itube_files/www-masthead-vflDVrmaZ.js" data-loaded="true"></script><script>var ytcsi = {gt: function(n) {n = (n || '') + 'data_';return ytcsi[n] || (ytcsi[n] = {tick: {},span: {},info: {}});},tick: function(l, t, n) {ytcsi.gt(n).tick[l] = t || +new Date();},span: function(l, s, n) {ytcsi.gt(n).span[l] = (typeof s == 'number') ? s :+new Date() - ytcsi.data_.tick[l];},info: function(k, v, n) {ytcsi.gt(n).info[k] = v;}};(function() {var perf = window['performance'] || window['mozPerformance'] ||window['msPerformance'] || window['webkitPerformance'];ytcsi.tick('_start', perf ? perf['timing']['responseStart'] : null);})();if (document.webkitVisibilityState == 'prerender') {ytcsi.info('prerender', 1);document.addEventListener('webkitvisibilitychange', function() {ytcsi.tick('_start');}, false);}try {ytcsi.pt_ = (window.chrome && chrome.csi().pageT ||window.gtbExternal && gtbExternal.pageT() ||window.external && external.pageT);if (ytcsi.pt_) {ytcsi.info('pt', Math.floor(ytcsi.pt_));}} catch(e) {}</script>  
  <link id="css-4100776543" class="www-core" rel="stylesheet" href="http://s.ytimg.com/yts/cssbin/www-core-webp-vfl8ngGrV.css" data-loaded="true">
    <link id="css-3868116853" class="www-home-c4" rel="stylesheet" href="http://s.ytimg.com/yts/cssbin/www-home-c4-webp-vflQzelI7.css" data-loaded="true">

<script>if (window.ytcsi) {window.ytcsi.tick("ce", null, '');}</script>  

  <title><?php echo "itube"?></title>
  <link rel="search" type="application/opensearchdescription+xml" href="http://www.itube.com/opensearch?locale=en_US" title="itube Video Search"><link rel="shortcut icon" href="http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="http://s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32"><link rel="alternate" media="handheld" href="http://m.itube.com/index?&desktop_uri=%2F"><link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.itube.com/index?&desktop_uri=%2F"><meta name="description" content="Share your videos with friends, family, and the world"><meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">  <meta property="og:image" content="//s.ytimg.com/yts/img/itube_logo_stacked-vfl225ZTx.png">
  <meta property="fb:app_id" content="87741124305">
  <link rel="publisher" href="https://plus.google.com/115229808208707341778">
<script>if (window.ytcsi) {window.ytcsi.tick("cl", null, '');}</script><style type="text/css">.gsok_a{background:url(data:image/gif;base64,R0lGODlhEwALAKECAAAAABISEv///////yH5BAEKAAIALAAAAAATAAsAAAIdDI6pZ+suQJyy0ocV3bbm33EcCArmiUYk1qxAUAAAOw==) no-repeat center;display:inline-block;height:11px;line-height:0;width:19px}.gsok_a img{border:none;visibility:hidden}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;position:relative;user-select:none;-webkit-user-select:none;white-space:nowrap}.gsst_e{opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}a.gspqs_a{padding:0 3px 0 8px}.gspqs_b{color:#666;line-height:22px}.gspr_a{padding-right:1px}.gsq_a{padding:0}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em;-webkit-appearance:button}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gsfe_a{border:1px solid #b9b9b9;border-top-color:#a0a0a0;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);}.gsfe_b{border:1px solid #4d90fe;outline:none;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);}.gsfi{font-size:16px}.gsfs{font-size:16px}a.gssb_j{font-size:12px;color:#03c}.gssb_a,.gssb_a td{line-height:20px}.gssb_a{padding:0 6px}.gssb_c{z-index:2000000007}.gssb_i td{background:#eee}.gssb_k{z-index:2000000006}.gssb_l{margin:2px 0}.gsib_a{padding:0 4px}.gsok_a{padding:0}.gsok_a img{display:block}.gsfe_b{border:1px solid #1c62b9;box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);outline:none;}</style><script src="./itube_files/plcr_2754629_0_1382541227505.js"></script><script src="./itube_files/flash_expanding_rendering_lib_200_30.js"></script></head><!-- machid: pNEpjZk4xTFJ5eVdFZUEwSExkOGg5VmxhOXUwdFBPYUxPN1E2RXhEUGVNMU1PeUZaMHFybFVR -->
    <body dir="ltr" class="  ltr  webkit webkit-537      site-left-aligned  hitchhiker-enabled      guide-enabled    guide-expanded
  page-loaded" id="body">
<?php ///echo "hello world this is devans and this is my hello world in php"?>
  <div id="body-container"><form name="logoutForm" method="POST" action="http://www.itube.com/logout"><input type="hidden" name="action_logout" value="1"><input name="session_token" type="hidden" value="-355wzlsndruIOPcx9dP7aZ3amN8MTM4MjY0OTkxMkAxMzgyNTYzNTEy"></form>    
    <div>
    <?php include 'searchengine.php'?> </div>
	<hr>
  <div id="alerts">
      

  </div>
  <?php //echo "hello world this is devans and this is my hello world in php"?>
  <div id="header">
        <div id="masthead_child_div"><embed name="masthead_child" height="1" width="1" id="masthead_child" tabindex="0" type="application/x-shockwave-flash" src="//s.ytimg.com/yts/swf/masthead_child-vflRMMO6_.swf" allowfullscreen="false" allowscriptaccess="always" bgcolor="#FFFFFF" flashvars="enablejsapi=1"></div>
            



</div



    
<div id="page-container"><div id="page" class="home branded-page-v2-masthead-ad-header clearfix masthead-ad-expanded"><div id="guide">        <div id="guide-container" class=" vve-check" data-sessionlink="ved=CAEQ_h4&amp;ei=uD5oUvvlLcSyiALggYGICA">
      <div id="guide-main" class="    guide-module     spf-nolink   yt-uix-tdl " data-fold="190,857">
        <div class="guide-module-toggle">
          <span class="guide-module-toggle-icon">
            <span class="guide-module-toggle-arrow"></span>
            <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="">
            <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="" id="collapsed-notification-icon">
          </span>
          <div class="guide-module-toggle-label">
            <h3>
              <span>
Guide
              </span>
            </h3>
          </div>
        </div>
          <div class="guide-module-content yt-scrollbar">
    <ul class="guide-toplevel">
            <li class="guide-section vve-check" data-sessionlink="ved=CAIQ5isoAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    <div class="guide-item-container personal-item">
      <ul class="guide-user-links yt-box">
            <li class="vve-check guide-channel" id="HCtnHdj3df7iM-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/HCtnHdj3df7iM" title="Popular on itube" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="HCtnHdj3df7iM">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/default.jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Popular on itube</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="HCp-Rdqh3z4Uc-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/HCp-Rdqh3z4Uc" title="Music" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="HCp-Rdqh3z4Uc">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/default(1).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Music</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="HC7Dr1BKwqctY-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/HC7Dr1BKwqctY" title="Sports" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="HC7Dr1BKwqctY">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/default(2).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>nd us
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Sports</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="HChfZhJdhTqX8-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/HChfZhJdhTqX8" title="Gaming" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="HChfZhJdhTqX8">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/default(3).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Gaming</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UCRKJ0Dhva6W6a5piLKPGuKA-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCRKJ0Dhva6W6a5piLKPGuKA" title="Movies" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCRKJ0Dhva6W6a5piLKPGuKA">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/photo.jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Movies</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UCY9Jh3SK0N1SAVJi-U--Rwg-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCY9Jh3SK0N1SAVJi-U--Rwg" title="TV Shows" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCY9Jh3SK0N1SAVJi-U--Rwg">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/photo(1).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>TV Shows</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UCvScgo6mAvbMEjszK4sSj6g-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCvScgo6mAvbMEjszK4sSj6g" title="Spotlight" data-sessionlink="feature=g-channel&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCvScgo6mAvbMEjszK4sSj6g">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/photo(2).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Spotlight</span>
      </span>
    </span>

  </a>

  </li>

      </ul>
    </div>
    <hr class="guide-section-separator">
  </li>

            <li class="guide-section vve-check" data-sessionlink="ved=CAoQ5isoAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
    <div class="guide-item-container personal-item">
        <h3>Channels for you</h3>
      <ul class="guide-user-links yt-box">
            <li class="vve-check guide-channel" id="UCoLrcjPV5PbUrUyXq5mjc_A-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCoLrcjPV5PbUrUyXq5mjc_A" title="MLB" data-sessionlink="feature=g-chfeat&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCoLrcjPV5PbUrUyXq5mjc_A">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/1.jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>MLB</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UC08AOOE5qIysNDBXVPSk1VA-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UC08AOOE5qIysNDBXVPSk1VA" title="VikiTelenovelas" data-sessionlink="feature=g-chfeat&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UC08AOOE5qIysNDBXVPSk1VA">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/1(1).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>VikiTelenovelas</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UCGjylN-4QCpn8XJ1uY-UOgA-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCGjylN-4QCpn8XJ1uY-UOgA" title="danisnotonfire" data-sessionlink="feature=g-chfeat&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCGjylN-4QCpn8XJ1uY-UOgA">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/1(2).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>danisnotonfire</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UCHX5-wIWTaClDu6uTKXKItg-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCHX5-wIWTaClDu6uTKXKItg" title="Truthloader" data-sessionlink="feature=g-chfeat&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCHX5-wIWTaClDu6uTKXKItg">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/1(3).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>Truthloader</span>
      </span>
    </span>

  </a>

  </li>

            <li class="vve-check guide-channel" id="UCBR8-60-B28hp2BmDPdntcQ-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channel/UCBR8-60-B28hp2BmDPdntcQ" title="itube Spotlight" data-sessionlink="feature=g-chfeat&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="UCBR8-60-B28hp2BmDPdntcQ">
    <span class="yt-valign-container">
        <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-group-key="guide-channel-thumbs" src="./itube_files/1(4).jpg" data-thumb-manual="1" alt="Thumbnail" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
      <span class="display-name no-count">
        <span>itube Spotlight</span>
      </span>
    </span>

  </a>

  </li>

      </ul>
    </div>
    <hr class="guide-section-separator">
  </li>

            <li class="guide-section vve-check" data-sessionlink="ved=CBAQ5isoAg&amp;ei=uD5oUvvlLcSyiALggYGICA">
    <div class="guide-item-container personal-item">
      <ul class="guide-user-links yt-box">
            <li class="vve-check guide-channel" id="guide_builder-guide-item">
        <a class="guide-item yt-uix-sessionlink yt-valign spf-nolink " href="http://www.itube.com/channels" title="Browse channels" data-sessionlink="feature=g-manage&amp;ei=uD5oUvvlLcSyiALggYGICA" data-channel-id="guide_builder">
    <span class="yt-valign-container">
        <span class="thumb guide-management-plus-icon">
          <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="">
        </span>
      <span class="display-name no-count">
        <span>Browse channels</span>
      </span>
    </span>

  </a>

  </li>

      </ul>
    </div>
    <hr class="guide-section-separator">
  </li>

            <li class="guide-section guide-header signup-promo guided-help-box">
    <p>
      Sign in now to see your channels and recommendations!
    </p>
    <div id="guide-builder-promo-buttons" class="signed-out clearfix">
      <a href="basic.html" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary yt-uix-button-size-default" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-content">Sign In </span></a>
    </div>
  </li>

    </ul>
  </div>

      </div>
        <div id="watch-context-container" class="guide-module collapsed hid"></div>

    </div>

</div><div id="player" class="  off-screen  ">
  <div id="playlist" class="playlist">
    
  </div>

  <div id="player-unavailable" class="  hid  ">
    
  </div>

    <div id="player-api" class="player-width player-height off-screen-target watch-content player-api" style="overflow: hidden;"><embed name="movie_player" id="movie_player" width="100%" height="100%" tabindex="0" type="application/x-shockwave-flash" src="http://s.ytimg.com/yts/swfbin/player-vfle5oFqK/watch_as3.swf" allowfullscreen="true" allowscriptaccess="always" bgcolor="#000000" flashvars="autoplay=0&amp;hl&amp;cr&amp;fexp=919110%2C935014%2C911305%2C916626%2C902547%2C924616%2C924610%2C907231%2C3300069%2C3300100%2C3300133%2C3300137%2C3300164%2C3310263%2C3310366%2C3310552%2C3310870&amp;enablejsapi=1&amp;eurl=http%3A%2F%2Fwww.itube.com%2F&amp;playerapiid=player2"></div>


    <script>if (window.ytcsi) {window.ytcsi.tick("bf", null, '');}</script>
    <script>var ytplayer = ytplayer || {};ytplayer.config = {"url": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vfle5oFqK\/watch_as3.swf", "sync_embed": false, "html5": false, "url_v8": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vfle5oFqK\/cps.swf", "assets": {"html": "\/html5_player_template", "css": "http:\/\/s.ytimg.com\/yts\/cssbin\/www-player-vflJBqoxz.css", "js": "http:\/\/s.ytimg.com\/yts\/jsbin\/html5player-vflK7RoTQ.js"}, "args": {"autoplay": "0", "hl": "", "cr": "", "fexp": "919110,935014,911305,916626,902547,924616,924610,907231,3300069,3300100,3300133,3300137,3300164,3310263,3310366,3310552,3310870", "enablejsapi": 1}, "params": {"allowfullscreen": "true", "allowscriptaccess": "always", "bgcolor": "#000000"}, "min_version": "8.0.0", "url_v9as2": "http:\/\/s.ytimg.com\/yts\/swfbin\/player-vfle5oFqK\/cps.swf", "sts": 15996, "attrs": {"id": "movie_player"}};</script>

  <div id="playlist-tray" class="playlist-tray">
    
  </div>

  

  <div id="player-branded-banner" class="player-branded-banner">
    
  </div>
</div><div id="content" class="">  





  <div class="branded-page-v2-container  branded-page-v2-secondary-column-hidden">
    <div class="branded-page-v2-col-container clearfix">
      <div class="branded-page-v2-primary-col">
            <div class="branded-page-v2-primary-col-header-container">
      
  <div id="context-source-container" data-context-source="Popular on itube" style="display:none;"></div>

    </div>
  <div class="branded-page-v2-body" id="gh-activityfeed">
        
    <div class="context-data-container">
          
          <div class="lohp-newspaper-shelf vve-check" data-sessionlink="ved=CBQQ0R4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    
    <div class="lohp-large-shelf-container">
        <div class="context-data-item" data-context-item-title="<?php echo $row['v_name']?>" data-context-item-views="2,363,768 views" data-context-item-id="SWcLqcqYF-4" data-context-item-type="video" data-context-item-user="Krrish 3" data-context-item-time="0:23" data-sessionlink="ved=CBUQ0h4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    
    <a href="test.php?id=<?=$row['vid']?>" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink yt-fluid-thumb-link contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CBUQ0h4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-370 yt-thumb-fluid">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" src="./itube_files/hqdefault.jpg" width="370">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="SWcLqcqYF-4" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="<?=$row['v_name'].'jpg'?>" alt="" title=""></button>
</a>
      <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CBUQ0h4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>" title="<?php echo $row['v_name']?>"><?php echo $row['v_name']?></a>


      <div class="lohp-video-metadata">
          <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="profile.php?user=<?=$row['uid']?>" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCt5A35uhB3dVf-KFGCOyqtA" data-name=""><?=$row['f_name']?></a>  <span class="yt-user-name-icon-verified">

    <img src="<?=$row['profile_pic'].'jpg'?>" alt="" title="Verified name">
  </span>

  </span>

          <span class="view-count">
		<?=$row['hits']?> VIEWS
  </span>

            <span class="content-item-time-created" title="1 week ago">
      UPLOADED ON <?php echo $row['upload_date']?>
    </span>

      </div>
  </div>

    </div>
    <div class="lohp-medium-shelves-container">
            <div class="lohp-medium-shelf context-data-item vve-check " data-context-item-title="Micromax Canvas Turbo with Hugh Jackman- Coming Soon" data-context-item-views="462,175 views" data-context-item-id="EKXMK8SyUFo" data-context-item-type="video" data-context-item-user="Micromax Mobile" data-context-item-time="0:11" data-sessionlink="ved=CBcQ0x4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
    <?php
		$no=3;
		while($no!=0){
		$no--;
	$row = mysql_fetch_array($kvnm);?>
 <div class="lohp-medium-shelf context-data-item vve-check " data-context-item-title="Grand Theft Auto 5 &quot;MILITARY&quot; &quot;JET&quot; Hydra Plane Night Time ( GTA V GAMEPLAY )" data-context-item-views="204,110 views" data-context-item-id="z8BY735IStc" data-context-item-type="video" data-context-item-user="iKmRni" data-context-item-time="14:15" data-sessionlink="ved=CBkQ0B4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">
    
    <div class="lohp-media-object">
      <a href="test.php?id=<?=$row['vid']?>z8BY735IStc" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CBkQ0B4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-170">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" src="./itube_files/mqdefault(1).jpg" width="170">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">14:15</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="z8BY735IStc" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
    </div>
    <div class="lohp-media-object-content lohp-medium-shelf-content">
        <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CBkQ0B4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>z8BY735IStc" title="Grand Theft Auto 5 &quot;MILITARY&quot; &quot;JET&quot; Hydra Plane Night Time ( GTA V GAMEPLAY )">Grand Theft Auto 5 "MILITARY" "JET" Hydra Plane Night Time ( GTA V GAMEPLAY )</a>

      <div class="lohp-video-metadata attached">
          <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/iKmRni" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCLhgYH8bGlcRl1IOzlqNReg" data-name="">iKmRni</a>
  </span>

      </div>
        <div class="lohp-video-metadata">
              <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

            <span class="view-count">
      204,110 views
  </span>

              <span class="content-item-time-created" title="1 month ago">
      1 month ago
    </span>

        </div>
    </div>
  </div>

	<?php }?>
		
      
    </div>
  </div>



    
        <div class="lohp-vbox-list vve-check lohp-left-vbox-list" data-sessionlink="ved=CB0Q1R4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="vve-check" data-sessionlink="ved=CB4Qyx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check last-shelf-in-line" data-sessionlink="ved=CB8QzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HC7JFgdyL7xqw" title="Most Popular" data-sessionlink="ved=CCAQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Most Popular
      </a>
        <a href="http://www.itube.com/watch_videos?title=Most+Popular&feature=c4-overview&type=0&video_ids=AcB2BqM9MQk%2CgO6cFMRqXqU%2CEF3WDQTEpYU&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item " data-context-item-title="Making of Baahubali - Happy Birthday Prabhas" data-context-item-views="238,433 views" data-context-item-id="AcB2BqM9MQk" data-context-item-type="video" data-context-item-user="Baahubali Movie" data-context-item-time="1:36">
          
          <a href="test.php?id=<?=$row['vid']?>AcB2BqM9MQk" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CCEQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/AcB2BqM9MQk/mqdefault.jpg" src="./itube_files/mqdefault(3).jpg" width="189" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:36</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="AcB2BqM9MQk" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CCEQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>AcB2BqM9MQk" title="Making of Baahubali - Happy Birthday Prabhas">Making of Baahubali - Happy Birthday Prabhas</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      238,433 views
  </span>

                <span class="content-item-time-created" title="14 hours ago">
      14 hours ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  " data-context-item-title="Stay hungry...Stat foolish. Amazing Steve Jobs Speech at Stanford with english subtitles" data-context-item-views="347,100 views" data-context-item-id="gO6cFMRqXqU" data-context-item-type="video" data-context-item-user="Ramesh Ramanujan" data-context-item-time="14:34">
          
          <a href="test.php?id=<?=$row['vid']?>gO6cFMRqXqU" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CCMQzB4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/gO6cFMRqXqU/mqdefault.jpg" src="./itube_files/mqdefault(4).jpg" width="189" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">14:34</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="gO6cFMRqXqU" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CCMQzB4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>gO6cFMRqXqU" title="Stay hungry...Stat foolish. Amazing Steve Jobs Speech at Stanford with english subtitles">Stay hungry...Stat foolish. Amazing Steve Jobs Speech at Stanford with english subtitles</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      347,100 views
  </span>

                <span class="content-item-time-created" title="2 years ago">
      2 years ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  last-shelf-item " data-context-item-title="GTA 5: Funny Moments! #2 - Golf, Police Chases, Planes! - (GTA V Adventures)" data-context-item-views="1,216,981 views" data-context-item-id="EF3WDQTEpYU" data-context-item-type="video" data-context-item-user="TheGamingLemon" data-context-item-time="13:14">
          
          <a href="test.php?id=<?=$row['vid']?>EF3WDQTEpYU" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CCUQzB4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/EF3WDQTEpYU/mqdefault.jpg" src="./itube_files/mqdefault(5).jpg" width="189" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">13:14</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="EF3WDQTEpYU" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CCUQzB4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>EF3WDQTEpYU" title="GTA 5: Funny Moments! #2 - Golf, Police Chases, Planes! - (GTA V Adventures)">GTA 5: Funny Moments! #2 - Golf, Police Chases, Planes! - (GTA V Adventures)</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      1,216,981 views
  </span>

                <span class="content-item-time-created" title="1 month ago">
      1 month ago
    </span>

          </div>
        </div>
    </div>
  </div>

  </div>

          <div class="vve-check" data-sessionlink="ved=CCcQyx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check " data-sessionlink="ved=CCgQzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-2">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HCxAJ-ON2kZuw" title="Entertainment" data-sessionlink="ved=CCkQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Entertainment
      </a>
        <a href="http://www.itube.com/watch_videos?title=Entertainment&feature=c4-overview&type=0&video_ids=u9dRv_RKX-c%2C7y-1hgWpyxw&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item " data-context-item-title="Comedy Nights with Kapil - Farah Khan - 20th October 2013 - Full Episode (HD)" data-context-item-views="318,586 views" data-context-item-id="u9dRv_RKX-c" data-context-item-type="video" data-context-item-user="Colors TV" data-context-item-time="1:04:21">
          
          <a href="test.php?id=<?=$row['vid']?>u9dRv_RKX-c" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CCoQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-182">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/u9dRv_RKX-c/mqdefault.jpg" src="./itube_files/mqdefault(6).jpg" width="182" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:04:21</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="u9dRv_RKX-c" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CCoQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>u9dRv_RKX-c" title="Comedy Nights with Kapil - Farah Khan - 20th October 2013 - Full Episode (HD)">Comedy Nights with Kapil - Farah Khan - 20th October 2013 - Full Episode (HD)</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      318,586 views
  </span>

                <span class="content-item-time-created" title="3 days ago">
      3 days ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  last-shelf-item " data-context-item-title="Masala Promo - Viva Harsha with Venkatesh" data-context-item-views="249,717 views" data-context-item-id="7y-1hgWpyxw" data-context-item-type="video" data-context-item-user="sabarish kandregula" data-context-item-time="5:00">
          
          <a href="test.php?id=<?=$row['vid']?>7y-1hgWpyxw" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CCwQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-182">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/7y-1hgWpyxw/mqdefault.jpg" src="./itube_files/mqdefault(7).jpg" width="182" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">5:00</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="7y-1hgWpyxw" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CCwQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>7y-1hgWpyxw" title="Masala Promo - Viva Harsha with Venkatesh">Masala Promo - Viva Harsha with Venkatesh</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      249,717 views
  </span>

                <span class="content-item-time-created" title="4 days ago">
      4 days ago
    </span>

          </div>
        </div>
    </div>
  </div>

          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check last-shelf-in-line" data-sessionlink="ved=CC4QzR4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-1">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HCOvlZkU39tdk" title="Movies" data-sessionlink="ved=CC8Qzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Movies
      </a>
        <a href="http://www.itube.com/watch_videos?title=Movies&feature=c4-overview&type=0&video_ids=VlOxlSOr3_M%2CJ39iyK_aqDE&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item last-shelf-item " data-context-item-title="Telekinetic Coffee Shop Surprise" data-context-item-views="44,273,930 views" data-context-item-id="VlOxlSOr3_M" data-context-item-type="video" data-context-item-user="CarrieNYC" data-context-item-time="2:24">
          
          <a href="test.php?id=<?=$row['vid']?>VlOxlSOr3_M" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CDAQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-165">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/VlOxlSOr3_M/mqdefault.jpg" src="./itube_files/mqdefault(8).jpg" width="165" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">2:24</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="VlOxlSOr3_M" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CDAQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>VlOxlSOr3_M" title="Telekinetic Coffee Shop Surprise">Telekinetic Coffee Shop Surprise</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      44,273,930 views
  </span>

                <span class="content-item-time-created" title="2 weeks ago">
      2 weeks ago
    </span>

          </div>
        </div>
    </div>
  </div>

  </div>

          <div class="vve-check" data-sessionlink="ved=CDIQyx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check " data-sessionlink="ved=CDMQzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-1">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/user/colorstv" title="Colors TV" data-sessionlink="ved=CDQQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Colors TV
      </a>
  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item last-shelf-item " data-context-item-title="Comedy Nights with Kapil - Juhi Chawla - 7th September 2013 - Full Episode (HD)" data-context-item-views="840,866 views" data-context-item-id="bF3kQVqkunk" data-context-item-type="video" data-context-item-user="Colors TV" data-context-item-time="1:02:43">
          
          <a href="test.php?id=<?=$row['vid']?>bF3kQVqkunk" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CDUQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-165">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/bF3kQVqkunk/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="165" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:02:43</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="bF3kQVqkunk" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CDUQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>bF3kQVqkunk" title="Comedy Nights with Kapil - Juhi Chawla - 7th September 2013 - Full Episode (HD)">Comedy Nights with Kapil - Juhi Chawla - 7th September 2013 - Full Episode (HD)</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      840,866 views
  </span>

                <span class="content-item-time-created" title="1 month ago">
      1 month ago
    </span>

          </div>
        </div>
    </div>
  </div>

          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check last-shelf-in-line" data-sessionlink="ved=CDcQzR4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-2">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HChfZhJdhTqX8" title="Gaming" data-sessionlink="ved=CDgQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Gaming
      </a>
        <a href="http://www.itube.com/watch_videos?title=Gaming&feature=c4-overview&type=0&video_ids=5xP12tpJrl8%2Cwck6l-CAUVA&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item " data-context-item-title="Angry Birds Go! Official Gameplay Trailer - Game out December 11!" data-context-item-views="4,335,902 views" data-context-item-id="5xP12tpJrl8" data-context-item-type="video" data-context-item-user="RovioMobile" data-context-item-time="1:12">
          
          <a href="test.php?id=<?=$row['vid']?>5xP12tpJrl8" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CDkQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-182">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/5xP12tpJrl8/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="182" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:12</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="5xP12tpJrl8" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CDkQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>5xP12tpJrl8" title="Angry Birds Go! Official Gameplay Trailer - Game out December 11!">Angry Birds Go! Official Gameplay Trailer - Game out December 11!</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      4,335,902 views
  </span>

                <span class="content-item-time-created" title="1 week ago">
      1 week ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  last-shelf-item " data-context-item-title="GTA V - $26,000,000 Spending Spree! Bugatti Veyronn Police Chases &amp; More! *LIVESTREAM*" data-context-item-views="4,776,721 views" data-context-item-id="wck6l-CAUVA" data-context-item-type="video" data-context-item-user="TheSyndicateProject" data-context-item-time="2:34:32">
          
          <a href="test.php?id=<?=$row['vid']?>wck6l-CAUVA" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CDsQzB4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-182">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/wck6l-CAUVA/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="182" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">2:34:32</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="wck6l-CAUVA" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CDsQzB4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>wck6l-CAUVA" title="GTA V - $26,000,000 Spending Spree! Bugatti Veyronn Police Chases &amp; More! *LIVESTREAM*">GTA V - $26,000,000 Spending Spree! Bugatti Veyronn Police Chases &amp; More! *LIVESTREAM*</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      4,776,721 views
  </span>

                <span class="content-item-time-created" title="1 month ago">
      1 month ago
    </span>

          </div>
        </div>
    </div>
  </div>

  </div>

          <div class="vve-check" data-sessionlink="ved=CD0Qyx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check last-shelf-in-line" data-sessionlink="ved=CD4QzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/user/TheViralFeverVideos" title="TheViralFeverVideos" data-sessionlink="ved=CD8Qzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        TheViralFeverVideos
      </a>
        <a href="http://www.itube.com/watch_videos?title=TheViralFeverVideos&feature=c4-overview&type=0&video_ids=gTTZts236qo%2Cz6kcCcCjHgA%2CveLfT68kJ8w&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item " data-context-item-title="Chai Sutta Chronicles - Ep. 3 (The Andaz Apna Apna Fanaticism)" data-context-item-views="54,907 views" data-context-item-id="gTTZts236qo" data-context-item-type="video" data-context-item-user="TheViralFeverVideos" data-context-item-time="6:35">
          
          <a href="test.php?id=<?=$row['vid']?>gTTZts236qo" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CEAQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/gTTZts236qo/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="189" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">6:35</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="gTTZts236qo" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CEAQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>gTTZts236qo" title="Chai Sutta Chronicles - Ep. 3 (The Andaz Apna Apna Fanaticism)">Chai Sutta Chronicles - Ep. 3 (The Andaz Apna Apna Fanaticism)</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      54,907 views
  </span>

                <span class="content-item-time-created" title="2 days ago">
      2 days ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  " data-context-item-title="Lage Raho Shetty Bhai : Blockbuster Qtiyapa" data-context-item-views="391,304 views" data-context-item-id="z6kcCcCjHgA" data-context-item-type="video" data-context-item-user="TheViralFeverVideos" data-context-item-time="17:10">
          
          <a href="test.php?id=<?=$row['vid']?>z6kcCcCjHgA" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CEIQzB4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/z6kcCcCjHgA/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="189" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">17:10</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="z6kcCcCjHgA" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CEIQzB4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>z6kcCcCjHgA" title="Lage Raho Shetty Bhai : Blockbuster Qtiyapa">Lage Raho Shetty Bhai : Blockbuster Qtiyapa</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      391,304 views
  </span>

                <span class="content-item-time-created" title="1 month ago">
      1 month ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  last-shelf-item " data-context-item-title="100 crore ka Qtiyapa : Bollywood Qtiyapa (ft. Anurag Kashyap)" data-context-item-views="417,599 views" data-context-item-id="veLfT68kJ8w" data-context-item-type="video" data-context-item-user="TheViralFeverVideos" data-context-item-time="7:42">
          
          <a href="test.php?id=<?=$row['vid']?>veLfT68kJ8w" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CEQQzB4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/veLfT68kJ8w/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="189" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">7:42</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="veLfT68kJ8w" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CEQQzB4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>veLfT68kJ8w" title="100 crore ka Qtiyapa : Bollywood Qtiyapa (ft. Anurag Kashyap)">100 crore ka Qtiyapa : Bollywood Qtiyapa (ft. Anurag Kashyap)</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      417,599 views
  </span>

                <span class="content-item-time-created" title="3 months ago">
      3 months ago
    </span>

          </div>
        </div>
    </div>
  </div>

  </div>

          <div class="vve-check" data-sessionlink="ved=CEYQyx4oBA&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check last-shelf-in-line" data-sessionlink="ved=CEcQzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HCp-Rdqh3z4Uc" title="Music" data-sessionlink="ved=CEgQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Music
      </a>
        <a href="http://www.itube.com/watch_videos?title=Music&feature=c4-overview&type=0&video_ids=bC47NhozqG4%2CyP3d3GXZOGg%2CWari4RAj30c&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item " data-context-item-title="Ram Chahe Leela Song ft. Priyanka Chopra - Ram-leela" data-context-item-views="111,561 views" data-context-item-id="bC47NhozqG4" data-context-item-type="video" data-context-item-user="Eros Now" data-context-item-time="2:40">
          
          <a href="test.php?id=<?=$row['vid']?>bC47NhozqG4" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CEkQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/bC47NhozqG4/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="189" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">2:40</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="bC47NhozqG4" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CEkQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>bC47NhozqG4" title="Ram Chahe Leela Song ft. Priyanka Chopra - Ram-leela">Ram Chahe Leela Song ft. Priyanka Chopra - Ram-leela</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      111,561 views
  </span>

                <span class="content-item-time-created" title="14 hours ago">
      14 hours ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  " data-context-item-title="Chingam Chabake - Official Song - Gori Tere Pyaar Mein - Imran Khan, Kareena Kapoor" data-context-item-views="463,795 views" data-context-item-id="yP3d3GXZOGg" data-context-item-type="video" data-context-item-user="Dharma Productions" data-context-item-time="2:26">
          
          <a href="test.php?id=<?=$row['vid']?>yP3d3GXZOGg" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CEsQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/yP3d3GXZOGg/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="189" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">2:26</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="yP3d3GXZOGg" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CEsQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>yP3d3GXZOGg" title="Chingam Chabake - Official Song - Gori Tere Pyaar Mein - Imran Khan, Kareena Kapoor">Chingam Chabake - Official Song - Gori Tere Pyaar Mein - Imran Khan, Kareena Kapoor</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      463,795 views
  </span>

                <span class="content-item-time-created" title="6 days ago">
      6 days ago
    </span>

          </div>
        </div>

        <div class="lohp-category-shelf-item context-data-item  last-shelf-item " data-context-item-title="Pyaar Mera | Jassi Gill | Pav Dharia | Full Official Music Video" data-context-item-views="74,004 views" data-context-item-id="Wari4RAj30c" data-context-item-type="video" data-context-item-user="Speed Records" data-context-item-time="3:24">
          
          <a href="test.php?id=<?=$row['vid']?>Wari4RAj30c" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CE0Qzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-189">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/Wari4RAj30c/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="189" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">3:24</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="Wari4RAj30c" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CE0Qzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>Wari4RAj30c" title="Pyaar Mera | Jassi Gill | Pav Dharia | Full Official Music Video">Pyaar Mera | Jassi Gill | Pav Dharia | Full Official Music Video</a>

          <div class="lohp-video-metadata">
              <span class="view-count">
      74,004 views
  </span>

                <span class="content-item-time-created" title="2 days ago">
      2 days ago
    </span>

          </div>
        </div>
    </div>
  </div>

  </div>

          <div class="vve-check" data-sessionlink="ved=CE8Qyx4oBQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check " data-sessionlink="ved=CFAQzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-1">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HCyTDgDzrvL5w" title="Bjarne Stroustrup" data-sessionlink="ved=CFEQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Bjarne Stroustrup
      </a>
  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item last-shelf-item " data-context-item-title="2013 ICPC Bjarne Stroustrup" data-context-item-views="4,290 views" data-context-item-id="6lJwgA0bNCc" data-context-item-type="video" data-context-item-user="ICPCNews" data-context-item-time="7:58">
          
          <a href="test.php?id=<?=$row['vid']?>6lJwgA0bNCc" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CFIQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-165">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/6lJwgA0bNCc/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="165" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">7:58</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="6lJwgA0bNCc" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CFIQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>6lJwgA0bNCc" title="2013 ICPC Bjarne Stroustrup">2013 ICPC Bjarne Stroustrup</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      4,290 views
  </span>

                <span class="content-item-time-created" title="3 months ago">
      3 months ago
    </span>

          </div>
        </div>
    </div>
  </div>

          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check " data-sessionlink="ved=CFQQzR4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-1">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/user/thnkrtv" title="THNKR" data-sessionlink="ved=CFUQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        THNKR
      </a>
  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item last-shelf-item " data-context-item-title="15-Yr-Old Kelvin Doe Wows M.I.T." data-context-item-views="5,087,837 views" data-context-item-id="XOLOLrUBRBY" data-context-item-type="video" data-context-item-user="THNKR" data-context-item-time="10:07">
          
          <a href="test.php?id=<?=$row['vid']?>XOLOLrUBRBY" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CFYQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-165">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/XOLOLrUBRBY/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="165" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">10:07</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="XOLOLrUBRBY" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CFYQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>XOLOLrUBRBY" title="15-Yr-Old Kelvin Doe Wows M.I.T.">15-Yr-Old Kelvin Doe Wows M.I.T.</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      5,087,837 views
  </span>

                <span class="content-item-time-created" title="11 months ago">
      11 months ago
    </span>

          </div>
        </div>
    </div>
  </div>

          <div class="lohp-shelf-cell-container lohp-category-shelf vve-check last-shelf-in-line" data-sessionlink="ved=CFgQzR4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">
    

    <div class="lohp-category-shelf-item-list lohp-shelf-size-1">
              <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/user/MIT" title="Massachusetts Institute of Technology" data-sessionlink="ved=CFkQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Massachusetts Institute of Technology
      </a>
        <a href="http://www.itube.com/watch_videos?title=Massachusetts+Institute+of+Technology&feature=c4-overview&type=0&video_ids=OQ5jsbhAv_M%2CwFP5VHGHFdk&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>



        <div class="lohp-category-shelf-item context-data-item first-shelf-item last-shelf-item " data-context-item-title="19. Dynamic Programming I: Fibonacci, Shortest Paths" data-context-item-views="44,362 views" data-context-item-id="OQ5jsbhAv_M" data-context-item-type="video" data-context-item-user="MIT" data-context-item-time="51:47">
          
          <a href="test.php?id=<?=$row['vid']?>OQ5jsbhAv_M" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-vrec&amp;ved=CFoQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-165">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/OQ5jsbhAv_M/mqdefault.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="165" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">51:47</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="OQ5jsbhAv_M" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
            <a class="lohp-video-link max-line-2 yt-uix-sessionlink " data-sessionlink="feature=g-vrec&amp;ved=CFoQzB4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>OQ5jsbhAv_M" title="19. Dynamic Programming I: Fibonacci, Shortest Paths">19. Dynamic Programming I: Fibonacci, Shortest Paths</a>

          <div class="lohp-video-metadata">
                <img class="yt-recommended-icon yt-uix-tooltip" src="./itube_files/pixel-vfl3z5WfW.gif" title="Recommended for You" alt="">

              <span class="view-count">
      44,362 views
  </span>

                <span class="content-item-time-created" title="9 months ago">
      9 months ago
    </span>

          </div>
        </div>
    </div>
  </div>

  </div>

  </div>



    
        <div class="lohp-vbox-list vve-check lohp-right-vbox-list" data-sessionlink="ved=CFwQ1R4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">
          <div class="lohp-vertical-shelf vve-check" data-sessionlink="ved=CF0QzR4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">
    
            <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HCp-Rdqh3z4Uc" title="Music" data-sessionlink="ved=CF4Qzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Music
      </a>
        <a href="http://www.itube.com/watch_videos?title=Music&feature=c4-overview&type=0&video_ids=LrUvu1mlWco%2Cpco91kroVgQ%2ChXHoeO9o0ZE%2CcLIQzxgFeNE&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>


      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Miley Cyrus - We Can&#39;t Stop" data-context-item-views="251,499,343 views" data-context-item-id="LrUvu1mlWco" data-context-item-type="video" data-context-item-user="MileyCyrusVEVO" data-context-item-time="3:34">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>LrUvu1mlWco" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CF8Qzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/LrUvu1mlWco/default.jpg" src="./itube_files/default(4).jpg" width="64" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">3:34</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="LrUvu1mlWco" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CF8Qzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>LrUvu1mlWco" title="Miley Cyrus - We Can&#39;t Stop">Miley Cyrus - We Can't Stop</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/MileyCyrusVEVO" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCdI8evszfZvyAl2UVCypkTA" data-name="">MileyCyrusVEVO</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Lady Gaga - Applause (Official)" data-context-item-views="88,360,999 views" data-context-item-id="pco91kroVgQ" data-context-item-type="video" data-context-item-user="LadyGagaVEVO" data-context-item-time="3:35">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>pco91kroVgQ" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CGEQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/pco91kroVgQ/default.jpg" src="./itube_files/default(5).jpg" width="64" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">3:35</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="pco91kroVgQ" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CGEQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>pco91kroVgQ" title="Lady Gaga - Applause (Official)">Lady Gaga - Applause (Official)</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/LadyGagaVEVO" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UC07Kxew-cMIaykMOkzqHtBQ" data-name="">LadyGagaVEVO</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Gandi Baat Song ft. Shahid Kapoor, Prabhu Dheva &amp; Sonakshi Sinha | R...Rajkumar" data-context-item-views="1,281,993 views" data-context-item-id="hXHoeO9o0ZE" data-context-item-type="video" data-context-item-user="Eros Now" data-context-item-time="2:32">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>hXHoeO9o0ZE" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CGMQzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/hXHoeO9o0ZE/default.jpg" src="./itube_files/default(6).jpg" width="64" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">2:32</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="hXHoeO9o0ZE" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CGMQzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>hXHoeO9o0ZE" title="Gandi Baat Song ft. Shahid Kapoor, Prabhu Dheva &amp; Sonakshi Sinha | R...Rajkumar">Gandi Baat Song ft. Shahid Kapoor, Prabhu Dheva &amp; Sonakshi Sinha | R...Rajkumar</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/erosentertainment" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCX52tYZiEh_mHoFja3Veciw" data-name="">Eros Now</a>  <span class="yt-user-name-icon-verified">
    <img src="./itube_files/pixel-vfl3z5WfW.gif" class="yt-uix-tooltip yt-channel-title-icon-verified" alt="" title="Verified name">
  </span>

  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Nagada Sang Dhol Song - Ram-leela ft. Deepika Padukone, Ranveer Singh" data-context-item-views="4,777,896 views" data-context-item-id="cLIQzxgFeNE" data-context-item-type="video" data-context-item-user="Eros Now" data-context-item-time="3:28">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>cLIQzxgFeNE" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CGUQzx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/cLIQzxgFeNE/default.jpg" src="./itube_files/default(7).jpg" width="64" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">3:28</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="cLIQzxgFeNE" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CGUQzx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>cLIQzxgFeNE" title="Nagada Sang Dhol Song - Ram-leela ft. Deepika Padukone, Ranveer Singh">Nagada Sang Dhol Song - Ram-leela ft. Deepika Padukone, Ranveer Singh</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/erosentertainment" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCX52tYZiEh_mHoFja3Veciw" data-name="">Eros Now</a>  <span class="yt-user-name-icon-verified">
    <img src="./itube_files/pixel-vfl3z5WfW.gif" class="yt-uix-tooltip yt-channel-title-icon-verified" alt="" title="Verified name">
  </span>

  </span>

          </div>
        </div>
      </div>
  </div>

          <div class="lohp-vertical-shelf vve-check" data-sessionlink="ved=CGcQzR4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">
    
            <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/channel/HC7JFgdyL7xqw" title="Most Popular" data-sessionlink="ved=CGgQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Most Popular
      </a>
        <a href="http://www.itube.com/watch_videos?title=Most+Popular&feature=c4-overview&type=0&video_ids=epXPJqGmpG4%2CoD26Mrf1mck%2CbmaT3s2_lxk%2CJpdJaRIq6yA&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>


      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="www.mistmag.com Refreshing and Unexpected" data-context-item-views="1,704,070 views" data-context-item-id="epXPJqGmpG4" data-context-item-type="video" data-context-item-user="Mist Magazine" data-context-item-time="0:53">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>epXPJqGmpG4" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CGkQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/epXPJqGmpG4/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">0:53</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="epXPJqGmpG4" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CGkQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>epXPJqGmpG4" title="www.mistmag.com Refreshing and Unexpected">www.mistmag.com Refreshing and Unexpected</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/channel/UCku1_xSD_PPEFneiZd-wctg" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCku1_xSD_PPEFneiZd-wctg" data-name="">Mist Magazine</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="The Ultimate Smartphone Photobooth" data-context-item-views="3,252,504 views" data-context-item-id="oD26Mrf1mck" data-context-item-type="video" data-context-item-user="SnapdragonProcessors" data-context-item-time="1:39">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>oD26Mrf1mck" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CGsQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/oD26Mrf1mck/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:39</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="oD26Mrf1mck" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CGsQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>oD26Mrf1mck" title="The Ultimate Smartphone Photobooth">The Ultimate Smartphone Photobooth</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/SnapdragonProcessors" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCZRYEa3YILhcdYd7MHkFGzg" data-name="">SnapdragonProcessors</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Bigg Boss 7 SHILPA EVICTED in Bigg Boss 7 19th October 2013 Day 34 FULL EPISODE" data-context-item-views="51,111 views" data-context-item-id="bmaT3s2_lxk" data-context-item-type="video" data-context-item-user="telebuzz" data-context-item-time="0:51">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>bmaT3s2_lxk" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CG0Qzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/bmaT3s2_lxk/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">0:51</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="bmaT3s2_lxk" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CG0Qzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>bmaT3s2_lxk" title="Bigg Boss 7 SHILPA EVICTED in Bigg Boss 7 19th October 2013 Day 34 FULL EPISODE">Bigg Boss 7 SHILPA EVICTED in Bigg Boss 7 19th October 2013 Day 34 FULL EPISODE</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/telebuzz" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCYpoE9KwaVGxK7CvIAVzgnA" data-name="">telebuzz</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Jabardasth - 17th October 2013 (Full Episode)" data-context-item-views="144,892 views" data-context-item-id="JpdJaRIq6yA" data-context-item-type="video" data-context-item-user="etvteluguindia" data-context-item-time="1:07:09">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>JpdJaRIq6yA" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CG8Qzx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/JpdJaRIq6yA/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:07:09</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="JpdJaRIq6yA" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CG8Qzx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>JpdJaRIq6yA" title="Jabardasth - 17th October 2013 (Full Episode)">Jabardasth - 17th October 2013 (Full Episode)</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/etvteluguindia" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCSs9H1cyB3OHdy8wkit8ZKg" data-name="">etvteluguindia</a>
  </span>

          </div>
        </div>
      </div>
  </div>

          <div class="lohp-vertical-shelf vve-check" data-sessionlink="ved=CHEQzR4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">
    
            <h2 class="branded-page-module-title">

      <a class="yt-uix-sessionlink branded-page-module-title-link spf-nolink" href="http://www.itube.com/feed/recommended" title="Recommended" data-sessionlink="ved=CHIQzh4&amp;ei=uD5oUvvlLcSyiALggYGICA">
        Recommended
      </a>
        <a href="http://www.itube.com/watch_videos?title=Recommended&feature=c4-overview&type=0&video_ids=zIchxokpg0g%2CHQ3O7MTj6K4%2CiUt15WbF1_4%2C1dpfBJoOBl0&more_url=" class="yt-uix-button  shelves-play yt-uix-sessionlink yt-uix-button-default yt-uix-button-size-small" data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-play-all" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></span><span class="yt-uix-button-content">Play </span></a>

  </h2>


      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Comedy Nights with Kapil - Ranbir Kapoor &amp; Pallavi Sharda - 21st September 2013 - Full Episode (HD)" data-context-item-views="1,936,917 views" data-context-item-id="zIchxokpg0g" data-context-item-type="video" data-context-item-user="Colors TV" data-context-item-time="1:02:56">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>zIchxokpg0g" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CHMQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/zIchxokpg0g/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">1:02:56</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="zIchxokpg0g" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CHMQzx4oAA&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>zIchxokpg0g" title="Comedy Nights with Kapil - Ranbir Kapoor &amp; Pallavi Sharda - 21st September 2013 - Full Episode (HD)">Comedy Nights with Kapil - Ranbir Kapoor &amp; Pallavi Sharda - 21st September 2013 - Full Episode (HD)</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/colorstv" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UC55IWqFLDH1Xp7iu1_xknRA" data-name="">Colors TV</a>  <span class="yt-user-name-icon-verified">
    <img src="./itube_files/pixel-vfl3z5WfW.gif" class="yt-uix-tooltip yt-channel-title-icon-verified" alt="" title="Verified name">
  </span>

  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="2012 ACM-ICPC World Finals Recap- All 112 teams &amp; the World Champions!" data-context-item-views="5,670 views" data-context-item-id="HQ3O7MTj6K4" data-context-item-type="video" data-context-item-user="ICPCNews" data-context-item-time="7:33">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>HQ3O7MTj6K4" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CHUQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/HQ3O7MTj6K4/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">7:33</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="HQ3O7MTj6K4" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CHUQzx4oAQ&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>HQ3O7MTj6K4" title="2012 ACM-ICPC World Finals Recap- All 112 teams &amp; the World Champions!">2012 ACM-ICPC World Finals Recap- All 112 teams &amp; the World Champions!</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/ICPCNews" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UCJXZBqxnXfJatj4EfY48yZg" data-name="">ICPCNews</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Homeopathy: The Test (BBC Documentary Films)" data-context-item-views="75,399 views" data-context-item-id="iUt15WbF1_4" data-context-item-type="video" data-context-item-user="OfficiaIScience" data-context-item-time="43:45">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>iUt15WbF1_4" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CHcQzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/iUt15WbF1_4/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">43:45</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="iUt15WbF1_4" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CHcQzx4oAg&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>iUt15WbF1_4" title="Homeopathy: The Test (BBC Documentary Films)">Homeopathy: The Test (BBC Documentary Films)</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/OfficiaIScience" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UC_Jg-6JfvSn1an9_fxwEpcA" data-name="">OfficiaIScience</a>
  </span>

          </div>
        </div>
      </div>
      <div class="lohp-vertical-shelf-item context-data-item" data-context-item-title="Comedy Nights with Kapil - Priyanka Chopra &amp; Ram Charan - 31st August 2013 - Full Episode (HD)" data-context-item-views="1,373,028 views" data-context-item-id="1dpfBJoOBl0" data-context-item-type="video" data-context-item-user="Colors TV" data-context-item-time="59:45">
        <div class="lohp-media-object ">
          <a href="test.php?id=<?=$row['vid']?>1dpfBJoOBl0" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto lohp-thumb-wrap" data-sessionlink="feature=g-logo&amp;ved=CHkQzx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA">    <span class="video-thumb  yt-thumb yt-thumb-64">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img alt="Thumbnail" data-thumb="//i1.ytimg.com/vi/1dpfBJoOBl0/default.jpg" src="./itube_files/pixel-vfl3z5WfW.gif" width="64" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
    <span class="video-time">59:45</span>


  <button onClick=";return false;" title="Watch Later" class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-size-small yt-uix-tooltip" type="button" data-video-ids="1dpfBJoOBl0" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content">  <img src="./itube_files/pixel-vfl3z5WfW.gif" alt="Watch Later">
 </span><img class="yt-uix-button-arrow" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</a>
        </div>
        <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
            <a class="lohp-video-link max-line-3 yt-uix-sessionlink " data-sessionlink="feature=g-logo&amp;ved=CHkQzx4oAw&amp;ei=uD5oUvvlLcSyiALggYGICA" href="test.php?id=<?=$row['vid']?>1dpfBJoOBl0" title="Comedy Nights with Kapil - Priyanka Chopra &amp; Ram Charan - 31st August 2013 - Full Episode (HD)">Comedy Nights with Kapil - Priyanka Chopra &amp; Ram Charan - 31st August 2013 - Full Episode (HD)</a>

          <div class="lohp-video-metadata attached">
              <span class="content-uploader spf-nolink">
<span class="username-prepend">by</span> <a href="http://www.itube.com/user/colorstv" class="g-hovercard yt-uix-sessionlink yt-user-name " data-sessionlink="ei=uD5oUvvlLcSyiALggYGICA" dir="ltr" data-ytid="UC55IWqFLDH1Xp7iu1_xknRA" data-name="">Colors TV</a>  <span class="yt-user-name-icon-verified">
    <img src="./itube_files/pixel-vfl3z5WfW.gif" class="yt-uix-tooltip yt-channel-title-icon-verified" alt="" title="Verified name">
  </span>

  </span>

          </div>
        </div>
      </div>
  </div>

  </div>

  <div style="clear:both;"></div>



    </div>
  <div id="footer-ads">
            


  <div id="ad_creative_3" class="ad-div " style="z-index: 1">
      <div id="ad_creative_div_3"><iframe id="ad_creative_iframe_3" width="1" height="1" scrolling="no" frameborder="0" src="./itube_files/;sz=1x1;tile=3;dc_yt=1;kage=20;kar=3;kga=1001;kgender=m;kgg=1;klg=en;kmyd=ad_creative_3.htm" style="z-index: 1;"></iframe></div>
      <script>(function() {function tagMpuIframe() {var containerEl = document.getElementById('ad_creative_div_3');if (!containerEl) {return;}var iframeEl = document.createElement('iframe');var iframeSrc = 'http://ad.doubleclick.net/N6762/adi/mkt.ythome_1x1/;sz=1x1;tile=3;dc_yt=1;kage=20;kar=3;kga=1001;kgender=m;kgg=1;klg=en;kmyd=ad_creative_3;ord=' +Math.floor(Math.random() * 10000000000000000) +'?';iframeEl.id = 'ad_creative_iframe_3';iframeEl.width = '1';iframeEl.height = '1';iframeEl.style.cssText = 'z-index:1;';iframeEl.scrolling = 'no';iframeEl.frameBorder = '0';containerEl.appendChild(iframeEl);iframeEl.src = iframeSrc;}tagMpuIframe();})();</script>
  </div>


  </div>

  </div>

      </div>
    </div>
  </div>
</div></div></div></div>
<?php include 'footer.html'?>

      <div class="yt-dialog hid" id="feed-privacy-lb">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg">
        <div class="yt-dialog-fg-content">
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
    <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Loading...</div>
  </div>

          </div>
          <div class="yt-dialog-content">
              <div id="feed-privacy-dialog">
  </div>

          </div>
          <div class="yt-dialog-working">
              <div id="yt-dialog-working-overlay">
  </div>
  <div id="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
      <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Working...</div>
    </div>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>



    <div id="shared-addto-watch-later-login" class="hid">
      <a href="https://accounts.google.com/ServiceLogin?continue=http%3A%2F%2Fwww.itube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26feature%3Dplaylist%26hl%3Den%26next%3D%252F&hl=en&passive=true&service=itube&uilel=3" class="sign-in-link">Sign in</a> to add this to Watch Later

    </div>

  <div id="shared-addto-menu" style="display: none;" class="hid sign-in">
      <div class="addto-menu">
        <div id="addto-list-panel" class="menu-panel active-panel">
          <span class="addto-playlist-item yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750">
<img class="playlist-status" src="./itube_files/pixel-vfl3z5WfW.gif" alt="" title=""><a href="https://accounts.google.com/ServiceLogin?continue=http%3A%2F%2Fwww.itube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26feature%3Dplaylist%26hl%3Den%26next%3D%252F&hl=en&passive=true&service=itube&uilel=3" class="sign-in-link">Sign in</a> to add this to Watch Later
  </span>


  </div>
  <div id="addto-list-saving-panel" class="menu-panel">
    <div class="addto-loading loading-content">
        <p class="yt-spinner">
      <img class="yt-spinner-img" src="./itube_files/pixel-vfl3z5WfW.gif" alt="Loading icon
" title="">

    <span class="yt-spinner-message">
        Loading playlists...
    </span>
  </p>

    </div>
  </div>
  <div id="addto-list-error-panel" class="menu-panel">
    <div class="panel-content">
      <img src="./itube_files/pixel-vfl3z5WfW.gif">
      <span class="error-details"></span>
      <a class="show-menu-link">Back</a>
    </div>
  </div>

  </div>

  </div>
<script>if (window.ytcsi) {window.ytcsi.tick("hr", null, '');}</script><script>var ytspf = ytspf || {};ytspf.enabled = false;</script>  <script id="js-13234520" class="spf" src="./itube_files/spf-vfl3BtzXa.js" data-loaded="true"></script>
  <script id="js-775253087" class="www_base_mod" src="./itube_files/www_base_mod.js" data-loaded="true"></script>
<script>if (window.ytcsi) {window.ytcsi.tick("je", null, '');}</script>    <script>
  </script>

      <script>
    if (!yt.hasMsg('FLASH_UPGRADE')) {
      yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
    }
    var delayedEmbeded = yt.getConfig('DELAYED_EMBEDED', []);
    delayedEmbeded.push({
      'container': "masthead_child_div",
      'swf_config': {"url": "\/\/s.ytimg.com\/yts\/swf\/masthead_child-vflRMMO6_.swf", "html5": false, "url_v8": "", "args": {"enablejsapi": 1}, "params": {"allowfullscreen": "false", "allowscriptaccess": "always", "bgcolor": "#FFFFFF"}, "min_version": "8.0.0", "url_v9as2": "", "attrs": {"height": "1", "width": "1", "id": "masthead_child"}}
    });
    yt.setConfig('DELAYED_EMBEDED', delayedEmbeded);
  </script>




  <script>
      yt.setAjaxToken('feed_change_ajax', "pYH_eUDlct1IbuuHE06MT_6d1O98MTM4MjY0OTkxM0AxMzgyNTYzNTEz");

      yt.setConfig({
        'MASTHEAD_ENCRYPTED_ID': "2XFBDgsPofk",
        'MASTHEAD_IS_BRANDED': false
      });







    yt.setConfig('JS_PAGE_MODULES', {
      "\/\/s.ytimg.com\/yts\/jsbin\/www-vfld_V_Gg\/www_feed_mod.js": []
    });
  </script>


  <script>
      yt.setConfig({
        'GUIDE_SELECTED_ITEM': "HCRBqewO_Hnm8"
      });
  </script>
<script>yt.setConfig({'EVENT_ID': "uD5oUvvlLcSyiALggYGICA",'PAGE_NAME': "index",'LOGGED_IN': false,'SESSION_INDEX': null,'DELEGATED_SESSION_ID': null,'GAPI_HOST': "https:\/\/apis.google.com",'GAPI_HINT_PARAMS': "m;\/_\/scs\/abc-static\/_\/js\/k=gapi.gapi.en.i21U70I5tfQ.O\/m=__features__\/rt=j\/d=1\/rs=AItRSTMSGX9zp93XHAiHBTGlvyzXNfdVKQ",'GAPI_LOCALE': "en_US",'GOOGLEPLUS_HOST': "https:\/\/plus.google.com",'MASTHEAD_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-masthead-vflDVrmaZ.js",'JS_COMMON_MODULE': "\/\/s.ytimg.com\/yts\/jsbin\/www-vfld_V_Gg\/www_common_mod.js",'SYNCHRONOUS_PUBSUB': true,'SAFETY_MODE_PENDING': false,'LOCAL_DATE_TIME_CONFIG': {"formatShortDate": "MMM d, yyyy", "amPms": ["AM", "PM"], "shortWeekdays": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "formatWeekdayShortTime": "EE h:mm a", "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "formatLongDate": "MMMM d, yyyy h:mm a", "shortMonths": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "formatLongDateOnly": "MMMM d, yyyy", "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]},'PAGE_CL': 55402233,'PAGE_BUILD_TIMESTAMP': "Tue Oct 22 01:42:37 2013 (1382431357)",'UNIVERSAL_HOVERCARDS': true,'FEEDBACK_BUCKET_ID': "Home",'FEEDBACK_LOCALE_LANGUAGE': "en",'FEEDBACK_LOCALE_EXTRAS': {"is_branded": "", "is_partner": "", "experiments": "919110,935014,911305,916626,902547,927611,924606,924616,924610,916914,929147,925724,936401,906945,929935,929939,939602,939604,936317,919811,935704,911504,913563,901812,904839,932211,932259,934003,934004,938608,938614,913578,940501,934803,936308,935006,924414,924416,939201,900816,936315,916304,934903,902560,934507,907231,936312,906001,3300069,3300100,3300133,3300137,3300164,3310263,3310366,3310552,3310870", "accept_language": "en,hi;q=0.8", "logged_in": false, "guide_subs": "NA"}});yt.setMsg({'ADDTO_WATCH_LATER': "Watch Later",'ADDTO_WATCH_LATER_ADDED': "Added",'ADDTO_WATCH_LATER_ERROR': "Error"});yt.setAjaxToken('addto_ajax_logged_out', "HA3ygzMUc9OWlKPIEA9p28kTrjp8MTM4MjY0OTkxM0AxMzgyNTYzNTEz");  yt.setConfig('FEED_PRIVACY_CSS_URL', "http:\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-webp-vfl9FX8XY.css");
  yt.setAjaxToken('feed_privacy_ajax', "mAy12dRg0t1LX3_iIu5hflo8wCl8MTM4MjY0OTkxM0AxMzgyNTYzNTEz");
    yt.setConfig('FEED_PRIVACY_LIGHTBOX_ENABLED', true);
yt.setConfig({'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflBauWtG.js",'SBOX_SETTINGS': {"REQUEST_DOMAIN": "in", "PSUGGEST_TOKEN": null, "USE_HTTPS": false, "SESSION_INDEX": null, "REQUEST_LANGUAGE": "en", "HAS_ON_SCREEN_KEYBOARD": false, "EXPERIMENT_ID": -1},'SBOX_LABELS': {"SUGGESTION_DISMISS_LABEL": "Dismiss", "WATCH_NOW_LABEL": "Watch now", "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed", "VIEW_CHANNEL_LABEL": "View channel"}});  yt.setConfig({
    'YPC_LOADER_ENABLED': true,
    'YPC_LOADER_CONFIGS': "\/ypc_config_ajax",
    'YPC_LOADER_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-ypc-vflzpKV9A.js",
    'YPC_LOADER_CSS': "http:\/\/s.ytimg.com\/yts\/cssbin\/www-ypc-webp-vfl7OlCUa.css",
    'YPC_LOADER_CALLBACKS': ['yt.www.ypc.checkout.init', 'yt.www.ypc.subscription.init']
  });
  yt.setConfig('GOOGLE_HELP_CONTEXT', "homepage");
</script>    <script>
ytcsi.span('st', 290);yt.setConfig({'TIMING_ACTION': "glo",'TIMING_INFO': {"yt_li": 0, "yt_spf": 0, "e": "919110,935014,911305,916626,902547,3300069,3300100,3300133,3300137,3300164,3310263,3310366,3310552,3310870", "yt_lt": "cold", "ei": "uD5oUvvlLcSyiALggYGICA"}});    </script>
<script>yt.setConfig({'XSRF_TOKEN': "-355wzlsndruIOPcx9dP7aZ3amN8MTM4MjY0OTkxMkAxMzgyNTYzNTEy",'XSRF_REDIRECT_TOKEN': "vSAff3_YmBBRYt-SgSlwZZqx0xZ8MTM4MjY0OTkxM0AxMzgyNTYzNTEz",'XSRF_FIELD_NAME': "session_token"});</script><script>yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 300);</script><script>if (window.ytcsi) {window.ytcsi.tick("jl", null, '');}</script>  <div id="debug"></div>

<iframe class="gstl_50 gssb_k" style="display: none;"></iframe><table cellspacing="0" cellpadding="0" class="gstl_50 gssb_c" style="width: 489px; display: none; top: 38px; left: 190px; position: absolute;"><tbody><tr><td class="gssb_f"></td><td class="gssb_e" style="width: 100%;"></td></tr></tbody></table></body></html>