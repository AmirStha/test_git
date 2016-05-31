<?php
 
    function home_element($dbc, $label){
        $q = "SELECT * FROM homepageelements WHERE he_label = '$label'";
        $r = mysqli_query($dbc,$q);
        
        $data = mysqli_fetch_assoc($r);
        
        return $data;
    }

function data_settings_value($dbc, $id){
    $q = "SELECT * FROM settings WHERE id='$id'";
    $r = mysqli_query($dbc,$q);

    $data = mysqli_fetch_assoc($r);
    
    return $data['value'];

}
//page setup
function data_page($dbc, $id){
        if(is_numeric($id)){
            $cond = "WHERE id = '$id'";
        }
        else{
            $cond = "WHERE slug = '$id'";
        }
        $q = "SELECT * FROM pages $cond";
        $r = mysqli_query($dbc,$q);
        $data = mysqli_fetch_assoc($r);
        
        $data['body_nohtml'] = strip_tags($data['body']);
        if($data['body'] == $data['body_nohtml']){
        $data['body_formatted'] = '<p>'.$data['body'].'</p>';
        }
    else{
        $data['body_formatted'] = $data['body'];
    }
    return $data;
    }
?>