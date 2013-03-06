<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/cycle.css" />

        <title>RideShare</title>
        
        <link rel="shortcut icon" HREF="images/favicon.ico" />
  	<!-- Metadescription and MetaKeyWords -->
        <meta content="Metadescription" name="" />
        <meta content="MetaKeyWords" name="" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready( function() {
                              $("#bi").click( function() {
                                             $("#backin").fadeIn();
                                             $("#bi").fadeOut();	});
                              $("#mis").click( function() {
                                              $("#mission").fadeIn();
                                              $("#mis").fadeOut();	});
                              $("#vis").click( function() {
                                              $("#vision").fadeIn();
                                              $("#vis").fadeOut();
                                              });
                              $("#man").click( function() {
                                              $("#mandate").fadeIn();
                                              $("#man").fadeOut();
                                              });
                              $("#int").click( function() {
                                              $("#intrams").fadeIn();
                                              $("#int").fadeOut();	});
                              $("#che").click( function() {
                                              $("#cheer").fadeIn();
                                              $("#che").fadeOut();
                                              });
                              $("#ac").click( function() {
                                             $("#acq").fadeIn();
                                             $("#ac").fadeOut();
                                             });		});</script>
        <!-- JQUERY -->
        <script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
        <!-- -END- JQUERY -->
        
        <!-- Cycle -->
        <script type='text/javascript' SRC="js/jquery.cycle.all.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                              if ($('#slides').length > 0) {
                              $('#slides').cycle({
                                                 fx: 'fade',
                                                 speed: 750,
                                                 timeout: 6000,
                                                 randomizeEffects: false,
                                                 pager:  '#slidepager',
                                                 cleartypeNoBg: true
                                                 });
                              }
                              });
            </script>
        <!-- -END- Cycle -->
		
        <!-- Superfish Menu -->
        <script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
        <script type="text/javascript" SRC="js/superfish/superfish.js"></script>
        <script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                              $("ul.sf-menu").supersubs({
                                                        minWidth:    12,   // minimum width of sub-menus in em units
                                                        maxWidth:    27,   // maximum width of sub-menus in em units
                                                        extraWidth:  1    // extra width can ensure lines don't sometimes turn over
                                                                          // due to slight rounding differences and font-family
                                                        }).superfish();  // call supersubs first, then superfish, so that subs are
                                                                        // not display:none when measuring. Call before initialising
                                                                        // containing tabs for same reason.
                              });
            </script>
        <!-- -END- Superfish Menu -->
        
        <!-- IE6 PNG Transparency Fix -->
        <script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>	<script type="text/javascript">
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
    
    </head>
    <body>
        <div id="header">
            <div class="container_12">
                <div class="grid_3">
                    <h1 class="logo"> <a href="index.php">RideShare</a> </h1>
                </div>
                <div class="grid_9">
                    <ul class="sf-menu">
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a HREF="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div id="breadcrumb">
            <div class="container_12 clearfix">
                <div class="grid_9"> <p><a HREF="index.php">Home</a> » LogIn</p> </div>
            </div>
        </div>
        
        <div id="content" style="min-height:350px;">
            <div class="container_16 clearfix">
                <div class="grid_11 suffix_1 clearfix" style="width: 410px;">
                    
                    <fieldset>
                        <legend>LogIn</legend>
                        
                        <form id="form1" method="post" action="home.php">
                            <h3>&nbsp;</h3>
                            
                            <p>
							<label for="text_field">Email:</label>
							<br />
							<input id="txt_field" type="text" value="- enter email address here-" onclick="this.value='';" name="email"/>
                            </p>
                            
                            <p>
							<label for="password">Password:</label>
							<br />
							<input id="password" name="password" type="password" value=""  />
                            </p>
                            
                            <p>
							<input class="button" value="Submit" type="submit" name="login"/>
							<input class="button" value="Clear" type="reset" />
                            </p>
                            
                        </form>
                    </fieldset>
                </div>

                <div class="sidebar grid_4">
                    <div class="grid_3" style="width: 300px;">
                        <ul class="flickr">
                            <div align="center" style="margin-left: 35px; background: #111; color: #fff; width: 250px;">RideShare Users</div> 
                        </ul>
					</div>
                </div>
			</div>
		</div>
        </div>

        <div id="sub_footer">
            <div class="container_12 clearfix">
                <div class="grid_12"> <a class="logo left" href="#">RideShare</a>
                    <p><small>&copy;&nbsp;2013 OSU Diverse Developers. RideShare.com. All rights reserved. | <a href="copyright.php">Copyright</a> | <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policy</a> | <a class="current" href="about.php">About</a></small></p>
                </div>
            </div>
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
        <script type="text/javascript"> Cufon.now(); </script>
    </body> 
</html>
    
