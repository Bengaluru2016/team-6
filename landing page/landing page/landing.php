<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="landing page/landing page/css/simple-sidebar.css" rel="stylesheet">
    <link href="landing page/landing page/css/progress.css" rel="stylesheet">
    <link href="landing page/landing page/css/button.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <?php try 
                               {
                                    /*** connect to database ***/
                                    /*** mysql hostname ***/
                                    $mysql_hostname = 'localhost';
                                     /*** mysql username ***/
                                    $mysql_username = 'admin';
                                    /*** mysql password ***/
                                    $mysql_password = 'mypassword';
                                    /*** database name ***/
                                    $mysql_dbname = 'rangde_cfg';

                                    $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        
                                    /*** set the error mode to excptions ***/
                                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    /*** prepare the select ***/
                                    $stmt = $dbh->prepare("SELECT username FROM user WHERE username = :fid");
                                    /*** bind the parameters ***/
                                    $stmt->bindParam(':fid', $_SESSION['user_id'], PDO::PARAM_INT);//here user id is fid i.e. login id
                                    /*** execute the prepared statement ***/
                                    $stmt->execute();
                                     /*** check for a result ***/
                                    $fname = $stmt->fetchColumn();
        
                                    if($fname == false)
                                    {
                                        $message = 'Access Error';
                                    }
                                    else
                                    {
                                        $message = 'Welcome '.$fname;
                                    }
                                }
                                catch (Exception $e)
                                {
                                    /*** if we are here, something is wrong in the database ***/
                                    $message = 'We are unable to process your request. Please try again later"';
                                } 
                                echo $message;
                                ?>
                    </a>
                </li>
                <li>
                    <a href="/rangde/leaderboard/leader.php">Leaderboard</a>
                </li>
                <li>
                   <a href="/rangde/report/chart.php">report</a>
                </li>
                <li>
                    <a href="/rangde/index1.html">stories</a>
                </li>
                <li>
                    <a href="/rangde/dis.php">chat</a>
                </li>
                <li>
                    <a href="https://www.rangde.org/about-us">About</a>
                </li>
                <li>
                    <a href="/rangde/social_interaction/index.html">Social interaction</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Your Impact </h1>
                         <div class="container">
	<div class="row">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"  style="width:<?php  

                                    /*** connect to database ***/
                                    /*** mysql hostname ***/
                                    $mysql_hostname = 'localhost';
                                     /*** mysql username ***/
                                    $mysql_username = 'admin';
                                    /*** mysql password ***/
                                    $mysql_password = 'mypassword';
                                    /*** database name ***/
                                    $mysql_dbname = 'rangde_cfg';

                                    $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        
                                    /*** set the error mode to excptions ***/
                                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    /*** prepare the select ***/
                                    $stmt = $dbh->prepare("SELECT points FROM user WHERE username = :fid");
                                    /*** bind the parameters ***/
                                    $stmt->bindParam(':fid', $_SESSION['user_id'], PDO::PARAM_INT);//here user id is fid i.e. login id
                                    /*** execute the prepared statement ***/
                                    $stmt->execute();
                                     /*** check for a result ***/
                                    $points = $stmt->fetchColumn();


                                    $percentage = ($points/1000)*100;

                                    echo $percentage;
                                    ?>%">
                <span class="sr-only">100% Complete</span>
            </div>
            <span class="progress-type">you gained 1000 points!</span>
            <span class="progress-completed">100%</span>
        </div>
        <h2 style="color:black;">Your Impact History</h2>

        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
            </div>
            <span class="progress-type">education</span>
            <span class="progress-completed">40%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete (info)</span>
            </div>
            <span class="progress-type">Microcredit</span>
            <span class="progress-completed">20%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
            </div>
            <span class="progress-type">Microventure</span>
            <span class="progress-completed">60%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete (danger)</span>
            </div>
            <span class="progress-type">Sanitation</span>
            <span class="progress-completed">80%</span>
        </div>
                </div>
            </div>
        </div>
        <h2> Start Investing to win more rewards </h2>
        <a href="https://www.rangde.org/" </a>
        <button class="button">Invest</button>


    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
