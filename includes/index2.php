<?php require_once("includes/session.php");?>
<?php 

    ini_set('display_errors', '0');

?>
<?php require_once("includes/functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University of Guyana - Institute of Distance & Continuing Education</title>
<style type="text/css">
<!--

-->
</style>
<link href="styles/default.css" rel="stylesheet" type="text/css" />
<link href="styles/print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="css/template.css" type="text/css"/>
<link href="css/jquery.bubblepopup.v2.3.1.css" rel="stylesheet" type="text/css" />
<link href="css/flick/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.colorbox-min.js" type="text/javascript" charset="utf-8"></script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#formID").validationEngine();
	});
</script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#formID2").validationEngine();
	});
</script>
<script src="js/jquery.bubblepopup.v2.3.1.min.js" type="text/javascript"></script>
<script src="js/ui/jquery.ui.core.min.js"></script>
<script type="text/javascript" language="javascript" src="js/ui/jquery-ui-1.8.10.custom.js"></script>
<script type="text/javascript" language="javascript" src="js/ui/jquery-ui-1.8.10.custom.min.js"></script>
<script src="js/ui/jquery.ui.datepicker.min.js"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd'
		});
	});
	</script>
<link rel="stylesheet" type="text/css" href="js/plugins/buttonCaptcha/jquery.buttonCaptcha.styles.css" />
<script type="text/javascript" language="javascript" src="js/plugins/buttonCaptcha/jquery.buttonCaptcha.min.js"></script>
<script type="text/javascript" src="stmenu.js"></script>
</head>
<body  >
<table class="bodyTable" align="center"width="900" cellspacing="1" cellpadding="9">
  <tr>
    <td>
<table align="center"width="900" cellspacing="1" cellpadding="0">
  <tr>
    <td><table class="noPrint" width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="17%"><img src="images/uglogo.png" width="178" height="130" /></td>
        <td width="55%"><div class="bannerText"><span class="bannerTextBold"> University of Guyana <br />
          Institute of Distance & Continuing Education <br />
        </span><span class="bannerText14">Bringing Quality Education to the Nation.</span></div></td>
        <td width="28%" align="center"><?php 
			if (logged_in()) { ?>
              <table class="loginTable" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" valign="top"><div class="headerTextBold">Welcome <?php echo $_SESSION['logged_in_user_name'];?>, you have logged in as
                    <?php if ($_SESSION['logged_in_user_status'] == "student") echo "a student. <br /><br />
            	  <a href=\"?page=student\"><span class=\"headerTextBoldGreen\">VIEW PROFILE <img src=\"styles/user_edit.png\" border=\"0\" /></span></a> | <a href=\"includes/logout.php\"><span class=\"headerTextBoldGreen\">LOGOUT <img src=\"styles/lock_go.png\" border=\"0\" /></span></a>";
				else echo "an Administrator. <br /><br />
            	  <a href=\"admin\"><span class=\"headerTextBoldGreen\">ENTER SYSTEM <img src=\"styles/data_into.png\" border=\"0\"/></span></a> | <a href=\"includes/logout.php\"><span class=\"headerTextBoldGreen\">LOGOUT <img src=\"styles/lock_go.png\" border=\"0\" /></span></a>";
				?>
                  </div></td>
                </tr>
              </table>
          <?php
            } else {
		?>
              <form action="?login=do&posting=yes" id="formID2" method="post" name="access">
                <table class="loginTable" width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="35%"><div align="right" class="headerText">Login:</div></td>
                    <td width="65%"><label>
                      <input name="user" type="text" size="25"  maxlength="28" id="user"  class="validate[required] text-input"/>
                    </label></td>
                  </tr>
                  <tr>
                    <td><div align="right" class="headerText">Password:</div></td>
                    <td><label>
                      <input size="25" type="password" name="pass" id="pass"  class="validate[required] text-input"/>
                    </label></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="loginsubmit" type="submit" id="loginsubmit" onclick="MM_validateForm('user','','R','pass','','R');return document.MM_returnValue" value="Login" />
                      | <a href="?page=register" target="_self"><span class="headerTextBoldGreen">Register NOW!</span></a></td>
                  </tr>
                </table>
              </form>
          <?php 
		} // if not logged in
		?>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr class="noPrint">
    <td><div align="center"><span><a href="http://www.dhtml-menu-builder.com"  style="display:none;visibility:hidden;">Javascript DHTML Drop Down Menu Powered by dhtml-menu-builder.com</a></span><span>
      <script id="sothink_widgets:dwwidget_dhtmlmenu7_1_2010_1.pgt" type="text/javascript">
