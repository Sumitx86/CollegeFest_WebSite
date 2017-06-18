  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">body, a:hover {cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1103.ani), url(http://ani.cursors-4u.net/cursors/cur-12/cur1103.png), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2014/03/14/rainbow-pinwheel-pointer.html" target="_blank" title="Rainbow Pinwheel Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Rainbow Pinwheel Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
<link async href="http://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<link async href="http://fonts.googleapis.com/css?family=Baumans" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>

  </style>


<head>
 	<script type="text/javascript">
// <![CDATA[
var colour="random"; // in addition to "random" can be set to any valid colour eg "#f0f" or "red"
var sparkles=50;

/****************************
*  Tinkerbell Magic Sparkle *
*(c)2005-13 mf2fm web-design*
*  http://www.mf2fm.com/rv  *
* DON'T EDIT BELOW THIS BOX *
****************************/
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();

window.onload=function() { if (document.getElementById) {
  var i, rats, rlef, rdow;
  for (var i=0; i<sparkles; i++) {
    var rats=createDiv(3, 3);
    rats.style.visibility="hidden";
    rats.style.zIndex="999";
    document.body.appendChild(tiny[i]=rats);
    starv[i]=0;
    tinyv[i]=0;
    var rats=createDiv(5, 5);
    rats.style.backgroundColor="transparent";
    rats.style.visibility="hidden";
    rats.style.zIndex="999";
    var rlef=createDiv(1, 5);
    var rdow=createDiv(5, 1);
    rats.appendChild(rlef);
    rats.appendChild(rdow);
    rlef.style.top="2px";
    rlef.style.left="0px";
    rdow.style.top="0px";
    rdow.style.left="2px";
    document.body.appendChild(star[i]=rats);
  }
  set_width();
  sparkle();
}}

function sparkle() {
  var c;
  if (Math.abs(x-ox)>1 || Math.abs(y-oy)>1) {
    ox=x;
    oy=y;
    for (c=0; c<sparkles; c++) if (!starv[c]) {
      star[c].style.left=(starx[c]=x)+"px";
      star[c].style.top=(stary[c]=y+1)+"px";
      star[c].style.clip="rect(0px, 5px, 5px, 0px)";
      star[c].childNodes[0].style.backgroundColor=star[c].childNodes[1].style.backgroundColor=(colour=="random")?newColour():colour;
      star[c].style.visibility="visible";
      starv[c]=50;
      break;
    }
  }
  for (c=0; c<sparkles; c++) {
    if (starv[c]) update_star(c);
    if (tinyv[c]) update_tiny(c);
  }
  setTimeout("sparkle()", 40);
}

function update_star(i) {
  if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
  if (starv[i]) {
    stary[i]+=1+Math.random()*3;
    starx[i]+=(i%5-2)/5;
    if (stary[i]<shigh+sdown) {
      star[i].style.top=stary[i]+"px";
      star[i].style.left=starx[i]+"px";
    }
    else {
      star[i].style.visibility="hidden";
      starv[i]=0;
      return;
    }
  }
  else {
    tinyv[i]=50;
    tiny[i].style.top=(tinyy[i]=stary[i])+"px";
    tiny[i].style.left=(tinyx[i]=starx[i])+"px";
    tiny[i].style.width="2px";
    tiny[i].style.height="2px";
    tiny[i].style.backgroundColor=star[i].childNodes[0].style.backgroundColor;
    star[i].style.visibility="hidden";
    tiny[i].style.visibility="visible"
  }
}

function update_tiny(i) {
  if (--tinyv[i]==25) {
    tiny[i].style.width="1px";
    tiny[i].style.height="1px";
  }
  if (tinyv[i]) {
    tinyy[i]+=1+Math.random()*3;
    tinyx[i]+=(i%5-2)/5;
    if (tinyy[i]<shigh+sdown) {
      tiny[i].style.top=tinyy[i]+"px";
      tiny[i].style.left=tinyx[i]+"px";
    }
    else {
      tiny[i].style.visibility="hidden";
      tinyv[i]=0;
      return;
    }
  }
  else tiny[i].style.visibility="hidden";
}

document.onmousemove=mouse;
function mouse(e) {
  if (e) {
    y=e.pageY;
    x=e.pageX;
  }
  else {
    set_scroll();
    y=event.y+sdown;
    x=event.x+sleft;
  }
}

window.onscroll=set_scroll;
function set_scroll() {
  if (typeof(self.pageYOffset)=='number') {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
  }
  else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
  }
  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
    sdown=document.documentElement.scrollTop;
  }
  else {
    sdown=0;
    sleft=0;
  }
}

window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)=='number' && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

function createDiv(height, width) {
  var div=document.createElement("div");
  div.style.position="absolute";
  div.style.height=height+"px";
  div.style.width=width+"px";
  div.style.overflow="hidden";
  return (div);
}

