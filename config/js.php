<?php 
//js Files
?>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#console-debug").hide();
        
        $("#btn-debug").click(function(){
            $("#console-debug").toggle();
        });
    });
</script>