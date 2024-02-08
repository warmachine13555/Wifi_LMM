<?php
  $name = "Christop";
?>

<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meine Webseite <?php echo $name; ?>;</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font/bootstrap-icons.min.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet">

    <?php
    // Das ist serverseitiger Programmierbereich
    // echo "Hallo Welt";
    // echo "<scriot>alertU('Hallo Welt');</script>";
    // echo "<script>alert('Hallo $name');</script>;
    ?>

  </head>
  <body>
    <div class="container mymenu">

      <ul class="mynav mydesktopmenu">
        <li class="mybrand">MEISINGER</li>
        <li><a href="#">Startseite</a></li>
        <li><a href="#">Leistungen</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>

      <ul class="mynav mymobilemenu">
        <li class="mybrand">MEISINGER</li>
        <li><a href="#"><i class="mymenuicon bi bi-list"></i></a></li>
      </ul>

      <div class="mymmopen">
        <ul class="">
          <li>Über uns</li>
          <li>Leistungen</li>
          <li>Downloads</li>
          <li>Kontakt</li>
        </ul>
      </div>

      <div>
        <h2 class="fcb">Hallo Welt</h2>
      </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery371.js"></script>
    <script>
        // Hier kommt Javascript
        var mymz = 0;

        $(".bi-list").click(function() {

          if (mymz == 0) {
            // Blende mobiles Menü ein
            $(".mymmopen").slideDown();
            $(".mymenuicon").addClass("bi-x-lg");
            mymz = 1;
          } else {
            // Blende mobiles Menü ein
            $(".mymmopen").slideUp();
            $(".mymenuicon").removeClass("bi-x-lg");
            mymz = 0;
          }


        });
    </script>
  </body>
</html>