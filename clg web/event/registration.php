  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">body, a:hover {cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1103.ani), url(http://ani.cursors-4u.net/cursors/cur-12/cur1103.png), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2014/03/14/rainbow-pinwheel-pointer.html" target="_blank" title="Rainbow Pinwheel Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Rainbow Pinwheel Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>

<style>
fieldset{
	width:50%;
	background-color:
}
.Resistration_Form label{
  float : left;
  width:100px;
}</style>
<style>
.center {
    margin: auto;
    
    width:46%;
    border: 5px solid #73AD21;
    padding: 8px;
	}
</style>

<script>
function validateForm() {
   var x = document.forms["myForm"]["rollno"].value;
    if (isNaN(x) || x == null || x == "" ) {
        alert("Rollno must be filled out correctly  ");
        return false;
    } 

	  
  var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("First Name must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["lname"].value;
    if (x == null || x == "") {
        alert("Last Name must be filled out");
        return false;
    }   
    var x = document.forms["myForm"]["branch"].value;
    if (x == null || x == "") {
        alert("Branch must be filled out");
        return false;
    }
   
    var x = document.forms["myForm"]["year"].value;
    if (x == null || x == "") {
        alert("Year must be filled out");
        return false;
    }
     var x = document.forms["myForm"]["mobile"].value;
    if(isNaN(x))  {
        alert("Mobile Number must be filled out");
        return false;
    } 
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Email a valid e-mail address");
        return false;
    }
   

    var x = document.forms["myForm"]["event"].value;
    if (x == null || x == "") {
        alert("Event must be filled out");
        return false;
    }
     
}
</script>
<font color="white"><h4>
<div class="center">
<body style="background:url('image/bg.jpg')repeat center center fixed;">
  

<div class="container">
<form method="post" action="insert.php" onsubmit="return validateForm()" name="myForm">
<fieldset class="Resistration_Form">
<legend><h2>Registration Form</h2></legend><br>

    

			 <div class="form-group">
      <label for="roll_number">Roll No.</label>
      <div class="col-sm-7"><input type="digit"name="rollno"class="form-control" >
    </div></div>
<br><br>
		 <div class="form-group">
      <label for="first_name">First Name:</label>
      <div class="col-sm-7"> <input type="text" name="fname" class="form-control">
    </div></div>
<br>    
		 <div class="form-group">
      <label for="last_name">Last Name:</label>
      <div class="col-sm-7"> <input type="text" name="lname" class="form-control" >
    </div></div>
<br> <br>   

    <div class="form-group">
      <label for="branch">Branch</label>
      <div class="col-sm-7">
	  <select class="form-control" name="branch" >
         <option value="">  </option>
            <option value="C.S.E."> C.S.E. </option>
            <option value="E.C."> E.C. </option>
            <option value="B.T"> B.T </option>
            <option value="M.E."> M.E. </option>
            <option value="C.E."> C.E. </option>
            <option value="E.E."> E.E. </option>
         </select>
    </div></div>
<br><br>

        <div class="form-group">
      <label for="year">Year</label>
     <div class="col-sm-7">
	 <select class="form-control" name="year">
           <option value="">  </option>
            <option value="FIRST"> FIRST </option>
            <option value="SECOND"> SECOND </option>
            <option value="THIRD"> THIRD </option>
            <option value="FOURTH"> FOURTH </option>
          </select>
    </div></div>
  <br>   <br>    



			 <div class="form-group">
      <label for="mobile">Mobile</label>
      <div class="col-sm-7"> <input type="digit" name="mobile"class="form-control" >
    </div>
<br><br><br>		 
		 
    <div class="form-group">
  	 <label for="email">Email:</label>
     <div class="col-sm-7"> <input type="email" class="form-control"name="email" placeholder="Enter email">
    </div></div>
    
<br><br>	
	  <div class="form-group">
      <label for="event">Event</label>
      <div class="col-sm-7"> <select class="form-control" name="event" >
            <option value="">  </option>
            <option value="    Robot"> Robot </option>
            <option value="    Coding"> Coding </option>
            <option value="    Web Devlopment"> Web Devlopment </option>
            <option value="    Treasure Hunt"> Treasure Hunt </option>
            <option value="    Augmented Gaming"> Augmented Gaming </option>
            <option value="    Debate"> Debate </option>
            <option value="    Rubic Cube"> Rubic Cube </option>
            <option value="    Coding"> Coding </option>
            <option value="    Photo Editing"> Photo Editing </option>
            <option value="    DJ Mixing"> DJ Mixing </option>
            <option value="    Alarm System"> Alarm System </option>
          </select>
    </div></div>
 <br>  <br><br>      
    <button type="submit" class="btn btn-default">Submit</button>
</fieldset></div>
</form>
<div>
</body>
</html>
