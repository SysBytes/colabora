<?php
session_start();
include "include/config.inc.php";

if(!empty($_SERVER['QUERY_STRING'])):
    @list($modulo, $registro) = @explode("/", $_SERVER['QUERY_STRING']);
endif;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <META http-equiv="CACHE-CONTROL" content="NO-CACHE">
    <meta name="description" content="Fomentamos la colaboración entre empresas con espacios dinámicos que estimulan la creatividad e innovación en las personas, buscando la unión y el aporte al crecimiento personal y empresarial.">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Co+Labora - Productividad+Creatividad</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta property="og:url"         content="http://www." />
    <meta property="og:title"       content="Co+labora, Productividad+Creatividad" />
    <meta property="og:description" content="Fomentamos la colaboración entre empresas con espacios dinámicos que estimulan la creatividad e innovación en las personas, buscando la unión y el aporte al crecimiento personal y empresarial." />
    <meta property="og:image"       content="" />
    <meta property="autor"          content="Wikot Techonologies. http://www.wikot.com" />

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Other CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <link href='css/unite-gallery.css' rel='stylesheet' type='text/css' />
               
    <link href="css/jquery.fullpage.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/<?php echo empty($modulo)?'home':$modulo;?>.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Other Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js" type="text/javascript" ></script>
    <script src='js/unitegallery.min.js' type='text/javascript'></script>
    <script src='js/tilesgrid/ug-theme-tilesgrid.js' type='text/javascript'></script>

    <!-- Esta línea es opcional y sólamente es necesaria en caso de usar la opción `scrollOverflow:true`. -->
    <script type="text/javascript" src="js/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullpage.min.js"></script>

    <!-- CUSTOM -->
    <script src="js/app.js" type="text/javascript" ></script>

</head>