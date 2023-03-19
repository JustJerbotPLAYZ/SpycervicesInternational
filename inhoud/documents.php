<?php
$username = "J_Bond";
$password = "NulNulZeven!";
$username_control = "J_Bond";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$loggedIn = false;
if ($loggedIn == false) {
  echo '<title>Documenten</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    th,
    table,
    tr {
      padding-top: 1vh;
      margin-top: 1vh;
    }
  
    body {
      background-color: #d7e0ea;
    }
  </style>
  <div class="row" style="width:59%; margin-left: 20vh;">
    <h4>U moet ingelogd zijn om de inhoud van deze pagina te kunnen zien.</h4>
    <form action="" method="post">
      <label for="username">
        <h4>Gebruikersnaam:</h4>
      </label>
      <input type="text" id="username" name="username"><br>
      <label for="password">
        <h4>Wachtwoord:</h4>
      </label>
      <input type="text" id="password" name="password"><br>
      <button class="btn btn-primary btn-lg"
        style="background-color:darkblue; margin-left:20px; length:50px; height:30px;" type="Login" name="submit">
        <p style="margin-top:-10px;">Login</p>
      </button>
    </form>
  
  </div>
  </body>
  
  </html>';
}
if (isset($_POST['submit'])) {
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);
  if ($username == $username_control && password_verify($password, $hashed_password)) {
    echo '<h2 class="ingeloged">u bent ingeloged</h2>';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">
    <div>
        <p>WEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE</p>
    </div>';
  }
  if ($username != $username_control || !password_verify($password, $hashed_password)) {
    echo "incorect username or password";
  }
}
?>