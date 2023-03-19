<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if (isset($_GET['link'])) {
  $link = $_GET['link'];
}
?>
<style>
  .logo {
    aspect-ratio: 583/322;
    height: clamp(30px, 6vh, 10vh);
    margin-left: 12vw;
  }

  .filler {
    margin-right: 5vw;
  }

  .nav-link {
    font-size: clamp(16px, 2vh, 5vh);
    padding-left: 0.5vw;
    padding-right: 0.5vw;
  }

  body {
    width: 100%;
  }
</style>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" method="post">
    <div class="container-fluid">
      <a class="navbar-brand" href="?link=home"><img class="logo" src="img/Logo.png"></img></a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav"
        aria-label="Expand Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="nav">
        <ul class="nav mb-2 mb-lg-0">
          <li class="nav-item" style="margin:0px;">
            <a class="nav-link <?php if($link == "home") { echo"active"; }?>" href="?link=home" name="link" method="post">HOME</a>
          </li>
          <li class="nav-item" style="margin:0px;"><a class="nav-link">|</a></li>
          <li class="nav-item" style="margin:0px;">
            <a class="nav-link <?php if($link == "about") { echo"active"; }?>" href="?link=about" name="link">OVER ONS</a>
          </li>
          <li class="nav-item" style="margin:0px;"><a class="nav-link">|</a></li>
          <li class="nav-item" style="margin:0px;">
            <a class="nav-link <?php if($link == "documents") { echo"active"; }?>" href="?link=documents" name="link">DOCUMENTEN</a>
          </li>
          <li class="nav-item" style="margin:0px;"><a class="nav-link">|</a></li>
          <li class="nav-item" style="margin:0px;">
            <a class="nav-link <?php if($link == "contact") { echo"active"; }?>" href="?link=contact" name="link">CONTACT</a>
          </li>
          <li>
            <div class="filler"></div>
          </li>
        </ul>
      </div>
  </nav>
</div>