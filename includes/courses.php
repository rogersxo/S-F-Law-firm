<script type="text/javascript">
function linkRef(yurl ){
var linkref = yurl;
if(confirm("You are about to register for this course, click [yes] to continue.")){
window.location.href=linkref;
}
}
</script>

<table class="pagecurl" width="100%" border="0" cellspacing="1" cellpadding="4">
              <tr>
                
                <td width="72%" rowspan="2" valign="top"><h2>IDCE Courses</h2>
                            
                  <table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
           
         <td bgcolor="#F8F8F8" class="tableDotTop">
              
                <ul>
                    <li><span>Click on individual course titles for an overview of the course structure.</span> </li>
                    <li>Learning is where Career Paths begin. Join our IDCE Classes now and be inspired to grow professionally and intellectually.</li>
                    <li>GT (Georgetown), LI (Linden), NA (New Amsterdam), AR (Anna Regina); where the courses are offered.</li>
            </ul>            </td>
          </tr>
          <tr>
            <td>
            <?php // displaying courses
			$results = query("SELECT * FROM  course_categories WHERE active = '1' ORDER BY category DESC");
			while($categories=mysql_fetch_array($results)){
			echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">";
			echo "<tr><th scope=\"col\" colspan=\"2\">
<div align=\"left\"><img src=\"images/green_point_arrow.gif\" width=\"23\" height=\"7\" /> {$categories['category']}</div></th></tr>";
			echo "<tr><td>";
			//Courses lists
			?>
            <table width="100%" border="0" cellspacing="2" cellpadding="0">
             <?php 
			 $cresults=query("SELECT * FROM course_profiles WHERE active = '1' AND category = '{$categories['id']}' ORDER BY  title ASC");
			 $colorset=0;
			 while($courses = mysql_fetch_array($cresults)) {
			 $colorset++;
						if (($colorset%2) == 1)
							$color="#f6f6f6";
							 else $color = "#ffffff";
			 ?>
              <tr <?php echo "bgcolor=\"{$color}\""; ?>>
                <td width="20%"><?php echo $courses['title']; ?></td>
                <td width="9%"><?php echo $courses['duration']; ?></td>
                <td width="8%"><?php echo $courses['centers']; ?></td>
                <td width="29%"><?php echo $courses['description']; ?></td>
                <td width="8%" align="center">$<?php echo $courses['cost']; ?></td>
                <td width="11%" align="center"><a href="<?php echo $courses['link']; ?>">Course Outline</a></td>
                <td width="15%" align="center"><?php if (!logged_in()) echo "Login to Register."; else echo "<a href=\"#\" onClick=\"linkRef('?page=student&course={$courses['id']}&cost={$courses['cost']}' )\" target=\"_self\">Register NOW!</a>"; ?></td>
              </tr>
              <?php } ?>
            </table>

            <?php
			//end of course list
			echo "</td></tr></table><br />";
			}// end while
			?>
            
            </td>
          </tr>
        </table>        </td>
              </tr>
              <tr>              </tr>
            </table>