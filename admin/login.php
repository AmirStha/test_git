<?php 

#start session

session_start();

# Database Connections here

include('../config/connection.php');

if($_POST) {
    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $r = mysqli_query($dbc, $q);
        
    if(mysqli_num_rows($r) == 1){
       $_SESSION['username'] = $_POST['email'];
        
        header('Location: index.php');
    }
    
}

?>
<!doctype html>
<html>
    <head>
        <title>Admin Login</title>
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>
        
        
            
    </head>
    <body id="bootstrap-overrides-body">
        <div id="wrapper">
        <?php //include(D_TEMPLATE.'/navigation.php')?>
            <div class="container">
            
                <div class="row">
                                        <div class="col-md-4 col-md-offset-4">
                                            <div id="main-logo" class="col-md-4 col-md-offset-4"><img src="images/pj21CMS.png" width="86px" height="86px" style="margin:15px 0px;"></div></div>

                    <div class="col-md-4 col-md-offset-4">
                        <div id="bootstrap-overrides-panel" class="panel panel-info">
                            <div id="bootstrap-overrides-panel-heading" class="panel-heading"><strong>Login</strong></div>
                            <div class="panel-body">
    
                            <form action="login.php" method="post" role="form">
                                <div class="form-group">
                                    <label id="bootstrap-overrides-label" for="email">Email Address</label>
                                    <input type="email" id="bootstrap-overrides-form-control" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>  

                                <div class="form-group">
                                    <label id="bootstrap-overrides-label" for="password">Password</label>
                                    <input type="password" id="bootstrap-overrides-form-control" class="form-control" id="password" name="password" placeholder="Password">
                                </div>                

                <!--
                                <div>
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </level>
                                </div>
                -->

                                <button type="submit" id="bootstrap-overrides-btn" class="btn btn-default">Submit</button>
                            </form><!--END panel-->
                            </div><!--END panel body-->
                        </div>
                        
                </div><!--END Column-->
                    </div><!--END Row-->
            </div>
        </div><!--End Wrap-->    
    <?php //include(D_TEMPLATE.'/footer.php');?>
        <?php //if($debug == 1){ include('widgets/debug.php');} ?>
    </body>
</html>