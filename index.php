<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>
<link rel="icon" type="image/png" href="favicon.png">
  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.scrolleffects.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.2.310"/>
  <title>LOGIN</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3984359220"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?4227923576" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/loginform.css"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/abel:n4:default;source-sans-pro:n3:default;allura:n4:default.js" type="text/javascript">\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="clearfix" id="page"><!-- group -->
   <div class="clearfix grpelem" id="ppu585"><!-- column -->
    <div class="clearfix colelem" id="pu585"><!-- group -->
     <div class="browser_width grpelem" id="u585-bw">
      <div id="u585"><!-- group -->
       <div class="clearfix" id="u585_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U705" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="ts03-Subtitle-Source-Sans-Pro-Light clearfix grpelem" id="u705-4" data-muse-uid="U705" data-muse-type="txt_frame"><!-- content -->
         <h4 style="font-size:20px"> scroll down for login</h4>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <img class="grpelem" id="u592-5" alt="
MUSIC IS WHAT FEELING SOUNDS LIKE" width="980" height="129" src="images/u592-5.png"/><!-- rasterized frame -->
    </div>
    <!-- m_editable region-id="editable-static-tag-U531" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem" id="u531-5" data-muse-uid="U531" data-muse-type="txt_frame"><!-- content -->
     <h2 class="ts07-Subtitle-Raleway-Thin" id="u531">&nbsp;</h2>
     <h1 class="ts07-Title-Allura" id="u531-3">Discover genres of your interest</h1>
    </div>
    <!-- /m_editable -->
    <div class="colelem" id="u593"><!-- custom html -->
	<br><br>
    <center><h2 STYLE="font-size:25px;">LOGIN</h2></center>
	<br>
	<!--login form-->
<?php
error_reporting(0);
@session_start();
include 'user.inc.php';
include 'connect.inc.php';
if((isset($_POST['name']))&&(isset($_POST['password']))){
	$username=$_POST['name'];
	$password=$_POST['password'];
	if(!empty($username)&&!empty($password)){
		$query="SELECT `username`,`password` FROM `users` WHERE `username`='$username' AND `password`='$password'";
		$query_run=mysql_query($query);
		$number=mysql_num_rows($query_run);
         if($number==0)
		 {
			 echo 'no results found';
		 }
		 elseif($number==1)
		 {
			 $user_id_hash=mysql_result($query_run,0,'username');
			 $user_id=md5($user_id_hash);
			 $_SESSION['user_id']=$user_id;
			 $_SESSION['user_name']=$username;
			 header('Location:home.php');
			 }
	}
	
}

?>

	
	
	<form action="<?php echo $current_page?>" method="POST" class="basic-grey">
    <h1>Login Form 
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>
    
    <label>
        <span>Password:</span>
        <input type="password" id="password" name="password"></textarea>
    </label> 
         <label>
        <span>&nbsp;</span> 
        <center><input type="submit" class="button" value="LOGIN" /></center>
    </label>    
	<br>
	<label>
        <span>&nbsp;</span> 
       <center> <input type="button" class="button" value="Register" /> </center>
    </label>    
</form>

	</div>
   </div>
   <div class="verticalspacer"></div>
   <div class="clearfix grpelem" id="pu518"><!-- group -->
    <div class="rounded-corners grpelem" id="u518"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U720" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u720-5" data-muse-uid="U720" data-muse-type="txt_frame"><!-- content -->
     <h2 class="ts05-Subtitle-Allura" id="u720">&nbsp;</h2>
     <h1 class="ts05-Title-Graduate" id="u720-3">EDM</h1>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="clearfix grpelem" id="pu536"><!-- group -->
    <div class="rounded-corners grpelem" id="u536"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U719" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u719-5" data-muse-uid="U719" data-muse-type="txt_frame"><!-- content -->
     <h2 class="ts05-Subtitle-Allura" id="u719">&nbsp;</h2>
     <h1 class="ts05-Title-Graduate" id="u719-3">ROCK</h1>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="clearfix grpelem" id="pu551"><!-- group -->
    <div class="rounded-corners grpelem" id="u551"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U718" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u718-5" data-muse-uid="U718" data-muse-type="txt_frame"><!-- content -->
     <h2 class="ts05-Subtitle-Allura" id="u718">&nbsp;</h2>
     <h1 class="ts05-Title-Graduate" id="u718-3">JAZZ</h1>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="clearfix grpelem" id="pu561"><!-- group -->
    <div class="rounded-corners grpelem" id="u561"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U717" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="ts05-Title-Graduate clearfix grpelem" id="u717-5" data-muse-uid="U717" data-muse-type="txt_frame"><!-- content -->
     <h1>&nbsp;</h1>
     <h3><span id="u717-2">BLUES</span></h3>
    </div>
    <!-- /m_editable -->
   </div>
   <div class="clearfix grpelem" id="pu569"><!-- group -->
    <div class="rounded-corners grpelem" id="u569"><!-- simple frame --></div>
    <!-- m_editable region-id="editable-static-tag-U599" template="index.php" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u599-5" data-muse-uid="U599" data-muse-type="txt_frame"><!-- content -->
     <h2 class="ts05-Subtitle-Allura" id="u599">&nbsp;</h2>
     <h1 class="ts05-Title-Graduate" id="u599-3">POP</h1>
    </div>
    <!-- /m_editable -->
   </div>
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
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
$('#u585').registerBackgroundPositionScrollEffect([{"speed":[0,0.5],"in":[-Infinity,98.5]},{"speed":[0,0.4],"in":[98.5,Infinity]}]);/* scroll effect */
Muse.Utils.resizeHeight()/* resize height */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
   </html>
