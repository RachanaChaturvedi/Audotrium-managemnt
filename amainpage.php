<html>
<head>
<style type="text/css">
 li a{
	   display:inline;
	   color:F7BE81;
	   text-decoration:none;
	   border-spacing:0;
     }
 li a:hover{
 		background-color:#DC7633;
		color:#F1C40F;
	  border-radius:5px;
		height:20px;
		width:90px;
		padding:5px;
    transitation:width 1s,height 1s,transform 1s;
 		transform:zoom 1s;
	 }
ul{
   list-style:none;
  }
.grad{
    background-image:linear-gradient(to right,#0A0A2A, #08298A, #0040FF,#5882FA,#81BEF7);
    }
.image{
	  width:100%;
    height:100%;
	  background:url("/myproject/amain_edited.jpg");
	  background-repeat: no-repeat ;
    background-size:cover;
	  filter:brightness(20%);
	  filter:contrast(90%);
   }
</style>
<title>Admin Mainpage</title>
</head>
<body>
<table border="1" align="center" width="100%" height="100%">
  <tr>
     <td width="100%" height="50" colspan="3" bgcolor="#B45F04" class="grad"><font size="5" face="Lucida Calligraphy" color="#7B68EE" >Admin Panel</font> </td>
  </tr>
   <tr>
      <td width="18%" height="200" bgcolor="#B45F04" valign="tops";>
          <ul>
	          <li><font size="2" face="Comic Sans MS"><a href="\myproject\page2.php" target="main">Manage View</a></font></li>
	          <br>
 	          <li><font size="2" face="Comic Sans MS"><a href="\myproject\page3.php" target="main">Add Booking</a></font></li>
	          <br>
	          <li><font size="2" face="Comic Sans MS"><a href="#" target="main">View Booking</a></font></li>
	          <br>
	          <li><font size="2" face="Comic Sans MS"><a href="\myproject\page5c.php" target="main">Cancel Booking</a></font></li>
	          <br>
	          <li><font size="2" face="Comic Sans MS"><a href="\myproject\page7uin.php" target="main">Update Transication</a></font></li>
	          <br>
	          <li><font size="2" face="Comic Sans MS"><a href="\myproject\ahistory.php" target="main">Transication History</a></font></li>
          </ul>
        </td>

        <td>
	          <iframe  class="image" name="main" ></iframe>
        </td>

        <td width="16%" bgcolor="#B45F04" valign="top">
          <ul>
	           <li><font size="2" face="Comic Sans MS" color="white"><a href="\myproject\alogin.php">Logout</a></font></li>
             <br>
             <br>
	           <li><font size="2" face="Comic Sans MS" color="white">Todays Event</font></li>
	           <br>
             <br>
	           <li><font size="2" face="Comic Sans MS" color="white">Upcoming Event</font></li>
           </ul>
         </td>
      </tr>
  </table>
</body>
</html>
