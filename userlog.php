<html>
<head>
<title>User Login</title>
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
table{
     width: 400px;
     height: 100px;
	   border-radius:4px;
     border: 3px inset #0E6655;
    }
 div{
     text-align:center;
    }
body{
	   background-image:url("/myproject/background.jpg");
    }
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<form onsubmit="return checkEmail()" action="\myproject\umainpage.php" method="post" >
<table align="center" cellspacing="10">
   <tr><td align="center">
       <div><font size="6" face="Comic Sans MS"><b>USER LOGIN</b></font></div>
	     <br>
       <br>
       <div><font size="4" face="Lucida Calligraphy">User ID:</font>
            <input type="text" id="txtemail" /></div>
       <br>
	     <br>
       <div><font size="4" face="Lucida Calligraphy">Password:</font>
 	          <input type="password" name="psw" required/></div>
       <br>
       <div><input type="submit" value="Login" ></div>
       <div><a href="\myproject\uregister.php"><font size="4" face="Lucida Calligraphy">Reset Password</font></a></div>
    </td></tr>
  </table>
  </form>
  </body>
  </html>
