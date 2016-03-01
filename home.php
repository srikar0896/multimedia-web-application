<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.scrolleffects.js", "jquery.watch.js", "jquery.musemenu.js", "home.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3984359220"/>
  <link rel="stylesheet" type="text/css" href="css/home.css?4031556391" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/home-loginform.css" id="pagesheet"/>
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
    <div class="browser_width colelem" id="u99-bw">
     <div id="u99"><!-- simple frame --></div>
    </div>
    <div class="browser_width colelem" id="menuu106-bw">
     <nav class="MenuBar clearfix" id="menuu106"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem" id="u453"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u454" href="index.php" data-href="page:U438"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u455" alt="LOGIN" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u114"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u117" href="home.php" data-href="page:U74"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u118-4"><!-- rasterized frame --><div id="u118-4_clip"><img id="u118-4_img" alt="Home" width="198" height="29" src="images/u118-4-a.png"/></div></div></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u107"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u108" href="my-media.php" data-href="page:U80"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u109" alt="My media" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u122"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u123" href="friend-s-media.php" data-href="page:U86"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u125" alt="Friend's media" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u129"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u130" href="settings.html" data-href="page:U92"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u133" alt="settings" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
      <div class="MenuItemContainer clearfix grpelem" id="u136"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u139" href="profile.php" data-href="page:U98"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u140" alt="profile" src="images/blank.gif"/><!-- state-based BG images --></a>
      </div>
     </nav>
    </div>
    <div class="colelem" id="u426"><!-- custom html -->
     <?php
	 error_reporting(0);
require 'user.inc.php';
require 'connect.inc.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
echo 'You logged in!';
echo '<br><br>';
echo 'to check the records please <a href="my-media.php"><b>click</b></a> here';
echo '<br><br>';
echo 'to check out friends media <a href="friend-s-media.php">please click here</a>';
echo'<br><br>';
echo 'to check your videos <a href="my-videos.php">please click here</a>';
echo'<br><br>';
echo 'GO<a href="profile.php">View your profile</a>';
echo'<br><br>';

echo '<center><a href="logout.php">LOGOUT</a></center>';
}
else{
	include 'loginpage.inc.php';

}
?>

</div>
    <div class="verticalspacer"></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u455-a.png" alt=""/>
   <img class="preload" src="images/u109-a.png" alt=""/>
   <img class="preload" src="images/u125-a.png" alt=""/>
   <img class="preload" src="images/u133-a.png" alt=""/>
   <img class="preload" src="images/u140-a.png" alt=""/>
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
$('#u99').registerBackgroundPositionScrollEffect([{"speed":[0,2],"in":[-Infinity,0]},{"speed":[0,0.5],"in":[0,Infinity]}]);/* scroll effect */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.initWidget('.MenuBar', function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
