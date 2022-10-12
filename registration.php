 <?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if
require_once('database.php');
 $server = "localhost";
  $user ="root";
  $pass ="";
  $dbname ="courier_db";
  //create connection 
  $conn =mysqli_connect($server, $user, $pass, $dbname);
  //check connection
  if(!$conn) {
     die ("connection failed : ". mysqli_connect_error());
  } else {
     echo "";
  }
$sql = "SELECT DISTINCT(off_name)FROM tbl_offices";
$result = dbQuery($sql);
if(isset ($_POST['Submit'])) {
  $name = $_POST['txtname'];
  $address= $_POST['txtadd'];
	$email = $_POST['txtemailid'];
	$contact = $_POST['txtnumber'];
	$pass = $_POST['txtpassword'];
	$office=$_POST['OfficeName'];
  $sql = "INSERT INTO tbl_courier_officers (officer_name,off_pwd,address,email,ph_no,office)VALUES ('$name', '$pass', '$address','$email','$contact','$office')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registration</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function memloginvalidate(){
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == ""){
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }
</table></body></html>