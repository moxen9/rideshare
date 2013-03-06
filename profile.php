<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/divbelow.css" />


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />

<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->



<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/ppic.css" />

<title>RideShare</title>
<link rel="shortcut icon" HREF="images/favicon.ico" />

<!-- Metadescription and MetaKeyWords are used for SEO -->
<meta content="Metadescription" name="" />
<meta content="MetaKeyWords" name="" />

<!-- JQUERY -->
<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
<!-- -END- JQUERY -->
<script type="text/javascript" SRC="js/js2/jquery-1.4.1.min.js"></script>
<script type="text/javascript" SRC="js/js2/jquery.easing.1.3.js"></script>
<script type="text/javascript" SRC="js/js2/jquery.nivo.slider.js"></script>
<script type="text/javascript" SRC="js/js2/twitter.js"></script>
<script type="text/javascript" SRC="js/js2/custom.js"></script>
<!-- /JQUERY & PLUGINS -->

<!-- CUFON REPLACEMENT FONT -->
<script SRC="js/js2/cufon-yui.js" type="text/javascript"></script>
<script SRC="js/js2/tindog_400.font.js" type="text/javascript"></script>

<!-- Superfish Menu -->
<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
<script type="text/javascript">
$(document).ready(function(){
                  $("ul.sf-menu").supersubs({
                                            minWidth:    12,   // minimum width of sub-menus in em units
                                            maxWidth:    27,   // maximum width of sub-menus in em units
                                            extraWidth:  1     // extra width can ensure lines don't sometimes turn over
                                            // due to slight rounding differences and font-family
                                            }).superfish();  // call supersubs first, then superfish, so that subs are
                  // not display:none when measuring. Call before initialising
                  // containing tabs for same reason.
                  });
</script>
<!-- -END- Superfish Menu -->

<!-- IE6 PNG Transparency Fix -->
<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
<script type="text/javascript">
$(document).ready(function(){
                  $(document).pngFix();
                  });
</script>
<!-- -END- IE6 PNG Transparency Fix -->

<!-- CUFON Font Replacement -->
<script SRC="js/cufon-yui.js" type="text/javascript"></script>
<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('h1,h2,h3,h4,h5,h6');
Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' });
</script>
<!-- -END- CUFON Font Replacement -->
<script type="text/javascript" src="js2/popup.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js2/jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){
                  
                  $(".search").keyup(function()
                                     {
                                     var searchbox = $(this).val();
                                     var dataString = 'searchword='+ searchbox;
                                     
                                     if(searchbox=='')
                                     {
                                     }
                                     else
                                     {
                                     
                                     $.ajax({
                                            type: "POST",
                                            url: "search.php",
                                            data: dataString,
                                            cache: false,
                                            success: function(html)
                                            {
                                            
                                            $("#display").html(html).show();
                                            
                                            
                                            }
                                            
                                            });
                                     }return false;
                                     
                                     
                                     });
                  });

jQuery(function($){
       $("#searchbox").Watermark("Search");
       });
</script>
<script type="text/javascript">
$(document).ready( function() {
                  
                  $("#edit3").click( function() {
                                    $("#quote2").fadeIn();
                                    $("#quote").fadeOut();
                                    $("#edit3").fadeOut();
                                    });
                  $("#cancel").click( function() {
                                     $("#quote2").fadeOut();
                                     $("#quote").fadeIn();
                                     $("#edit3").fadeIn();
                                     });
                  });
</script>

<script language=JavaScript>
<!--
function check_length(my_form)
{
    maxLen = 500; // max number of characters allowed
    if (my_form.quote.value.length >= maxLen) {
        // Alert message if maximum limit is reached.
        // If required Alert can be removed.
        var msg = "You have reached your maximum limit of characters allowed";
        alert(msg);
        // Reached the Maximum length so trim the textarea
        my_form.quote.value = my_form.quote.value.substring(0, maxLen);
    }
    else{ // Maximum length not reached so update the value of quote counter
        my_form.text_num.value = maxLen - my_form.quote.value.length;}
}
//-->
</script>
<style type="text/css">
<!--
#pup {
position:absolute;
z-index:200; /* aaaalways on top*/
padding: 3px;
margin-left: 10px;
margin-top: 5px;
width: 200px;
border: 1px solid black;
background-color: #9AFC5F;
color: #111;;
font-size: 0.95em;
text-transform: capitalize;
}

-->
</style>
</head>


