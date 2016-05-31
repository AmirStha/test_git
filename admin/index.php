<?php 
# start session

session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<?php include('config/setup.php');?>
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
            <h1>Admin Dashboard</h1>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                    
                        

                        
                        <a class="list-group-item" href="?index.php">
                            Add new page
                        </a>
                        <?php 
                        $q = "SELECT * FROM pages ORDER BY title ASC";
            $r = mysqli_query($dbc, $q);

            while($page_list = mysqli_fetch_assoc($r)){ 
                $blurb = substr(strip_tags($page_list['body']),0, 160);        
                        ?>

                <a class="list-group-item <?php selected($page_list['id'], $opened['id'], 'active');?>" href="index.php?id=<?php echo $page_list['id']; ?>">
                    <h4 class="list-group-item-heading"><?php echo $page_list['title'];?></h4>
                    <p class="list-group-item-text">
                    <?php echo $blurb;?></p>
                </a>
            <?php } ?>
                </div>        
                </div>
                <div class="col-md-9">
 
                    <?php
                        if(isset($message)){
                            echo $message;}
                    ?>
                    
                    
                            <form action="index.php?id=<?php echo $opened['id'];?>" method="post" role="form">
                        <div class="from-group">
                            
                            <label for="title">Title:</label>
                            <input class="form-control" type="text" name="title" id="title" value="<?php echo $opened['title'];?>" placeholder="Page Title">
                        </div>
                        
                        <div class="form-group">
                            <label for="user">User:</label>
                            <select class="form-control" name="user" id="user" placeholder="Page user">

                                <option value="0">No User</option>
                                <?php 
                                    $q = "SELECT id FROM users";
                                $r = mysqli_query($dbc, $q);
                                while($user_list = mysqli_fetch_assoc($r)){
                                    
                             $user_data = data_user($dbc,$user_list['id']); 
                            ?> 
                            <option value="<?php echo $user_data['id']; ?>"
                                    
                                    <?php
if(isset($_GET['id'])){

    selected($user_data['id'], $opened['user_id'],'selected');
} else{
        selected($user_data['id'], $user['id'],'selected');
    
}                                   
                                    ?>
                                    ><?php echo $user_data['full_name'];?></option>
                            
                                <?php } ?>

                            </select>
                                </div>                                    <div class="form-group">
                            <label for="label">Slug:</label>
                            <input class="form-control" type="text" name="slug" id="slug" value="<?php echo $opened['slug'];?>" placeholder="Page Slug">
                        </div>                                     
                        <div class="form-group">
                            <label for="label">Label:</label>
                            <input class="form-control" type="text" name="label" id="label" value="<?php echo $opened['label'];?>" placeholder="Page Label">
                        </div>
                                                                    <div class="from-group">
                            <label for="header">Header</label>
                            <input class="form-control" type="text" name="header" id="header" value="<?php echo $opened['header'];?>" placeholder="Page Header">
                        </div>
                        
                        <div class="form-group">
                            <label for="body">Body:</label>
                            <textarea class="form-control editor" name="body" id="body" placeholder="Page Body" rows="8"><?php echo $opened['header'];?></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                        <input type="hidden" name="submitted" value="1">
                                                        <input type="hidden" name="id" value="<?php echo $opened['id'];?>">
                        
                    </form>
                </div>
            </div>        

        </div><!--End Wrap-->    
    <?php include(D_TEMPLATE.'/footer.php');?>
        <?php if($debug == 1){ include('widgets/debug.php');} ?>
    </body>
</html> 