<html>
<head>
<title>User Main Page</title>
<style type="text/css">

ul{
   padding:1px;
   list-style: none;
   background:black;
   text-align:center;
	 margin:0px;
	 font-family:Informal Roman;
   font-size:15;
	}
ul li{
    display: inline-block;
    position: relative;
   }
ul li a{
   display: block;
   padding:7px 55px;
   color:  #DB7093;
   text-decoration: none;
	 font-weight:bolder;
	}
ul li a:hover{
   color:#330000;
   background: #ffcccc;
   border-radius:17px;
  }
.image{
  width:100%;
  height:60%;
  background:url("/myproject/ubackground.jpg");
	background-repeat: no-repeat ;
  background-size:cover;
  }
</style>
</head>
<body>
<div> <img src="\myproject\home images\umain.jpg" width="100%" height="55%"></div>
<ul >
  <li><a href="/myproject/ubooking.php" target="main">Booking</a></li>
  <li><a href="/myproject/upage4.php" target="main">View Booking</a></li>
  <li><a href="/myproject/udetail.php" target="main">Personal Detail</a></li>
  <li><a href="/myproject/userlog.php" >Logout</a></li>
</ul>
<iframe  class="image" name="main" ></iframe>
</body>
</html>
