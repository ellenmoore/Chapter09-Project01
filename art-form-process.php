

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="chapter09-project01.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
</head>

<body>



<?php include 'art-header.inc.php' ?>
<?php
	function checkPrivacy(){
		if ($_POST['privacy']== true){
		return "Yes";
		}
		else {return "No";}
	}
$currentPage = "My Account";
$content = array("Login" => array("Login Page","This page is the login page"),
"Register" => array("Register page", "Register page content here"),
"Password Recovery" => array("Password Recovery page", "Password Recovery page content here"),
"My Account" => array("My Account page", "My Account page content here"),
"Returns" => array("Returns page", "Returns page content here"),
"Order History" => array("Order History page", "Order History page content here"));
?>

<div class="container">


   
   <div class="row">
      <div class="col-md-3">
      
         <div class="panel panel-default">
           <div class="panel-heading">Account</div>
           <div class="panel-body">

           <ul class="nav nav-pills nav-stacked">
               <?php $pageCount =1;
						foreach ($content as $key => $elements){
							echo "<li ";
							echo ($key == $currentPage ? " class='active'" : "");
							echo "><a href='?page=$pageCount'>$key</a></li></br>";
							$pageCount++;
						} ?>
           </ul>  
           
           
           </div>
         </div>      

      </div>
      <div class="col-md-9">
      
         <div class="page-header">
            <h2>My Account</h2>
            <p>Welcome <?php echo $_POST["first"];	echo " "; echo $_POST["last"];?></p>   
         </div>
         
         <div class="well">
            <p> <?php echo "First Name: ". $_POST['first']; ?> </p>
			<p> <?php echo "Last Name: ". $_POST['last']; ?> </p>
			<p> <?php echo "Email: ". $_POST['email']; ?> </p>
			<p> <?php echo "Agreed to Privacy Policy: ". checkPrivacy(); ?> </p>
         </div>
      </div>  
   </div> 
      

   


</div>  <!-- end container -->

<?php include 'art-footer.inc.php' ?>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>
