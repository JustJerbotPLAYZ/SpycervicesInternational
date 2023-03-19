<title>Contact</title>
<style>
.form-group {
    padding-bottom: 2.5%;
}

.form {
    background-color: #ffffff;
    padding-top: 4vh;
    padding-bottom: 2.5vh;
    padding-left: 2.5vw;
    padding-right: 2.5vw;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="container" style="padding-top:3vh;">
    <div class="row">
        <div class="col-lg">
            <h3>Bezoekadres</h3>
            <p>Van Moerkerkstraat 21<br>1024 DG Amsterdam</p>
            <p>Tel. 020 123 456 78<br>info@spyservices-int.nl</p>
            <p>KvK. 123 456 798</p>
        </div>
        <div class="col-lg">
            <h3>Contactformulier</h3>
            <div class="form">
                <form method="post">
                  <div class="form-group">
                        <input type="text"  name="naam" placeholder="naam" class="form-control" required>
</div>                  <div class="form-group">
                        <input type="email" name="email" placeholder="email" class="form-control" required>
                        </div>                  <div class="form-group">
                        <textarea type="text" name="vraag" placeholder="vraag" class="form-control" required></textarea>
</div>
                        <div>
                            <button class="btn btn-primary" name="submit">send</button>
                        </div>
                    </form>
                    <?php
 
 if (isset($_POST['submit'])) {
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $vraag = htmlspecialchars($_POST['vraag']);
    $ipaddress = getHostByName(getHostName());
    echo "<p>naam: $naam<br>";
    echo "email: $email<br>";
    echo "question: $vraag<br>";
    Echo "Your IP Address is: $ipaddress</p><br>";
    }
?>

            </div>
        </div>
        <div class="col-lg">
            <h3>Locatie</h3>
            <div style="width: 100%"><iframe style="width:100%;height:clamp(200px,500px,30vh);" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=21%20moerstraat,%20Amsterdam,%20Netherlands+(Spyservices%20International)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
        </div>
    </div>
</div>
</body>

</html>