
<?php
$username_control = "J_Bond";
$password_control = '$2y$10$NbSdYoVLoLb9sQeH.neeseI9q30tEy51B38Y5IkY0LhgoHIex9WmG';

if (isset($_POST['submit'])) {

  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);
  
if($username == $username_control && password_verify($password, $password_control)) {
  echo '<h2 class="ingeloged">u bent ingelogd</h2>';
  include("inhoud/secret_documents.php");
} 
if ($username != $username_control || !password_verify($password, $password_control)) {
  include("inhoud/login.php");
  echo "<h6 style='margin-left: 20vw;'>Uw inloggegevens kloppen niet, probeer het opnieuw!<h6>";
} 
} else {
include("inhoud/login.php");
}
?>
