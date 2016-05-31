                      <?php 
                      if(isset($_POST['submitted']) == 1){
                          
                          $title = mysqli_real_escape_string($dbc, $_POST['title']);
                          $label = mysqli_real_escape_string($dbc, $_POST['label']);
                          $header = mysqli_real_escape_string($dbc, $_POST['header']);
                          $body = mysqli_real_escape_string($dbc, $_POST['body']);
                          
                          if($_POST['id'] != ''){
                              $q = "UPDATE pages SET user_id = $_POST[user], slug = '$_POST[slug]', title = '$title', label = '$label', header = '$header', body = '$body' WHERE id='$_GET[id]'";
                              $action= "updated";
                              
                          }
                          else{
                                                        $q = "INSERT INTO pages (user_id, slug, title, label, header, body) VALUES ($_POST[user],'$_POST[slug]', '$title','$label','$header','$body')";
                            
                            $action = "added";  
                          }
                          
                          
                          $r = mysqli_query($dbc, $q);
                          
                          if($r){

                              $message = '<p>Page was '.$action.'!</p>';
                          }
                          else{
                              $message =  '<p>Page could not be '.$action.':</p>'.mysqli_error($dbc);
                              $message .='<p>' .$q.'</p>';
                          }
                      }  
                    ?> 