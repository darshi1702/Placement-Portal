<!DOCTYPE html>
<html>
<head>
    <title>PlacementPortal</title>
    <link rel="stylesheet" href="styles.css"> 

<style>
form{
    text-align:center;
    font-size:20px;
}
#email{
    /* margin-left:30px; */
}
button{
    margin-top:20px;
    margin-right:110px;
}
</style>

</head>
<body>
    <div class="background-image"></div>
    <div class="all-content">
<nav class="navbar">
<img src="https://www.iitg.ac.in/ace/ACE/Assets/IITG_White.png">
<h3>Placement Portal</h3>
</nav>

 <h1 class="heading">Welcome To IITG Placement Portal</h1>
<div class="mainBox" style="height:50vh " >
<h3 style="font-size:28px; margin-left:70px ">Please Signup Here:</h3>
<form>
    <div>
<label for="email" style="margin-right:95px">Email: </label><br>
  <input type="text" id="email" name="email"></div>
  <div><label for="password"style="margin-right:70px">Password: </label><br>
  <input type="text" id="password" name="password"></div>
  <div><label for="cpassword"style="margin-right:3spx"> Confirm Password: </label><br>
  <input type="text" id="cpassword" name="cpassword"></div>
  <button type="submit" form="form1" value="Submit">Sign in</button>
  <p>Already have an account?<a href="login.php">Login</a> </p>
</form>

</div>

<footer class="footer">
contact</footer>
</div>
</body>