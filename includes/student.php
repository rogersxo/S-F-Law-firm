<SCRIPT LANGUAGE="JavaScript">
function popItUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=600,height=300,left=60,top=190');");
}

</script>
<?php 
	 if (isset($_GET['course'])) {
	 // check to see if already registered for this course
	 $result = query("SELECT * FROM registered_courses WHERE (cid = '{$_GET['course']}') AND (grade = '-') AND (sid = '{$_SESSION['logged_in_user_id']}')");
		if  ((mysql_num_rows($result)) > 0) {
		$message = "Registration failed: You have already registered for this course and you cannot register again.";
		print "<meta http-equiv=\"refresh\" content=\"0;URL=?page=student&message={$message}\">";
		} else // do the insertion
		{
	 $result = query("INSERT INTO registered_courses (sid, cid, cost, date) VALUES('{$_SESSION['logged_in_user_id']}','{$_GET['course']}', '{$_GET['cost']}', NOW())");
	 if ($result) $message = "Course registration successful, you will hear from us soon."; else $message="Course registration failed, kindly make contact with us to report this.";
				print "<meta http-equiv=\"refresh\" content=\"0;URL=?page=student&message={$message}\">";
	 	}
	 }// if registering course
	 
	 
	 //insert qualification
	 if ((isset($_GET['add'])) && ($_GET['add'] == 'qualinsert'))
		 {
		$result = query("INSERT INTO quals (sid, type, cname, grade, year) VALUES('{$_SESSION['logged_in_user_id']}', '{$_POST['type']}', '{$_POST['cname']}', '{$_POST['grade']}', '{$_POST['year']}')");
				if ($result) $message = "New qualification saved."; else $message="New qualification save failed.";
				print "<meta http-equiv=\"refresh\" content=\"0;URL=?page=student&message={$message}\">";
		 }// add qualifications
		 
	$result=query("SELECT * FROM  students WHERE id = '{$_SESSION['logged_in_user_id']}'  LIMIT 1");
	$student=mysql_fetch_array($result);
?>
<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>

<table class="pagecurl" width="100%" border="0" cellspacing="1" cellpadding="4">
              <tr>
                
                <td width="72%" rowspan="2" valign="top"><h2>Students Profile: <?php echo $student['firstname'] . " " . $student['lastname']; ?></h2>
                            
                  <table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
           <br />
         <td class="tableDotTop">
              
              <table width="100%" border="0" cellspacing="4" cellpadding="4">
                <tr>
                  <td width="50%" valign="top" bgcolor="#F4F4F4">
                    <ul>
                      <li>Email us if you would like to edit/update your information on this form.</li>
                    </ul>                    </td>
                </tr>
            </table>              
            <table width="100%" border="0" cellspacing="2" cellpadding="1">
                <tr>
                  <td align="right" valign="top"><strong>Regional Centre:</strong></td>
                  <td valign="top"><?php echo $student['centre']; ?></td>
                  <td align="right" valign="top"><strong>Photo ID</strong> (Click to <?php if ($student['image'] == 'default.jpg') echo "add"; else echo "change"; ?>):</td>
                  <td width="24%" rowspan="7" align="center" valign="top"> <a href="javascript:popItUp('includes/photoidupload.php?id=<?php echo $student['id']; ?>&where=<?php echo "web"; ?>')" target="_self" ><img src="images/photoid/<?php echo $student['image']; ?>" alt="PhotoID" name="PhotoID" width="150" height="180" border="0" /></a></td>
                </tr>
                <tr>
                  <td width="26%" align="right" valign="top"><strong>Full Name:</strong></td>
                  <td width="24%" valign="top"><?php echo $student['title'] . " " . $student['firstname'] . " " . $student['lastname'] . " " . $student['othername']; ?></td>
                  <td width="26%" align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Father's Name:</strong></td>
                  <td valign="top"><?php echo $student['fathername']; ?></td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Mother's Name:</strong></td>
                  <td valign="top"><?php echo $student['mothername']; ?></td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Date of Birth:</strong></td>
                  <td valign="top"><?php echo $student['dob']; if (birthday($student['dob']) < 18) {?> [<span class="boldRedText">Alert: Under 18</span>]
                  <?php } ?></td>
                  <td align="right" valign="top">&nbsp;</td>
                  
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Nationality:</strong></td>
                  <td valign="top"><?php echo $student['nationality']; ?></td>
                  <td align="right" valign="top">&nbsp;</td>
                  
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Home Telephone:</strong></td>
                  <td valign="top"><?php echo $student['hometel']; ?></td>
                  <td align="right" valign="top">&nbsp;</td>
                  
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Cellular Number:</strong></td>
                  <td valign="top"><?php echo $student['celltel']; ?></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7"><strong>Place of Employment:</strong></td>
                  <td width="24%" valign="top" bgcolor="#F7F7F7"><?php echo $student['workplace']; ?></td>
                </tr>
                <tr>
                  <td align="right" valign="top"><strong>Work Telephone:</strong></td>
                  <td valign="top"><?php echo $student['worktel']; ?></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7"><strong>
                    <label for="occupation">Occupation:</label>
                  </strong></td>
                  <td valign="top" bgcolor="#F7F7F7"><?php echo $student['occupation']; ?></td>
              </tr>
                <tr>
                  <td align="right" valign="middle"><strong>*Email Address:</strong></td>
                  <td valign="top"><?php echo $student['email']; ?></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7"><strong>
                    Business Address:
                    <label for="occupation"></label>
                  </strong></td>
                  <td valign="top" bgcolor="#F7F7F7" rowspan="2"><?php echo $student['businessaddress']; ?></td>
              </tr>
                <tr>
                  <td align="right" valign="top"><strong>
                  <label for="nationality"></label>
                  Home Address:</strong></td>
                  <td valign="top"><?php echo $student['homeaddress']; ?></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7">&nbsp;</td>
              </tr>
                <tr>
                  <td align="right" valign="top"><strong>
                    <label for="hometel"></label>
                  Marital Status:</strong></td>
                  <td valign="top"><?php echo $student['maritalstatus']; ?></td>
                  <td align="right" valign="top" bgcolor="#FCFFF0"><strong>Specified disabilities:</strong></td>
                  <td valign="top" bgcolor="#FCFFF0" rowspan="4"><?php 
				  $dis = query("SELECT * FROM have_disability JOIN disability ON have_disability.did = disability.id WHERE have_disability.sid = '{$student['id']}' ORDER BY disability ASC");
				  while ($d = mysql_fetch_array($dis)) {
				  echo $d['disability'] . ", ";
				  }
				  echo $student['otherdisability']; ?></td>
                </tr>
                <tr>
                  <td align="right" valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top">&nbsp;</td>
                  <td valign="top">&nbsp;</td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
            </table> 
       <br />
       
            <span class="boldDeepGrey10">Qualifications/Experience/Training [<a href="?page=student&amp;add=qual#qualadd">+New</a>]: </span>
            <table width="100%" border="0" cellspacing="2" class="tableDotTop"  cellpadding="1">
  <tr>
    <th>Type</th>
    <th>Course/Program Name</th>
    <th>Grade</th>
    <th>Year</th>
  </tr>
  <?php 
  $results = query("SELECT * FROM quals WHERE sid = '{$_SESSION['logged_in_user_id']}' ORDER BY year, type ASC");
  $colorset=0;
  while ($quals = mysql_fetch_array($results)) {
  $colorset++;
					if (($colorset%2) == 1)
						$color="#f6f6f6";
						 else $color = "#ffffff";
  ?>
  <tr <?php echo "bgcolor=\"{$color}\""; ?>>
    <td ><?php echo $quals['type']; ?></td>
    <td><?php echo $quals['cname']; ?></td>
    <td><?php echo $quals['grade']; ?></td>
    <td><?php echo $quals['year']; ?></td>
  </tr>
  <?php } //end while ?>
