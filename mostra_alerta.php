<?php
session_start();
function mostraalerta($tipo){
    if(isset($SESSION[$tipo])){
        echo "<p class='alert-$tipo'>$SESSION[$tipo]</p>";
    }
};