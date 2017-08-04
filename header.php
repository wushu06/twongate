<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Towngate</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-animation.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
     
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $url; ?>">COPPERWORKS</a>
               <span id='bars' class="menu-icon pull-right" >MENU</span>
               <div class="calendar pull-right">
                   <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
               </div>
               
                <a class="view pull-right" href="#">BOOK A VIEWING</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section class="header">
        <div class="bars-parent">
                     <div class="bars barone pull-right" aria-hidden="true"></div>
                     <div class=" bars bartwo pull-right" aria-hidden="true"></div>
                     <div class="bars barthree pull-right" aria-hidden="true"></div>
                     <div class="bars barfour pull-right" aria-hidden="true"></div>
        </div>
    <div class="menu pull-right">
    </div>
    <div class="menu-list pull-right">
        <ul>
            <?php $url = " http://" . $_SERVER['SERVER_NAME'].":8888/towngate/"; ?>
            <li><a href="<?php echo $url; ?>">HOME</a></li>
            <li><a href="<?php echo $url; ?>location.php">LOCATION</a></li>
            <li><a href="<?php echo $url; ?>site-overview.php">SITE OVERVIEW</a></li>
            <li><a href="<?php echo $url; ?>site-plan.php">SITE PLAN</a></li>
            <li><a href="<?php echo $url; ?>gallery.php">GALLERY</a></li>
             <li><a href="<?php echo $url;?>history.php">HISTORY</a></li>
        </ul>
    </div>
    </section>
 