<?php require_once("session.php"); ?>
<?php 
	confirm_logged_in(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo ID Image Uploader</title>
<link href="../styles/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="../css/template.css" type="text/css"/>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<script src="../js/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="../js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#formID").validationEngine();
	});
</script>
<script src="../js/ui/jquery.ui.core.min.js"></script>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
	 <form name="newad" id="formID" method="post" enctype="multipart/form-data"  action="../scripts/photoiduploadscript.php?id=<?php echo $_GET['id']; ?>&where=<?php echo $_GET['where']; ?>"> 
	   <h2 align="center">IDCE Photo ID Upload Manager 1.0</h2>
	   <table align="center" width="500" border="0" cellspacing="0" cellpadding="5">
         <tr>
           <td><ol>
             <li class="bodyText">Be sure that the images all carry a size of width: 150px and height: 180px.</li>
             <li class="bodyText">The image must match the specification of a passport Photo ID.</li>
           </ol></td>
         </tr>
       </table>
	   <br />
	   <table align="center"> 	
<tr><td><input type="file" id="file" name="image" class="validate[required] text-input"></td></tr> 	<tr><td><input name="Submit" type="submit" value="Upload image"></td></tr> </table>	 </form>
</body>
</html>
