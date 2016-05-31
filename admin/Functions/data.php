<?php

function data_user($dbc, $id){
    
    if(is_numeric($id)){
        $cond = "WHERE id = '$id'";
    }
   else{
    $cond = "WHERE email = '$id'";
   }
    
    $q = "SELECT * FROM users $cond";
    $r = mysqli_query($dbc, $q);
    $data = mysqli_fetch_assoc($r);
    
    $data['full_name'] = $data['first_name'].' '.$data['last_name'];
    $data['full_name_reverse'] = $data['last_name'].', '.$data['first_name'];
    
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
        $q = "SELECT * FROM pages WHERE id = $id";
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