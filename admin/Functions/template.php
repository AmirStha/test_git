<?php 
    function nav_main($dbc,$id){
                        $q = "SELECT * FROM pages";
                        $r = mysqli_query($dbc, $q);
                        while($nav = mysqli_fetch_assoc($r)){
//                        echo '<li><a href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>';
                        ?>
                    <li<?php if($id==$nav['id']){echo ' class="active"';} ?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label'];?></a></li>
                  <?php  }
    }
?>