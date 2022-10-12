<?php
session_start();
error_reporting(0);
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if
require_once('database.php');

if(isset($_POST['registration'])){
  header("registration.php");    
  }
?>
<body onLoad="document.form1.txtusername.focus();">
<table id="Outer" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr><td><table id="inner" border="0" cellpadding="3" cellspacing="3" height="500" align="center" width="96%"><tbody><tr><td>
	<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
<tr>
  <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="300">
    <tbody><tr>
      <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
        <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%">
          <tbody><tr><td colspan="3" class="smalltextgrey">&nbsp;</td></tr>
          <tr><td colspan="3" class="smalltextgrey">
					  <div class="headtext13" align="center"><strong>Administrator Login Area </strong></div></td>
          </tr>
          <tr><td colspan="3" height="10"><font color="#FF0000" style="font-size:12px;"></font></td></tr>
            <tr>
              <td width="115">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Username</font></td><td width="3">:</td>
              <td width="160"><input name="txtusername" class="forminput" id="txtusername" maxlength="30" type="text"></td>
            </tr>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Password</font></td><td>:</td>
               <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password"></td>
            </tr>
					  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Office</font></td><td>:</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td><input name="Submit" class="green-button" value="Login" type="submit" style=""></td></tr>
          </tbody>
			  </table>
		  </form>
</tbody></table>
</td></tr></tbody></table></body></html>