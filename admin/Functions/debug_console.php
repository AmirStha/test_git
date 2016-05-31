        <?php
        function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>system.out.println( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>system.out.println( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
        ?>