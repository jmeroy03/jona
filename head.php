<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>asdasd</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="full-slider.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="css/spectrum.css" rel="stylesheet">
    <link href="css/chosen.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <link href="js/redactor/redactor.css" rel="stylesheet">
    
    
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
</head>

<?php
    session_start();
    if(isset($_SESSION['customerId'])){
        echo "<button type='button' class='btn btn-danger'>Logout</button>";
    }else{
        echo "<button type='button' class='btn btn-success' aria-hidden='true' data-toggle='modal' data-target='#myModal'>Log-in</button>";
    }
?>

