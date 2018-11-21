
<table class="pagecurl" width="100%" border="0" cellspacing="1" cellpadding="4">
      <tr>
        <td width="29%" valign="top"><h2>News</h2>
          <marquee direction=up loop=true height="80" behavior='scroll' scrollamount='1' onmouseover='this.stop()' onmouseout='this.start()'>
            <!--marquee text starts here -->
            <ul>
              <?php 
			  $results=query("SELECT * FROM  news_ticker WHERE active ='1' ORDER BY date DESC");
			  while ($row=mysql_fetch_array($results)) {
			  echo "<li><a href=\"?page=news&id={$row['id']}\">{$row['title']}</a><br />{$row['date']}</li><br />"; 
			  }
			   ?>
            </ul>
            <!--marquee text ends here -->
            </marquee>	
          <h2>Courses [<a href="?page=courses">See full list</a>]</h2>
          <table width="100%" class="tableDotTop" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <th align="center" valign="top"><div align="left"><img src="images/green_point_arrow.gif" width="23" height="7" /> Online Programmes</div></th>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><ul>
                        <li>
                          <div align="left">Project Management</div>
                        </li>
                        <li>
                          <div align="left">Human Resource Management</div>
                        </li>
                        <li>
                          <div align="left">Office Administration</div>
                        </li>
                        <li>
                          <div align="left">Supervisory Management</div>
                        </li>
                      </ul></td>
                    </tr>
                    <tr>
                      <th align="center" valign="top"><div align="left"><img src="images/green_point_arrow.gif" width="23" height="7" /> Home Study/Distance Education</div></th>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><ul>
                        <li>
                          <div align="left">Pre-University Mathematics</div>
                        </li>
                        <li>
                          <div align="left">Pre-University English</div>
                        </li>
                        <li>
                          <div align="left">Supervisory Manegement</div>
                        </li>
                        <li>
                          <div align="left">Principles of Accounts</div>
                        </li>
                      </ul></td>
                    </tr>
                    <tr>
                      <th align="center" valign="top"><div align="left"><img src="images/green_point_arrow.gif" width="23" height="7" /> CXC Level</div></th>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><ul>
                        <li>
                          <div align="left">English Language</div>
                        </li>
                        <li>
                          <div align="left">Mathematics</div>
                        </li>
                        <li>
                          <div align="left">Principles of Accounts</div>
                        </li>
                        <li>
                          <div align="left">Principles of Business</div>
                        </li>
                        <li>
                          <div align="left">Office Procedures</div>
                        </li>
                      </ul></td>
                    </tr>
                    <tr>
                      <th align="center" valign="top"><div align="left"><img src="images/green_point_arrow.gif" alt="" width="23" height="7" /> UG Foundation Courses</div></th>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><ul>
                        <li>
                          <div align="left">English Language</div>
                        </li>
                        <li>
                          <div align="left">Mathematics</div>
                        </li>
                        <li>
                          <div align="left">Physics</div>
                        </li>
                        <li>
                          <div align="left">Chemistry</div>
                        </li>
                        <li>
                          <div align="left">Biology</div>
                        </li>
                      </ul></td>
        </tr>
        </table>        </td>
        <td width="71%" rowspan="2" valign="top"><h2>Welcome</h2>
          <p> The Institute of Distance and Continuing Education, the extension arm of   the <a href="http://www.uog.edu.gy/" target="_blank">University of Guyana</a>, is one of the major adult education   institutions in Guyana and was established in January, 1976.    Originally, it was the Department of Extra Mural Studies, a unit of the   Faculty of Education.  In December 1983, the Academic Board approved the   upgrading and expansion of the Department into the Institute of Adult   and Continuing Education, University of Guyana. </p>
          <p> In November 1992, the Institute of Adult and Continuing Education   (I.A.C.E.) launched the first Distance Education Programme offered by   the <a href="http://www.uog.edu.gy/" target="_blank">University of Guyana</a> &ndash; the Pre-University English Course.  Then in August, 1996, in keeping with a new mandate to assist the University to   become dual mode, the Institute was re-designated the Institute of   Distance and Continuing Education (I.D.C.E.).</p>
          <p> A student, who registers for an Institute of Distance and Continuing   Education Course, has joined an ever-increasing number of individuals   seeking to expand their knowledge.  Whatever his/her reason for seeking   to improve his/her educational level, we at the Institute are <strong>HAPPY   TO HELP STUDENTS TO ACHIEVE</strong>.  There are, however, some   basic responsibilities, which each student has, both to himself/herself   and to the Institute. </p>
          <p>A student&rsquo;s success depends on  how much effort he/she is prepared to   make to succeed. </p>
          <p>&nbsp;</p>
          <table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
   <br />
 <td class="tableDotTop"><h5><strong>Prime Minister Samuel Hinds addressing the gathering at the   University of Guyana/IDCE graduation in Mahaicony. [<a href="?page=photogallery">click here for photo gallery</a></strong>]</h5>
 <p align="center"><a href="?page=photogallery" target="_self"><img src="images/frontimg.jpg" width="562" height="168" border="0" /></a></p>
      <p>&nbsp;</p></td>
  </tr>
</table></td>
  </tr>
      <tr>      </tr>
</table>
