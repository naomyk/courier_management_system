<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier Management System</title>
<meta name="description" content="A Simple Solution to enable Tracking in your Existing Website.">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jshoverd.js"></script>
<link href="css/aalpha.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/topheader.css" type="text/css"> 
<link rel="stylesheet" href="css/slider.css" type="text/css"> 
<link href="css/style-services.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
<script >
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
<style type="text/css">
<!--
.style1 {color: #CCCCCC}
-->
</style>
</head>
<body >
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" >
  <div class="container top1">
    <div class="row">
	    <div class="col-sm-3"><img class="img-responsive" src="images/project-logo.png" alt="Courier service "/></div>
      <tr><td> <?php include 'slider.php';?></td></tr>
      </tbody></table>
	    <div class="container-fluid">
	      <div class="row">        
		      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-container jj">
		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-menu1">
		          <div class="list-group">
                <div href="#" class=" list-group-item1 active text-center ">
                  <h4 ><p class="glyphicon glyphicon-search active serv1"> Status Check:</p> <br>  </h4>    
                  <div align="center"><a class="serv1-link" href="track-status.php" target="_self">Click Here </a> </div>
                </div>
				      </div>     
		        </div>
		      	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-menu1">
		          <div class="list-group">
				        <div href="#" class="  list-group-item1 text-center active">
                  <h4  ><p class="glyphicon glyphicon-user active serv1"> ADMIN Login :</p><br></h4>
                  <div align="center"><a class="serv1-link" href="login.php" target="_self">Click here </a> </div>
                </div>
		          </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </table>
</html>