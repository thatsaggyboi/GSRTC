<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="loginstyle.css">
    <meta charset="utf-8">
    <link rel="icon" href="img/logo300x300.ico" type="image/ico">
    <title>Log in</title>
  </head>
  <body>

    <div class="login-card">
        <div class="logo">
            <img src="https://i.imgur.com/AkKTM4C.jpg" alt="GSRTC symbol" width="50px" height="50px" style="border-radius: 50%;">
            <h3>GSRTC BUS PASS</h3>
        </div>

        <h1>Log-in</h1><br>
      <form>
        <input type="text" name="user" placeholder="Username">
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
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login login-submit" value="Login">
      </form>

      <div class="login-help">
         <a href="#">Forgot Password?</a>
      </div>
    </div>

  </body>
</html>
