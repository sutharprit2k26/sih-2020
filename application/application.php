<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application-form</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<br>
		<div class="panel panel-success">
			<div class="panel-heading"><center><h3>Application Form</h3></center></div>
			<div class="panel-body">


<form action="senddata.php"  method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="f_name">First Name:</label>
    <input type="text" class="form-control" id="f_name" placeholder="Enter First Name" name="f_name" required>
  </div>
  <div class="form-group">
    <label for="l_name">Last Name:</label>
    <input type="text" class="form-control" id="l_name" placeholder="Enter Last Name" name="l_name" required>
  </div>
  <div class="form-group">
    <label for="fa_name">Father's Name:</label>
    <input type="text" class="form-control" id="fa_name" placeholder="Enter Father's Name" name="fa_name" required>
  </div>
    <div class="form-group">
	<label for="talent">Select Talent :</label>
    <select class="form-control custom-select" name="talent" id="talent" required>
      
      <option >painting</option>
      <option >dancing</option>
      <option >sketching</option>
    </select>
  </div>
  <div class="form-row">
						<div class="form-group col-md-4">
							<label for="talent1">Select Another Talent (if any) :</label>
							<select class="form-control custom-select" name="talent1" required>
								<option >painting</option>
      <option >dancing</option>
      <option >sketching</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="Contact">Contact Number :</label>
							<input type="text" id="Contact" name="contact" class="form-control" placeholder="None">
						</div>
						<div class="form-group col-md-4">
							<label>DOB   </label>
							<input type="date" name="dob" class="form-control" required>
						</div>
					</div>
<div class="form-group">
    <label for="Address">Address :</label>
    <input type="text" class="form-control" name="address" id="Address" placeholder="Enter Address here" name="Address" required>
  </div>
 <div class="form-group">
	<label for="State">Select State :</label>
    <select class="custom-select" id="State" name="state" required>
      
      <option>One</option>
      <option>Two</option>
      <option>Three</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Postal">Postal Code :</label>
    <input type="text" class="form-control" id="Postal" name="code" placeholder="Enter Postal Code" name="Postal" required>
  </div>

<div class="form-group">
	<label for="State">Sex :</label>
    <select class="custom-select" name="sex" id="State" required>
      
      <option value="m">Male</option>
      <option value="f">Female</option>
      <option value="o">Other</option>
    </select>
  </div>

<div class="form-group">
	<label for="State">Education Qulification :</label>
    <select class="custom-select" name="edu" id="State" required>
      
      <option value="1">12th Pass</option>
      <option value="2">10th Pass</option>
      <option value="3">8th Pass</option>
      <option value="4">5th Pass</option>
      <option value="5">Illitrate</option>
    </select>
  </div>

<div class="form-group">
	<label for="State">Martial Status :</label>
    <select class="custom-select" name="martial" id="State" required>
      
      <option value="1">Married</option>
      <option value="2">UnMarried</option>
      <option value="3">other</option>
    </select>
  </div>

<div class="form-group">
    <label for="Postal">Aadhar Card Number :</label>
    <input type="text" name="aadhar" class="form-control" id="Postal" placeholder="Fill Aadhar Card Number" name="Postal" required>
  </div>

  <div class="form-group">
		<label for="Textarea">Discription :</label>
		<textarea class="form-control" maxlength="30" name="description"  rows="5" placeholder="enter about you and your work" required></textarea>
  </div>
  
 <br>
  <div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
    
  </div>

  
<input  type="submit" value="submit" name="submit" class="btn btn-danger">
</form> 
<br>
			</div>
			<div class="panel-footer"><marquee><span> >> @copyright. Tribal youth Affaiers.</span></marquee></div>
		</div>
	</div>
</body>
</html>