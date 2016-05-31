<?php

function home_page($dbc,$label){
                if(isset($_GET['page'])){
                    $pageid = $_GET['page'];
                }
                else{
                    $pageid = "home";
                }
    
                if($pageid=='home'){
              //  $label = "element1";
                $element = home_element($dbc, $label); 
 ?>
                <div style="background-color: <?php echo $element['he_background_color'];?>; height: 400px;"  >
                <div class="container">
                 <h2>
                    <?php echo $element['he_title'];?>
                </h2>
                <div class="he-body">
                    <?php echo $element['he_container'];?>
                </div>
                </div>
</div>
            <?php } 
                    }
?>