function newColour() {
  var c=new Array();
  c[0]=255;
  c[1]=Math.floor(Math.random()*256);
  c[2]=Math.floor(Math.random()*(256-c[1]/2));
  c.sort(function(){return (0.5 - Math.random());});
  return ("rgb("+c[0]+", "+c[1]+", "+c[2]+")");
}
// ]]>
</script>
</head>
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
    
    width:40%;
    border: 5px solid #73AD21;
    padding: 8px;
    }
</style>

<script>
function validateForm() {
   var x = document.forms["myForm"]["rollno"].value;
    if (isNaN(x) || x == null || x == "") {
        alert("Rollno must be filled out correctly  ");
        return false;
    }
    if(x.length !=10)
    {
        alert("Roll Number should be of 10 digits");
        return false;
    }
 
    var x1 = document.forms["myForm"]["fname"].value;
    if (x1 == null || x1 == "") {
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
    if(x.length !=10)
    {
        alert("Mobile Number should be of 10 digits");
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


    <style>
	
.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal normal 900 70px/normal "Aldrich", Helvetica, sans-serif;
  color: rgb(32, 44, 45);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 0 1px 0 rgb(128,141,147) , -1px 0 0 rgb(205,210,213) , -1px 2px 0 rgb(128,141,147) , -2px 1px 0 rgb(205,210,213) , -2px 3px 0 rgb(128,141,147) , -3px 2px 0 rgb(205,210,213) , -3px 4px 0 rgb(128,141,147) , -4px 3px 0 rgb(205,210,213) , -4px 5px 0 rgb(128,141,147) , -5px 4px 0 rgb(205,210,213) , -5px 6px 0 rgb(128,141,147) , -6px 5px 0 rgb(205,210,213) , -6px 7px 0 rgb(128,141,147) , -7px 6px 0 rgb(205,210,213) , -7px 8px 0 rgb(128,141,147) , -8px 7px 0 rgb(205,210,213) ;
}

	</style>
<style>
.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  margin: 6px;
  padding: 1px 6px;
  border: 1px solid #b7b7b7;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 20px/normal "Comic Sans MS", cursive, sans-serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(252,252,252,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}
</style>
  <style>
.button {
  display: inline-block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  border: none;
  font: normal 48px/normal "Warnes", Helvetica, sans-serif;
  color: rgba(255,255,255,1);
  text-decoration: normal;
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  white-space: pre;
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.button:hover {
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
}
.enjoy1-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal normal bold 21px/1 "Comic Sans MS", cursive, sans-serif;
  color: #0096ff;
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
}
</style>

<div class="container"style="background:url('373526.jpg')repeat  left fixed;width:100%;height:1500px">
<div class="container"style="margin-left:10%;margin-top:3%">

<form method="post" action="insert.php" onsubmit="return validateForm()" name="myForm">
<fieldset class="Resistration_Form">
<div class="button">Registration</div>

             <div class="form-group">
      <label for="roll_number"><div class="enjoy1-css"style="margin-top:15%">Roll No.</div></label>
      <div class="col-sm-7"><input type="digit"name="rollno" class="enjoy-css" >
    </div>
   </div>
<br><br>
         <div class="form-group">
      <label for="first_name"><div class="enjoy1-css">First Name:</div></label>
      <div class="col-sm-7"> 
	  <input type="text" name="fname" class="enjoy-css">
    </div></div>
<br>    
<br>
      <div class="form-group">
      <label for="last_name"><div class="enjoy1-css">Last Name:</div></label>
      <div class="col-sm-7"> <input type="text" name="lname" class="enjoy-css" >
    </div></div>
<br> <br>   

    <div class="form-group">
      <label for="branch"><div class="enjoy1-css"style="margin-top:15%">Branch:</div></label>
      <div class="col-sm-7">
      <select class="enjoy-css" name="branch" >
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
      <label for="year"><div class="enjoy1-css"style="margin-top:15%">Year:</div></label>
     <div class="col-sm-7">
     <select class="enjoy-css" name="year">
           <option value="">  </option>
            <option value="FIRST"> FIRST </option>
            <option value="SECOND"> SECOND </option>
            <option value="THIRD"> THIRD </option>
            <option value="FOURTH"> FOURTH </option>
          </select>
    </div></div>
  <br>   <br>    



             <div class="form-group">
      <label for="mobile"><div class="enjoy1-css"style="margin-top:15%">Mobile</div></label>
      <div class="col-sm-7"> <input type="digit" name="mobile"class="enjoy-css" >
    </div>
<br><br><br>         
         
    <div class="form-group">
     <label for="email"><div class="enjoy1-css"style="margin-top:15%">Email:</div></label>
     <div class="col-sm-7"> <input type="email" class="enjoy-css"name="email" placeholder="Enter email">
    </div></div>
    
<br><br>    
      <div class="form-group">
      <label for="event"><div class="enjoy1-css"style="margin-top:15%">Event:</div></label>
      <div class="col-sm-7"> <select class="enjoy-css" name="event" >
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
    <input type="submit" class="btn btn-default"/>
    
</fieldset></div>
</form>
<div>
</body>
</html>
