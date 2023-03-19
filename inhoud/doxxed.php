<?php
 
 if (isset($_POST['submit'])) {
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $vraag = htmlspecialchars($_POST['vraag']);
    $ipaddress = getenv("REMOTE_ADDR");
    echo '<h3 class="contact_header">you`ve sended: </h3><br>'; 
    echo "<p>naam: $naam<br>";
    echo "email: $email<br>";
    echo "question: $vraag<br>";
    Echo "Your IP Address is: $ipaddress</p><br>";
    }
?>