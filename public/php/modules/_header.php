<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      
    <title>Pocketful of Pixels - <?php  echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="css/base.css"> 
   
    <!-- Page Specific Styles -->
    <?php 
        foreach ($styleSheets as $value){

            echo    "<link rel='stylesheet' href='css/{$value}.css'>";

        }
    ?>

 <!--[if lt IE 9]>
      <script src="../includes/bower_components/html5shiv/html5shiv.min.js"></script>
      <script src="../includes/bower_components/respond/respond.min.js"></script>
<![endif]-->
      
</head>

<body>
    