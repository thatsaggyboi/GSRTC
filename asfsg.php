<?php
 session_start();
 if(isset($_SESSION['message']))
 {
     $msg=$_SESSION['message'];
     unset($_SESSION['message']);
 }
else
{
    $msg="";
}
?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="loginstyle.css">
    <meta charset="utf-8">
    <title>Log in</title>
  </head>
  <body>
    <div class="login-card">
	<img class="center" src="https://i.imgur.com/AkKTM4C.jpg" alt="GSRTC symbol" width="90px" height="90px" style="border-radius: 50%;">
        <h1>Verifier Log-in</h1><br>
      <form action="Validation.php" method="post">
          <p><?=$msg?><p>
        <input type="text" name="username" placeholder="Username" required>
		<select name="currentpos" id="dropdowndivison" class="dropdown1" aria-placeholder="Selece a Depot">
          <option disable value>Select a Divison </option>
          <option  value="Baroda">Baroda</option>
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Nadiad">Nadiad</option>
          <option value="Rajkot">Rajkot</option>
          <option value="Surat">Surat</option>
        </select>
        <select name="currentpos" id="dropdowndepot" class="dropdown2" aria-placeholder="Selece a Depot">
          <option disable value>Select a Depot </option>
          <option  value="baroda">BARODA</option>
          <option value="bodeli">BODELI</option>
          <option value="chhota udepur">CHHOTA UDEPUR</option>
          <option value="dabhoi">DABHOI</option>
          <option value="padra">PADRA</option>
        </select>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="login" class="login login-submit" value="Login">
      </form>

      <div class="login-help">
        <a href="#">Register</a> � <a href="#">Forgot Password</a>
      </div>
    </div>

  </body>
</html>
