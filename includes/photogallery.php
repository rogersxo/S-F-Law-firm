<script src="scripts/PopBox.js" type="text/javascript"></script>
<script type="text/javascript">
popBoxWaitImage.src = "images/spinner40.gif";
popBoxRevertImage = "images/magminus.gif";
popBoxPopImage = "images/magplus.gif";
</script>
<table class="pagecurl" width="100%" border="0" cellspacing="1" cellpadding="4">
              <tr>
                
                <td width="72%" rowspan="2" valign="top"><h2>Welcome to our Photo Gallery</h2>
                            
                  <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
           
         <td width="20%" valign="top" bgcolor="#F8F8F8"><h3>Galleries</h3>
           <ul>
          	<?php 
				$albums = query("SELECT * FROM albums WHERE active = '1' ORDER BY date DESC");
				while ($gallery = mysql_fetch_array($albums)){
			?>
             <li><a href="?page=photogallery&amp;album=<?php echo $gallery['id']; ?>&title=<?php echo $gallery['title']; ?>"><?php echo $gallery['title']; ?></a></li>
            <?php } //end while ?>
           </ul></td>
          <td width="80%" valign="top" bgcolor="#F8F8F8">
          <?php 
		  if (isset($_GET['album'])) {
		  echo "<h3>{$_GET['title']}</h3>";
		   $results = query("SELECT * FROM photos WHERE albumid = '{$_GET['album']}' ORDER BY date ASC");
		   } else {
		   	//find latest added gallery... 
			$lastalbum = query2("SELECT * FROM albums WHERE active='1' ORDER BY date DESC LIMIT 1");
			echo "<h3>{$lastalbum['title']}</h3>";
		   $results = query("SELECT * FROM photos WHERE albumid = '{$lastalbum['id']}' ORDER BY date ASC");
		   }
		   $tdcount = 1;
		   $numtd = 4;
		   ?>
           <table cellpadding="1" cellspacing="2" width="100%"align="center">
				<?php while ($row = mysql_fetch_array ($results))
                {
                 if ($tdcount == 1)
                echo "<tr>";
                ?>
                <td align="center">
                <img id="<?php echo $row["id"]; ?>" src="<?php echo $row['path']; ?>" pbshowcaption="true" pbcaption="<?php echo $row['description']; ?>" style="width: 172px; height: 129px;" class="PopBoxImageSmall" title="Click to magnify/shrink" onclick="Pop(this,50,'PopBoxImageLarge');"/>
                </td>
                <?php
                if ($tdcount == $numtd)
                {
                echo "</tr>";
                $tdcount = 1;
                } else {
                $tdcount++;
                }
                }// time to close up our table
                if ($tdcount!= 1)
                {
                while ($tdcount <= $numtd) {
                echo "<td>&nbsp;</td>";
                $tdcount++; } echo "</tr>";
                }
                ?>
            </table>
          
          </td>
          </tr>
        </table>        </td>
              </tr>
              <tr>              </tr>
            </table>