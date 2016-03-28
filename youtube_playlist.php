<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.scrolleffects.js", "jquery.watch.js", "jquery.musemenu.js", "my-media.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>My media</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/home-loginform.css"/>
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3984359220"/>
  <link rel="stylesheet" type="text/css" href="css/my-media.css?3960586673" id="pagesheet"/>
  
  <!-- Other scripts -->
  
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="browser_width colelem" id="u146-bw">
     <div id="u146"><!-- simple frame --></div>
    </div>
    <div class="browser_width colelem" id="menuu310-bw">
     <nav class="MenuBar clearfix" id="menuu310"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u446"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u449" href="index.php" data-href="page:U438"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u451" alt="LOGIN" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u311"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u314" href="home.php" data-href="page:U74"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u315" alt="Home" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u318"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u319" href="my-media.php" data-href="page:U80"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u321-4"><!-- rasterized frame --><div id="u321-4_clip"><img id="u321-4_img" alt="My media" width="198" height="31" src="images/u321-4-a.png"/></div></div></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u325"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u328" href="friend-s-media.php" data-href="page:U86"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u331" alt="Friend's media" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u332"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u333" href="settings.html" data-href="page:U92"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u336" alt="settings" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u339"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u340" href="profile.php" data-href="page:U98"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u341" alt="profile" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
     </nav>
    </div>
    <img class="colelem" id="u153-4" alt="your uploads" width="410" height="100" src="images/u153-4.png"/><!-- rasterized frame -->
    
	<div style="">
	
	</div>
	<div class="colelem" id="u431"><!-- custom html -->
     <html>

<head>
<link rel='stylesheet' href='css/my-media-data.css'>
</head>
<body>
<center>
<div style="border:1px solid #1565C0;width:20%;border-radius:5px;float:right;margin-top:-100px;margin-left:40px;padding:10px;" >
<p>VISIT</p>
<center>
<a href="my-videos.php">your videos</a><br>
<a href="my-media.php">your music</a><br>
<a href="youtube_playlist.php">youtube playlist</a><br>
<a href="soundcloud_playlist.php">soundcloud playlist</a><br>
</center>
</div>
</center>
</body>

</html>
<form action="<?php $current_page?>" method="POST">
<input type="text" name="data" placeholder="Track Name">
<br>
<input type="text" name="link" placeholder="Paste your Youtube Url">
<input type="submit" name="submit" value="Upload">
</form>



<?php
error_reporting(0);
@session_start();
//require 'connect.inc.php';
//$limit=1;
//$query='SELECT `data`,`data_link` FROM `records` WHERE `id` LIMIT {'$limit'}';
//echo $show=$_SESSION['user_name'].' DATABASE';
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
$mysql_db=$_SESSION['user_name'];
if(@(mysql_connect($mysql_host,$mysql_user,$mysql_password))&&(@(mysql_select_db($mysql_db)))){

/* -- uploading vedios from youtube     */
if(isset($_POST['data']) && isset($_POST['link'])){
$description=$_POST['data'];
$ytv_link=$_POST['link'];
$uploading_query="INSERT INTO ".$show.".`youtube_playlist` (`yv_id`, `yv_name`, `yv_link`, `view`) VALUES (NULL, '".$description."', '".$ytv_link."', '1');";
mysql_query($uploading_query);}

/* --End of uploading vedios from youtube */

$query="SELECT `yv_name`,`yv_link` FROM `youtube_playlist` ORDER By `yv_id` DESC";
$query_run=mysql_query($query);
while($result_array=mysql_fetch_array($query_run,MYSQL_ASSOC)){
   $channel = array(
      'description' =>$result_array['yv_name']);
   
   echo "<channel>\n";
   
   foreach ($channel as $element => $content) {
      echo " <$element>";
	  echo "<center>";
      echo htmlentities($content);
	  echo "</center>";
      echo "</$element>\n";
	  
   }
 $url=$result_array['yv_link'];
 $link='https://www.youtube.com/embed/'.$url;
 echo '<center>';
 
 echo "<iframe width='560' height='315' src='$link' frameborder='0' allowfullscreen>";
 echo '</iframe>';
 
echo '</center>';
echo '<br>';
   }
     echo '<br><br>';
     echo  '<center><b><a href="logout.php">LOGOUT</a></b></center>'; 

}
	else {
	 echo 'WELCOME ANONYMOUS!<br>ACCESS DENIED!!';
	 echo '<br><br>';
	 echo '<center><b><a href="logout.php">LOGIN</a></b></center>';
    }
}else{
	echo '<br>';
	echo 'OOPS!Please login to view your uploads.';
	echo '<br><br><center><b><a id="logout" href="index.php">LOGIN</a></b></center>';
    
	}
?>

<!--<input type="button" name="logout" value="logout" onclick='logout.php'/> -->



</div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u451-a.png" alt=""/>
   <img class="preload" src="images/u315-a.png" alt=""/>
   <img class="preload" src="images/u331-a.png" alt=""/>
   <img class="preload" src="images/u336-a.png" alt=""/>
   <img class="preload" src="images/u341-a.png" alt=""/>
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
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
$('#u146').registerBackgroundPositionScrollEffect([{"speed":[0,0.4],"in":[-Infinity,-100]},{"speed":[0,0.4],"in":[-100,Infinity]}]);/* scroll effect */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
