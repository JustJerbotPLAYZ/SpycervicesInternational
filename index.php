<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
   <link href="inhoud/weee.css" rel="stylesheet"><!-- haal deze uit comment om de grote's te kunnen zien-->
</head>

<style>
  body {
    -ms-overflow-style: none;
    /* for Internet Explorer, Edge */
    scrollbar-width: none;
    /* for Firefox */
    overflow-y: scroll;
    background-color: #d7e0ea;
  }
 /* body::before{
    z-index:1;
  }*/

  body::-webkit-scrollbar {
    display: none;
    /* for Chrome, Safari, and Opera */
  }
</style>

<body>
  <header>
    <?php
    include('inhoud/navbar.php');
    ?>
  </header>
  <?php
  $link = null;
  if (isset($_GET['link'])) {
    $link = $_GET['link'];
  } else if($link==null){
    $link = 'home';
  }else{
    $link = 'home';
  }
  if ($link == 'home') {
    include 'inhoud/home.php';
  }
  if ($link == 'about') {
    include 'inhoud/about_us.php';
  }
  if ($link == 'documents') {
    include 'inhoud/documents.php';
  }
  if ($link == 'contact') {
    include 'inhoud/contact.php';
  }
  ?>
</body>

</html>