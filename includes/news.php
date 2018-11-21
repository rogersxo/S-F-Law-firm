
<table class="pagecurl" width="100%" border="0" cellspacing="1" cellpadding="4">
      <tr>
        <td width="29%" valign="top" bgcolor="#F9F9F9"><h2>News</h2>
         <!-- <marquee direction=up loop=true height="80" behavior='scroll' scrollamount='1' onmouseover='this.stop()' onmouseout='this.start()'>
            marquee text starts here -->
            <ul>
              <?php 
			  $results=query("SELECT * FROM  news_ticker WHERE active ='1' ORDER BY date DESC");
			  while ($row=mysql_fetch_array($results)) {
			  echo "<li><a href=\"?page=news&id={$row['id']}\">{$row['title']}</a><br />{$row['date']}</li><br />"; 
			  }
			   ?>
            </ul>
            <!--marquee text ends here 
          </marquee>	-->
          <h2>&nbsp;</h2>
        </td>
        <td width="71%" rowspan="2" valign="top"><?php
        $result = query("SELECT * FROM news_ticker WHERE id = '{$_GET['id']}' LIMIT 1");
		$row=mysql_fetch_array($result);
		?><h2><?php echo $row['title']; ?></h2>
          <span><?php echo $row['content']; ?></span>
         
          <table width="100%" border="0" cellspacing="1" cellpadding="0">
  
</table></td>
  </tr>
      <tr>      </tr>
</table>