<!--
stm_bm(["menu1f01",900,"","blank.gif",0,"","",0,0,0,0,1000,1,0,0,"","100%",0,0,1,2,"default","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,4,2,0,7,100,"progid:DXImageTransform.Microsoft.Blinds(bands=8,direction=DOWN,enabled=0,Duration=0.60)",9,"",-2,50,0,0,"#999999","#1C7000","",3,0,0,"#000000"]);
stm_ai("p0i0",[0,"Home","","",-1,-1,0,"?","_self","","","","",0,0,0,"","",0,0,0,0,1,"#FFFFF7",1,"#FFFFF7",1,"","",3,3,3,1,"#CCCCCC","#FFFFF7","#FFFFFF","#FFFF00","bold 9pt Verdana","bold 9pt Verdana",0,4,"","","","",0,0,0],139,0);
stm_ai("p0i1",[6,1,"#FFFFFF","",-1,-1,0]);
stm_aix("p0i2","p0i0",[0,"Our Courses","","",-1,-1,0,"?page=courses"],139,0);
stm_aix("p0i3","p0i1",[]);
stm_aix("p0i4","p0i0",[0,"Regional Centers","","",-1,-1,0,"","_self","","","","",0,0,0,"arrow_r.gif","arrow_r.gif",7,7],139,0);
stm_bpx("p1","p0",[1,4,0,0,4,2,0,0]);
stm_aix("p1i0","p0i0",[0,"Anna Regina","","",-1,-1,0,"?page=anna"],139,0);
stm_aix("p1i1","p0i0",[0,"Berbice","","",-1,-1,0,"?page=berbice"],139,0);
stm_aix("p1i2","p0i0",[0,"Georgetown","","",-1,-1,0,"?page=georgetown"],139,0);
stm_aix("p1i3","p0i0",[0,"Linden","","",-1,-1,0,"?page=linden"],139,0);
stm_ep();
stm_aix("p0i5","p0i1",[]);
stm_aix("p0i6","p0i0",[0,"<?php if (logged_in()) echo "View Profile"; else echo "Register Online"; ?>","","",-1,-1,0,"?page=register"],139,0);
stm_aix("p0i7","p0i1",[]);
stm_aix("p0i8","p0i4",[0,"About Us","","",-1,-1,0,"?page=about"],139,0);
stm_bpx("p2","p1",[]);
stm_aix("p2i0","p0i0",[0,"About Us","","",-1,-1,0,"?page=about"],139,0);
stm_aix("p2i1","p0i0",[0,"Our Staff","","",-1,-1,0,"?page=staff"],139,0);
stm_aix("p2i2","p0i0",[0,"Photo Gallery","","",-1,-1,0,"?page=photogallery"],139,0);
stm_ep();
stm_aix("p0i9","p0i1",[]);
stm_aix("p0i10","p0i0",[0,"Contact Us","","",-1,-1,0,"?page=contact"],139,0);
stm_ep();
stm_em();
//-->
      </script>
    </span></div></td>
  </tr>
  <tr>
    <td valign="top"><?php 
	
	 	if (isset($_GET['message'])) { echo "<div style=\"background-color: #FF0000;\" align=\"center\" class=\"headerTextBoldWhite\"><br />Message: {$_GET['message']}<br /><br /></div>"; } else {
			?>
            <noscript> 
<meta HTTP-EQUIV="REFRESH" content="0;url=?message=Please enable JavaScript to use this website.">
</noscript> <?php } 

	 // login routine
		if ((isset($_GET['login'])) && ($_GET['login'] == "do")) include("includes/login_do.php");
		
	 // staff page [
		if ((isset($_GET['page'])) && ($_GET['page'] == "staff")) include("includes/staff.php");	
	
	 // student page [after login]
		if ((isset($_GET['page'])) && ($_GET['page'] == "student")) include("includes/student.php");
		
		// regional center linden page 
		if ((isset($_GET['page'])) && ($_GET['page'] == "linden")) include("includes/regional_centers/linden.php");
		if ((isset($_GET['page'])) && ($_GET['page'] == "georgetown")) include("includes/regional_centers/georgetown.php");
		if ((isset($_GET['page'])) && ($_GET['page'] == "berbice")) include("includes/regional_centers/berbice.php");
		if ((isset($_GET['page'])) && ($_GET['page'] == "anna")) include("includes/regional_centers/anna.php");
		
	 // photo gallery page
		if ((isset($_GET['page'])) && ($_GET['page'] == "photogallery")) include("includes/photogallery.php");
	
	 // about us page
		if ((isset($_GET['page'])) && ($_GET['page'] == "about")) include("includes/about.php");
	
	 // register page
		if ((isset($_GET['page'])) && ($_GET['page'] == "register")){
		 if (logged_in()) include("includes/student.php");
		 else include("includes/register.php");	
		 }
	 // course page
		if ((isset($_GET['page'])) && ($_GET['page'] == "courses")) include("includes/courses.php");
		
	// contact page
		if ((isset($_GET['page'])) && ($_GET['page'] == "contact")) include("includes/contact.php");
		
	 // news page
		if ((isset($_GET['page'])) && ($_GET['page'] == "news")) include("includes/news.php");	
		
	 // index/home page
	if (empty($_GET['page'])) include("includes/frontPage.php");

		?>
        <h1>&nbsp;</h1></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#1C7000"><div align="center" class="noPrint">
      <p class="headerText"><a href="http://www.uog.edu.gy/" target="_blank"><span class="footerTextBold">University of Guyana</span></a> <span class="footerTextBold">| Institute of Distance & Continuing Education</span><br />
            <span class="footerText">I.D.C.E Flat 5 Camp Road,
              Georgetown, Guyana | Tel: 227-0407 <br />
              &copy; <?php echo date('Y'); ?> | Website Developed by Girendra Persaud.</span></p>
    </div></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
