<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.scrolleffects.js", "jquery.watch.js", "jquery.musemenu.js", "friend-s-media.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>Friend's media</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3984359220"/>
  <link rel="stylesheet" type="text/css" href="css/friend-s-media.css?210386381" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/home-loginform.css"/>
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

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="browser_width colelem" id="u175-bw">
     <div id="u175"><!-- simple frame --></div>
    </div>
    <div class="browser_width colelem" id="menuu346-bw">
     <nav class="MenuBar clearfix" id="menuu346"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u439"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u440" href="index.php" data-href="page:U438"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u443" alt="LOGIN" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u347"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u350" href="home.php" data-href="page:U74"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u351" alt="Home" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u354"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u355" href="my-media.php" data-href="page:U80"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u356" alt="My media" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u361"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u362" href="friend-s-media.php" data-href="page:U86"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u363-4"><!-- rasterized frame --><div id="u363-4_clip"><img id="u363-4_img" alt="Friend's media" width="198" height="31" src="images/u363-4-a.png"/></div></div></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u368"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u371" href="settings.html" data-href="page:U92"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u374" alt="settings" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u375"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u378" href="profile.php" data-href="page:U98"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u381" alt="profile" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
     </nav>
    </div>
    <img class="colelem" id="u182-4" alt="discover many more of your interest" width="956" height="123" src="images/u182-4.png"/><!-- rasterized frame -->
    <div class="colelem" id="u600"><!-- custom html -->
     <br>
	 <?php
@session_start();
require 'connect.inc.php';
require 'user.inc.php';
?>
<form action="<?php $current_page?>" method="GET">
<input type="text" name="name" placeholder="Friend's name">
<input type="submit" name="submit" value="View Media">
</form>
<br>
<?php
//echo $current_page;
$query='SELECT `username` FROM `users`';
$query_run=mysql_query($query);
echo '<br>';
echo '<center><h2 style="font-size:30px">MYMUSIC USERS</h2></center><br>';
echo '<br><p style="color:blue">*there may be some private media</p><br>';
$count=1;
while($result=mysql_fetch_assoc($query_run)){
	echo $count.'.';
	$count++;
	echo '<b>'.$result['username'].'</b>';
	echo '<br><br>';
}
if(isset($_GET['name']) && !empty($_GET['name'])){
	
	$_SESSION['friend_name']=$_GET['name'];
    header('Location:view_media.php');
}
?>
	 
	 
</div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u443-a.png" alt=""/>
   <img class="preload" src="images/u351-a.png" alt=""/>
   <img class="preload" src="images/u356-a.png" alt=""/>
   <img class="preload" src="images/u374-a.png" alt=""/>
   <img class="preload" src="images/u381-a.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?275725342" type="text/javascript"></script>
  <script src="scripts/jquery.scrolleffects.js?206645848" type="text/javascript"></script>
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
$('#u175').registerBackgroundPositionScrollEffect([{"speed":[0,0.4],"in":[-Infinity,-100]},{"speed":[0,0.4],"in":[-100,Infinity]}]);/* scroll effect */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
<br>
<br>
<center><b><a href="logout.php">LOGOUT</a></b></center>
   </body>
</html>
