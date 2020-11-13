<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', 'root');
    mysql_select_db ('motoshop', $base) ;
   
}
?>
