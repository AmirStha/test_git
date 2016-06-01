 
<nav class="navbar navbar-default" role="navigation">
            <?php if($debug == 1){//clean this slug
                    if(isset($_GET['debug'])){
    ?>
            <button id="btn-debug" class="btn btn-default">Debug</button>
<?php }}?>
            <div class="container">
                <ul class="nav navbar-nav">
                    <?php nav_main($dbc, $pageid)
 ?>
                    
<!--
                    <li<?php if($pageid == 1){echo ' class="active"';} ?>><a href="?page=1">Home</a></li>
                    <li<?php if($pageid == 2){echo ' class="active"';} ?>><a href="?page=2">About Us</a></li>
-->
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>    
        </nav><!-- END nav Main Navigation-->