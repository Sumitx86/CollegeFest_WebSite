<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>KajooBadam | join</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="css/metro-bootstrap.css">
    <!-- documentation styles -->
    <link rel="stylesheet" type="text/css" href="docs/docs.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>  
  <body data-spy="scroll" data-target=".subnav" data-offset="50" screen_capture_injected="true">
   <div id="waiting" style="z-index:1000;position:fixed;padding-top:19%;padding-left:47%;opacity:0.3;filter:alpha(opacity=30);background-color:#000000;width:100%;height:100%;display:none"><img src="images/load.gif"></div>
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><h1>KajooBadam</h1></a>
        </div>

        <div class="collapse navbar-collapse">
          <div class="navbar-right">
		  </div>
        </div>

      </div>
   </div>

      

    <div class="container">
	<div class="col-sm-5 col-md-5"></div><div class="col-sm-7 col-md-7"><button type="button" class="btn btn-info btn-lg">SignUp Using Facebook</button></div>
			<div class="col-sm-12 col-md-12"></div>
			<div class="col-sm-12 col-md-12"></div>
			<div class="col-sm-12 col-md-12"></div>
			<div class="col-sm-12 col-md-12"></div> 
			<div class="col-sm-6 col-md-6"><hr></div><div class="col-sm-1 col-md-1">OR</div><div class="col-sm-5 col-md-5"><hr></div>
			
		<div class="col-sm-2 col-md-2">
		</div>
		<div class="col-sm-8 col-md-8">
			<div class="alert alert-danger" style="display:none" id="warning">Oh sanp some of data is missing....</div>
			<form id="form">
				<div class="input-group input-group-lg">
				  <span class="input-group-addon">@</span>
				  <input type="text" class="form-control input-lg" placeholder="Username" name="username">
				</div><br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon">@</span>
				  <input type="email" class="form-control input-lg" placeholder="email" name="email">
				</div><br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon">@</span>
				  <input type="password" class="form-control input-lg" placeholder="Password" name="password">
				</div><br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon">@</span>
				  <input type="password" class="form-control input-lg" placeholder="Confirm Password" name="confirmPassword">
				</div>
				<div>
				  <h3>Male&nbsp;&nbsp;<input type="radio" name="sex" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female&nbsp;&nbsp;<input type="radio" name="sex" value="female"></h3>
				</div><br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon">@</span>
				  <input type="text" class="form-control input-lg" id="datepicker"  placeholder="Birth Day" name="datepicker">
				</div><br>
				<button type="button" class="btn btn-success btn-lg" onClick="submitData()">Join Us</button>
			</form>
		</div>
    </div>
    
	    
<div class="container">
      <!-- Site footer -->
	  <hr><div class="footer">    
        <p>A talkslab production by <a href="http://twitter.com/gsferreira" target="_blank">gsferreira</a>, <a href="http://twitter.com/nelsonreis" target="_blank">nelsonreis</a> and <a href="http://twitter.com/ruimlneves" target="_blank">ruimlneves</a>.</p>
      </div>
</div> <!-- /container -->
<!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="docs/jquery-1.8.0.js"></script>
<script type="text/javascript" src="docs/bootstrap.js"></script>
<script type="text/javascript" src="docs/jquery.validate.js"></script>
<script type="text/javascript" src="docs/jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="docs/jquery.unobtrusive-ajax.js"></script>
<script type="text/javascript" src="docs/metro-bootstrap/metro-docs.js"></script>
<script type="text/javascript" src="docs/submitData.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
  </body>
</html>