<body>
<div id="header">
<div class="container_12">
<div class="grid_3">
<h1 class="logo">
<a HREF="home.php">RideShare</a>
</h1>
</div><!-- end grid -->
<div class="grid_9">
<ul class="sf-menu">
<li> <a href="home.php">Home</a> </li>
<li> <a href="#">iRide</a>
<ul>
<li><a class="current"  href="profile.php">View Profile</a></li>
<li><a href="info.php">Edit Info</a></li>
<li><a href="photos.php">My Rides</a></li>
</ul>
</li>
<li> <a href="friends.php">My Connections</a> </li>
<li> <a href="mail.php">Messages</a> </li>
<li> <a href="forums.php">Live Chats</a></li>
</ul>
<!-- end sf-menu -->
</div>
<!-- end grid -->
</div><!-- end container -->
<div class="clear"></div>
</div><!-- end header -->
<div id="content" style="min-height:400px;">
<div class="container_16 clearfix">
<div class="grid_11 suffix_1 clearfix" style="border-right: 1px solid #222; width: 600px;">
<ul class="blog_brief">
<li class="entry clearfix">
<div class="grid_7 omega">
<h4><a href="profile.php" id="catchy">Firstname Lastname</a></h4><div id="editpic"><a>Edit Profile Picture</a></div>
<fieldset id="forms" style="display:none; background: #333; border: 1px solid #fff;">
<form action="editpropic.php" method="post" enctype="multipart/form-data"><p><span class="style23">Source:</span>
<input name="image" type="file" size="30">
</p>
<br />

<input name="post" type="submit" class="button"  value="Upload"  />

</form>

</fieldset>
<form id="share" method="get" action="save.php" name="form">
<label>

<textarea name="content" id="sharetext"  cols="50" rows="1" onclick="this.value='';">speak your mind ...
</textarea>
</p>
<p>
<!--<a onClick="addSC(' (: ')"><img src='images/smiley/1.gif'></a>
<a onClick="addSC(' :) ')"><img src='images/smiley/2.gif'></a>
<a onClick="addSC(' :)) ')"><img src='images/smiley/3.gif'></a>
<a onClick="addSC(' ((: ')"><img src='images/smiley/4.gif'></a>
<a onClick="addSC(' (:: ')"><img src='images/smiley/5.gif'></a>
<a onClick="addSC(' ::) ')"><img src='images/smiley/6.gif'></a>
<a onClick="addSC(' :) ')"><img src='images/smiley/7.gif'></a>
<a onClick="addSC(' :)) ')"><img src='images/smiley/8.gif'></a>
<a onClick="addSC(' ((: ')"><img src='images/smiley/9.gif'></a>
<a onClick="addSC(' (:: ')"><img src='images/smiley/10.gif'></a>
<a onClick="addSC(' ::) ')"><img src='images/smiley/11.gif'></a>-->
<input name="email" type="hidden" id="namebox" value="<?php echo $result['email']?>"/>
<input name="firstname" type="hidden" id="namebox" value="<?php echo $result['firstname']?>"/>
<input name="lastname" type="hidden" id="namebox" value="<?php echo $result['lastname']?>"/>
<input name="picture" type="hidden" id="namebox" value="<?php echo $result['image']?>"/>
</p>
</label>
<p>
<input name="post" class="button" id="speak" type="submit" value="Share" />

</p>
</form>
<br /><br /><div align="left">
<div id='basic-modal' style="margin-top: -18px; margin-left: 10px;">

<p align="left" style="color: gold;">FeedBack:
<textarea name="content" cols="35" rows="6" id="textarea"></textarea>
<br />
<input type="submit"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="send" value="Submit" /><br />
</p>
</form>
</div></div><div id="divider"></div><div class="box" id="photos" style="margin-left: -148px; margin-bottom: 14px; margin-top: 10px;">

</div>

</div>


<br />
</ul>
<!-- end blog -->
</div><!-- end grid -->

<div class="sidebar grid_4">
<div align="left" style="width: 300px;">
<a href="profile.php" id="cap"><?php echo $display['firstname']?> <?php echo $display['lastname']?></a>
&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a></div><br />
<form class="search" action="">
<input type="text" class="search" id="searchbox" /><br />
<div id="display">
</div>

</form>
<div align="left" style="height: auto; width: 230px; overflow:auto;">

<div style="font-weight:bold; color: #FFFFFF; background: #000000; width: 210px; height: 20px; border: 1px solid #666666;">Recent Trips</div>
<div class="separator_1"></div>


</div><!-- Cols 1 -->
<!-- /Cols 1 -->


</div><!-- end sidebar, end grid -->
</div><!-- end container -->
</div><!-- end content -->
<!-- end footer -->
<div id="sub_footer">
<div class="container_12 clearfix">
<div class="grid_12"> <a class="logo left" href="#">RideShare</a>
<p><small>&copy;&nbsp;2013 OSU - Diverse Developers RideShare.com. All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About Us</a></small></p>
</div>
<!-- end grid -->
</div><!-- end container -->
</div><!-- end subfooter -->
<!-- PRETTYPHOTO SCRIPT INICIALITATION -->
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
                  $("a[rel^='prettyPhoto']").prettyPhoto();
                  });
</script>
<!-- END PRETTYPHOTO SCRIPT INICIALITATION -->
<!-- For CUFON Under IE -->
<script type="text/javascript"> Cufon.now(); </script></body> 
</html>
