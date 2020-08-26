<?php
include_once "./includes/config.php";
$robots = "noindex, follow";
?>

<!doctype html>
<html lang="pt-br">

<head>
    <?php include_once "./includes/head.php"; ?>

    <meta http-equiv="refresh" content=1;url="https://api.whatsapp.com/send?phone=55<?php echo $wppLink ?>">

    <style>
        #cta {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
    include_once "./includes/body.php";
    ?>
  
    <section id="obrigado">
        <div class="container">
            <h3>Redirecionando para o aplicativo...</h3>
    </section>

    <?php 
    include_once "./includes/integrations/emailNotification.php";
    include_once "./includes/integrations/Lahar.php";
    include_once "./includes/integrations/Conecta.php";
    ?>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700" rel="stylesheet"></body>
</html>