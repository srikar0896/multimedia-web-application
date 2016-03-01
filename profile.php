<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "jquery.musemenu.js", "jquery.musepolyfill.bgsize.js", "profile.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>profile</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3984359220"/>
  <link rel="stylesheet" type="text/css" href="css/profile.css?3979013419" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <!--HTML Widget code-->
  
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

  
  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu184"><!-- group -->
     <div class="browser_width grpelem" id="u184-bw">
      <div class="museBGSize" id="u184"><!-- simple frame --></div>
     </div>
     <img class="grpelem" id="u191-4" alt="music rocks my world" width="812" height="208" src="images/u191-4.png"/><!-- rasterized frame -->
     <div class="grpelem" id="u192"><!-- custom html -->
      
<div class="fb-like" data-href="http://www.facebook.com/Sriker ch" data-send="false" data-width="291" data-show-faces="false" data-colorscheme="light" data-layout="standard" data-action="like"></div>

</div>
     <!-- m_editable region-id="editable-static-tag-U382" template="profile.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u382-4" href="profile.html" data-href="page:U98" data-muse-uid="U382" data-muse-type="txt_frame"><!-- content --><p>scroll down for profile ⇃</p></a>
     <!-- /m_editable -->
    </div>
    <div class="browser_width colelem" id="menuu658-bw">
     <nav class="MenuBar clearfix" id="menuu658"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u659"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u662" href="index.php" data-href="page:U438"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u665" alt="LOGIN" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u666"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u669" href="home.php" data-href="page:U74"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u671" alt="Home" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u673"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u674" href="my-media.php" data-href="page:U80"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u675" alt="My media" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u680"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u681" href="friend-s-media.php" data-href="page:U86"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u683" alt="Friend's media" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u687"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u688" href="settings.html" data-href="page:U92"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u691" alt="settings" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u694"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u695" href="profile.html" data-href="page:U98"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u696-4"><!-- rasterized frame --><div id="u696-4_clip"><img id="u696-4_img" alt="profile" width="199" height="29" src="images/u696-4-a.png"/></div></div></a>
      </div>
     </nav>
    </div>
    <div class="clearfix colelem" id="pu701"><!-- group -->
     <div class="grpelem" id="u701"><!-- custom html -->
      <!------------------------this is profile box----------------------------------->

	  <html>

<head>
<link rel='stylesheet' href='style.css'>
</head>
<body>
</body>

</html>



<?php
error_reporting(0);
@session_start();
//require 'connect.inc.php';
//$limit=1;
//$query='SELECT `data`,`data_link` FROM `records` WHERE `id` LIMIT {'$limit'}';
echo '<center>HEEY '.$show=$_SESSION['user_name'].'</center><br><br>';
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_db=$_SESSION['user_name'];
//echo $user=$_SESSION['user_real_id'];
if(@(mysql_connect($mysql_host,$mysql_user,$mysql_password))&&(@(mysql_select_db($mysql_db)))){

/*--------------------recent video query box start------------------------*/
$recent_video_query="SELECT `data` FROM `videos` ORDER By `id` DESC LIMIT 0,1";
$recent_video_query_run=mysql_query($recent_video_query);
while($video_name_array=mysql_fetch_array($recent_video_query_run,MYSQL_ASSOC)){
$recent_video_name=$video_name_array['data'];}
/*--------------------recent friend query box end------------------------*/

/*--------------------recent friend query box start------------------------*/
$recent_friend_query="SELECT `friends_list` FROM `friends` ORDER By `id` DESC LIMIT 0,1";
$recent_friend_query_run=mysql_query($recent_friend_query);
while($friend_name_array=mysql_fetch_array($recent_friend_query_run,MYSQL_ASSOC)){
$recent_friend_name=$friend_name_array['friends_list'];}
/*--------------------recent friend query box end------------------------*/



/*--------------------profile picture query box start------------------------*/
$query="SELECT `profile_picture_link` FROM `profile` WHERE `id`='1'";
//$query="SELECT `username`,`password` FROM `users` WHERE `username`='$username' AND `password`='$password'";
$query_run=mysql_query($query);
/*--------------------profile picture query box end------------------------*/


while($result_array=mysql_fetch_array($query_run,MYSQL_ASSOC)){
     $url="profile_pictures/".$result_array['profile_picture_link'];
   
   echo "<center>\n";
   
   /*foreach ($channel as $element => $content) {
      echo " <$element>";
      echo htmlentities($content);
   echo "</$element>\n";}*/
   echo "<div style='border-radius:50%;border: 2px solid #73AD21;margin:15px;
    width: 168px;
    height:168px;overflow:hidden;box-shadow: 6px 6px 6px #888888; '>";
   echo "<img src='$url' style='padding:14px;width:188px;height:188px;float:center;margin:-15px;'>";
   echo '</div>';
   
   echo "</center>";
   echo '<br><br>';
   echo '<h4 style="color:blue;font-size:15px">YOUR RECENT VIDEO WAS-<h4>';
   echo  $recent_video_name;
   echo '<br><br>';
   echo '<h4 style="color:blue;font-size:15px">RECENTLY FRIENDS WITH-<h4>';
   echo  $recent_friend_name;
   
 }
 echo '<br><br>';
echo '<center><b><a href="logout.php">LOGOUT</a></b> </center>'; 

}else{
	echo '<br>';
	echo 'Welocme anonymous! Permission denied.';
	echo '<br><br><b><a href="logout.php"></a></b>';
}
?>

<!--<input type="button" name="logout" value="logout" onclick='logout.php'/> -->

	  
	  </div>
    
    </div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u665-a.png" alt=""/>
   <img class="preload" src="images/u671-a.png" alt=""/>
   <img class="preload" src="images/u675-a.png" alt=""/>
   <img class="preload" src="images/u683-a.png" alt=""/>
   <img class="preload" src="images/u691-a.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?275725342" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?185257658" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?3999102769" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?4042164668" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
