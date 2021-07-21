<html>
<head>
<title>Admin Login</title>
<script>
function checkEmail()
{
//alert("hii");
var pemail=/^([a-zA-Z0-9\.]+)@([a-zA-Z0-9-]+).([a-zA-Z]{2,10})(.[a-zA-Z]{2,10})?$/;
var email=document.getElementById("txtemail").value;
if(pemail.test(email))
{
alert("Valid Email");
return true;
}
else
{
document.getElementById("txtemail").style.border="2px dashed red";
return false;
}
}
</script>
<style type="text/css">
table
	{
    width: 400px;
    height: 100px;
  	border-radius:4px;
    border: 3px inset #0E6655;
  }
div
   {
    text-align:center;
   }
body
  {
	 background-image:url("/myproject/adminback.jpg");
   background-repeat:no-repeat;
   background-size:cover;
  }
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<form onsubmit="return checkEmail()" action="\myproject\amainpage.php" method="post">
<table align="center" cellspacing="10" class="box">
<tr ><td align="center" >
     <div> <font size="5" face="Comic Sans MS" color=""><b>ADMIN LOGIN</b></font></div>
<br>
<br>
<br>
	  <div><font size="4" face="Lucida Calligraphy">Admin ID:</font>
         <input type="text" id="txtemail" ></div>
<br>
<br>
<br>
     <div><font size="4" face="Lucida Calligraphy">Password:</font>
 	        <input type="password" name="psw" required></div>
<br>
     <div><input type="submit" value="Login"></div>
     <div><a href="\myproject\aregistration.php">Reset</a></div>
</td>
</tr>
</table>
</form>
</body>
</html>
