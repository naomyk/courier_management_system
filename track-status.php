<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier / Cargo Tracking Script in PHP - Ver 0.97</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
</head>
<body >
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>            
  <tbody><tr>
    <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br></strong></div></td>
  </tr>
  <tr bgcolor="EFEFEF"> <td class="aalpha" valign="top"><div align="center">Enter the Consignment no </div></td></tr>
  <tr bgcolor="EFEFEF">
    <td valign="top"><div align="center">
      <form action="track-result.php" method="post" name="form" id="form" >
		    <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text"> 
        <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
      </form>
      <span class="gentxt">Ex: IXM53533553 </span>         
    </div></td>
  </tr>
</body></html>