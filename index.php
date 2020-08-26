<?php
include_once "./includes/config.php";
$robots = "index, follow";
?>

<!doctype html>
<html lang="pt-br">

<head>
  <?php include_once "./includes/head.php"; ?>
</head>

<body style="overflow-x: hidden;">
  <?php  
  include_once "./includes/body.php";

  include_once "./templates-parts/header.php";
  /* include_once "./templates-parts/banner-video.php"; */
  include_once "./templates-parts/banner.php";
 /*  include_once "./templates-parts/banner-carousel.php"; */
  include_once "./templates-parts/services.php";
  include_once "./templates-parts/projetos.php";
  include_once "./templates-parts/differentials.php";
  include_once "./templates-parts/about.php";
  include_once "./templates-parts/clientes.php";
  /* include_once "./templates-parts/videos.php"; */
  include_once "./templates-parts/cta.php";
  include_once "./templates-parts/form.php";
  include_once "./templates-parts/footer.php";
  
  include_once "./includes/modals.php";
  ?>

  <script src="./assets/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,700|Montserrat:200,300,300i,400,700,800,900" rel="stylesheet">
</body>

</html>