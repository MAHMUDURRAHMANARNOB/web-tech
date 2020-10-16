<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>

<h1>Registration</h1>

<p>Name	:<input type="text"  name="name"></p>

<p>Email:<input type="text"  name="email"></p>

<p>User Name:<input type="text"  name="uname"></p>

<p>Password:<input type="password"  name="pass"></p>

<p>Confirm Password:<input type="password"  name="confirmPass"></p>

<p>Gender:<br><input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label></p>
  
<p>
 <label for="dob">Date of Birth( mm/dd/yy): </label>
  <input type="date" name="dob"></p>


<button>Submit</button> 
<button>Reset</button>  



</body>
</html>