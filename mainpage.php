<html>
<head>
<title>HOME</title>
<style>
#slider
{
height:250px;
width:834px;
box-shadow:7px 7px 10px #4B0082;
}
table
    {
     background-color:black;
    }
body
  {
    background-image: radial-gradient(farthest-corner at 60% 55%, #330000, #cc0000, #800000)
	 }
h1
{
  animation:blink 1s linear infinite;
 }
@keyframes blink
{
 0%{opacity:0;}
 50%{opacity: .5;}
 100%{opacity: 1;}
}
ul{
    padding:1px;
    list-style: none;
    background-image:linear-gradient(to right,#D2691E,#FF7F50,#F4A460,#FFA07A);
    text-align:center;
    margin:0px;
    font-family:Informal Roman;
    font-size:20;
  }
ul li{
    display: inline-block;
    position: relative;
    font-weight:bolde;
    }
ul li a{
    display: block;
    padding:5px 50px;
    font-weight:bolder;
    text-decoration:none;
	  color: 	#A52A2A;
   }
ul li a:hover{
    color:#330000;
    background: #ffcccc;
    border-radius:17px;
    }
ul li ul.dropdown{
    background: #ff8080;
    display: none;
    position: absolute;
    font-family:Monotype Corsiva;
    font-size:20;
    border-radius:5px;
	  padding:1px 1px;
    }
ul li:hover ul.dropdown{
    display: block;	/* Display the dropdown */
    }
ul li ul.dropdown li{
    display: block;
    }
</style>
<script>
var img=["image1.jpg","image2.jpg","image3.jpg","image4.jpg","image5.jpg"];
var i=0;
function slide()
{
//alert("hii");
var div=document.getElementById("slider");
div.style.backgroundImage="url('images/"+img[i]+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",2000);
}
</script>
</head>
<body onload="slide()">
<div id="slider">
  <h1 calss="blink" style="color:black;font-size:40px;font-family:Colonna MT;font-weight:bold;text-align:center;">
                              AUDOTRIUM AND HALL BOOKING SYSTEM</h1>
</div>
    <ul>
       <li> <a href="#">Home</a>
				 <ul class="dropdown">
              	   <li><a href="\myproject\marriage.php">Marriage</a></li>
                   <li><a href="\myproject\reception.php">Reception</a></li>
          			   <li><a href="#">Engagement</a></li>
				           <li><a href="\myproject\birthday.php">Birthday</a></li
				      	   <li><a href="#">Social Event</a></li>
					         <li><a href="#">Child Naming</a></li>
					         <li><a href="#">Board Meating</a></li>
					         <li><a href="#">Exhibation</a></li>
					         <li><a href="#">Reunions</a></li>
					         <li><a href="#">Get Together</a></li>
					         <li><a href="#">Conference</a></li>
					         <li><a href="#">Parties</a></li>
					         <li><a href="#">Work Shop</a></li>
					         <li><a href="#">Guest Lacture</a></li>
          </ul>
      </li>
    	<li><a href="\myproject\aboutus.php">About Us</a></li>
	    <li><a href="\myproject\ContactFrom_v17\ContactFrom_v17\index.php">Contact Us</a></li>
	    <li><b><a href="#">Log In</a></b></li>
 </ul>
<br>
<br>
<table align="center" style="border-radius:5px;">
  <tr align="center">
       <td><a href="\myproject\alogin.php"><img src="\myproject\alogin.gif"height="75px" width="150px"></a></td>
       <td><a href="\myproject\userlog.php"><img src="\myproject\ulogin.gif"height="75px" width="150px" ></a></td>
  </tr>
</table>
</body>
</html>
