<!DOCTYPE html>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<html>
<head>
<style>
  fieldset{
  	width:50%;
  	background-color:
  }
.Resistration_Form label{
  float : left;
  width:100px;
}</style>	
<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
</head>






<body>

<div class="container">
  <h2>Admin Login</h2>

  <form class="form-horizontal" name="myForm" method="post" action="" onsubmit="return validateForm();">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="email" name="email"class="form-control"placeholder="Enter email">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-5">          
        <input type="password"name="password" class="form-control" placeholder="Enter password">
      </div>
    </div>

	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10"for="password">
  <button type="submit" value="Submit" name="submit1" class="btn btn-default">Submit</button>
 </div>
    </div>
  </form>
</div>

</html>
<?php    
if(isset($_POST['submit1'])){ //check if form was submitted
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "event";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	echo "as";
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$email=$_POST["email"];
	$password=$_POST["password"];
	$sql = "SELECT email FROM student where email='$email' and password='$password'" ;
	$result = $conn->query($sql);
    if ($result->num_rows > 0) 	header('Location: admin.php');
		
		else echo "Admin entry wrong!";
	

	$conn->close();
}    
?>
