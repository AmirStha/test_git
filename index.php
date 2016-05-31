<?php include('config/setup.php');



?>
<!doctype html>
<html>
    <head>
        <title><?php echo $site_title.' | '.$page['title']; ?></title>
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>
            
    </head>
    <body>
        <div id="wrapper">
        <?php include(D_TEMPLATE.'/navigation.php')?>
            <div class="container">
                <h1><?php echo $page['header']; ?></h1>
                <?php echo $page['body_formatted'];?>

            </div>

               <!--element1 area-->
 <?php home_page($dbc,"element1")?>
 <?php home_page($dbc,"element2")?>
            
            
            
        </div><!--End Wrap-->    
    <?php include(D_TEMPLATE.'/footer.php');?>
        <?php if($debug == 1){ include('widgets/debug.php');} ?>
    </body>
</html>