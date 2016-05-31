 
        <nav class="navbar navbar-default" role="navigation">


                <ul class="nav navbar-nav">
                    <?php //nav_main($dbc, $pageid)
 ?>
                    
<!--
                    <li<?php if($pageid == 1){echo ' class="active"';} ?>><a href="?page=1">Home</a></li>
                    <li<?php if($pageid == 2){echo ' class="active"';} ?>><a href="?page=2">About Us</a></li>
-->
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Settings</a></li>

                </ul>
            <div class="pull-right">
                <ul class="nav navbar-nav ">
                    <li>
                        <?php if($debug == 1){
                          if(isset($_GET['debug'])){
        ?>
                <button type="button" id="btn-debug" class="btn btn-default navbar-btn">Debug</button>
    <?php }}?>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['full_name'];?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

                    </li>

                </ul>
            </div>
    
        </nav><!-- END nav Main Navigation-->