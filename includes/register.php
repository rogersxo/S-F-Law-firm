<script type="text/javascript">
	$(function(){
		$("#yourbutton").buttonCaptcha({
			codeWord:'idceug',
			codeZone:'com'
		});
	});
</script>
<table class="pagecurl" width="100%" border="0" cellspacing="1" cellpadding="4">
              <tr>
                
                <td width="72%" rowspan="2" valign="top"><h2>Register Online</h2>
                            
                  <table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
           <br />
         <td class="tableDotTop">
              
              <table width="100%" border="0" cellspacing="4" cellpadding="4">
                <tr>
                  <td width="50%" valign="top" bgcolor="#F7F7F7"><ul>
                    <li><span>When you register at our website, you can login anytime to check your application status and to receive feed-back information relating to the course(s) you are taking from IDCE.</span></li>
                    <li> Your email address will be used as your login and as your primary contact from our automated system.</li>
                    <li>Carefully confirm your information before you click &quot;Register Now&quot;. All subsequent editing can only be done by our administrative officers.</li>
                    <li>Your information will not be redistributed or be used in any other way (marketed or otherwise) but only for IDCE course registration purposes. </li>
                    <li>If you have any question please let us hear from you. </li>
                    <li><span class="redText">*</span> denotes required fields</li>
                  </ul></td>
                </tr>
            </table>              
              <form id="formID" action="scripts/register_student.php" method="post" name="register"><table width="100%" border="0" cellspacing="2" cellpadding="1">
                  <tr>
                    <td align="right" valign="top" bgcolor="#FFF1DF"><span class="redText">*</span>Regional Centre:</td>
                    <td valign="top" bgcolor="#FFF1DF"><select id="centre" name="centre" class="validate[required] text-input"/>
                    <option value="">Select One</option>
                    <option value="Georgetown">Georgetown</option>
                    <option value="Anna Regina">Anna Regina</option>
                    <option value="Berbice">Berbice</option>
                    <option value="Linden">Linden</option>
                    </select>
                    </td>
                    <td align="right" valign="top"><span class="redText">*</span>Home/Mailing Address:</td>
                    <td colspan="2" rowspan="4" valign="top"><label for="homeaddress"></label>
                    <textarea name="homeaddress" id="homeaddress" cols="30" rows="5" class="validate[required] text-input"></textarea></td>
                  </tr>
                <tr>
                  <td width="21%" align="right" valign="top"><label for="title"><span class="redText">*</span>Title:</label></td>
                  <td width="25%" valign="top">
                   
                      <label>
                        <input type="radio" name="title" value="Mr." id="RadioGroup1_0" checked="checked" />
                        Mr.</label>
                      <label>
                        | 
                        <input type="radio" name="title" value="Ms." id="RadioGroup1_1" />
                        Ms. |</label>
                      <label>
                        <input type="radio" name="title" value="Mrs." id="RadioGroup1_2" />
                        Mrs.</label>                    </td>
                  <td width="22%" align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><label for="firstname"><span class="redText">*</span>First Name:</label></td>
                  <td valign="top">
                  <input type="text" name="firstname" id="firsttname" class="validate[required] text-input" size="30" /></td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><label for="lastname"><span class="redText">*</span>Last Name:</label></td>
                  <td valign="top"><input type="text" name="lastname" id="lastname" class="validate[required] text-input" size="30" /></td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><label for="othername">Other Name:</label></td>
                  <td valign="top"><input type="text" name="othername" id="othername" size="30" /></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7">Place of Employment:</td>
                  <td colspan="2" valign="top" bgcolor="#F7F7F7"><input type="text" name="workplace" id="workplace" size="30" /></td>
                </tr>
                <tr>
                  <td align="right" valign="top">Father's Name:</td>
                  <td valign="top"><input type="text" name="fathername" id="fathername" size="30" /></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7">Occupation:</td>
                  <td colspan="2" valign="top" bgcolor="#F7F7F7"><input type="text" name="occupation" id="occupation" size="30" /></td>
                </tr>
                <tr>
                  <td align="right" valign="top">Mother's Name:</td>
                  <td valign="top"><input type="text" name="mothername" id="mothername" size="30" /></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7">Business Address:</td>
                  <td colspan="2" rowspan="3" valign="top" bgcolor="#F7F7F7"><textarea name="businessaddress" id="businessaddress" cols="30" rows="4"></textarea></td>
                </tr>
                <tr>
                  <td align="right" valign="middle"><label for="dob"><span class="redText">*</span>Date of Birth:</label></td>
                  <td valign="top"><input name="dob" id="datepicker" size="30" class="validate[required,custom[date]] text-input"/></td>
                  <td align="right" valign="top" bgcolor="#F7F7F7"><label for="occupation"></label></td>
                </tr>
                <tr>
                  <td align="right" valign="top"><label for="nationality">Nationality:</label> </td>
                  <td valign="top">
                <input name="nationality" type="text" size="30"  style="color:#999;" maxlength="128" id="user" onblur="this.value = this.value || this.defaultValue; this.style.color = '#999';"onfocus="this.value=''; this.style.color = '#000';"value="Guyanese" />             </td>
                  <td align="right" valign="top" bgcolor="#F7F7F7">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" valign="top"><label for="hometel">Home Telephone:</label></td>
                  <td valign="top"><input type="text" name="hometel" id="hometel" size="30" /></td>
                  <td align="right" valign="top" bgcolor="#FFFEEE" rowspan="4">If you have a disability or specific learning  difficulty, please specify:                  </td>
                  <td width="32%" rowspan="4" valign="top" bgcolor="#FFFEEE"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  																<?php 
																				$disab = query("SELECT * FROM  disability ORDER BY disability ASC");
																			
																				while ($dis=mysql_fetch_array($disab)) {
																				
																				?>
                                                                                  <tr>
                                                                                    <td valign="top" scope="col">
                                                                                    <input name="<?php echo $dis['id']; ?>" type="checkbox" value="yes" /><label for="<?php echo $dis['id']; ?>"><?php echo $dis['disability']; ?></label><br /></td>
                      </tr>
                                                                                  <?php } ?>
                                                                                </table>

                  <label for="checkbox"></label><input name="otherdisability" type="text" /><label for="otherdisability">Other</label></td>
                </tr>
                <tr>
                  <td align="right" valign="top">Cellular Number:</td>
                  <td valign="top"><input type="text" name="celltel" id="celltel" size="30" /></td>
                </tr>
                <tr>
                  <td align="right" valign="top">Work Telephone:</td>
                  <td valign="top"><input type="text" name="worktel" id="worktel" size="30" /></td>
                </tr>
                <tr>                </tr>
                <tr>
                  <td align="right" valign="top"><label for="email" title="Required email address."><span class="redText">*</span>Email Address:</label></td>
                  <td valign="top"><input type="text" name="email" id="email" class="validate[required,custom[email]] text-input" size="30" /></td>
                  <td align="right" valign="top" bgcolor="#FFF2F2"><span class="redText">*</span>Please select a password which you will use with  your email address as login:</td>
                  <td colspan="2" valign="top" bgcolor="#FFF2F2"><input type="password" name="password" id="password" class="validate[required]" size="30" /></td>
                </tr>
                <tr>
                  <td align="right" valign="top"><span class="redText">*</span>Marital Status:</td>
                  <td valign="top"><select name="maritalstatus" id="maritalstatus" class="validate[required] text-input">
                    <option value="">Select One</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                  </select></td>
                  <td colspan="2" valign="top">
                  <!--<button id="yourbutton">Register Now</button> -->

                  <input name="register" type="submit" id="yourbutton" value="Register Now!" /></td>
                </tr>
              </table> 
            </form>           <p>&nbsp;</p></td>
          </tr>
        </table>        </td>
              </tr>
              <tr>              </tr>
            </table>