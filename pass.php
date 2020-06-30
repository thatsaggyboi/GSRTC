<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="formstyle.css" type="text/css">
    <meta charset="utf-8">
    <title>GSRTC Bus Pass Form</title>
	<link rel="icon" href="https://imgur.com/tKqip2U.jpg" type="image/x-icon">
  </head>
  <body>
      <div class="logo">
      <img src="https://i.imgur.com/AkKTM4C.jpg" alt="GSRTC symbol" width="90px" height="90px" style="border-radius: 50%; ">

    </div>
     <h1 id= "title" style="color: #333333; font-size:25px;">GSRTC BUS PASS FORM</h1>
    
	<div id="form-outer">
     <p>Please fill all the fields</p>
        <form action="Insertion.php" method="post" enctype="multipart/form-data">
		  
			<div class="labels">
            <lable  for="name"> Name * : </lable>
	        </div>
			 <div class="rightTab">
			 <input autofocus type="text" name="name" class="input-field" placeholder="Please enter your full Name" requried>
			 </div>
			<div class="labels">
            <label for="address">Address * :</label>
			</div>
	
			<div class="rightTab">
            <textarea class="input-field" style="height:50px;resize:vertical;" name="address" placeholder="Please enter your current Address" requried></textarea>
			</div>
             
			<div class="labels">
            <label for="gender"> Gender * :</label>
			</div>
            <div class="rightTab">
            <ul style="list-style: none;">
				<li class="radio"><label>Male<input name="gender" value="male"  type="radio" class="gender" ></label></li>
				<li class="radio"><label>Female<input name="gender" value="female"  type="radio" class="gender" ></label></li>      
				<li class="radio"><label>Other<input name="gender" value="other"  type="radio" class="gender" ></label></li>
              </ul>
			</div>
        
		<div class="rowTab">
			<div class="labels">
            <label id="number-label" for="dob">Date Of Birth * : </label>
			</div>
			<div class="rightTab">
            <input type="date" name="dob" class="input-field" placeholder="Enter your Birthdate" requried>
			</div>
		</div>
          
		<div class="rowTab">
			<div class="labels">
            <lable id="name-lable" for="Institute"> Institute Name * : </lable>
			</div>
			<div class="rightTab">
			<input autofocus type="text" name="institute" id="institute" class="input-field" placeholder="Institute Name" requried>
			</div>
		</div>
          
          <div class="rowTab">
          <div class="labels">
            <label for="Inst. Add.">Institue Address :</label>
          </div>
          <div class="rightTab">
            <textarea class="input-field" style="height:50px;resize:vertical;" name="inst_add" placeholder="Institute Address" requried></textarea>
          </div>
        </div>
        
          
        <div class="rowTab">
          <div class="labels">
            <label for="Standard">Standard :</label>
            </div>
          <div class="rightTab">
            <select name="std" id="std" class="dropdown">
              <option disable value>Select an option</option>
              <option  value="primary">PRIMARY</option>
              <option value="secondary">SECONDARY</option>
              <option value="higher secondary">HIGHER SECONDARY</option>
              <option value="college">COLLEGE</option>
              <option value="other">OTHER</option>
            </select>
             </div>
        </div>
        
		<div class="rowTab">
          <div class="labels">
            <lable id="enr_no" for="enrollment number"> Enrollment No : </lable>
         </div>
          <div class="rightTab">
          <input autofocus type="number" name="en_no" class="input-field" placeholder="Enrollment Number" requried>
          </div>
        </div>
          
          <div class="rowTab">
          <div class="labels">
            <lable id="class" for="Class"> Class : </lable>
         </div>
          <div class="rightTab">
          <input autofocus type="text" name="class" class="input-field" placeholder="Enter your class" requried>
          </div>
        </div>


        <div class="rowTab">
          <div class="labels">
            <lable id="dis_src" for="dis_src"> Distance From : </lable>
         </div>
          <div class="rightTab">
          <input autofocus type="text" name="dis_src" class="input-field" placeholder="Source" requried><br><br><br>		To<br> <input autofocus type="text" name="dis_des" id="dis_des" class="input-field" placeholder="Destination" requried>
		  </div>
        </div>
            
          <div class="rowTab">
          <div class="labels">
            <lable id="dt_fr" for="From Date"> From Date : </lable>
         </div>
          <div class="rightTab">
          <input autofocus type="date" name="dt_from" class="input-field" placeholder="Starting Date" requried><br><br><br>		 To<br> <input autofocus type="date" name="dt_end" id="dt_end" class="input-field" placeholder="Ending Date" requried>

          </div>
        </div>

                <div class="rowTab">
                  <div class="labels">
                    <label for="Pass Type">Pass Type * :</label>
                  </div>
                    <div class="rightTab">
                    <ul style="list-style: none;">
                      <li class="radio"><label>Student Pass<input name="pass_type" value="Student_Pass"  type="radio" class="userRatings" ></label></li>
                      <li class="radio"><label>Girls Pass<input name="pass_type" value="Girls_Pass"  type="radio" class="userRatings" ></label></li>
                      <li class="radio"><label>Service Pass<input name="pass_type" value="Service_pass"  type="radio" class="userRatings" ></label></li>
                      </ul>
                  </div>
                </div>

        <div class="rowTab">
          <div class="labels">
            <lable id="name-lable" for="pro photo">Passport Size Photo *	: <br>(The picture size should be less than 2MB)</lable>
         </div>
          <div class="rightTab">
          <input type="file" placeholder="No file chosen" name="myfile" required />
          </div>
        </div>
		<!--tr>
					<th>Image</th>
				</tr>
				<!--?php
                 $con = mysqli_connect('localhost','root','Paras');
				 $q="SELECT * FROM tbl_image";
				 $r=mysqli_query($con,$q);
				 while($row=mysqli_fetch_array($r))
				 {
					echo '
							<tr>
								<td>
									<img src="data:image/jpeg;base64,'.base64_encode($row['p_name']).'" height="200" width="200">
								</td>
							</tr>
						 ';
				 }?-->
            
              <button id="submit" type="submit" value="submit">Submit</button>  
			  <button id="submit" type="Reset" value="Reset">Reset</button>
              <button id="submit" type="submit" onclick="window.location.href='home.php'">Cancel</button>

         </form>
        </div>
      
  </body>
</html>  