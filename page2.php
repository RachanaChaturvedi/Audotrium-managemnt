<html>
<head>
<title>Add Venue</title>
<link rel="stylesheet" type="text/css" href="\myproject\format.css"></link>
<style type="text/css">
.point{
	   color:#0B4C5F;
	}
	#t1{
		margin-left: auto;
    margin-right: auto;
		width: 100%;
		table-layout:fixed;
	/*	border: 1px solid black;*/
	}
	td{
		padding: 2px;
    /*border: 1px solid black;*/
		width: 25%;
		white-space: nowrap;
	}
</style>
</head>
<body>
<table align="center" class="topic">
   <tr align="center"><td align="center" ><font size="6" face="Comic Sans MS" ><b>ADD VENUE</b></font></td></tr>
</table>
 <br>
 <form>
<table  class="subic" id="t1">
  <tr >
    <td><font size="4" face="Lucida Calligraphy" >Venue Name:</font></td>
       <td><input type="text" name="venuename"></td>
  </tr>

   <tr>
     <td><font size="4" face="Lucida Calligraphy">Standing Capicity:</font></td>
     <td><input type="number" name="standing"></td>
  </tr>

  <tr>
     <td><font size="4" face="Lucida Calligraphy">Seating Capacity:</font></td>
     <td><input type="number" name="seating"></td>
  </tr>

  <tr>
    <td><font size="4" face="Lucida Calligraphy">Address:</font></td>
    <td><textarea name="address" rows="3" cols="15"></textarea></td>
  </tr>
  <tr><td><font size="4" face="Lucida Calligraphy">State:</font></td>
      <td><select name="state" >
                    <option value="0" selected>--SELECT STATE--</option>
                    <option value="1st">U.p</option>
                    <option value="2nd">Jamu Kashmir</option>
	              	  <option value="3rd">Delhi</option>
		                <option value="4th">Mumbai</option>
		                <option value="5th">Jaipur</option>
 		                <option value="6th">Mizoram</option>
		              	<option value="7th">Karnatak</option>
		                <option value="8th">West Bengal</option>
        </td>
     </tr>
   <tr>
     <td><font size="4" face="Lucida Calligraphy">City:</font></td>
     <td><select name="city">
                   <option value="0" selected>--SELECT CITY--</option>
                   <option value="1st">Varanasi</option>
                   <option value="2nd">Gorakhpur</option>
		               <option value="3rd">Sultanpur</option>
		               <option value="4th">Pratapgad</option>
		               <option value="5th">Deoria</option>
		               <option value="6th">Allabadh</option>
		               <option value="7th">Noida</option>
		               <option value="11th">Kanpur</option>
          </td>
      </tr>
   <tr>
     <td><font size="4" face="Lucida Calligraphy">Pincode:</font></td>
     <td><input type="number" name="code"></td>
   </tr>

	 <tr>
        <td><font size="4" face="Lucida Calligraphy">
              Booking Type:</font></td>
              <td class="point"> Full Day
              <input type="checkbox" name="fullday"></td>
                  <td class="point">     First Half
                   <input type="checkbox" name="firsthalf"></td>
                    <td class="point">   Second Half
								<input type="checkbox" name="secondhalf"></td>
       </tr>
   <tr><td><font size="4" face="Lucida Calligraphy"><legend>
            Catering:
             </font></legend></td>
             <td class="point">Any:
             <input type="radio" name="any">
                    <td class="point">    Monopoly:
             <input type="radio" name="monopoly"></td>
    </tr>
    <tr><td>
      <font size="4" face="Lucida Calligraphy">Booking Purpose:</font>
		</td></tr>
		<tr align="center">
		    <td class="point"><b>Marriage:
        <input type="checkbox" name="marriage"></td></b>
    <td class="point"><b>Reception:
        <input type="checkbox" name="reception"></td></b>
    <td class="point"> <b>Engagement:
        <input type="checkbox" name="engagement"></td></b>
		</tr>
    <tr  align="center" class="point">
	    <td><b>Birthday:
         <input type="checkbox" name="birthday"></td></b>
      <td><b>Social Event:
          <input type="checkbox" name="socialevent"></td></b>
      <td><b>Child Naming:
          <input type="checkbox" name="childnaming"></td></b>
    </tr>
		<tr  align="center" class="point">
			<td><b>Board Meating:
				 <input type="checkbox" name="boardmeating"></td></b>
			<td><b>Exhibation:
					<input type="checkbox" name="exhibation"></td></b>
			<td><b>Reunion:
					<input type="checkbox" name="reunion"></td></b>
		</tr>
    <tr  align="center" class="point">
	     <td><b>Get Together:
           <input type="checkbox" name="gettogether"></td></b>
       <td><b>Conference:
           <input type="checkbox" name="conference"></td></b>
       <td><b>Parties:
           <input type="checkbox" name="parties"></td></b>
     </tr>
     <tr  align="center" class="point">
	      <td><b>Work Shop:
            <input type="checkbox" name="workshop"></td></b>
        <td><b>Guest Lacture:
            <input type="checkbox" name="guestlacture"></td></b>
     </tr>
     <tr>
        <td><font size="4" face="Lucida Calligraphy">
            Description:
            </font></td>
         <td><input type="text" name="description"></td>
    </tr>
    <tr >
       <td><font size="4"  face="Lucida Calligraphy">
             Images:
            </font></td>

       <td><input type="file" name="Choosefile" multiple></td><br>

		    <td>   <input type="submit" value="submit" name="submit" style="margin-left: 50px;"></td>
    </tr>
</table>
</form>
</body>
</html>