</table>
<a name="qualadd" id="qualadd"></a>
  <br />
 <?php 
 if ((isset($_GET['add'])) && ($_GET['add'] == 'qual'))
 {
 	?>
     <span class="boldDeepGrey10">Add New Qualification/Experience/Training [<a href="?page=student">Cancel</a>]: </span>
     <table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr>
    <th>Type</th>
    <th>Course Name</th>
    <th>Grade</th>
    <th>Year</th>
    <th>Action</th>
  </tr>
  <tr>
   <form action="?page=student&add=qualinsert" method="post" name="qual">
    <td align="center" valign="top"><select name="type">
    <option>Academic</option>
    <option>Technical/Professional</option>
    <option>Training/Experience</option>
    </select></td>
    <td align="center" valign="top"><input name="cname" type="text" id="cname" size="30" /></td>
    <td align="center" valign="top"><label for="grade"></label>
      <input type="text" name="grade" id="grade" /></td>
    <td align="center" valign="top"><label for="year"></label>
      <input type="text" name="year" id="year" /></td>
    <td align="center" valign="top"><label for="Submit"></label>
      <input name="Submit" type="submit" id="Submit" onclick="MM_validateForm('cname','','R','grade','','R','year','','RinRange1950:2020');return document.MM_returnValue" value="Submit" /></td>
    </form>
  </tr>
</table>

    <br />
	<?php 
 }
 ?>
            <span class="boldDeepGrey10">Course Registration Profile [<a href="?page=courses">+New</a>]:</span>
            <table align="center" class="tableDotTop" width="100%" border="0" cellspacing="2" cellpadding="1">
  <tr>
    <th scope="col">Registration Date</th>
    <th scope="col">Course</th>
    <th scope="col">Grade</th>
    <th scope="col">Status</th>
    <th scope="col">Cost</th>
    <th scope="col">Balance</th>
  </tr>
  <?php 
  $results = query("SELECT * FROM registered_courses join course_profiles ON registered_courses.cid=course_profiles.id WHERE registered_courses.sid = '{$_SESSION['logged_in_user_id']}' ORDER BY registered_courses.date, course_profiles.category ASC");
  $colorset=0;
  while ($courses = mysql_fetch_array($results)) {
  $colorset++;
					if (($colorset%2) == 1)
						$color="#f6f6f6";
						 else $color = "#ffffff";
  ?>
  <tr<?php echo "bgcolor=\"{$color}\""; ?>>
    <td align="center" valign="top"><?php echo $courses['date']; ?></td>
    <td align="center" valign="top"><?php echo $courses['title']; ?></td>
    <td align="center" valign="top"><?php echo $courses['grade']; ?></td>
    <td align="center" valign="top"><?php echo $courses['status']; ?></td>
    <td align="center" valign="top">$<?php echo $courses['cost']; ?></td>
    <td align="center" valign="top"><?php echo $courses['balance']; ?></td>
  </tr>
  <?php }// while ?>
</table>

            <!--<a name="register" id="register"></a> --></td>
          </tr>
        </table> 
  <?php 
  //if (isset($_GET['course'])) {
  ?>
  <!--<br />
<span class="boldDeepGrey10">Course Registration: <?php echo $_GET['course']; ?> [<a href="?page=courses">Cancel</a>]:</span> -->

  <?php  //} ?>
               </td>
              </tr>
              <tr>              </tr>
            </table>